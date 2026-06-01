# # MerchantSingleOrderReturnResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantOrderNo** | **string** | The unique order reference used by the Merchant. | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantSingleOrderReturnLineResponse[]**](MerchantSingleOrderReturnLineResponse.md) |  | [optional]
**createdAt** | **\DateTime** | The date at which the return was created in ChannelEngine. | [optional]
**updatedAt** | **\DateTime** | The date at which the return was last modified in ChannelEngine. | [optional]
**merchantReturnNo** | **string** | The unique return reference used by the Merchant, will be empty in case of a channel or unacknowledged return. | [optional]
**channelReturnNo** | **string** | The unique return reference used by the Channel, will be empty in case of a merchant return. | [optional]
**channelId** | **int** | The id of the channel. | [optional]
**globalChannelId** | **int** | The id of the Global Channel. | [optional]
**globalChannelName** | **string** | The name of the Global Channel. | [optional]
**status** | **string** | The current status of the return. | [optional]
**method** | **string** | Method of the return. | [optional]
**trackTraceNo** | **string** | Track Trace No of the return. | [optional]
**trackTraceUrl** | **string** | Track Trace URL of the return. | [optional]
**id** | **int** | The unique return reference used by ChannelEngine. | [optional]
**reason** | **string** | The reason code of the return. | [optional]
**customerComment** | **string** | Optional. Comment of customer on the (reason of) the return. | [optional]
**merchantComment** | **string** | Optional. Comment of merchant on the return. | [optional]
**refundInclVat** | **float** | Refund amount incl. VAT. | [optional]
**refundExclVat** | **float** | Refund amount excl. VAT. | [optional]
**returnDate** | **\DateTime** | The date at which the return was originally created in the source system (if available). | [optional]
**extraData** | **array<string,string>** | Extra data on the return. Each item must have an unqiue key | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
