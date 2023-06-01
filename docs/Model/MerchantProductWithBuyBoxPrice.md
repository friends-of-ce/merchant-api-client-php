# # MerchantProductWithBuyBoxPrice

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**sku** | **string** | Product SKU number | [optional]
**gtin** | **string** | Product GTIN | [optional]
**buyBoxPrice** | **float** | Price of Buy box winner (excl. shipping cost)  Note: not all channels have a separate shipping cost field (e.g. bol.com), so can be the same as BuyBoxPriceInclShipping | [optional]
**buyBoxPriceInclShipping** | **float** | Price of Buy box winner (incl. shipping cost).  If null, then there is no data or no Buy box winner | [optional]
**isMerchantBuyBoxWinner** | **bool** | Are you the Buy box winner or not? | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
