# OpenAPI\Client\PropertyClaimsMediaApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createMedia()**](PropertyClaimsMediaApi.md#createMedia) | **POST** /v1/property/claims/{claimId}/media | Create claim media
[**getMedia()**](PropertyClaimsMediaApi.md#getMedia) | **GET** /v1/property/claims/{claimId}/media | Get claim media
[**getMediaById()**](PropertyClaimsMediaApi.md#getMediaById) | **GET** /v1/property/claims/{claimId}/media/{mediaId} | Get claim media item
[**updateMedia()**](PropertyClaimsMediaApi.md#updateMedia) | **PUT** /v1/property/claims/{claimId}/media/{mediaId} | Update claim media


## `createMedia()`

```php
createMedia($claim_id, $media_create_request): \OpenAPI\Client\Model\MediaCreatedResponse
```

Create claim media

Creates a new media item on a claim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$media_create_request = {"description":"Address plate","filename":"00000001.jpg","name":"AddressPlate"}; // \OpenAPI\Client\Model\MediaCreateRequest | The media create request

try {
    $result = $apiInstance->createMedia($claim_id, $media_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->createMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **media_create_request** | [**\OpenAPI\Client\Model\MediaCreateRequest**](../Model/MediaCreateRequest.md)| The media create request |

### Return type

[**\OpenAPI\Client\Model\MediaCreatedResponse**](../Model/MediaCreatedResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMedia()`

```php
getMedia($claim_id): \OpenAPI\Client\Model\MediaResponse[]
```

Get claim media

Gets all media items from a claim.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id

try {
    $result = $apiInstance->getMedia($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->getMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\OpenAPI\Client\Model\MediaResponse[]**](../Model/MediaResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getMediaById()`

```php
getMediaById($claim_id, $media_id): \OpenAPI\Client\Model\MediaResponse
```

Get claim media item

Gets a claim media item by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$media_id = 'media_id_example'; // string | The media id

try {
    $result = $apiInstance->getMediaById($claim_id, $media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->getMediaById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **media_id** | [**string**](../Model/.md)| The media id |

### Return type

[**\OpenAPI\Client\Model\MediaResponse**](../Model/MediaResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateMedia()`

```php
updateMedia($claim_id, $media_id, $media_update_request): \OpenAPI\Client\Model\MediaUpdatedResponse
```

Update claim media

Updates a claim media item.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsMediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$media_id = 'media_id_example'; // string | The media id
$media_update_request = {"description":"Address plate","name":"AddressPlate"}; // \OpenAPI\Client\Model\MediaUpdateRequest | The media update request

try {
    $result = $apiInstance->updateMedia($claim_id, $media_id, $media_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsMediaApi->updateMedia: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **media_id** | [**string**](../Model/.md)| The media id |
 **media_update_request** | [**\OpenAPI\Client\Model\MediaUpdateRequest**](../Model/MediaUpdateRequest.md)| The media update request |

### Return type

[**\OpenAPI\Client\Model\MediaUpdatedResponse**](../Model/MediaUpdatedResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
