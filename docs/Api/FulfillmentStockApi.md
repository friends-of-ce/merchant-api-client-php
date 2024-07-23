# FriendsOfCE\Merchant\ApiClient\FulfillmentStockApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**fulfillmentStockGetFulfillementStockWithStockLocations()**](FulfillmentStockApi.md#fulfillmentStockGetFulfillementStockWithStockLocations) | **GET** /v2/fulfillmentstock | Gets product stock across all warehouses with stock locations |


## `fulfillmentStockGetFulfillementStockWithStockLocations()`

```php
fulfillmentStockGetFulfillementStockWithStockLocations($merchantProductNos, $pageIndex, $pageSize): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantFulfillmentStockStockLocationsResponse
```

Gets product stock across all warehouses with stock locations

Gets the stocks. The warehouses must be set up as stock locations on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\FulfillmentStockApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductNos = array('merchantProductNos_example'); // string[] | List of your products' MerchantProductNo's.
$pageIndex = 56; // int | A page index to get the items (starts from 0)
$pageSize = 56; // int | Number of items to return (default 100)

try {
    $result = $apiInstance->fulfillmentStockGetFulfillementStockWithStockLocations($merchantProductNos, $pageIndex, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FulfillmentStockApi->fulfillmentStockGetFulfillementStockWithStockLocations: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductNos** | [**string[]**](../Model/string.md)| List of your products&#39; MerchantProductNo&#39;s. | [optional] |
| **pageIndex** | **int**| A page index to get the items (starts from 0) | [optional] |
| **pageSize** | **int**| Number of items to return (default 100) | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantFulfillmentStockStockLocationsResponse**](../Model/CollectionOfMerchantFulfillmentStockStockLocationsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
