# OpenAPI\Client\PropertyClaimsPolicyApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**getClaimPolicy()**](PropertyClaimsPolicyApi.md#getClaimPolicy) | **GET** /v1/property/claims/{claimId}/policy | Get claim policy
[**updateClaimPolicy()**](PropertyClaimsPolicyApi.md#updateClaimPolicy) | **PUT** /v1/property/claims/{claimId}/policy | Update claim policy


## `getClaimPolicy()`

```php
getClaimPolicy($claim_id): \OpenAPI\Client\Model\PolicyV1ResponseBase
```

Get claim policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id

try {
    $result = $apiInstance->getClaimPolicy($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsPolicyApi->getClaimPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\OpenAPI\Client\Model\PolicyV1ResponseBase**](../Model/PolicyV1ResponseBase.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClaimPolicy()`

```php
updateClaimPolicy($claim_id, $policy_update_request_base)
```

Update claim policy

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsPolicyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$policy_update_request_base = {"coverages":[{"applyDepreciation":true,"deductible":{"minimum":50000,"percentage":15,"type":"PercentageOfCoveredValuePlusMinimum"},"depreciationIsRecoverable":false,"reserve":500,"id":"0350afd0-1ff3-47f1-8a13-78fe49766acc","name":"Homeowners Policy","perItemLimit":500,"perOccurrenceLimit":5000,"type":"PrimaryCoverage"},{"applyDepreciation":true,"deductible":{"minimum":50,"percentage":null,"type":"SingleValue"},"depreciationIsRecoverable":false,"parentCoverageId":"0350afd0-1ff3-47f1-8a13-78fe49766acc","reserve":50,"id":"76abf1ba-5889-4f25-94a9-037f248b2876","name":"Collectibles Coverage","perItemLimit":5,"perOccurrenceLimit":50,"type":"Subcoverage"},{"parentCoverageId":"0350afd0-1ff3-47f1-8a13-78fe49766acc","id":"1fa3ac5b-1c0c-4772-94c1-8bc84fd35c4d","name":"Theft sublimit","perItemLimit":5,"perOccurrenceLimit":50,"type":"Sublimit"}],"applyDeductibleAcrossAllCoverages":true,"beneficiaryStakeholderIds":["727d5097-5d97-41b8-89b4-bd344120a514"],"brokerStakeholderId":"7f449dbb-746e-4655-9a88-39006fbc851e","country":"US","currency":"USD","deductible":{"minimum":50000,"percentage":15,"type":"PercentageOfCoveredValuePlusMinimum"},"effectiveDate":"2001-01-01T00:00:00","expirationDate":"2001-12-31T00:00:00","inceptionDate":"2001-01-01T00:00:00","insuredStakeholderIds":["19668c4d-02fe-4a7d-9ff2-4e285e8812ac"],"insurerStakeholderId":"332a42c5-1ce7-4a44-8f86-4223075ae523","mortgages":[{"id":null,"loanNumber":"518c1876","mortgageeStakeholderId":"478e2fd6-5bb4-441f-8434-32a01db75e03","mortgagorStakeholderId":"3bd56131-684e-401a-86e5-219673168416"}],"onsiteContactStakeholderId":"088f385a-65fd-42ce-b751-d84f65147077","policyNumber":"A1B2C3E4F5","policyOwnerStakeholderId":"627d45ed-04ba-4e83-876f-ef371e623961","riskAddress":{"city":"Roswell","country":"US","dependentLocality":"","postalCode":"88888","region":"NM","street":"123 Milky Way","street2":"Apt #42","street3":"Ring 3"}}; // \OpenAPI\Client\Model\PolicyUpdateRequestBase | The updated policy

try {
    $apiInstance->updateClaimPolicy($claim_id, $policy_update_request_base);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsPolicyApi->updateClaimPolicy: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **policy_update_request_base** | [**\OpenAPI\Client\Model\PolicyUpdateRequestBase**](../Model/PolicyUpdateRequestBase.md)| The updated policy |

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
