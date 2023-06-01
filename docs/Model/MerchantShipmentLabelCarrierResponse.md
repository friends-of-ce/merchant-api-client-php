# # MerchantShipmentLabelCarrierResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The channel&#39;s name for the shipping label carrier | [optional]
**code** | **string** | The channel&#39;s code for the shipping label carrier | [optional]
**restrictions** | **string** | Optional. Any restrictions on this carriers, e.g. weight and/or dimensions | [optional]
**price** | **float** | Optional. Price for this shipping label | [optional]
**recommendation** | [**\FriendsOfCE\Merchant\ApiClient\Model\ChannelCarrierRecommendationApi**](ChannelCarrierRecommendationApi.md) |  | [optional]
**collectionMethod** | [**\FriendsOfCE\Merchant\ApiClient\Model\ChannelCarrierCollectionMethodApi**](ChannelCarrierCollectionMethodApi.md) |  | [optional]
**handoverDateTime** | **\DateTime** | Optional. When to handover the package to the carrier  It is in the ISO format including the timezone offset.  E.g. 2020-10-03T18:00:00+02:00  which is 3rd Oct 2020, at 18:00 PM in Amsterdam (Summer Time aka CEST: UTC +2:00 ) | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
