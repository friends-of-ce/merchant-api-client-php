# # MerchantCreateRefund

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**orderIdentifier** | **string** |  | [optional]
**merchantRefundNo** | **string** |  | [optional]
**reason** | [**\FriendsOfCE\Merchant\ApiClient\Model\RefundReason**](RefundReason.md) |  | [optional]
**merchantComment** | **string** |  | [optional]
**additionalAmountInclTax** | **float** |  | [optional]
**shippingAmountInclTax** | **float** |  | [optional]
**refundDate** | **\DateTime** |  | [optional]
**extraData** | **array<string,string>** |  | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantCreateRefundLine[]**](MerchantCreateRefundLine.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
