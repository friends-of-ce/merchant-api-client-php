# # MerchantSingleOrderReturnLineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantProductNo** | **string** | The unique product reference used by the Merchant (sku). | [optional]
**acceptedQuantity** | **int** | The accepted quantity of returned products in this orderline. | [optional]
**rejectedQuantity** | **int** | The rejected quantity of returned products in this orderline. | [optional]
**orderLine** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineResponse**](MerchantOrderLineResponse.md) |  | [optional]
**shipmentStatus** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentLineStatus**](ShipmentLineStatus.md) |  | [optional]
**quantity** | **int** | Number of items of the product in this return. |
**extraData** | **array<string,string>** | Extra data on the returnline. Each item must have an unqiue key | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
