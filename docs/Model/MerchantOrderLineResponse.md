# # MerchantOrderLineResponse

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **int** | The unique identifier used by ChannelEngine. | [optional]
**channelOrderLineNo** | **string** | The order line reference used by the channel. | [optional]
**status** | [**\FriendsOfCE\Merchant\ApiClient\Model\OrderStatusView**](OrderStatusView.md) |  | [optional]
**isFulfillmentByMarketplace** | **bool** | Is the order fulfilled by the marketplace (amazon: FBA, bol: LVB, etc.)?. | [optional]
**gtin** | **string** | Either the GTIN (EAN, ISBN, UPC etc) provided by the channel, or the the GTIN belonging to the MerchantProductNo in ChannelEngine. | [optional]
**description** | **string** | The product description (or title) provided by the channel. | [optional]
**stockLocation** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantStockLocationResponse**](MerchantStockLocationResponse.md) |  | [optional]
**unitVat** | **float** | The total amount of VAT charged over the value of a single unit of the ordered product  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**lineTotalInclVat** | **float** | The total value of the order line (quantity * unit price) including VAT  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**lineVat** | **float** | The total amount of VAT charged over the total value of the order line (quantity * unit price)  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). | [optional]
**originalUnitPriceInclVat** | **float** | The value of a single unit of the ordered product including VAT  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalUnitVat** | **float** | The total amount of VAT charged over the value of a single unit of the ordered product  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalLineTotalInclVat** | **float** | The total value of the order line (quantity * unit price) including VAT  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalLineVat** | **float** | The total amount of VAT charged over the total value of the order line (quantity * unit price)  (in the currency in which the order was paid for, see CurrencyCode). | [optional]
**originalFeeFixed** | **float** | A percentage fee that is charged by the Channel for this orderline.  This fee rate is based on the currency of client  This field is optional, send 0 if not applicable. | [optional]
**bundleProductMerchantProductNo** | **string** | If the product is ordered part of a bundle, this field contains the MerchantProductNo of  the product bundle. | [optional]
**jurisCode** | **string** | State assigned code identifying the jurisdiction. | [optional]
**jurisName** | **string** | Name of a tax jurisdiction. | [optional]
**vatRate** | **float** | VAT rate of the orderline. | [optional]
**unitPriceExclVat** | **float** |  | [optional]
**lineTotalExclVat** | **float** |  | [optional]
**originalUnitPriceExclVat** | **float** |  | [optional]
**originalLineTotalExclVat** | **float** |  | [optional]
**extraData** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineExtraDataResponse[]**](MerchantOrderLineExtraDataResponse.md) |  | [optional]
**channelProductNo** | **string** | The unique product reference used by the channel. |
**merchantProductNo** | **string** | The unique product reference used by the merchant. | [optional]
**quantity** | **int** | The number of items of the product. |
**cancellationRequestedQuantity** | **int** | The number of items for which cancellation was requested by the customer.  Some channels allow a customer to cancel an order until it has been shipped.  When an order has already been acknowledged in ChannelEngine, it can only be cancelled by creating a cancellation.  Use this field to check whether it is still possible to cancel the order. If this is the case, submit a cancellation to ChannelEngine. | [optional]
**unitPriceInclVat** | **float** | The value of a single unit of the ordered product including VAT  (in the shop&#39;s base currency calculated using the exchange rate at the time of ordering). |
**feeFixed** | **float** | A fixed fee that is charged by the Channel for this orderline.  This fee rate is based on the currency of the Channel  This field is optional, send 0 if not applicable. | [optional]
**feeRate** | **float** | A percentage fee that is charged by the Channel for this orderline.  This field is optional, send 0 if not applicable. | [optional]
**condition** | [**\FriendsOfCE\Merchant\ApiClient\Model\Condition**](Condition.md) |  | [optional]
**expectedDeliveryDate** | **\DateTime** | Expected delivery date from channels, empty if channels not support this value | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
