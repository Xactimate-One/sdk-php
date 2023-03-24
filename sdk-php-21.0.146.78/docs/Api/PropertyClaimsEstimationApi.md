# OpenAPI\Client\PropertyClaimsEstimationApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClaimEstimates()**](PropertyClaimsEstimationApi.md#getClaimEstimates) | **GET** /v1/property/claims/{claimId}/estimates | Get claim estimates
[**getEstimateByEstimateId()**](PropertyClaimsEstimationApi.md#getEstimateByEstimateId) | **GET** /v1/property/claims/{claimId}/estimates/{estimateId} | Get estimate by estimate id


## `getClaimEstimates()`

```php
getClaimEstimates($claim_id, $accept_language): \OpenAPI\Client\Model\EstimateResponse[]
```

Get claim estimates

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsEstimationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$accept_language = 'accept_language_example'; // string | The culture of the estimates

try {
    $result = $apiInstance->getClaimEstimates($claim_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsEstimationApi->getClaimEstimates: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **accept_language** | **string**| The culture of the estimates | [optional]

### Return type

[**\OpenAPI\Client\Model\EstimateResponse[]**](../Model/EstimateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getEstimateByEstimateId()`

```php
getEstimateByEstimateId($claim_id, $estimate_id, $accept_language): \OpenAPI\Client\Model\EstimateResponse
```

Get estimate by estimate id

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsEstimationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$estimate_id = 'estimate_id_example'; // string | The estimate id
$accept_language = 'accept_language_example'; // string | The culture of the estimate

try {
    $result = $apiInstance->getEstimateByEstimateId($claim_id, $estimate_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsEstimationApi->getEstimateByEstimateId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **estimate_id** | [**string**](../Model/.md)| The estimate id |
 **accept_language** | **string**| The culture of the estimate | [optional]

### Return type

[**\OpenAPI\Client\Model\EstimateResponse**](../Model/EstimateResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
