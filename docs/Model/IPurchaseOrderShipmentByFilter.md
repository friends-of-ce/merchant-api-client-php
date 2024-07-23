# # IPurchaseOrderShipmentByFilter

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | ChannelEngine identifier of the shipment | [optional]
**merchantShipmentNo** | **string** | The number the merchant uses to id this PO shipment | [optional]
**channelShipmentNo** | **string** | The number the channel uses to id this PO shipment | [optional]
**shipmentType** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentType**](ShipmentType.md) |  | [optional]
**shippedDate** | **\DateTime** | When the shipment was shipped | [optional]
**estimatedDeliveryDate** | **\DateTime** | Estimated delivery time in the channel&#39;s warehouse | [optional]
**carrierName** | **string** | Name of the carrier | [optional]
**carrierShipmentNo** | **string** | The number the carrier uses to id this PO shipment | [optional]
**billOfLadingNumber** | **string** | Bill of Lading number (not unique for a shipment) | [optional]
**shipmentWeightUnitOfMeasure** | [**\FriendsOfCE\Merchant\ApiClient\Model\WeightUnitOfMeasure**](WeightUnitOfMeasure.md) |  | [optional]
**shipmentWeight** | **float** | The shipment&#39;s weight | [optional]
**shipmentVolumeUnitOfMeasure** | [**\FriendsOfCE\Merchant\ApiClient\Model\VolumeUnitOfMeasure**](VolumeUnitOfMeasure.md) |  | [optional]
**shipmentVolume** | **float** | The shipment&#39;s volume | [optional]
**lastMerchantUpdatedAt** | **\DateTime** | The last time the shipment was updated by the merchant | [optional]
**lastExportedAt** | **\DateTime** | The last time the shipment was exported to the channel | [optional]
**lastExportStatus** | [**\FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderRelatedItemExportStatus**](PurchaseOrderRelatedItemExportStatus.md) |  | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\IPurchaseOrderShipmentLineByFilter[]**](IPurchaseOrderShipmentLineByFilter.md) | The products in this PO shipment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
