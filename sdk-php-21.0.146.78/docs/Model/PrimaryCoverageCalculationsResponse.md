# # PrimaryCoverageCalculationsResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**deductible** | [**\OpenAPI\Client\Model\DeductibleResponse**](DeductibleResponse.md) |  | [optional]
**line_items** | [**\OpenAPI\Client\Model\LineItemsCalculationsResponse[]**](LineItemsCalculationsResponse.md) | The line items calculations |
**per_occurence_limit_usage** | [**\OpenAPI\Client\Model\UsageBreakdownResponse**](UsageBreakdownResponse.md) |  | [optional]
**primary_coverage_id** | **string** | The primary coverage id. |
**subcoverages** | [**\OpenAPI\Client\Model\SubcoverageCalculationsResponse[]**](SubcoverageCalculationsResponse.md) | The subcoverages. |
**sublimits** | [**\OpenAPI\Client\Model\SublimitCalculationsResponse[]**](SublimitCalculationsResponse.md) | The sublimits. |
**subtotal** | [**\OpenAPI\Client\Model\TotalBreakdownResponse**](TotalBreakdownResponse.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
