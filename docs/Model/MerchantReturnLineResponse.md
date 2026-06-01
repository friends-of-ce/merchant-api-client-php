# # MerchantReturnLineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantProductNo** | **string** | The unique product reference used by the Merchant (sku). | [optional]
**orderLine** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineResponse**](MerchantOrderLineResponse.md) |  | [optional]
**shipmentStatus** | **string** | The status of the product in relation to the shipment. | [optional]
**stockLocation** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantStockLocationResponse**](MerchantStockLocationResponse.md) |  | [optional]
**acceptedQuantity** | **int** | The quantity of the return that has been marked as accepted. | [optional]
**rejectedQuantity** | **int** | The quantity of the return that has been marked as rejected. | [optional]
**quantity** | **int** | Number of items of the product in this return. |
**extraData** | **array<string,string>** | Extra data on the returnline. Each item must have an unqiue key | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
