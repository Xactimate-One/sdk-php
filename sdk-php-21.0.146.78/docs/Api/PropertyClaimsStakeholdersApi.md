# OpenAPI\Client\PropertyClaimsStakeholdersApi

All URIs are relative to http://localhost.

Method | HTTP request | Description
------------- | ------------- | -------------
[**createClaimStakeholder()**](PropertyClaimsStakeholdersApi.md#createClaimStakeholder) | **POST** /v1/property/claims/{claimId}/stakeholders | Add claim stakeholder
[**getClaimStakeholderById()**](PropertyClaimsStakeholdersApi.md#getClaimStakeholderById) | **GET** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Get claim stakeholder
[**getClaimStakeholders()**](PropertyClaimsStakeholdersApi.md#getClaimStakeholders) | **GET** /v1/property/claims/{claimId}/stakeholders | Get claim stakeholders
[**updateClaimStakeholder()**](PropertyClaimsStakeholdersApi.md#updateClaimStakeholder) | **PUT** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Update claim stakeholder


## `createClaimStakeholder()`

```php
createClaimStakeholder($claim_id, $stakeholder_create_request): \OpenAPI\Client\Model\StakeholderResponse
```

Add claim stakeholder

Creates a new claim stakeholder.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$stakeholder_create_request = {"addresses":[{"city":"Ponyville","country":"US","dependentLocality":null,"postalCode":"01234","region":"PA","street":"123 Mane Street","street2":null,"street3":null,"type":"Work"}],"email":"inquiry@company.example","name":"Ad Hoc Company, Inc. Ltd.","phoneNumbers":[{"number":"+1 200 555 0198","type":"Work"}],"taxId":"12-3456789","type":"AdHocCompany"}; // \OpenAPI\Client\Model\StakeholderCreateRequest | The stakeholder create request

try {
    $result = $apiInstance->createClaimStakeholder($claim_id, $stakeholder_create_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->createClaimStakeholder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **stakeholder_create_request** | [**\OpenAPI\Client\Model\StakeholderCreateRequest**](../Model/StakeholderCreateRequest.md)| The stakeholder create request |

### Return type

[**\OpenAPI\Client\Model\StakeholderResponse**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimStakeholderById()`

```php
getClaimStakeholderById($claim_id, $stakeholder_id): \OpenAPI\Client\Model\StakeholderResponse
```

Get claim stakeholder

Gets a claim stakeholder by id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$stakeholder_id = 'stakeholder_id_example'; // string | The stakeholder id

try {
    $result = $apiInstance->getClaimStakeholderById($claim_id, $stakeholder_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->getClaimStakeholderById: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **stakeholder_id** | [**string**](../Model/.md)| The stakeholder id |

### Return type

[**\OpenAPI\Client\Model\StakeholderResponse**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getClaimStakeholders()`

```php
getClaimStakeholders($claim_id): \OpenAPI\Client\Model\StakeholderResponse[]
```

Get claim stakeholders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id

try {
    $result = $apiInstance->getClaimStakeholders($claim_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->getClaimStakeholders: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |

### Return type

[**\OpenAPI\Client\Model\StakeholderResponse[]**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateClaimStakeholder()`

```php
updateClaimStakeholder($claim_id, $stakeholder_id, $stakeholder_update_request): \OpenAPI\Client\Model\StakeholderResponse
```

Update claim stakeholder

Updates a claim stakeholder by id. Attempting to update a stakeholder where the request   type does not match the existing stakeholder is a bad request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\PropertyClaimsStakeholdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$claim_id = 'claim_id_example'; // string | The claim id
$stakeholder_id = 'stakeholder_id_example'; // string | The stakeholder id
$stakeholder_update_request = {"addresses":[{"city":"Ponyville","country":"US","dependentLocality":null,"postalCode":"01234","region":"PA","street":"123 Mane Street","street2":null,"street3":null,"type":"Work"}],"email":"inquiry@company.example","name":"Ad Hoc Company, Inc. Ltd.","phoneNumbers":[{"number":"+1 200 555 0198","type":"Work"}],"taxId":"12-3456789","type":"AdHocCompany"}; // \OpenAPI\Client\Model\StakeholderUpdateRequest | The stakeholder update request

try {
    $result = $apiInstance->updateClaimStakeholder($claim_id, $stakeholder_id, $stakeholder_update_request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PropertyClaimsStakeholdersApi->updateClaimStakeholder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **claim_id** | [**string**](../Model/.md)| The claim id |
 **stakeholder_id** | [**string**](../Model/.md)| The stakeholder id |
 **stakeholder_update_request** | [**\OpenAPI\Client\Model\StakeholderUpdateRequest**](../Model/StakeholderUpdateRequest.md)| The stakeholder update request |

### Return type

[**\OpenAPI\Client\Model\StakeholderResponse**](../Model/StakeholderResponse.md)

### Authorization

[ApiKey](../../README.md#ApiKey)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`, `application/problem+json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
