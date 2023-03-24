# OpenAPI\Client\PropertyClaimsFormsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPropertyClaimForm()**](PropertyClaimsFormsApi.md#createPropertyClaimForm) | **POST** /v1/property/claims/{claimId}/forms | Create a form
[**getPropertyClaimForm()**](PropertyClaimsFormsApi.md#getPropertyClaimForm) | **GET** /v1/property/claims/{claimId}/forms/{formId} | Get a form
[**getPropertyClaimForms()**](PropertyClaimsFormsApi.md#getPropertyClaimForms) | **GET** /v1/property/claims/{claimId}/forms | Get forms
[**updatePropertyClaimForm()**](PropertyClaimsFormsApi.md#updatePropertyClaimForm) | **PUT** /v1/property/claims/{claimId}/forms/{formId} | Update a form


## `createPropertyClaimForm()`

```php
createPropertyClaimForm($claim_id, $form_create_request, $accept_language): \OpenAPI\Client\Model\FormCreateResponse
```

Create a form

Creates a form on a claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$form_create_request = new \OpenAPI\Client\Model\FormCreateRequest(); // \OpenAPI\Client\Model\FormCreateRequest | The form create request
$accept_language = 'accept_language_example'; // string

try {
    $result = $apiInstance->createPropertyClaimForm($claim_id, $form_create_request, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsFormsApi->createPropertyClaimForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **form_create_request** | [**\OpenAPI\Client\Model\FormCreateRequest**](../Model/FormCreateRequest.md)| The form create request |
 **accept_language** | **string**|  | [optional]

### Return type

[**\OpenAPI\Client\Model\FormCreateResponse**](../Model/FormCreateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyClaimForm()`

```php
getPropertyClaimForm($claim_id, $form_id): \OpenAPI\Client\Model\FormResponse
```

Get a form

Gets a form on a claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$form_id = 'form_id_example'; // string | The form id

try {
    $result = $apiInstance->getPropertyClaimForm($claim_id, $form_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsFormsApi->getPropertyClaimForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **form_id** | [**string**](../Model/.md)| The form id |

### Return type

[**\OpenAPI\Client\Model\FormResponse**](../Model/FormResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getPropertyClaimForms()`

```php
getPropertyClaimForms($claim_id): \OpenAPI\Client\Model\FormResponse[]
```

Get forms

Gets all form on a claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id

try {
    $result = $apiInstance->getPropertyClaimForms($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsFormsApi->getPropertyClaimForms: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\OpenAPI\Client\Model\FormResponse[]**](../Model/FormResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePropertyClaimForm()`

```php
updatePropertyClaimForm($claim_id, $form_id, $form_update_request, $accept_language)
```

Update a form

Updates a form on a claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsFormsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$form_id = 'form_id_example'; // string | The form id
$form_update_request = new \OpenAPI\Client\Model\FormUpdateRequest(); // \OpenAPI\Client\Model\FormUpdateRequest | The form update request
$accept_language = 'accept_language_example'; // string

try {
    $apiInstance->updatePropertyClaimForm($claim_id, $form_id, $form_update_request, $accept_language);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsFormsApi->updatePropertyClaimForm: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **form_id** | [**string**](../Model/.md)| The form id |
 **form_update_request** | [**\OpenAPI\Client\Model\FormUpdateRequest**](../Model/FormUpdateRequest.md)| The form update request |
 **accept_language** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
