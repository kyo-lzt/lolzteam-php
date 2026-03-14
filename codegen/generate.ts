/**
 * Code generator: reads OpenAPI 3.1.0 JSON specs and emits PHP client classes.
 *
 * Usage: bun codegen/generate.ts
 *
 * TypeScript port of codegen/generate.php
 */

import { existsSync, mkdirSync, writeFileSync } from "node:fs";
import { dirname, resolve } from "node:path";

// ─── Configuration ───────────────────────────────────────────────────────────

const ROOT = dirname(import.meta.dirname);

interface ApiConfig {
	schemaPath: string;
	outputDir: string;
	clientName: string;
	namespace: string;
	defaultBaseUrl: string;
	defaultRateLimit: number;
}

const apis: ApiConfig[] = [
	{
		schemaPath: resolve(ROOT, "schemas/forum.json"),
		outputDir: resolve(ROOT, "src/Generated/Forum"),
		clientName: "ForumClient",
		namespace: "Lolzteam\\Generated\\Forum",
		defaultBaseUrl: "https://api.lolz.live",
		defaultRateLimit: 300,
	},
	{
		schemaPath: resolve(ROOT, "schemas/market.json"),
		outputDir: resolve(ROOT, "src/Generated/Market"),
		clientName: "MarketClient",
		namespace: "Lolzteam\\Generated\\Market",
		defaultBaseUrl: "https://api.lzt.market",
		defaultRateLimit: 120,
	},
];

// ─── Types ───────────────────────────────────────────────────────────────────

type JsonValue = string | number | boolean | null | JsonObject | JsonArray;
type JsonObject = { [key: string]: JsonValue };
type JsonArray = JsonValue[];

interface ParamDef {
	name: string;
	type: string;
	phpType: string;
	required: boolean;
}

interface MethodDef {
	operationId: string;
	methodName: string;
	httpMethod: string;
	path: string;
	pathParams: ParamDef[];
	queryParams: ParamDef[];
	bodyProperties: ParamDef[];
	hasBody: boolean;
	bodyRequired: boolean;
	isMultipart: boolean;
	responseType: string;
	/** Body schema is a raw array/primitive, not object with named properties */
	isRawBody: boolean;
	/** Raw body PHPDoc type (for array bodies like Batch) */
	rawBodyType: string;
	/** Response is non-JSON (e.g. text/html) — return type should be string|array */
	returnsNonJson: boolean;
}

interface GroupDef {
	groupName: string;
	methods: MethodDef[];
}

interface ParseResult {
	groups: GroupDef[];
	baseUrl: string;
}

// ─── $ref Resolution ─────────────────────────────────────────────────────────

function resolveRef(ref: string, spec: JsonObject): JsonValue {
	const parts = ref.replace(/^#\//, "").split("/");
	let current: JsonValue = spec;

	for (const part of parts) {
		if (current === null || typeof current !== "object" || Array.isArray(current)) {
			return null;
		}
		if (!(part in current)) {
			return null;
		}
		current = current[part] as JsonValue;
	}

	return current;
}

function isRefObject(value: JsonValue): value is JsonObject & { $ref: string } {
	return (
		value !== null &&
		typeof value === "object" &&
		!Array.isArray(value) &&
		typeof value["$ref"] === "string"
	);
}

function deref(value: JsonValue, spec: JsonObject, visited: Set<string> = new Set()): JsonValue {
	if (isRefObject(value)) {
		const ref = value["$ref"];
		if (visited.has(ref)) {
			return {};
		}
		visited.add(ref);
		const resolved = resolveRef(ref, spec);
		const result = deref(resolved, spec, visited);
		visited.delete(ref);
		return result;
	}

	if (Array.isArray(value)) {
		return value.map((item) => deref(item, spec, visited));
	}

	if (value !== null && typeof value === "object") {
		const result: JsonObject = {};
		for (const [key, val] of Object.entries(value)) {
			result[key] = deref(val as JsonValue, spec, visited);
		}
		return result;
	}

	return value;
}

function derefShallow(value: JsonValue, spec: JsonObject): JsonValue {
	if (isRefObject(value)) {
		const ref = value["$ref"];
		const resolved = resolveRef(ref, spec);
		if (isRefObject(resolved)) {
			return derefShallow(resolved, spec);
		}
		return resolved;
	}
	return value;
}

// ─── Naming ──────────────────────────────────────────────────────────────────

function lowercaseFirst(s: string): string {
	if (s === "") return s;
	return s[0]!.toLowerCase() + s.slice(1);
}

function capitalizeFirst(s: string): string {
	if (s === "") return s;
	return s[0]!.toUpperCase() + s.slice(1);
}

function operationIdToGroup(operationId: string): string {
	const parts = operationId.split(".");
	const first = parts[0] ?? operationId;
	return lowercaseFirst(first);
}

function operationIdToMethod(operationId: string): string {
	const parts = operationId.split(".");
	if (parts.length < 2) {
		return "execute";
	}
	const rest = parts.slice(1);
	let result = "";
	for (let i = 0; i < rest.length; i++) {
		result += i === 0 ? lowercaseFirst(rest[i]!) : capitalizeFirst(rest[i]!);
	}
	return result;
}

const RESERVED_KEYWORDS = new Set([
	"list", "match", "switch", "class", "new", "default", "array", "print", "echo",
	"return", "throw", "try", "catch", "finally", "for", "foreach", "while", "do",
	"if", "else", "elseif", "case", "break", "continue", "function", "const", "var",
	"global", "static", "abstract", "final", "interface", "implements", "extends",
	"public", "protected", "private", "yield", "fn", "enum", "readonly", "clone", "empty",
]);

const KEYWORD_RENAMES: Record<string, string> = {
	list: "getList",
	match: "getMatch",
	clone: "doClone",
	empty: "isEmpty",
};

function sanitizeMethodName(name: string): string {
	if (!RESERVED_KEYWORDS.has(name)) {
		return name;
	}
	const renamed = KEYWORD_RENAMES[name];
	if (renamed !== undefined) {
		return renamed;
	}
	return "do" + capitalizeFirst(name);
}

function groupToClassName(group: string): string {
	return capitalizeFirst(group) + "Api";
}

function groupToPropertyName(group: string): string {
	return lowercaseFirst(group);
}

function groupToFileName(group: string): string {
	return capitalizeFirst(group) + "Api";
}

// ─── Type Mapping ────────────────────────────────────────────────────────────

function primitivePhpType(type: string): string {
	switch (type) {
		case "string":
			return "string";
		case "integer":
			return "int";
		case "number":
			return "float";
		case "boolean":
			return "bool";
		case "null":
			return "null";
		default:
			return "mixed";
	}
}

function schemaToPhpType(schema: JsonValue, spec: JsonObject, indent: number = 0): string {
	if (schema === null || schema === undefined) {
		return "mixed";
	}
	if (typeof schema !== "object" || Array.isArray(schema)) {
		return "mixed";
	}
	if (Object.keys(schema).length === 0) {
		return "mixed";
	}

	// $ref -> resolve and convert
	if (typeof schema["$ref"] === "string") {
		const resolved = derefShallow(schema, spec);
		if (resolved === null || typeof resolved !== "object" || Array.isArray(resolved)) {
			return "mixed";
		}
		return schemaToPhpType(resolved, spec, indent);
	}

	// enum -> string with values noted
	if (Array.isArray(schema["enum"]) && schema["enum"].length > 0) {
		const values = (schema["enum"] as JsonValue[]).filter(
			(v): v is string | number =>
				typeof v === "string" || typeof v === "number",
		);
		if (values.length > 0) {
			const literals = values.map((v) => {
				if (typeof v === "string") {
					return "'" + v.replace(/'/g, "\\'") + "'";
				}
				return String(v);
			});
			return literals.join("|");
		}
	}

	// oneOf / anyOf -> union
	if (Array.isArray(schema["oneOf"]) && schema["oneOf"].length > 0) {
		const types = (schema["oneOf"] as JsonValue[]).map((s) =>
			s !== null && typeof s === "object" && !Array.isArray(s)
				? schemaToPhpType(s, spec, indent)
				: "mixed",
		);
		return [...new Set(types)].join("|");
	}
	if (Array.isArray(schema["anyOf"]) && schema["anyOf"].length > 0) {
		const types = (schema["anyOf"] as JsonValue[]).map((s) =>
			s !== null && typeof s === "object" && !Array.isArray(s)
				? schemaToPhpType(s, spec, indent)
				: "mixed",
		);
		return [...new Set(types)].join("|");
	}

	// allOf -> merge properties
	if (Array.isArray(schema["allOf"]) && schema["allOf"].length > 0) {
		const merged: JsonObject = {
			type: "object",
			properties: {},
			required: [],
		};
		const mergedProps = merged["properties"] as JsonObject;
		const mergedRequired = merged["required"] as JsonArray;

		for (const sub of schema["allOf"] as JsonValue[]) {
			if (sub === null || typeof sub !== "object" || Array.isArray(sub)) {
				continue;
			}
			const resolved = isRefObject(sub) ? derefShallow(sub, spec) : sub;
			if (resolved === null || typeof resolved !== "object" || Array.isArray(resolved)) {
				continue;
			}
			const resolvedObj = resolved as JsonObject;
			if (
				resolvedObj["properties"] !== null &&
				typeof resolvedObj["properties"] === "object" &&
				!Array.isArray(resolvedObj["properties"])
			) {
				Object.assign(mergedProps, resolvedObj["properties"]);
			}
			if (Array.isArray(resolvedObj["required"])) {
				mergedRequired.push(...(resolvedObj["required"] as JsonArray));
			}
		}
		if (Object.keys(mergedProps).length > 0) {
			return schemaToPhpType(merged, spec, indent);
		}
		// Fallback: use first schema type
		const first = (schema["allOf"] as JsonArray)[0];
		if (first !== null && first !== undefined && typeof first === "object" && !Array.isArray(first)) {
			return schemaToPhpType(first, spec, indent);
		}
		return "mixed";
	}

	// Multi-type array: type: ['string', 'integer']
	if (Array.isArray(schema["type"])) {
		const types = schema["type"] as JsonArray;
		const hasNull = types.includes("null");
		const nonNull = types.filter((t): t is string => typeof t === "string" && t !== "null");
		const mapped = nonNull.map((t) => primitivePhpType(t));
		const result = mapped.join("|");
		return hasNull ? result + "|null" : result;
	}

	const type = schema["type"];

	// Binary format -> mixed (file content)
	if (type === "string" && schema["format"] === "binary") {
		return "mixed";
	}

	if (type === "array") {
		const items = schema["items"];
		if (items !== null && items !== undefined && typeof items === "object" && !Array.isArray(items)) {
			const itemType = schemaToPhpType(items, spec, indent);
			return `list<${itemType}>`;
		}
		return "list<mixed>";
	}

	if (type === "object" || schema["properties"] !== undefined) {
		return objectPhpType(schema, spec, indent);
	}

	if (typeof type === "string") {
		return primitivePhpType(type);
	}

	return "mixed";
}

function objectPhpType(schema: JsonObject, spec: JsonObject, indent: number): string {
	const props = schema["properties"];
	if (
		props === null ||
		props === undefined ||
		typeof props !== "object" ||
		Array.isArray(props) ||
		Object.keys(props).length === 0
	) {
		const additionalProps = schema["additionalProperties"];
		if (
			additionalProps !== null &&
			additionalProps !== undefined &&
			typeof additionalProps === "object" &&
			!Array.isArray(additionalProps)
		) {
			const valType = schemaToPhpType(additionalProps, spec, indent);
			return `array<string, ${valType}>`;
		}
		return "array<string, mixed>";
	}

	const propsObj = props as JsonObject;
	const requiredArr = Array.isArray(schema["required"]) ? (schema["required"] as JsonArray) : [];
	const requiredSet = new Set(requiredArr.filter((r): r is string => typeof r === "string"));

	const pad = "    ".repeat(indent + 1);
	const closePad = "    ".repeat(indent);
	const lines: string[] = [];

	for (const [name, propSchema] of Object.entries(propsObj)) {
		const optional = requiredSet.has(name) ? "" : "?";
		const propType =
			propSchema !== null && typeof propSchema === "object" && !Array.isArray(propSchema)
				? schemaToPhpType(propSchema, spec, indent + 1)
				: "mixed";
		lines.push(`${pad}${name}${optional}: ${propType}`);
	}

	return "array{\n" + lines.join(",\n") + ",\n" + closePad + "}";
}

function schemaToPhpHint(schema: JsonValue, spec: JsonObject): string {
	if (schema === null || schema === undefined) {
		return "mixed";
	}
	if (typeof schema !== "object" || Array.isArray(schema)) {
		return "mixed";
	}
	if (Object.keys(schema).length === 0) {
		return "mixed";
	}

	if (typeof schema["$ref"] === "string") {
		const resolved = derefShallow(schema, spec);
		if (resolved !== null && typeof resolved === "object" && !Array.isArray(resolved)) {
			return schemaToPhpHint(resolved, spec);
		}
		return "mixed";
	}

	if (schema["oneOf"] !== undefined || schema["anyOf"] !== undefined) {
		return "mixed";
	}

	if (Array.isArray(schema["type"])) {
		const types = (schema["type"] as JsonArray).filter((t): t is string => typeof t === "string" && t !== "null");
		const mapped = types.map((t) => primitivePhpType(t));
		const hasNull = (schema["type"] as JsonArray).includes("null");
		const result = mapped.join("|");
		return hasNull ? result + "|null" : result;
	}

	const type = schema["type"];

	// Binary format -> mixed (file content)
	if (type === "string" && schema["format"] === "binary") {
		return "mixed";
	}

	switch (type) {
		case "string":
			return "string";
		case "integer":
			return "int";
		case "number":
			return "float";
		case "boolean":
			return "bool";
		case "array":
			return "array";
		case "object":
			return "array";
		default:
			return schema["properties"] !== undefined ? "array" : "mixed";
	}
}

// ─── Parameter Extraction ────────────────────────────────────────────────────

function extractParameters(
	operation: JsonObject,
	spec: JsonObject,
): { pathParams: ParamDef[]; queryParams: ParamDef[] } {
	const pathParams: ParamDef[] = [];
	const queryParams: ParamDef[] = [];

	const rawParams = operation["parameters"];
	if (!Array.isArray(rawParams)) {
		return { pathParams: [], queryParams: [] };
	}

	for (const rawParam of rawParams) {
		const param = derefShallow(rawParam, spec);
		if (param === null || typeof param !== "object" || Array.isArray(param)) {
			continue;
		}
		const paramObj = param as JsonObject;

		const inValue = paramObj["in"];
		if (inValue === "header" || inValue === "cookie") {
			continue;
		}

		const paramSchema =
			paramObj["schema"] !== null &&
			paramObj["schema"] !== undefined &&
			typeof paramObj["schema"] === "object" &&
			!Array.isArray(paramObj["schema"])
				? (paramObj["schema"] as JsonObject)
				: null;

		const parsed: ParamDef = {
			name: String(paramObj["name"] ?? ""),
			type: schemaToPhpType(paramSchema, spec),
			phpType: schemaToPhpHint(paramSchema, spec),
			required: Boolean(paramObj["required"] ?? false),
		};

		if (inValue === "path") {
			parsed.required = true;
			pathParams.push(parsed);
		} else if (inValue === "query") {
			queryParams.push(parsed);
		}
	}

	return { pathParams, queryParams };
}

// ─── Body Extraction ─────────────────────────────────────────────────────────

function extractBodyProperties(operation: JsonObject, spec: JsonObject): ParamDef[] {
	const bodyProperties: ParamDef[] = [];

	if (operation["requestBody"] === undefined) {
		return bodyProperties;
	}

	const requestBody = derefShallow(operation["requestBody"] as JsonValue, spec);
	if (requestBody === null || typeof requestBody !== "object" || Array.isArray(requestBody)) {
		return bodyProperties;
	}
	const rbObj = requestBody as JsonObject;

	const content = rbObj["content"];
	if (content === null || content === undefined || typeof content !== "object" || Array.isArray(content)) {
		return bodyProperties;
	}
	const contentObj = content as JsonObject;

	const mediaType = (contentObj["application/json"] ?? contentObj["multipart/form-data"]) as
		| JsonObject
		| undefined;
	if (
		mediaType === null ||
		mediaType === undefined ||
		typeof mediaType !== "object" ||
		Array.isArray(mediaType)
	) {
		return bodyProperties;
	}

	const schema = mediaType["schema"];
	if (schema === null || schema === undefined || typeof schema !== "object" || Array.isArray(schema)) {
		return bodyProperties;
	}
	const schemaObj = schema as JsonObject;

	// Handle oneOf — merge all properties from all variants (all optional since user picks one)
	if (Array.isArray(schemaObj["oneOf"])) {
		const allProps: JsonObject = {};

		for (const variant of schemaObj["oneOf"] as JsonValue[]) {
			if (variant === null || typeof variant !== "object" || Array.isArray(variant)) {
				continue;
			}
			const variantObj = variant as JsonObject;
			const variantProps = variantObj["properties"];

			if (variantProps !== null && variantProps !== undefined && typeof variantProps === "object" && !Array.isArray(variantProps)) {
				for (const [name, propSchema] of Object.entries(variantProps as JsonObject)) {
					allProps[name] = propSchema;
				}
			}
		}

		for (const [name, propSchema] of Object.entries(allProps)) {
			bodyProperties.push({
				name,
				type:
					propSchema !== null && typeof propSchema === "object" && !Array.isArray(propSchema)
						? schemaToPhpType(propSchema as JsonObject, spec)
						: "mixed",
				phpType:
					propSchema !== null && typeof propSchema === "object" && !Array.isArray(propSchema)
						? schemaToPhpHint(propSchema as JsonObject, spec)
						: "mixed",
				required: false,
			});
		}
	} else if (
		schemaObj["properties"] !== null &&
		schemaObj["properties"] !== undefined &&
		typeof schemaObj["properties"] === "object" &&
		!Array.isArray(schemaObj["properties"])
	) {
		const propsObj = schemaObj["properties"] as JsonObject;
		const requiredArr = Array.isArray(schemaObj["required"])
			? (schemaObj["required"] as JsonArray)
			: [];
		const requiredSet = new Set(requiredArr.filter((r): r is string => typeof r === "string"));

		for (const [name, propSchema] of Object.entries(propsObj)) {
			bodyProperties.push({
				name,
				type:
					propSchema !== null && typeof propSchema === "object" && !Array.isArray(propSchema)
						? schemaToPhpType(propSchema as JsonObject, spec)
						: "mixed",
				phpType:
					propSchema !== null && typeof propSchema === "object" && !Array.isArray(propSchema)
						? schemaToPhpHint(propSchema as JsonObject, spec)
						: "mixed",
				required: requiredSet.has(name),
			});
		}
	}

	return bodyProperties;
}

// ─── Raw Body Detection (array/primitive bodies without named properties) ────

function extractRawBodyInfo(
	operation: JsonObject,
	spec: JsonObject,
): { isRawBody: boolean; rawBodyType: string } {
	if (operation["requestBody"] === undefined) {
		return { isRawBody: false, rawBodyType: "mixed" };
	}

	const requestBody = derefShallow(operation["requestBody"] as JsonValue, spec);
	if (requestBody === null || typeof requestBody !== "object" || Array.isArray(requestBody)) {
		return { isRawBody: false, rawBodyType: "mixed" };
	}
	const rbObj = requestBody as JsonObject;

	const content = rbObj["content"];
	if (content === null || content === undefined || typeof content !== "object" || Array.isArray(content)) {
		return { isRawBody: false, rawBodyType: "mixed" };
	}
	const contentObj = content as JsonObject;

	const mediaType = (contentObj["application/json"] ?? contentObj["multipart/form-data"]) as
		| JsonObject
		| undefined;
	if (mediaType === null || mediaType === undefined || typeof mediaType !== "object" || Array.isArray(mediaType)) {
		return { isRawBody: false, rawBodyType: "mixed" };
	}

	const schema = mediaType["schema"];
	if (schema === null || schema === undefined || typeof schema !== "object" || Array.isArray(schema)) {
		return { isRawBody: false, rawBodyType: "mixed" };
	}
	const schemaObj = schema as JsonObject;

	// If schema type is "array" or has no "properties", it's a raw body
	const schemaType = schemaObj["type"];
	const hasProperties =
		schemaObj["properties"] !== null &&
		schemaObj["properties"] !== undefined &&
		typeof schemaObj["properties"] === "object";

	if (schemaType === "array" || (!hasProperties && !Array.isArray(schemaObj["oneOf"]))) {
		return { isRawBody: true, rawBodyType: schemaToPhpType(schemaObj, spec) };
	}

	return { isRawBody: false, rawBodyType: "mixed" };
}

// ─── Non-JSON Response Detection ─────────────────────────────────────────────

function hasNonJsonResponse(operation: JsonObject, spec: JsonObject): boolean {
	const responses = operation["responses"];
	if (responses === null || responses === undefined || typeof responses !== "object" || Array.isArray(responses)) {
		return false;
	}
	const responsesObj = responses as JsonObject;

	const rawSuccess = (responsesObj["200"] ?? responsesObj["201"]) as JsonValue | undefined;
	if (rawSuccess === null || rawSuccess === undefined) {
		return false;
	}

	const success = derefShallow(rawSuccess, spec);
	if (success === null || typeof success !== "object" || Array.isArray(success)) {
		return false;
	}
	const successObj = success as JsonObject;

	const content = successObj["content"];
	if (content === null || content === undefined || typeof content !== "object" || Array.isArray(content)) {
		return false;
	}
	const contentObj = content as JsonObject;

	// If there's no application/json content type but there IS another type, it's non-JSON
	return contentObj["application/json"] === undefined && Object.keys(contentObj).length > 0;
}

// ─── Multipart Detection ─────────────────────────────────────────────────────

function isMultipartWithBinary(operation: JsonObject, spec: JsonObject): boolean {
	if (operation["requestBody"] === undefined) {
		return false;
	}

	const requestBody = derefShallow(operation["requestBody"] as JsonValue, spec);
	if (requestBody === null || typeof requestBody !== "object" || Array.isArray(requestBody)) {
		return false;
	}
	const rbObj = requestBody as JsonObject;

	const content = rbObj["content"];
	if (content === null || content === undefined || typeof content !== "object" || Array.isArray(content)) {
		return false;
	}
	const contentObj = content as JsonObject;

	const multipart = contentObj["multipart/form-data"];
	if (multipart === null || multipart === undefined || typeof multipart !== "object" || Array.isArray(multipart)) {
		return false;
	}
	const multipartObj = multipart as JsonObject;

	const schema = multipartObj["schema"];
	if (schema === null || schema === undefined || typeof schema !== "object" || Array.isArray(schema)) {
		return false;
	}
	const schemaObj = schema as JsonObject;

	const props = schemaObj["properties"];
	if (props === null || props === undefined || typeof props !== "object" || Array.isArray(props)) {
		return false;
	}
	const propsObj = props as JsonObject;

	for (const propSchema of Object.values(propsObj)) {
		if (
			propSchema !== null &&
			typeof propSchema === "object" &&
			!Array.isArray(propSchema) &&
			(propSchema as JsonObject)["format"] === "binary"
		) {
			return true;
		}
	}

	return false;
}

// ─── Response Extraction ─────────────────────────────────────────────────────

function extractResponseType(operation: JsonObject, spec: JsonObject): string {
	const responses = operation["responses"];
	if (responses === null || responses === undefined || typeof responses !== "object" || Array.isArray(responses)) {
		return "mixed";
	}
	const responsesObj = responses as JsonObject;

	const rawSuccess = (responsesObj["200"] ?? responsesObj["201"]) as JsonValue | undefined;
	if (rawSuccess === null || rawSuccess === undefined) {
		return "mixed";
	}

	const success = derefShallow(rawSuccess, spec);
	if (success === null || typeof success !== "object" || Array.isArray(success)) {
		return "mixed";
	}
	const successObj = success as JsonObject;

	const content = successObj["content"];
	if (content === null || content === undefined || typeof content !== "object" || Array.isArray(content)) {
		return "mixed";
	}
	const contentObj = content as JsonObject;

	const jsonContent = contentObj["application/json"];
	if (jsonContent === null || jsonContent === undefined || typeof jsonContent !== "object" || Array.isArray(jsonContent)) {
		return "mixed";
	}
	const jsonContentObj = jsonContent as JsonObject;

	const rawSchema = jsonContentObj["schema"];
	if (rawSchema === null || rawSchema === undefined || typeof rawSchema !== "object" || Array.isArray(rawSchema)) {
		return "mixed";
	}

	const schema = derefShallow(rawSchema as JsonValue, spec);
	if (schema === null || typeof schema !== "object" || Array.isArray(schema)) {
		return "mixed";
	}

	return schemaToPhpType(schema as JsonObject, spec);
}

// ─── Spec Parsing ────────────────────────────────────────────────────────────

const HTTP_METHODS = ["get", "post", "put", "delete", "patch"] as const;

function parseSpec(rawSpec: JsonObject): ParseResult {
	const spec = deref(rawSpec, rawSpec);
	if (spec === null || typeof spec !== "object" || Array.isArray(spec)) {
		throw new Error("Failed to resolve spec");
	}
	const specObj = spec as JsonObject;

	const groupMap = new Map<string, MethodDef[]>();

	const paths = specObj["paths"];
	if (paths === null || paths === undefined || typeof paths !== "object" || Array.isArray(paths)) {
		// no paths
	} else {
		const pathsObj = paths as JsonObject;

		for (const [path, pathItem] of Object.entries(pathsObj)) {
			if (pathItem === null || typeof pathItem !== "object" || Array.isArray(pathItem)) {
				continue;
			}
			const pathItemObj = pathItem as JsonObject;

			for (const httpMethod of HTTP_METHODS) {
				const operation = pathItemObj[httpMethod];
				if (
					operation === null ||
					operation === undefined ||
					typeof operation !== "object" ||
					Array.isArray(operation)
				) {
					continue;
				}
				const opObj = operation as JsonObject;

				const operationId = opObj["operationId"];
				if (typeof operationId !== "string") {
					continue;
				}

				const group = operationIdToGroup(operationId);
				const methodName = sanitizeMethodName(operationIdToMethod(operationId));

				const params = extractParameters(opObj, specObj);
				const bodyProperties = extractBodyProperties(opObj, specObj);
				const responseType = extractResponseType(opObj, specObj);

				const hasBody = opObj["requestBody"] !== undefined;
				let bodyRequired = false;
				if (hasBody) {
					const rb = derefShallow(opObj["requestBody"] as JsonValue, specObj);
					bodyRequired =
						rb !== null &&
						typeof rb === "object" &&
						!Array.isArray(rb) &&
						Boolean((rb as JsonObject)["required"]);
				}

				const isMultipart = isMultipartWithBinary(opObj, specObj);
				const rawBodyInfo = extractRawBodyInfo(opObj, specObj);
				const returnsNonJson = hasNonJsonResponse(opObj, specObj);

				const methodDef: MethodDef = {
					operationId,
					methodName,
					httpMethod: httpMethod.toUpperCase(),
					path,
					pathParams: params.pathParams,
					queryParams: params.queryParams,
					bodyProperties,
					hasBody,
					bodyRequired,
					isMultipart,
					responseType,
					isRawBody: rawBodyInfo.isRawBody,
					rawBodyType: rawBodyInfo.rawBodyType,
					returnsNonJson,
				};

				if (!groupMap.has(group)) {
					groupMap.set(group, []);
				}
				groupMap.get(group)!.push(methodDef);
			}
		}
	}

	const groups: GroupDef[] = [];
	for (const [groupName, methods] of groupMap) {
		groups.push({ groupName, methods });
	}

	const servers = specObj["servers"];
	let baseUrl = "https://localhost";
	if (Array.isArray(servers) && servers.length > 0) {
		const first = servers[0];
		if (first !== null && typeof first === "object" && !Array.isArray(first)) {
			const firstObj = first as JsonObject;
			if (typeof firstObj["url"] === "string") {
				baseUrl = firstObj["url"];
			}
		}
	}

	return { groups, baseUrl };
}

// ─── Code Emission: Group API Classes ────────────────────────────────────────

function buildPathExpression(path: string): string {
	if (!path.includes("{")) {
		return `'${path}'`;
	}
	const phpPath = path.replace(/\{([^}]+)\}/g, (_match, name: string) => `{\$${name}}`);
	return `"${phpPath}"`;
}

function buildQueryParamsDoc(queryParams: ParamDef[]): string {
	if (queryParams.length === 0) {
		return "";
	}

	const parts: string[] = [];
	for (const param of queryParams) {
		const opt = param.required ? "" : "?";
		parts.push(`${param.name}${opt}: ${param.type}`);
	}

	return "@param array{" + parts.join(", ") + "} $params";
}

function buildBodyDoc(bodyProperties: ParamDef[]): string {
	if (bodyProperties.length === 0) {
		return "";
	}

	const parts: string[] = [];
	for (const prop of bodyProperties) {
		const opt = prop.required ? "" : "?";
		parts.push(`${prop.name}${opt}: ${prop.type}`);
	}

	return "@param array{" + parts.join(", ") + "} $body";
}

function emitMethod(method: MethodDef): string {
	const lines: string[] = [];

	const { pathParams, queryParams, bodyProperties, hasBody, bodyRequired, isMultipart, responseType, methodName, httpMethod, path, isRawBody, rawBodyType, returnsNonJson } = method;

	const hasQueryParams = queryParams.length > 0;
	const hasBodyProps = hasBody && bodyProperties.length > 0;
	// Body exists but has no named properties (e.g. array body like Batch)
	const hasRawBody = hasBody && isRawBody && !hasBodyProps;

	// Build PHPDoc
	const docLines: string[] = [];
	for (const param of pathParams) {
		docLines.push(`     * @param ${param.type} $${param.name}`);
	}
	if (hasBodyProps) {
		const bodyDoc = buildBodyDoc(bodyProperties);
		if (bodyDoc !== "") {
			docLines.push(`     * ${bodyDoc}`);
		}
	} else if (hasRawBody) {
		docLines.push(`     * @param ${rawBodyType} $body`);
	}
	if (hasQueryParams) {
		const paramsDoc = buildQueryParamsDoc(queryParams);
		if (paramsDoc !== "") {
			docLines.push(`     * ${paramsDoc}`);
		}
	}
	docLines.push(`     * @return ${responseType}`);

	lines.push("    /**");
	for (const dl of docLines) {
		lines.push(dl);
	}
	lines.push("     */");

	// Build argument list
	const args: string[] = [];
	for (const param of pathParams) {
		args.push(`${param.phpType} $${param.name}`);
	}
	if (hasBodyProps) {
		const hasRequiredBodyProps = bodyProperties.some((p) => p.required);
		const bodyOpt = (bodyRequired || hasRequiredBodyProps) ? "" : " = []";
		args.push(`array $body${bodyOpt}`);
	} else if (hasRawBody) {
		const bodyOpt = bodyRequired ? "" : " = []";
		args.push(`array $body${bodyOpt}`);
	}
	if (hasQueryParams) {
		args.push("array $params = []");
	}

	const argStr = args.join(", ");
	const pathExpr = buildPathExpression(path);

	// Return type: string|array for non-JSON responses, array otherwise
	const returnType = returnsNonJson ? "string|array" : "array";
	lines.push(`    public function ${methodName}(${argStr}): ${returnType}`);
	lines.push("    {");

	// Build request call
	const requestArgs: string[] = [`'${httpMethod}'`, pathExpr];

	if (hasQueryParams) {
		requestArgs.push("$params");
	} else {
		requestArgs.push("[]");
	}

	if (hasBodyProps || hasRawBody) {
		requestArgs.push("$body");
	} else {
		requestArgs.push("null");
	}

	if (isMultipart) {
		requestArgs.push("true");
	}

	// Trim trailing default arguments
	while (requestArgs.length > 2) {
		const last = requestArgs[requestArgs.length - 1];
		if (last === "null" || last === "[]") {
			requestArgs.pop();
		} else {
			break;
		}
	}

	const requestArgStr = requestArgs.join(", ");
	lines.push(`        return $this->http->request(${requestArgStr});`);
	lines.push("    }");

	return lines.join("\n");
}

function emitGroupFile(group: GroupDef, namespace: string): string {
	const className = groupToClassName(group.groupName);
	const lines: string[] = [];

	lines.push("<?php");
	lines.push("");
	lines.push("// Auto-generated. Do not edit manually.");
	lines.push("");
	lines.push("declare(strict_types=1);");
	lines.push("");
	lines.push(`namespace ${namespace};`);
	lines.push("");
	lines.push("use Lolzteam\\Runtime\\HttpClient;");
	lines.push("");
	lines.push(`final class ${className}`);
	lines.push("{");
	lines.push("    public function __construct(");
	lines.push("        private readonly HttpClient $http,");
	lines.push("    ) {");
	lines.push("    }");

	for (const method of group.methods) {
		lines.push("");
		lines.push(emitMethod(method));
	}

	lines.push("}");
	lines.push("");

	return lines.join("\n");
}

// ─── Code Emission: Client Class ─────────────────────────────────────────────

function emitClientFile(
	groups: GroupDef[],
	clientName: string,
	namespace: string,
	defaultBaseUrl: string,
	defaultRateLimit: number,
): string {
	const lines: string[] = [];

	lines.push("<?php");
	lines.push("");
	lines.push("// Auto-generated. Do not edit manually.");
	lines.push("");
	lines.push("declare(strict_types=1);");
	lines.push("");
	lines.push(`namespace ${namespace};`);
	lines.push("");
	lines.push("use Lolzteam\\Runtime\\ClientConfig;");
	lines.push("use Lolzteam\\Runtime\\HttpClient;");
	lines.push("use Lolzteam\\Runtime\\RetryConfig;");
	lines.push("");
	lines.push(`final class ${clientName}`);
	lines.push("{");

	// Properties
	for (const group of groups) {
		const className = groupToClassName(group.groupName);
		const propName = groupToPropertyName(group.groupName);
		lines.push(`    public readonly ${className} $${propName};`);
	}

	lines.push("");
	lines.push("    public function __construct(");
	lines.push("        string $token,");
	lines.push("        ?string $proxy = null,");
	lines.push("        ?RetryConfig $retry = null,");
	lines.push("    ) {");
	lines.push("        $config = new ClientConfig(");
	lines.push("            token: $token,");
	lines.push(`            baseUrl: '${defaultBaseUrl}',`);
	lines.push("            proxy: $proxy,");
	lines.push("            retry: $retry ?? new RetryConfig(),");
	lines.push(`            requestsPerMinute: ${defaultRateLimit},`);
	lines.push("        );");
	lines.push("        $http = new HttpClient($config);");

	for (const group of groups) {
		const className = groupToClassName(group.groupName);
		const propName = groupToPropertyName(group.groupName);
		lines.push(`        $this->${propName} = new ${className}($http);`);
	}

	lines.push("    }");
	lines.push("}");
	lines.push("");

	return lines.join("\n");
}

// ─── Main ────────────────────────────────────────────────────────────────────

function generateApi(config: ApiConfig): void {
	console.log(`Generating ${config.clientName}...`);

	const rawSpec = JSON.parse(
		require("node:fs").readFileSync(config.schemaPath, "utf-8"),
	) as JsonObject;
	const result = parseSpec(rawSpec);

	if (!existsSync(config.outputDir)) {
		mkdirSync(config.outputDir, { recursive: true });
	}

	// Write group API files
	for (const group of result.groups) {
		const fileName = groupToFileName(group.groupName);
		const content = emitGroupFile(group, config.namespace);
		const filePath = `${config.outputDir}/${fileName}.php`;
		writeFileSync(filePath, content);
		console.log(`  ${fileName}.php`);
	}

	// Write client file
	const clientContent = emitClientFile(
		result.groups,
		config.clientName,
		config.namespace,
		config.defaultBaseUrl,
		config.defaultRateLimit,
	);
	const clientPath = `${config.outputDir}/${config.clientName}.php`;
	writeFileSync(clientPath, clientContent);
	console.log(`  ${config.clientName}.php`);

	let methodCount = 0;
	for (const group of result.groups) {
		methodCount += group.methods.length;
	}
	console.log(`  Done: ${result.groups.length} groups, ${methodCount} operations\n`);
}

for (const api of apis) {
	generateApi(api);
}
