# # ChangePurchaseOrderShipmentLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channelOrderNo** | **string** | Channel&#39;s identifier of the purchase order |
**merchantProductNo** | **string** | Merchant&#39;s identifier of the product.  The combination of ChannelOrderNo + MerchantProductNo identifies the order line this shipment line  ships. |
**quantityUnitOfMeasure** | [**\FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderLineUnitOfMeasure**](PurchaseOrderLineUnitOfMeasure.md) |  | [optional]
**quantity** | **int** | The quantity | [optional]
**quantityUnitSize** | **int** | The case size, when QuantityUnitOfMeasure is &#39;CASES&#39;. Otherwise, it is 1. | [optional]
**expiryDate** | **\DateTime** | The date that determines the limit of consumption or use of a product.  For perishable products. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
