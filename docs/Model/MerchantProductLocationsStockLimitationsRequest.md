# # MerchantProductLocationsStockLimitationsRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**stockBuffer** | **int** | Value should be null or positive.  If null then stock limit has to be set. | [optional]
**stockLimit** | **int** | Value should be null or positive.  If null then stock buffer has to be set. | [optional]
**stockLocationId** | **int** | If provided, then the limit or buffer is set for the provided stock location,  otherwise we get the default stock location. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
