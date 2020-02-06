# Swagger\Client\PropertyCoveragesApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propertyPoliciesCoveragesCoverageIdAdditionalCoveragesGet**](PropertyCoveragesApi.md#propertyPoliciesCoveragesCoverageIdAdditionalCoveragesGet) | **GET** /property/policies/coverages/{coverage-id}/additional-coverages | Property policy additional coverages
[**propertyPoliciesCoveragesCoverageIdSublimitsGet**](PropertyCoveragesApi.md#propertyPoliciesCoveragesCoverageIdSublimitsGet) | **GET** /property/policies/coverages/{coverage-id}/sublimits | Property policy sublimits
[**propertyPoliciesCoveragesGet**](PropertyCoveragesApi.md#propertyPoliciesCoveragesGet) | **GET** /property/policies/coverages | Property policy coverages


# **propertyPoliciesCoveragesCoverageIdAdditionalCoveragesGet**
> \Swagger\Client\Model\PropertyCoverageAdditionalCoverages propertyPoliciesCoveragesCoverageIdAdditionalCoveragesGet($coverage_id, $accept_language)

Property policy additional coverages

Gets a collection of additional coverages available for a coverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coverage_id = "coverage_id_example"; // string | The coverage id
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->propertyPoliciesCoveragesCoverageIdAdditionalCoveragesGet($coverage_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCoveragesApi->propertyPoliciesCoveragesCoverageIdAdditionalCoveragesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coverage_id** | **string**| The coverage id |
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\PropertyCoverageAdditionalCoverages**](../Model/PropertyCoverageAdditionalCoverages.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyPoliciesCoveragesCoverageIdSublimitsGet**
> \Swagger\Client\Model\PropertyCoverageSublimits propertyPoliciesCoveragesCoverageIdSublimitsGet($coverage_id, $accept_language)

Property policy sublimits

Gets a collection of sublimits available for a coverage

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coverage_id = "coverage_id_example"; // string | The coverage id
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->propertyPoliciesCoveragesCoverageIdSublimitsGet($coverage_id, $accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCoveragesApi->propertyPoliciesCoveragesCoverageIdSublimitsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **coverage_id** | **string**| The coverage id |
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\PropertyCoverageSublimits**](../Model/PropertyCoverageSublimits.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyPoliciesCoveragesGet**
> \Swagger\Client\Model\PropertyCoverages propertyPoliciesCoveragesGet($accept_language)

Property policy coverages

Gets a collection of available coverages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyCoveragesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->propertyPoliciesCoveragesGet($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyCoveragesApi->propertyPoliciesCoveragesGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\PropertyCoverages**](../Model/PropertyCoverages.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
