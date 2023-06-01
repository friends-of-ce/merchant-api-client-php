# # MerchantShipmentLineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantProductNo** | **string** | The unique product reference used by the Merchant. |
**merchantBundleProductNo** | **string** | The unique bundle product reference used by the Merchant. | [optional]
**channelProductNo** | **string** | The unique product reference used by the Channel. | [optional]
**orderLine** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineResponse**](MerchantOrderLineResponse.md) |  | [optional]
**shipmentStatus** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentLineStatus**](ShipmentLineStatus.md) |  | [optional]
**extraData** | **array<string,string>** | Extra data on the shipment line. Each item must have an unqiue key | [optional]
**quantity** | **int** | Number of items of the product in the shipment. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
