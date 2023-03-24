# # PolicyCreateRequestBase

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**country** | **string** | The policy country |
**apply_deductible_across_all_coverages** | **bool** | Does deductible apply across all coverages |
**beneficiary_stakeholder_ids** | **string[]** | List of beneficiary stakeholder ids | [optional]
**broker_stakeholder_id** | **string** | The broker stakeholder id | [optional]
**currency** | **string** | The currency of the policy |
**deductible** | [**\OpenAPI\Client\Model\DeductibleV1Request**](DeductibleV1Request.md) |  | [optional]
**effective_date** | [**\DateTime**](\DateTime.md) | The effective date | [optional]
**expiration_date** | [**\DateTime**](\DateTime.md) | The expiration date | [optional]
**inception_date** | [**\DateTime**](\DateTime.md) | The inception date | [optional]
**insured_stakeholder_ids** | **string[]** | List of insured stakeholder ids | [optional]
**insurer_stakeholder_id** | **string** | The insurer stakeholder id | [optional]
**mortgages** | [**\OpenAPI\Client\Model\MortgageV1Request[]**](MortgageV1Request.md) | List of mortgages | [optional]
**onsite_contact_stakeholder_id** | **string** | The onsite contact stakeholder id | [optional]
**policy_template_id** | **string** | The policy template id |
**policy_number** | **string** | The policy number.    Must match the policy number pattern set up in the policy template rules. | [optional]
**policy_owner_stakeholder_id** | **string** | The policy owner stakeholder id | [optional]
**risk_address** | [**\OpenAPI\Client\Model\AddressV1Request**](AddressV1Request.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
