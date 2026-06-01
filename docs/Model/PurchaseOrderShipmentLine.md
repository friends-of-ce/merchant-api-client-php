# # PurchaseOrderShipmentLine

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | Type of the line: ITEM, CARTON, or PALLET |
**identifierType** | **string** | Type of identifier used (SSCC, SKU, GTIN) |
**identifierValue** | **string** | The identifier value (either SSCC, SKU, or GTIN) |
**layersPerPallet** | **int** | Number of layers per pallet. Only allowed but optional when Type&#x3D;PALLET | [optional]
**itemsPerLayer** | **int** | Number of items per layer. Only allowed but optional when Type&#x3D;PALLET.  Could refer to number of cartons or number of items (if not in carton). | [optional]
**dimensions** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentDimensions**](ShipmentDimensions.md) |  | [optional]
**weight** | [**\FriendsOfCE\Merchant\ApiClient\Model\ShipmentWeight**](ShipmentWeight.md) |  | [optional]
**quantity** | **int** | Quantity of items. Only allowed and required when Type&#x3D;ITEM | [optional]
**quantityUnitOfMeasure** | **string** | Unit of measure for quantity. Required when Type&#x3D;ITEM | [optional]
**unitsPerCase** | **int** | Number of units per case. Only allowed and required when QuantityUnitOfMeasure&#x3D;CASE | [optional]
**channelPurchaseOrderNo** | **string** | Channel&#39;s purchase order number. Only allowed and required when Type&#x3D;ITEM | [optional]
**lotNo** | **string** | Lot number for the item. Only allowed when Type&#x3D;ITEM | [optional]
**expiryDate** | **\DateTime** | Expiry date for perishable products. Only allowed when Type&#x3D;ITEM | [optional]
**handlingCode** | **string** | Handling code for special handling instructions | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderShipmentLine[]**](PurchaseOrderShipmentLine.md) | Nested lines for hierarchical structure.  For PALLET: can contain CARTON or ITEM lines  For CARTON: can contain ITEM lines  For ITEM: should be empty | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
