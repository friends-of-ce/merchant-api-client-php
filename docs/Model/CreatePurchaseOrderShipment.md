# # CreatePurchaseOrderShipment

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantShipmentNo** | **string** | The number the merchant uses to identify this PO shipment | [optional]
**carrierShipmentNo** | **string** | The field is also known as PRO number is a unique number assigned by the carrier.  It is used to identify and track the shipment that goes out for delivery.  This field is mandatory for US, CA, MX shipment confirmations of Amazon Vendor | [optional]
**channelShipmentNo** | **string** |  | [optional]
**billOfLadingNo** | **string** | Bill Of Lading (BOL) number is the unique number assigned by the vendor. The BOL present in the Shipment Confirmation message ideally matches the paper BOL provided with the shipment, but that is no must. Instead of BOL, an alternative reference number (like Delivery Note Number) for the shipment can also be sent in this field. | [optional]
**shipmentType** | **string** | Size/structure of the shipment | [optional]
**transportationMode** | **string** | Transportation mode for the shipment | [optional]
**carrierName** | **string** | Name of the carrier | [optional]
**shipmentDate** | **\DateTime** | When the shipment will be/was shipped | [optional]
**estimatedDeliveryDate** | **\DateTime** | Estimated delivery time in the channel&#39;s warehouse | [optional]
**sellingPartyId** | **string** | The merchant&#39;s identifying &#39;selling party number&#39; at the channel (also used as ship from party) | [optional]
**shipFromPartyId** | **string** | The source&#39;s &#39;ship from party&#39; number at the channel | [optional]
**shipToPartyId** | **string** | The destination&#39;s &#39;ship to party&#39; number at the channel | [optional]
**dimensions** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentDimensions**](ShipmentDimensions.md) |  | [optional]
**weight** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentWeight**](ShipmentWeight.md) |  | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderShipmentLine[]**](PurchaseOrderShipmentLine.md) | Hierarchical shipment lines representing pallets, cartons, and items.  Structure can be: Pallet-&gt;Carton-&gt;Item, Pallet-&gt;Item, or Carton-&gt;Item | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
