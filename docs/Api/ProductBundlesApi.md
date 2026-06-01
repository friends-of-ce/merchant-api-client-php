# FriendsOfCE\Merchant\ApiClient\ProductBundlesApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productBundleCreate()**](ProductBundlesApi.md#productBundleCreate) | **POST** /v2/productbundles | Create product bundles |
| [**productBundleGetByFilter()**](ProductBundlesApi.md#productBundleGetByFilter) | **GET** /v2/productbundles | Gets product bundles |
| [**productBundleUpdate()**](ProductBundlesApi.md#productBundleUpdate) | **PUT** /v2/productbundles | Update product bundles |


## `productBundleCreate()`

```php
productBundleCreate($merchantProductBundleRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfBulkResultFromBaseResponse
```

Create product bundles

Create product bundles in bulk. <br />The structure of product bundle cannot be changed in the future.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductBundleRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductBundleRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductBundleRequest[]

try {
    $result = $apiInstance->productBundleCreate($merchantProductBundleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundlesApi->productBundleCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductBundleRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductBundleRequest[]**](../Model/MerchantProductBundleRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfBulkResultFromBaseResponse**](../Model/SingleOfBulkResultFromBaseResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBundleGetByFilter()`

```php
productBundleGetByFilter($search, $eanList, $merchantProductNoList, $pageSize, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductBundleResponse
```

Gets product bundles

Gets the product bundle details.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search product(s) by Name, MerchantProductNo, Ean or Brand <br />This search is applied to the result after applying the other filters.
$eanList = array('eanList_example'); // string[] | Search products by submitting a list of EAN's.
$merchantProductNoList = array('merchantProductNoList_example'); // string[] | Search products by submitting a list of MerchantProductNo's.
$pageSize = 56; // int | Optional - amount of products returned, if not provided return all products
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->productBundleGetByFilter($search, $eanList, $merchantProductNoList, $pageSize, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundlesApi->productBundleGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search product(s) by Name, MerchantProductNo, Ean or Brand &lt;br /&gt;This search is applied to the result after applying the other filters. | [optional] |
| **eanList** | [**string[]**](../Model/string.md)| Search products by submitting a list of EAN&#39;s. | [optional] |
| **merchantProductNoList** | [**string[]**](../Model/string.md)| Search products by submitting a list of MerchantProductNo&#39;s. | [optional] |
| **pageSize** | **int**| Optional - amount of products returned, if not provided return all products | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductBundleResponse**](../Model/CollectionOfMerchantProductBundleResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBundleUpdate()`

```php
productBundleUpdate($merchantUpdateProductBundleRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfBulkResultFromBaseResponse
```

Update product bundles

Update product bundles in bulk. <br />The structure of product bundle cannot be changed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductBundlesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantUpdateProductBundleRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\MerchantUpdateProductBundleRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantUpdateProductBundleRequest[]

try {
    $result = $apiInstance->productBundleUpdate($merchantUpdateProductBundleRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductBundlesApi->productBundleUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantUpdateProductBundleRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantUpdateProductBundleRequest[]**](../Model/MerchantUpdateProductBundleRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfBulkResultFromBaseResponse**](../Model/SingleOfBulkResultFromBaseResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
