# Swagger\Client\PropertyPerilsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propertyPoliciesPerilsGet**](PropertyPerilsApi.md#propertyPoliciesPerilsGet) | **GET** /property/policies/perils | Types of loss
[**propertyPoliciesPerilsPerilIdCausesOfLossGet**](PropertyPerilsApi.md#propertyPoliciesPerilsPerilIdCausesOfLossGet) | **GET** /property/policies/perils/{peril-id}/causes-of-loss | Cause of loss


# **propertyPoliciesPerilsGet**
> \Swagger\Client\Model\Perils propertyPoliciesPerilsGet($accept_language)

Types of loss

Gets a collection of available perils

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyPerilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$accept_language = "en-US"; // string | The culture to request resources for

try {
    $result = $apiInstance->propertyPoliciesPerilsGet($accept_language);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyPerilsApi->propertyPoliciesPerilsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **accept_language** | **string**| The culture to request resources for | [optional]

### Return type

[**\Swagger\Client\Model\Perils**](../Model/Perils.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyPoliciesPerilsPerilIdCausesOfLossGet**
> \Swagger\Client\Model\CausesOfLoss propertyPoliciesPerilsPerilIdCausesOfLossGet($peril_id)

Cause of loss

Gets a collection of causes of loss for a peril

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyPerilsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$peril_id = "peril_id_example"; // string | The id of the peril

try {
    $result = $apiInstance->propertyPoliciesPerilsPerilIdCausesOfLossGet($peril_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyPerilsApi->propertyPoliciesPerilsPerilIdCausesOfLossGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **peril_id** | **string**| The id of the peril |

### Return type

[**\Swagger\Client\Model\CausesOfLoss**](../Model/CausesOfLoss.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
