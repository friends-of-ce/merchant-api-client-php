# FriendsOfCE\Merchant\ApiClient\CompetitionPricesApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**competitionPricesGetBuyBoxPrices()**](CompetitionPricesApi.md#competitionPricesGetBuyBoxPrices) | **GET** /v2/competitionprices/buyboxprices | Gets the price from the buy box winner |


## `competitionPricesGetBuyBoxPrices()`

```php
competitionPricesGetBuyBoxPrices($channelId, $gtinList, $skuList, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice
```

Gets the price from the buy box winner

Gets the current price of the buy box winner per product for a marketplace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CompetitionPricesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | The id of the channel
$gtinList = array('gtinList_example'); // string[] | Search products by submitting a list of GTIN's. (optional)<br />Max. 2000.
$skuList = array('skuList_example'); // string[] | Search products by submitting a list of Sku's. (optional)<br />Max. 2000. If GtinList is already set, this one is ignored.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->competitionPricesGetBuyBoxPrices($channelId, $gtinList, $skuList, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompetitionPricesApi->competitionPricesGetBuyBoxPrices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelId** | **int**| The id of the channel | [optional] |
| **gtinList** | [**string[]**](../Model/string.md)| Search products by submitting a list of GTIN&#39;s. (optional)&lt;br /&gt;Max. 2000. | [optional] |
| **skuList** | [**string[]**](../Model/string.md)| Search products by submitting a list of Sku&#39;s. (optional)&lt;br /&gt;Max. 2000. If GtinList is already set, this one is ignored. | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductWithBuyBoxPrice**](../Model/CollectionOfMerchantProductWithBuyBoxPrice.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
