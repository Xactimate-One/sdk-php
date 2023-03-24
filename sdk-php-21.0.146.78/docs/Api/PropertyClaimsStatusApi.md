# OpenAPI\Client\PropertyClaimsStatusApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**updateClaimStatus()**](PropertyClaimsStatusApi.md#updateClaimStatus) | **PUT** /v1/property/claims/{claimId}/status | Updates status for property claim


## `updateClaimStatus()`

```php
updateClaimStatus($claim_id, $claim_status_change_request)
```

Updates status for property claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsStatusApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$claim_status_change_request = {"note":"Request completed","reason":"5a2602b1-7250-40a2-957d-04a34f88e458","status":"Completed"}; // \OpenAPI\Client\Model\ClaimStatusChangeRequest | The claim status change request

try {
    $apiInstance->updateClaimStatus($claim_id, $claim_status_change_request);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStatusApi->updateClaimStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **claim_status_change_request** | [**\OpenAPI\Client\Model\ClaimStatusChangeRequest**](../Model/ClaimStatusChangeRequest.md)| The claim status change request |

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
