# FriendsOfCE\Merchant\ApiClient\ListedProductsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**listedProductGetByFilter()**](ListedProductsApi.md#listedProductGetByFilter) | **GET** /v2/channels/{channelId}/products | Get Listed Products |


## `listedProductGetByFilter()`

```php
listedProductGetByFilter($channelId, $merchantProductNos, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfChannelListedProductResponse
```

Get Listed Products

Gets the status of products listed for channel (export status) and on a channel (channel status).<br />Includes products that were previously deleted from but are now set to be created again.<br />In response most common identifiers are provided, like Ean, MerchantProductNo (sku)<br />and also ChannelProductNo which is unique product reference used by the Channel.<br />Note: not all channels provide adequate options to retrieve the status on the channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ListedProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | The id of a channel
$merchantProductNos = array('merchantProductNos_example'); // string[] | The unique product references used by the Merchant (SKUs)
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->listedProductGetByFilter($channelId, $merchantProductNos, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ListedProductsApi->listedProductGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelId** | **int**| The id of a channel | |
| **merchantProductNos** | [**string[]**](../Model/string.md)| The unique product references used by the Merchant (SKUs) | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfChannelListedProductResponse**](../Model/CollectionOfChannelListedProductResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
