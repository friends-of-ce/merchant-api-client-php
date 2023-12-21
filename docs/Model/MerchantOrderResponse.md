# # MerchantOrderResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier used by ChannelEngine. This identifier does  not have to be saved. It should only be used in a call to acknowledge the order. | [optional]
**channelName** | **string** | The name of the channel for this specific environment/account. | [optional]
**channelId** | **int** | The unique ID of the channel for this specific environment/account. | [optional]
**globalChannelName** | **string** | The name of the channel across all of ChannelEngine. | [optional]
**globalChannelId** | **int** | The unique ID of the channel across all of ChannelEngine. | [optional]
**channelOrderSupport** | [**\FriendsOfCE\Merchant\ApiClient\Model\OrderSupport**](OrderSupport.md) |  | [optional]
**channelOrderNo** | **string** | The order reference used by the channel.  This number is not guaranteed to be unique accross all orders,  because different channels can use the same order number format. | [optional]
**commercialOrderNo** | **string** | The order reference used by the channel for commercial purposes (e.g. on the invoice). Can be different from the ChannelOrderNo.  For example when the internal unique order reference is a unique id or guid, while the commercial order reference is (usually) a human readable reference that can be reused or used for multiple sellers by the channel. | [optional]
**merchantOrderNo** | **string** | The unique order reference used by the Merchant | [optional]
**status** | [**\FriendsOfCE\Merchant\ApiClient\Model\OrderStatusView**](OrderStatusView.md) |  | [optional]
**isBusinessOrder** | **bool** | Indicating whether the order is a business order. | [optional]
**acknowledgedDate** | **\DateTime** | The date the order was acknowledged in ChannelEngine. | [optional]
**createdAt** | **\DateTime** | The date the order was created in ChannelEngine. | [optional]
**updatedAt** | **\DateTime** | The date the order was last updated in ChannelEngine. | [optional]
**merchantComment** | **string** | The optional comment a merchant can add to an order. | [optional]
**billingAddress** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantAddressResponse**](MerchantAddressResponse.md) |  | [optional]
**shippingAddress** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantAddressResponse**](MerchantAddressResponse.md) |  | [optional]
**subTotalInclVat** | **float** | The total value of the order lines including VAT  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**subTotalVat** | **float** | The total amount of VAT charged over the order lines  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**shippingCostsVat** | **float** | The total amount of VAT charged over the shipping fee  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**totalInclVat** | **float** | The total value of the order including VAT  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**totalVat** | **float** | The total amount of VAT charged over the total value of te order  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**originalSubTotalInclVat** | **float** | The total value of the order lines including VAT  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalSubTotalVat** | **float** | The total amount of VAT charged over the order lines  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalShippingCostsInclVat** | **float** | The shipping fee including VAT  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalShippingCostsVat** | **float** | The total amount of VAT charged over the shipping fee  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalTotalInclVat** | **float** | The total value of the order including VAT  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalTotalVat** | **float** | The total amount of VAT charged over the total value of te order  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**subTotalExclVat** | **float** |  | [optional]
**totalExclVat** | **float** |  | [optional]
**shippingCostsExclVat** | **float** |  | [optional]
**originalSubTotalExclVat** | **float** |  | [optional]
**originalShippingCostsExclVat** | **float** |  | [optional]
**originalTotalExclVat** | **float** |  | [optional]
**lines** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineResponse[]**](MerchantOrderLineResponse.md) |  | [optional]
**shippingCostsInclVat** | **float** |  | [optional]
**phone** | **string** | The customer&#39;s telephone number. | [optional]
**email** | **string** | The customer&#39;s email. |
**languageCode** | **string** | The language of the order. Has to be a 2-letter ISO language code. | [optional]
**companyRegistrationNo** | **string** | Optional. A company&#39;s chamber of commerce number. | [optional]
**vatNo** | **string** | Optional. A company&#39;s VAT number. | [optional]
**paymentMethod** | **string** | The payment method used on the order. | [optional]
**paymentReferenceNo** | **string** | Reference or transaction id for the payment | [optional]
**currencyCode** | **string** | The currency code for the amounts of the order. |
**orderDate** | **\DateTime** | The date the order was created at the channel. |
**channelCustomerNo** | **string** | The unique customer reference used by the channel. | [optional]
**extraData** | **array<string,string>** | Extra data on the order. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
