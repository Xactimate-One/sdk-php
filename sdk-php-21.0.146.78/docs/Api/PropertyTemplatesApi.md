# OpenAPI\Client\PropertyTemplatesApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClaimTemplateFormTemplates()**](PropertyTemplatesApi.md#getClaimTemplateFormTemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/forms | Get claim template form templates
[**getClaimTemplateReportTemplates()**](PropertyTemplatesApi.md#getClaimTemplateReportTemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/reports | Get claim template report templates
[**getClaimTemplateRoleTemplates()**](PropertyTemplatesApi.md#getClaimTemplateRoleTemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/roles | Get claim template role templates
[**getClaimTemplateStatusChangeReasonTemplates()**](PropertyTemplatesApi.md#getClaimTemplateStatusChangeReasonTemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/status-change-reasons | Get claim template status change reason templates
[**getClaimTemplates()**](PropertyTemplatesApi.md#getClaimTemplates) | **GET** /v1/property/templates/claims | Get claim templates
[**getFormTemplates()**](PropertyTemplatesApi.md#getFormTemplates) | **GET** /v1/property/templates/forms | Get form templates
[**getPerilCauseTemplates()**](PropertyTemplatesApi.md#getPerilCauseTemplates) | **GET** /v1/property/templates/perils/{perilId}/causes | Get peril causes templates
[**getPerilsTemplates()**](PropertyTemplatesApi.md#getPerilsTemplates) | **GET** /v1/property/templates/perils | Get peril templates
[**getPolicyTemplates()**](PropertyTemplatesApi.md#getPolicyTemplates) | **GET** /v1/property/templates/policies | Get policy templates
[**getReportTemplates()**](PropertyTemplatesApi.md#getReportTemplates) | **GET** /v1/property/templates/reports | Get instance report templates
[**getRoleTemplates()**](PropertyTemplatesApi.md#getRoleTemplates) | **GET** /v1/property/templates/roles | Get role templates


## `getClaimTemplateFormTemplates()`

```php
getClaimTemplateFormTemplates($claim_template_id, $accept_language): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get claim template form templates

Gets the report templates available for use with a property claim template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = 'claim_template_id_example'; // string
$accept_language = 'accept_language_example'; // string | The culture

try {
    $result = $apiInstance->getClaimTemplateFormTemplates($claim_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateFormTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)|  |
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimTemplateReportTemplates()`

```php
getClaimTemplateReportTemplates($claim_template_id): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get claim template report templates

Gets the report templates available for use with a property claim template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = 'claim_template_id_example'; // string | The claim template id

try {
    $result = $apiInstance->getClaimTemplateReportTemplates($claim_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateReportTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)| The claim template id |

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimTemplateRoleTemplates()`

```php
getClaimTemplateRoleTemplates($claim_template_id): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get claim template role templates

Gets role templates available for use with a property claim template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = 'claim_template_id_example'; // string | The claim template id

try {
    $result = $apiInstance->getClaimTemplateRoleTemplates($claim_template_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateRoleTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)| The claim template id |

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimTemplateStatusChangeReasonTemplates()`

```php
getClaimTemplateStatusChangeReasonTemplates($claim_template_id, $accept_language): \OpenAPI\Client\Model\ClaimStatusChangeReasonTemplateResponse[]
```

Get claim template status change reason templates

Gets status change reason templates available for use with a property claim template.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_template_id = 'claim_template_id_example'; // string | The claim template id
$accept_language = 'accept_language_example'; // string | The culture

try {
    $result = $apiInstance->getClaimTemplateStatusChangeReasonTemplates($claim_template_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplateStatusChangeReasonTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_template_id** | [**string**](../Model/.md)| The claim template id |
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\OpenAPI\Client\Model\ClaimStatusChangeReasonTemplateResponse[]**](../Model/ClaimStatusChangeReasonTemplateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimTemplates()`

```php
getClaimTemplates(): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get claim templates

Gets all active claim templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getClaimTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getClaimTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getFormTemplates()`

```php
getFormTemplates($accept_language): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get form templates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = 'accept_language_example'; // string | The culture

try {
    $result = $apiInstance->getFormTemplates($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getFormTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerilCauseTemplates()`

```php
getPerilCauseTemplates($peril_id, $accept_language): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get peril causes templates

Gets all causes templates for the peril

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$peril_id = 'peril_id_example'; // string | The peril id
$accept_language = 'accept_language_example'; // string | The culture

try {
    $result = $apiInstance->getPerilCauseTemplates($peril_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getPerilCauseTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peril_id** | [**string**](../Model/.md)| The peril id |
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPerilsTemplates()`

```php
getPerilsTemplates($accept_language): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get peril templates

Gets all peril templates available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = 'accept_language_example'; // string | The culture

try {
    $result = $apiInstance->getPerilsTemplates($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getPerilsTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture | [optional]

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPolicyTemplates()`

```php
getPolicyTemplates(): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get policy templates

Gets all policy templates available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getPolicyTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getPolicyTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getReportTemplates()`

```php
getReportTemplates(): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get instance report templates

Gets all report templates available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getReportTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getReportTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getRoleTemplates()`

```php
getRoleTemplates(): \OpenAPI\Client\Model\TemplateMetadataResponse[]
```

Get role templates

Gets all role templates available

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyTemplatesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getRoleTemplates();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyTemplatesApi->getRoleTemplates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\OpenAPI\Client\Model\TemplateMetadataResponse[]**](../Model/TemplateMetadataResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
