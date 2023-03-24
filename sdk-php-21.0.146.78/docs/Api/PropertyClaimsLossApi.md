# OpenAPI\Client\PropertyClaimsLossApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClaimLoss()**](PropertyClaimsLossApi.md#getClaimLoss) | **GET** /v1/property/claims/{claimId}/loss | Get claim loss
[**updateClaimLoss()**](PropertyClaimsLossApi.md#updateClaimLoss) | **PUT** /v1/property/claims/{claimId}/loss | Update claim loss


## `getClaimLoss()`

```php
getClaimLoss($claim_id): \OpenAPI\Client\Model\LossResponse
```

Get claim loss

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id

try {
    $result = $apiInstance->getClaimLoss($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsLossApi->getClaimLoss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\OpenAPI\Client\Model\LossResponse**](../Model/LossResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClaimLoss()`

```php
updateClaimLoss($claim_id, $loss_update_request)
```

Update claim loss

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsLossApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$loss_update_request = {"firstNoticeOfLoss":"2001-01-01T00:00:00","lossDate":"2001-01-12T00:00:00","lossDescription":"The loss description","peril":{"causeOfLoss":{"explanation":"The loss cause explanation","templateId":"166bd393-00f6-4778-8305-46c907dc5a5a"},"templateId":"213c72b8-79b1-4f59-915d-f0ec1678c45f"},"potentialSubrogation":{"explanation":"The potential subrogation explanation"}}; // \OpenAPI\Client\Model\LossUpdateRequest | The update request

try {
    $apiInstance->updateClaimLoss($claim_id, $loss_update_request);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsLossApi->updateClaimLoss: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **loss_update_request** | [**\OpenAPI\Client\Model\LossUpdateRequest**](../Model/LossUpdateRequest.md)| The update request |

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
