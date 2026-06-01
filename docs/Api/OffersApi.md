# FriendsOfCE\Merchant\ApiClient\OffersApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**offerDeleteProductLevelStockLimits()**](OffersApi.md#offerDeleteProductLevelStockLimits) | **DELETE** /v2/offer/{channelId}/product-level-stock-limitations | Remove product-level stock limitations for a specific channel. |
| [**offerGetProductLevelStockLimits()**](OffersApi.md#offerGetProductLevelStockLimits) | **GET** /v2/offer/{channelId}/product-level-stock-limitations | Get product-level stock limitations for a specific channel. |
| [**offerGetStock()**](OffersApi.md#offerGetStock) | **GET** /v2/offer/stock | Gets product stock across all warehouses |
| [**offerPostProductLevelStockLimits()**](OffersApi.md#offerPostProductLevelStockLimits) | **POST** /v2/offer/{channelId}/product-level-stock-limitations | Sets product-level stock limitations for a specific channel. |
| [**offerStockPriceUpdate()**](OffersApi.md#offerStockPriceUpdate) | **PUT** /v2/offer | Updates stock and price |
| [**offerStockUpdate()**](OffersApi.md#offerStockUpdate) | **PUT** /v2/offer/stock | Updates stock |


## `offerDeleteProductLevelStockLimits()`

```php
offerDeleteProductLevelStockLimits($channelId, $merchantProductsStockLevelLimitsDeleteRequest): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductsStockLevelsResponse
```

Remove product-level stock limitations for a specific channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int
$merchantProductsStockLevelLimitsDeleteRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductsStockLevelLimitsDeleteRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductsStockLevelLimitsDeleteRequest

try {
    $result = $apiInstance->offerDeleteProductLevelStockLimits($channelId, $merchantProductsStockLevelLimitsDeleteRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerDeleteProductLevelStockLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelId** | **int**|  | |
| **merchantProductsStockLevelLimitsDeleteRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductsStockLevelLimitsDeleteRequest**](../Model/MerchantProductsStockLevelLimitsDeleteRequest.md)|  | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductsStockLevelsResponse**](../Model/CollectionOfMerchantProductsStockLevelsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerGetProductLevelStockLimits()`

```php
offerGetProductLevelStockLimits($channelId, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductLevelStockLimitsResponse
```

Get product-level stock limitations for a specific channel.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->offerGetProductLevelStockLimits($channelId, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerGetProductLevelStockLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelId** | **int**|  | |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductLevelStockLimitsResponse**](../Model/CollectionOfMerchantProductLevelStockLimitsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerGetStock()`

```php
offerGetStock($stockLocationIds, $skus, $pageIndex, $pageSize): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse
```

Gets product stock across all warehouses

Gets the stock available in the warehouses. The warehouses must be set up as stock locations on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockLocationIds = array(56); // int[] | The ChannelEngine id of the stock location(s).
$skus = array('skus_example'); // string[] | List of your products' sku's.
$pageIndex = 56; // int | A page index to get the items (starts from 0)
$pageSize = 56; // int | Number of items to return (default 100)

try {
    $result = $apiInstance->offerGetStock($stockLocationIds, $skus, $pageIndex, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerGetStock: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockLocationIds** | [**int[]**](../Model/int.md)| The ChannelEngine id of the stock location(s). | |
| **skus** | [**string[]**](../Model/string.md)| List of your products&#39; sku&#39;s. | [optional] |
| **pageIndex** | **int**| A page index to get the items (starts from 0) | [optional] |
| **pageSize** | **int**| Number of items to return (default 100) | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantOfferGetStockResponse**](../Model/CollectionOfMerchantOfferGetStockResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerPostProductLevelStockLimits()`

```php
offerPostProductLevelStockLimits($channelId, $merchantProductsStockLevelLimitsPersistRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfMerchantProductsStockLevelsResponse
```

Sets product-level stock limitations for a specific channel.

If stock limitations are defined at the channel level for a specific channel, the stock location will be omitted from the request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int
$merchantProductsStockLevelLimitsPersistRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductsStockLevelLimitsPersistRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductsStockLevelLimitsPersistRequest

try {
    $result = $apiInstance->offerPostProductLevelStockLimits($channelId, $merchantProductsStockLevelLimitsPersistRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerPostProductLevelStockLimits: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelId** | **int**|  | |
| **merchantProductsStockLevelLimitsPersistRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductsStockLevelLimitsPersistRequest**](../Model/MerchantProductsStockLevelLimitsPersistRequest.md)|  | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfMerchantProductsStockLevelsResponse**](../Model/SingleOfMerchantProductsStockLevelsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerStockPriceUpdate()`

```php
offerStockPriceUpdate($merchantStockPriceUpdateRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString
```

Updates stock and price

Updates product stock and price.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantStockPriceUpdateRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[] | References to the products that should be updated, and the new values <br />for the stock or price fields. It is possible to supply only one of the two fields <br />or both.

try {
    $result = $apiInstance->offerStockPriceUpdate($merchantStockPriceUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerStockPriceUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantStockPriceUpdateRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantStockPriceUpdateRequest[]**](../Model/MerchantStockPriceUpdateRequest.md)| References to the products that should be updated, and the new values &lt;br /&gt;for the stock or price fields. It is possible to supply only one of the two fields &lt;br /&gt;or both. | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString**](../Model/SingleOfDictionaryOfStringAndListOfString.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `offerStockUpdate()`

```php
offerStockUpdate($merchantOfferStockUpdateRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString
```

Updates stock

Updates product stock.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OffersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOfferStockUpdateRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\MerchantOfferStockUpdateRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantOfferStockUpdateRequest[] | References to the new values for the stock fields.

try {
    $result = $apiInstance->offerStockUpdate($merchantOfferStockUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OffersApi->offerStockUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOfferStockUpdateRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOfferStockUpdateRequest[]**](../Model/MerchantOfferStockUpdateRequest.md)| References to the new values for the stock fields. | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfDictionaryOfStringAndListOfString**](../Model/SingleOfDictionaryOfStringAndListOfString.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
