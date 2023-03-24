# OpenAPIClient-php

The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.


## Installation & Usage

### Requirements

PHP 7.3 and later.
Should also work with PHP 8.0 but has not been tested.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/xactimate-one/sdk-php.git"
    }
  ],
  "require": {
    "xactimate-one/sdk-php": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure API key authorization: ApiKey
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKey('x-api-key', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('x-api-key', 'Bearer');


$apiInstance = new OpenAPI\Client\Api\HealthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->alive();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HealthApi->alive: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *http://localhost*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*HealthApi* | [**alive**](docs/Api/HealthApi.md#alive) | **GET** /health/alive | Returns \&quot;alive\&quot; if the service is available.
*HealthApi* | [**details**](docs/Api/HealthApi.md#details) | **GET** /health/details | Returns the health details of the service and its dependencies.
*PropertyClaimsApi* | [**createClaim**](docs/Api/PropertyClaimsApi.md#createclaim) | **POST** /v1/property/claims | Create a claim
*PropertyClaimsApi* | [**getClaim**](docs/Api/PropertyClaimsApi.md#getclaim) | **GET** /v1/property/claims/{claimId} | Get claim
*PropertyClaimsApi* | [**updateClaim**](docs/Api/PropertyClaimsApi.md#updateclaim) | **PUT** /v1/property/claims/{claimId} | Update claim
*PropertyClaimsCalculationsApi* | [**getClaimCalculations**](docs/Api/PropertyClaimsCalculationsApi.md#getclaimcalculations) | **GET** /v1/property/claims/{claimId}/calculations | 
*PropertyClaimsEstimationApi* | [**getClaimEstimates**](docs/Api/PropertyClaimsEstimationApi.md#getclaimestimates) | **GET** /v1/property/claims/{claimId}/estimates | Get claim estimates
*PropertyClaimsEstimationApi* | [**getEstimateByEstimateId**](docs/Api/PropertyClaimsEstimationApi.md#getestimatebyestimateid) | **GET** /v1/property/claims/{claimId}/estimates/{estimateId} | Get estimate by estimate id
*PropertyClaimsFormsApi* | [**createPropertyClaimForm**](docs/Api/PropertyClaimsFormsApi.md#createpropertyclaimform) | **POST** /v1/property/claims/{claimId}/forms | Create a form
*PropertyClaimsFormsApi* | [**getPropertyClaimForm**](docs/Api/PropertyClaimsFormsApi.md#getpropertyclaimform) | **GET** /v1/property/claims/{claimId}/forms/{formId} | Get a form
*PropertyClaimsFormsApi* | [**getPropertyClaimForms**](docs/Api/PropertyClaimsFormsApi.md#getpropertyclaimforms) | **GET** /v1/property/claims/{claimId}/forms | Get forms
*PropertyClaimsFormsApi* | [**updatePropertyClaimForm**](docs/Api/PropertyClaimsFormsApi.md#updatepropertyclaimform) | **PUT** /v1/property/claims/{claimId}/forms/{formId} | Update a form
*PropertyClaimsLossApi* | [**getClaimLoss**](docs/Api/PropertyClaimsLossApi.md#getclaimloss) | **GET** /v1/property/claims/{claimId}/loss | Get claim loss
*PropertyClaimsLossApi* | [**updateClaimLoss**](docs/Api/PropertyClaimsLossApi.md#updateclaimloss) | **PUT** /v1/property/claims/{claimId}/loss | Update claim loss
*PropertyClaimsMediaApi* | [**createMedia**](docs/Api/PropertyClaimsMediaApi.md#createmedia) | **POST** /v1/property/claims/{claimId}/media | Create claim media
*PropertyClaimsMediaApi* | [**getMedia**](docs/Api/PropertyClaimsMediaApi.md#getmedia) | **GET** /v1/property/claims/{claimId}/media | Get claim media
*PropertyClaimsMediaApi* | [**getMediaById**](docs/Api/PropertyClaimsMediaApi.md#getmediabyid) | **GET** /v1/property/claims/{claimId}/media/{mediaId} | Get claim media item
*PropertyClaimsMediaApi* | [**updateMedia**](docs/Api/PropertyClaimsMediaApi.md#updatemedia) | **PUT** /v1/property/claims/{claimId}/media/{mediaId} | Update claim media
*PropertyClaimsPolicyApi* | [**getClaimPolicy**](docs/Api/PropertyClaimsPolicyApi.md#getclaimpolicy) | **GET** /v1/property/claims/{claimId}/policy | Get claim policy
*PropertyClaimsPolicyApi* | [**updateClaimPolicy**](docs/Api/PropertyClaimsPolicyApi.md#updateclaimpolicy) | **PUT** /v1/property/claims/{claimId}/policy | Update claim policy
*PropertyClaimsReportsApi* | [**createClaimReport**](docs/Api/PropertyClaimsReportsApi.md#createclaimreport) | **POST** /v1/property/claims/{claimId}/reports | Create a claim report
*PropertyClaimsReportsApi* | [**getClaimReportById**](docs/Api/PropertyClaimsReportsApi.md#getclaimreportbyid) | **GET** /v1/property/claims/{claimId}/reports/{reportId} | Get a specific claim report
*PropertyClaimsReportsApi* | [**getClaimReports**](docs/Api/PropertyClaimsReportsApi.md#getclaimreports) | **GET** /v1/property/claims/{claimId}/reports | Get reports for claim
*PropertyClaimsRolesApi* | [**addClaimManagerByEmail**](docs/Api/PropertyClaimsRolesApi.md#addclaimmanagerbyemail) | **PUT** /v1/property/claims/{claimId}/claim-manager/account-user/{email} | Add claim manager
*PropertyClaimsRolesApi* | [**addRoleByEmail**](docs/Api/PropertyClaimsRolesApi.md#addrolebyemail) | **PUT** /v1/property/claims/{claimId}/roles/{roleId}/account-user/{email} | Add user to role
*PropertyClaimsRolesApi* | [**removeClaimManagerByEmail**](docs/Api/PropertyClaimsRolesApi.md#removeclaimmanagerbyemail) | **DELETE** /v1/property/claims/{claimId}/claim-manager/account-user/{email} | Remove claim manager
*PropertyClaimsRolesApi* | [**removeRoleByEmail**](docs/Api/PropertyClaimsRolesApi.md#removerolebyemail) | **DELETE** /v1/property/claims/{claimId}/roles/{roleId}/account-user/{email} | Remove user from role
*PropertyClaimsStakeholdersApi* | [**createClaimStakeholder**](docs/Api/PropertyClaimsStakeholdersApi.md#createclaimstakeholder) | **POST** /v1/property/claims/{claimId}/stakeholders | Add claim stakeholder
*PropertyClaimsStakeholdersApi* | [**getClaimStakeholderById**](docs/Api/PropertyClaimsStakeholdersApi.md#getclaimstakeholderbyid) | **GET** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Get claim stakeholder
*PropertyClaimsStakeholdersApi* | [**getClaimStakeholders**](docs/Api/PropertyClaimsStakeholdersApi.md#getclaimstakeholders) | **GET** /v1/property/claims/{claimId}/stakeholders | Get claim stakeholders
*PropertyClaimsStakeholdersApi* | [**updateClaimStakeholder**](docs/Api/PropertyClaimsStakeholdersApi.md#updateclaimstakeholder) | **PUT** /v1/property/claims/{claimId}/stakeholders/{stakeholderId} | Update claim stakeholder
*PropertyClaimsStatusApi* | [**updateClaimStatus**](docs/Api/PropertyClaimsStatusApi.md#updateclaimstatus) | **PUT** /v1/property/claims/{claimId}/status | Updates status for property claim
*PropertyTemplatesApi* | [**getClaimTemplateFormTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplateformtemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/forms | Get claim template form templates
*PropertyTemplatesApi* | [**getClaimTemplateReportTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplatereporttemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/reports | Get claim template report templates
*PropertyTemplatesApi* | [**getClaimTemplateRoleTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplateroletemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/roles | Get claim template role templates
*PropertyTemplatesApi* | [**getClaimTemplateStatusChangeReasonTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplatestatuschangereasontemplates) | **GET** /v1/property/templates/claims/{claimTemplateId}/status-change-reasons | Get claim template status change reason templates
*PropertyTemplatesApi* | [**getClaimTemplates**](docs/Api/PropertyTemplatesApi.md#getclaimtemplates) | **GET** /v1/property/templates/claims | Get claim templates
*PropertyTemplatesApi* | [**getFormTemplates**](docs/Api/PropertyTemplatesApi.md#getformtemplates) | **GET** /v1/property/templates/forms | Get form templates
*PropertyTemplatesApi* | [**getPerilCauseTemplates**](docs/Api/PropertyTemplatesApi.md#getperilcausetemplates) | **GET** /v1/property/templates/perils/{perilId}/causes | Get peril causes templates
*PropertyTemplatesApi* | [**getPerilsTemplates**](docs/Api/PropertyTemplatesApi.md#getperilstemplates) | **GET** /v1/property/templates/perils | Get peril templates
*PropertyTemplatesApi* | [**getPolicyTemplates**](docs/Api/PropertyTemplatesApi.md#getpolicytemplates) | **GET** /v1/property/templates/policies | Get policy templates
*PropertyTemplatesApi* | [**getReportTemplates**](docs/Api/PropertyTemplatesApi.md#getreporttemplates) | **GET** /v1/property/templates/reports | Get instance report templates
*PropertyTemplatesApi* | [**getRoleTemplates**](docs/Api/PropertyTemplatesApi.md#getroletemplates) | **GET** /v1/property/templates/roles | Get role templates

## Models

- [AccountMetadataResponse](docs/Model/AccountMetadataResponse.md)
- [ActivityType](docs/Model/ActivityType.md)
- [AdHocCompanyStakeholderCreateRequest](docs/Model/AdHocCompanyStakeholderCreateRequest.md)
- [AdHocCompanyStakeholderUpdateRequest](docs/Model/AdHocCompanyStakeholderUpdateRequest.md)
- [AdHocIndividualStakeholderCreateRequest](docs/Model/AdHocIndividualStakeholderCreateRequest.md)
- [AdHocIndividualStakeholderUpdateRequest](docs/Model/AdHocIndividualStakeholderUpdateRequest.md)
- [Address](docs/Model/Address.md)
- [AddressType](docs/Model/AddressType.md)
- [AddressV1Request](docs/Model/AddressV1Request.md)
- [AddressV1Response](docs/Model/AddressV1Response.md)
- [AmericanPolicyCreateV1Request](docs/Model/AmericanPolicyCreateV1Request.md)
- [AmericanPolicyUpdateV1Request](docs/Model/AmericanPolicyUpdateV1Request.md)
- [AmericanPolicyV1Response](docs/Model/AmericanPolicyV1Response.md)
- [AppliedDeductibleResponse](docs/Model/AppliedDeductibleResponse.md)
- [AustralianPolicyCreateV1Request](docs/Model/AustralianPolicyCreateV1Request.md)
- [AustralianPolicyUpdateV1Request](docs/Model/AustralianPolicyUpdateV1Request.md)
- [AustralianPolicyV1Response](docs/Model/AustralianPolicyV1Response.md)
- [BritishPolicyCreateV1Request](docs/Model/BritishPolicyCreateV1Request.md)
- [BritishPolicyUpdateV1Request](docs/Model/BritishPolicyUpdateV1Request.md)
- [BritishPolicyV1Response](docs/Model/BritishPolicyV1Response.md)
- [CanadianPolicyCreateV1Request](docs/Model/CanadianPolicyCreateV1Request.md)
- [CanadianPolicyUpdateV1Request](docs/Model/CanadianPolicyUpdateV1Request.md)
- [CanadianPolicyV1Response](docs/Model/CanadianPolicyV1Response.md)
- [CauseOfLossCreateRequest](docs/Model/CauseOfLossCreateRequest.md)
- [CauseOfLossResponse](docs/Model/CauseOfLossResponse.md)
- [CauseOfLossUpdateRequest](docs/Model/CauseOfLossUpdateRequest.md)
- [ChileanCoverageOrSublimit](docs/Model/ChileanCoverageOrSublimit.md)
- [ChileanCoverageOrSublimitBase](docs/Model/ChileanCoverageOrSublimitBase.md)
- [ChileanPolicyCreateV1Request](docs/Model/ChileanPolicyCreateV1Request.md)
- [ChileanPolicyUpdateV1Request](docs/Model/ChileanPolicyUpdateV1Request.md)
- [ChileanPolicyV1Response](docs/Model/ChileanPolicyV1Response.md)
- [ChileanPrimaryCoverageV1Request](docs/Model/ChileanPrimaryCoverageV1Request.md)
- [ChileanPrimaryCoverageV1Response](docs/Model/ChileanPrimaryCoverageV1Response.md)
- [ChileanSubcoverageV1Request](docs/Model/ChileanSubcoverageV1Request.md)
- [ChileanSubcoverageV1Response](docs/Model/ChileanSubcoverageV1Response.md)
- [ChileanSublimitV1Request](docs/Model/ChileanSublimitV1Request.md)
- [ChileanSublimitV1Response](docs/Model/ChileanSublimitV1Response.md)
- [ClaimCalculationsResponse](docs/Model/ClaimCalculationsResponse.md)
- [ClaimCreateAdHocCompanyStakeholderCreateRequest](docs/Model/ClaimCreateAdHocCompanyStakeholderCreateRequest.md)
- [ClaimCreateAdHocIndividualStakeholderCreateRequest](docs/Model/ClaimCreateAdHocIndividualStakeholderCreateRequest.md)
- [ClaimCreateRequest](docs/Model/ClaimCreateRequest.md)
- [ClaimCreateResponse](docs/Model/ClaimCreateResponse.md)
- [ClaimCreateStakeholderCreateRequest](docs/Model/ClaimCreateStakeholderCreateRequest.md)
- [ClaimResponse](docs/Model/ClaimResponse.md)
- [ClaimStatusChangeReasonTemplateResponse](docs/Model/ClaimStatusChangeReasonTemplateResponse.md)
- [ClaimStatusChangeRequest](docs/Model/ClaimStatusChangeRequest.md)
- [ClaimStatusType](docs/Model/ClaimStatusType.md)
- [ClaimUpdateRequest](docs/Model/ClaimUpdateRequest.md)
- [CompanyStakeholderResponse](docs/Model/CompanyStakeholderResponse.md)
- [ConditionType](docs/Model/ConditionType.md)
- [CostBreakdownResponse](docs/Model/CostBreakdownResponse.md)
- [CoverageType](docs/Model/CoverageType.md)
- [CurrencyDetailsResponse](docs/Model/CurrencyDetailsResponse.md)
- [DeductibleResponse](docs/Model/DeductibleResponse.md)
- [DeductibleType](docs/Model/DeductibleType.md)
- [DeductibleV1Request](docs/Model/DeductibleV1Request.md)
- [DeductibleV1Response](docs/Model/DeductibleV1Response.md)
- [DependencyHealthDetails](docs/Model/DependencyHealthDetails.md)
- [DepreciatedCostBreakdownResponse](docs/Model/DepreciatedCostBreakdownResponse.md)
- [EstimateMediaResponse](docs/Model/EstimateMediaResponse.md)
- [EstimatePricingResponse](docs/Model/EstimatePricingResponse.md)
- [EstimateResponse](docs/Model/EstimateResponse.md)
- [FolderResponse](docs/Model/FolderResponse.md)
- [FolderType](docs/Model/FolderType.md)
- [FormAnswerCreateRequest](docs/Model/FormAnswerCreateRequest.md)
- [FormAnswerResponse](docs/Model/FormAnswerResponse.md)
- [FormAnswerUpdateRequest](docs/Model/FormAnswerUpdateRequest.md)
- [FormCreateRequest](docs/Model/FormCreateRequest.md)
- [FormCreateResponse](docs/Model/FormCreateResponse.md)
- [FormGroupCreateRequest](docs/Model/FormGroupCreateRequest.md)
- [FormGroupResponse](docs/Model/FormGroupResponse.md)
- [FormGroupUpdateRequest](docs/Model/FormGroupUpdateRequest.md)
- [FormResponse](docs/Model/FormResponse.md)
- [FormUpdateRequest](docs/Model/FormUpdateRequest.md)
- [FrenchPolicyCreateV1Request](docs/Model/FrenchPolicyCreateV1Request.md)
- [FrenchPolicyUpdateV1Request](docs/Model/FrenchPolicyUpdateV1Request.md)
- [FrenchPolicyV1Response](docs/Model/FrenchPolicyV1Response.md)
- [GenericCoverageOrSublimit](docs/Model/GenericCoverageOrSublimit.md)
- [GenericCoverageOrSublimitBase](docs/Model/GenericCoverageOrSublimitBase.md)
- [GenericPrimaryCoverageV1Request](docs/Model/GenericPrimaryCoverageV1Request.md)
- [GenericPrimaryCoverageV1Response](docs/Model/GenericPrimaryCoverageV1Response.md)
- [GenericSubcoverageV1Request](docs/Model/GenericSubcoverageV1Request.md)
- [GenericSubcoverageV1Response](docs/Model/GenericSubcoverageV1Response.md)
- [GenericSublimitV1Request](docs/Model/GenericSublimitV1Request.md)
- [GenericSublimitV1Response](docs/Model/GenericSublimitV1Response.md)
- [IndividualStakeholderResponse](docs/Model/IndividualStakeholderResponse.md)
- [LineItemActivityPricingResponse](docs/Model/LineItemActivityPricingResponse.md)
- [LineItemCalculationsResponse](docs/Model/LineItemCalculationsResponse.md)
- [LineItemMediaResponse](docs/Model/LineItemMediaResponse.md)
- [LineItemPricingResponse](docs/Model/LineItemPricingResponse.md)
- [LineItemResponse](docs/Model/LineItemResponse.md)
- [LineItemsCalculationsResponse](docs/Model/LineItemsCalculationsResponse.md)
- [LineItemsEstimatesResponse](docs/Model/LineItemsEstimatesResponse.md)
- [LossCreateRequest](docs/Model/LossCreateRequest.md)
- [LossResponse](docs/Model/LossResponse.md)
- [LossUpdateRequest](docs/Model/LossUpdateRequest.md)
- [MediaCreateRequest](docs/Model/MediaCreateRequest.md)
- [MediaCreatedResponse](docs/Model/MediaCreatedResponse.md)
- [MediaResponse](docs/Model/MediaResponse.md)
- [MediaUpdateRequest](docs/Model/MediaUpdateRequest.md)
- [MediaUpdatedResponse](docs/Model/MediaUpdatedResponse.md)
- [MexicanPolicyCreateV1Request](docs/Model/MexicanPolicyCreateV1Request.md)
- [MexicanPolicyUpdateV1Request](docs/Model/MexicanPolicyUpdateV1Request.md)
- [MexicanPolicyV1Response](docs/Model/MexicanPolicyV1Response.md)
- [MortgageV1Request](docs/Model/MortgageV1Request.md)
- [MortgageV1Response](docs/Model/MortgageV1Response.md)
- [PerilCreateRequest](docs/Model/PerilCreateRequest.md)
- [PerilResponse](docs/Model/PerilResponse.md)
- [PerilUpdateRequest](docs/Model/PerilUpdateRequest.md)
- [PhoneNumber](docs/Model/PhoneNumber.md)
- [PhoneNumberType](docs/Model/PhoneNumberType.md)
- [PolicyCreateRequestBase](docs/Model/PolicyCreateRequestBase.md)
- [PolicyUpdateRequestBase](docs/Model/PolicyUpdateRequestBase.md)
- [PolicyV1ResponseBase](docs/Model/PolicyV1ResponseBase.md)
- [PotentialSubrogationCreateRequest](docs/Model/PotentialSubrogationCreateRequest.md)
- [PotentialSubrogationResponse](docs/Model/PotentialSubrogationResponse.md)
- [PotentialSubrogationUpdateRequest](docs/Model/PotentialSubrogationUpdateRequest.md)
- [PrimaryCoverageCalculationsResponse](docs/Model/PrimaryCoverageCalculationsResponse.md)
- [ProblemDetails](docs/Model/ProblemDetails.md)
- [ReportCreateRequest](docs/Model/ReportCreateRequest.md)
- [ReportResponse](docs/Model/ReportResponse.md)
- [RoomResponse](docs/Model/RoomResponse.md)
- [ServiceStatus](docs/Model/ServiceStatus.md)
- [StakeholderCreateRequest](docs/Model/StakeholderCreateRequest.md)
- [StakeholderResponse](docs/Model/StakeholderResponse.md)
- [StakeholderType](docs/Model/StakeholderType.md)
- [StakeholderUpdateRequest](docs/Model/StakeholderUpdateRequest.md)
- [SubcoverageCalculationsResponse](docs/Model/SubcoverageCalculationsResponse.md)
- [SublimitCalculationsResponse](docs/Model/SublimitCalculationsResponse.md)
- [TemplateMetadataResponse](docs/Model/TemplateMetadataResponse.md)
- [TotalBreakdownResponse](docs/Model/TotalBreakdownResponse.md)
- [UnitOfLength](docs/Model/UnitOfLength.md)
- [UsageBreakdownResponse](docs/Model/UsageBreakdownResponse.md)

## Authorization

### ApiKey

- **Type**: API key
- **API key parameter name**: x-api-key
- **Location**: HTTP header


## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author



## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.0.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
