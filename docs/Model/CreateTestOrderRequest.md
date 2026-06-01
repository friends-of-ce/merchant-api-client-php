# # CreateTestOrderRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**channelId** | **int** |  |
**currencyCode** | **string** |  |
**cocNo** | **string** |  | [optional]
**vatNo** | **string** |  | [optional]
**shippingCostsInclVat** | **float** |  | [optional]
**email** | **string** |  | [optional]
**phone** | **string** |  | [optional]
**channelCustomerNo** | **string** |  | [optional]
**channelOrderNo** | **string** |  | [optional]
**commercialOrderNo** | **string** |  | [optional]
**isFulfillmentByMarketplace** | **bool** |  |
**channelShipmentNo** | **string** |  | [optional]
**billingAddress** | [**\FriendsOfCE\Merchant\ApiClient\Model\SupportOrderAddress**](SupportOrderAddress.md) |  | [optional]
**shippingAddress** | [**\FriendsOfCE\Merchant\ApiClient\Model\SupportOrderAddress**](SupportOrderAddress.md) |  | [optional]
**paymentMethod** | **string** |  | [optional]
**extraData** | [**\FriendsOfCE\Merchant\ApiClient\Model\CreateTestExtraDataLine[]**](CreateTestExtraDataLine.md) |  | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\CreateTestOrderLine[]**](CreateTestOrderLine.md) |  | [optional]
**salesChannelPluginInfoId** | **int** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
