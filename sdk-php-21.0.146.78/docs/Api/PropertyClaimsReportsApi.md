# OpenAPI\Client\PropertyClaimsReportsApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClaimReport()**](PropertyClaimsReportsApi.md#createClaimReport) | **POST** /v1/property/claims/{claimId}/reports | Create a claim report
[**getClaimReportById()**](PropertyClaimsReportsApi.md#getClaimReportById) | **GET** /v1/property/claims/{claimId}/reports/{reportId} | Get a specific claim report
[**getClaimReports()**](PropertyClaimsReportsApi.md#getClaimReports) | **GET** /v1/property/claims/{claimId}/reports | Get reports for claim


## `createClaimReport()`

```php
createClaimReport($claim_id, $report_create_request): \OpenAPI\Client\Model\ReportResponse
```

Create a claim report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$report_create_request = {"templateId":"76872450-7838-4c1e-b961-3d1f1ad45269"}; // \OpenAPI\Client\Model\ReportCreateRequest | The report create request

try {
    $result = $apiInstance->createClaimReport($claim_id, $report_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsReportsApi->createClaimReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **report_create_request** | [**\OpenAPI\Client\Model\ReportCreateRequest**](../Model/ReportCreateRequest.md)| The report create request |

### Return type

[**\OpenAPI\Client\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimReportById()`

```php
getClaimReportById($claim_id, $report_id): \OpenAPI\Client\Model\ReportResponse
```

Get a specific claim report

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$report_id = 'report_id_example'; // string | The report id

try {
    $result = $apiInstance->getClaimReportById($claim_id, $report_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsReportsApi->getClaimReportById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **report_id** | [**string**](../Model/.md)| The report id |

### Return type

[**\OpenAPI\Client\Model\ReportResponse**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimReports()`

```php
getClaimReports($claim_id): \OpenAPI\Client\Model\ReportResponse[]
```

Get reports for claim

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id

try {
    $result = $apiInstance->getClaimReports($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsReportsApi->getClaimReports: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\OpenAPI\Client\Model\ReportResponse[]**](../Model/ReportResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
