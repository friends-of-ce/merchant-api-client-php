# # CreatePurchaseOrderShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**carrierShipmentNo** | **string** | The field is also known as PRO number is a unique number assigned by the carrier.  It is used to identify and track the shipment that goes out for delivery.  This field is mandatory for US, CA, MX shipment confirmations of Amazon Vendor | [optional]
**carrierName** | **string** | Name of the carrier | [optional]
**merchantShipmentNo** | **string** | The number the merchant uses to identify this PO shipment | [optional]
**shipmentType** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentType**](ShipmentType.md) |  | [optional]
**shippedDate** | **\DateTime** | When the shipment will be/was shipped | [optional]
**estimatedDeliveryDate** | **\DateTime** | Estimated delivery time in the channel&#39;s warehouse | [optional]
**sellingPartyId** | **string** | The merchant&#39;s identifying &#39;selling party number&#39; at the channel | [optional]
**shipToPartyId** | **string** | The destination&#39;s &#39;ship to party&#39; number at the channel | [optional]
**billOfLadingNumber** | **string** | Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field. | [optional]
**shipmentWeightUnitOfMeasure** | [**\FriendsOfCE\Merchant\ApiClient\Model\WeightUnitOfMeasure**](WeightUnitOfMeasure.md) |  | [optional]
**shipmentWeight** | **float** | The shipment&#39;s weight | [optional]
**shipmentVolumeUnitOfMeasure** | [**\FriendsOfCE\Merchant\ApiClient\Model\VolumeUnitOfMeasure**](VolumeUnitOfMeasure.md) |  | [optional]
**shipmentVolume** | **float** | The shipment&#39;s volume | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\ChangePurchaseOrderShipmentLine[]**](ChangePurchaseOrderShipmentLine.md) | Shipment information for each shipped product | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
