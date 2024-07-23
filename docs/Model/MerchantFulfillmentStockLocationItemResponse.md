# # MerchantFulfillmentStockLocationItemResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The ChannelEngine id of the stock location. | [optional]
**name** | **string** | The ChannelEngine name of the stock location. | [optional]
**reservedQuantity** | **int** | Total quantity reserved for orders. | [optional]
**availableQuantity** | **int** | The quantity that is available for fulfillment orders. | [optional]
**allocatedQuantity** | **int** | Quantity pending customer order | [optional]
**inTransitQuantity** | **int** | Quantity in transit / &#39;transshipment&#39; (Amazon) | [optional]
**fulfillmentCenterProcessingQuantity** | **int** | Quantity that is in processing at the fulfillment warehouse (center) | [optional]
**defectiveQuantity** | **int** | The number of units in defective disposition. | [optional]
**expiredQuantity** | **int** | The number of units in expired disposition. | [optional]
**warehouseDamagedQuantity** | **int** | The number of units in warehouse damaged disposition. | [optional]
**customerDamagedQuantity** | **int** | The number of units in customer damaged disposition. | [optional]
**carrierDamagedQuantity** | **int** | The number of units in carrier damaged disposition. | [optional]
**pendingPickupQuantity** | **int** | The number of units in pending pickup disposition. | [optional]
**inboundQuantity** | **int** | Total quantity that is inbound (in inbound [aka fulfillment] shipment from the seller to the fulfillment warehouse) | [optional]
**returnQuantity** | **int** | Total quantity in on going returns | [optional]
**researchingQuantity** | **int** | Quantity that is being researched | [optional]
**updatedAt** | **\DateTime** | The timestamp of the last stock update for the stock location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
