# # LineItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity** | [**\OpenAPI\Client\Model\ActivityType**](ActivityType.md) |  |
**age** | **double** | The age of the line item. | [optional]
**condition** | [**\OpenAPI\Client\Model\ConditionType**](ConditionType.md) |  |
**coverage_id** | **string** | The coverage id of the line item. | [optional]
**folder_id** | **string** | The id of folder which contains the line item. | [optional]
**id** | **string** | The id of the line item. |
**is_covered** | **bool** | Whether the line item is covered. |
**media** | [**\OpenAPI\Client\Model\LineItemMediaResponse[]**](LineItemMediaResponse.md) | The media items of the line item. |
**name** | **string** | The name of the line item. |
**notes** | **string** | The notes on the line item. | [optional]
**pricing** | [**\OpenAPI\Client\Model\LineItemPricingResponse**](LineItemPricingResponse.md) |  | [optional]
**quantity** | **double** | The quantity of the line item. |
**reported_pricing** | [**\OpenAPI\Client\Model\LineItemReportedPricingResponse**](LineItemReportedPricingResponse.md) | The reported pricing of line item (nullable). | [optional]
**units** | **string** | The unit of the line item. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
