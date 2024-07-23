# # IPurchaseOrderShipmentLineByFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ChannelEngine identifier of the shipment line | [optional]
**channelOrderNo** | **string** | The number the channel uses to identify the purchase order,  which this line (partially) ships. | [optional]
**itemSequenceNumber** | **string** | Item sequence number for the item. The first item will be 001, the second 002, and so on.  This number is used as a reference to refer to this item from the carton or pallet level. | [optional]
**channelProductNo** | **string** | The number the channel uses to identify the product | [optional]
**merchantProductNo** | **string** | The number the merchant uses to identify the product | [optional]
**quantityUnitOfMeasure** | [**\FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure**](PurchaseOrderLineUnitOfMeasure.md) |  | [optional]
**quantity** | **int** | The quantity | [optional]
**quantityUnitSize** | **int** | The case size, in the event that we ordered using cases. Otherwise, it is 1. | [optional]
**expiryDate** | **\DateTime** | The date that determines the limit of consumption or use of a product.  For perishable products. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
