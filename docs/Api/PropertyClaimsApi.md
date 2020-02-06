# Swagger\Client\PropertyClaimsApi

All URIs are relative to *https://localhost*

Method | HTTP request | Description
------------- | ------------- | -------------
[**propertyClaimsClaimIdPut**](PropertyClaimsApi.md#propertyClaimsClaimIdPut) | **PUT** /property/claims/{claim-id} | Update a property claim
[**propertyClaimsPost**](PropertyClaimsApi.md#propertyClaimsPost) | **POST** /property/claims | Create a new property claim


# **propertyClaimsClaimIdPut**
> \Swagger\Client\Model\PropertyClaim propertyClaimsClaimIdPut($claim_id, $body)

Update a property claim

Updates an existing property claim.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = "claim_id_example"; // string | The id of the property claim to be updated
$body = new \Swagger\Client\Model\UpdatePropertyClaimRequest(); // \Swagger\Client\Model\UpdatePropertyClaimRequest | 

try {
    $result = $apiInstance->propertyClaimsClaimIdPut($claim_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->propertyClaimsClaimIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | **string**| The id of the property claim to be updated |
 **body** | [**\Swagger\Client\Model\UpdatePropertyClaimRequest**](../Model/UpdatePropertyClaimRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\PropertyClaim**](../Model/PropertyClaim.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **propertyClaimsPost**
> \Swagger\Client\Model\PropertyClaim propertyClaimsPost($body)

Create a new property claim

Creates a new property claim

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: API Key
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Swagger\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');

$apiInstance = new Swagger\Client\Api\PropertyClaimsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreatePropertyClaimRequest(); // \Swagger\Client\Model\CreatePropertyClaimRequest | 

try {
    $result = $apiInstance->propertyClaimsPost($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsApi->propertyClaimsPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreatePropertyClaimRequest**](../Model/CreatePropertyClaimRequest.md)|  |

### Return type

[**\Swagger\Client\Model\PropertyClaim**](../Model/PropertyClaim.md)

### Authorization

[API Key](../../README.md#API Key)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
