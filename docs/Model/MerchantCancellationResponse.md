# # MerchantCancellationResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique cancellation identifier used by ChannelEngine. | [optional]
**merchantCancellationNo** | **string** | The unique cancellation reference used by the Merchant (sku). |
**merchantOrderNo** | **string** | The unique order reference used by the Merchant. |
**channelOrderNo** | **string** | The unique order reference used by the Channel. | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantCancellationLineResponse[]**](MerchantCancellationLineResponse.md) |  |
**createdAt** | **\DateTime** | The date at which the cancellation was created in ChannelEngine. | [optional]
**reason** | **string** | Reason for cancellation (text). | [optional]
**reasonCode** | [**\FriendsOfCE\Merchant\ApiClient\Model\MancoReason**](MancoReason.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
