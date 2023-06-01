# # MerchantStockPriceUpdateRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantProductNo** | **string** | The unique product reference used by the Merchant (sku). |
**stock** | **int** | The stock of the product. Should not be negative. | [optional]
**price** | **float** | The price of the product. Should not be negative. | [optional]
**stockLocationId** | **int** | The stock location id of updated stok.  If not provided stock from default stock location will be updated. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
