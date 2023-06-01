# # MerchantReturnRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantOrderNo** | **string** | The unique order reference used by the Merchant (sku). |
**merchantReturnNo** | **string** | The unique return reference used by the Merchant (sku). |
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnLineRequest[]**](MerchantReturnLineRequest.md) |  |
**id** | **int** | The unique return reference used by ChannelEngine. | [optional]
**reason** | [**\FriendsOfCE\Merchant\ApiClient\Model\ReturnReason**](ReturnReason.md) |  | [optional]
**customerComment** | **string** | Optional. Comment of customer on the (reason of) the return. | [optional]
**merchantComment** | **string** | Optional. Comment of merchant on the return. | [optional]
**refundInclVat** | **float** | Refund amount incl. VAT. | [optional]
**refundExclVat** | **float** | Refund amount excl. VAT. | [optional]
**returnDate** | **\DateTime** | The date at which the return was originally created in the source system (if available). | [optional]
**extraData** | **array<string,string>** | Extra data on the return. Each item must have an unqiue key | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
