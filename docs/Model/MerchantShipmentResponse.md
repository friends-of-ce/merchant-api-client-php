# # MerchantShipmentResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantShipmentNo** | **string** | The unique shipment reference used by the Merchant. |
**merchantOrderNo** | **string** | The unique order reference used by the Merchant. | [optional]
**channelShipmentNo** | **string** | The unique shipment reference used by the Channel. | [optional]
**channelOrderNo** | **string** | The unique order reference used by the Channel. | [optional]
**channelId** | **int** | The unique ID of the channel for this specific environment/account. | [optional]
**globalChannelId** | **int** | The unique ID of the channel across all of ChannelEngine. | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentLineResponse[]**](MerchantShipmentLineResponse.md) |  | [optional]
**createdAt** | **\DateTime** | The date at which the shipment was created in ChannelEngine. | [optional]
**updatedAt** | **\DateTime** | The date at which the shipment was last modified in ChannelEngine. | [optional]
**extraData** | **array<string,string>** | Extra data on the order. Each item must have an unqiue key | [optional]
**trackTraceNo** | **string** | The unique shipping reference used by the Shipping carrier (track&amp;trace number). | [optional]
**trackTraceUrl** | **string** | A link to a page of the carrier where the customer can track the shipping of her package. | [optional]
**returnTrackTraceNo** | **string** | The unique return shipping reference that may be used by the Shipping carrier (track &amp; trace number) if the shipment is returned. | [optional]
**method** | **string** | Shipment method: the carrier used for shipping the package. E.g. DHL, postNL. | [optional]
**shippedFromCountryCode** | **string** | The code of the country from where the package is being shipped. | [optional]
**shippedFromStockLocationId** | **int** | The id of the stock location where you ship the package from | [optional]
**shipmentDate** | **\DateTime** | The date at which the shipment was originally created in the source system (if available). | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
