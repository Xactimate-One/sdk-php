# # PolicyV1ResponseBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | The policy country |
**apply_deductible_across_all_coverages** | **bool** | Does deductible apply across all coverages |
**beneficiary_stakeholder_ids** | **string[]** | List of beneficiary stakeholder ids |
**broker_stakeholder_id** | **string** | The broker stakeholder id | [optional]
**currency** | **string** | The currency of the policy |
**deductible** | [**\OpenAPI\Client\Model\DeductibleV1Response**](DeductibleV1Response.md) |  | [optional]
**effective_date** | [**\DateTime**](\DateTime.md) | The effective date | [optional]
**expiration_date** | [**\DateTime**](\DateTime.md) | The expiration date | [optional]
**id** | **string** | The policy id |
**inception_date** | [**\DateTime**](\DateTime.md) | The inception date | [optional]
**insured_stakeholder_ids** | **string[]** | List of insured stakeholder ids |
**insurer_stakeholder_id** | **string** | The insurer stakeholder id | [optional]
**mortgages** | [**\OpenAPI\Client\Model\MortgageV1Response[]**](MortgageV1Response.md) | List of mortgages |
**onsite_contact_stakeholder_id** | **string** | The onsite contact stakeholder id | [optional]
**policy_number** | **string** | The policy number | [optional]
**policy_owner_stakeholder_id** | **string** | The policy owner stakeholder id | [optional]
**risk_address** | [**\OpenAPI\Client\Model\AddressV1Response**](AddressV1Response.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
