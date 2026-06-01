# FriendsOfCE\Merchant\ApiClient\ProductsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productBulkDelete()**](ProductsApi.md#productBulkDelete) | **POST** /v2/products/bulkdelete | Deletes products |
| [**productBulkPatch()**](ProductsApi.md#productBulkPatch) | **PATCH** /v2/products | Updates products attributes |
| [**productBulkPatchExtraDataItems()**](ProductsApi.md#productBulkPatchExtraDataItems) | **PATCH** /v2/products/extra-data/bulk | Adds, updates, or deletes custom attributes |
| [**productCreate()**](ProductsApi.md#productCreate) | **POST** /v2/products | Updates or creates products |
| [**productDelete()**](ProductsApi.md#productDelete) | **DELETE** /v2/products/{merchantProductNo} | Deletes a product |
| [**productFreeze()**](ProductsApi.md#productFreeze) | **POST** /v2/products/freeze | Updates selected products and sets them either to frozen or not-frozen status. |
| [**productGetByFilter()**](ProductsApi.md#productGetByFilter) | **GET** /v2/products | Gets products |
| [**productGetByMerchantProductNo()**](ProductsApi.md#productGetByMerchantProductNo) | **GET** /v2/products/{merchantProductNo} | Gets a product |
| [**productPatch()**](ProductsApi.md#productPatch) | **PATCH** /v2/products/{merchantProductNo} | Updates product attributes |
| [**productPatchExtraDataItems()**](ProductsApi.md#productPatchExtraDataItems) | **PATCH** /v2/products/extra-data | Adds, updates, or deletes a custom attribute |
| [**productV21Create()**](ProductsApi.md#productV21Create) | **POST** /v2.1/products | [CLOSED BETA - AUTHORIZED USERS ONLY] Create or update a product |
| [**productV21Delete()**](ProductsApi.md#productV21Delete) | **DELETE** /v2.1/products | [CLOSED BETA - AUTHORIZED USERS ONLY] Delete a product |
| [**productV21Patch()**](ProductsApi.md#productV21Patch) | **PATCH** /v2.1/products | [CLOSED BETA - AUTHORIZED USERS ONLY] Update part of a product |


## `productBulkDelete()`

```php
productBulkDelete($requestBody): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Deletes products

Deletes a products based on the **Merchant product number**. <br /> <br />**NB:** ChannelEngine deactivates but does not delete the products entirely, as they might be still referenced in orders. <br />Therefore, the references used for these products cannot be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$requestBody = array('requestBody_example'); // string[] | The list of MerchantProductNo of the products you wish to delete.

try {
    $result = $apiInstance->productBulkDelete($requestBody);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productBulkDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **requestBody** | [**string[]**](../Model/string.md)| The list of MerchantProductNo of the products you wish to delete. | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkPatch()`

```php
productBulkPatch($patchMerchantProductDto): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult
```

Updates products attributes

Updates specific attributes of product data. You can update single or multiple attributes for one or multiple products. <br />You can also add custom attributes via this endpoint. The format of this endpoint is JSON Patch. <br />Products are updated for the fields listed in the array **PropertiesToUpdate**: <br />[name, <br />description, <br />details, <br />brand, <br />size, <br />color, <br />ean, <br />groupno **or** ParentMerchantProductNo, <br />groupno2 **or** ParentMerchantProductNo2, <br />type, <br />merchantproductno, <br />manufacturerproductnumber, (vendorproductno) <br />stock, <br />price, <br />listprice **or** MSRP, <br />purchaseprice, <br />minprice, <br />maxprice, <br />discountrate, <br />vatrate, <br />margin, <br />shippingcost, <br />shippingtime, <br />url, <br />imageurl, <br />extraimageurl1, <br />extraimageurl2, <br />extraimageurl3, <br />extraimageurl4, <br />extraimageurl5, <br />extraimageurl6, <br />extraimageurl7, <br />extraimageurl8, <br />extraimageurl9, <br />categoryid, <br />vatratetype, <br />segment] <br /> <br />Sample request: <br /><pre> <br />PATCH /v2/products <br />{ <br /> \"PropertiesToUpdate\": [ <br /> \"name\", <br /> \"description\" <br /> ], <br /> \"MerchantProductRequestModels\": [ <br /> { <br /> \"MerchantProductNo\": \"testMerchantProductNo\", <br /> \"Name\": \"testName\", <br /> \"Description\": \"testDescription\", <br /> }, <br /> { <br /> \"MerchantProductNo\": \"testMerchantProductNo2\", <br /> \"Name\": \"testName3\", <br /> \"Description\": \"testDescription1\", <br /> } <br /> ] <br />} <br /></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patchMerchantProductDto = new \FriendsOfCE\Merchant\ApiClient\Model\PatchMerchantProductDto(); // \FriendsOfCE\Merchant\ApiClient\Model\PatchMerchantProductDto | 1) PropertiesToUpdate: Fields to update <br />2) MerchantProductRequestModels: Products to be updated

try {
    $result = $apiInstance->productBulkPatch($patchMerchantProductDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productBulkPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patchMerchantProductDto** | [**\FriendsOfCE\Merchant\ApiClient\Model\PatchMerchantProductDto**](../Model/PatchMerchantProductDto.md)| 1) PropertiesToUpdate: Fields to update &lt;br /&gt;2) MerchantProductRequestModels: Products to be updated | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult**](../Model/SingleOfProductCreationResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productBulkPatchExtraDataItems()`

```php
productBulkPatchExtraDataItems($merchantProductExtraDataRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult
```

Adds, updates, or deletes custom attributes

Adds, updates, or deletes the custom attributes (a.k.a. extra data keys) for multiple products. <br />You can update single or multiple attributes for one or multiple products. The format of this endpoint is [JSON Patch](http://jsonpatch.com/). <br /> <br />**NB:** the **Merchant product number** must be unique. <br /> <br />Sample request: <br /><pre> <br />PATCH /v2/products/extra-data/bulk <br />[ <br /> { <br /> \"MerchantProductNo\": \"{merchantProductNo}\", <br /> \"Operations\": [ <br /> { <br /> \"Op\": \"add\", <br /> \"Key\": \"{Key}\", <br /> \"Value\": \"{Value}\" <br /> } <br /> ] <br /> }, <br /> { <br /> \"MerchantProductNo\": \"{merchantProductNo}\", <br /> \"Operations\": [ <br /> { <br /> \"Op\": \"replace\", <br /> \"Key\": \"{Key}\", <br /> \"Value\": \"{Value}\" <br /> }, <br /> { <br /> \"Op\": \"add\", <br /> \"Key\": \"{Key}\", <br /> \"Value\": \"{Value}\" <br /> } <br /> ] <br /> }, <br /> { <br /> \"MerchantProductNo\": \"{merchantProductNo}\", <br /> \"Operations\": [ <br /> { <br /> \"Op\": \"remove\", <br /> \"Key\": \"{Key}\", <br /> \"Value\": \"{Value}\" <br /> } <br /> ] <br /> } <br /> ] <br /></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductExtraDataRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductExtraDataRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductExtraDataRequest[]

try {
    $result = $apiInstance->productBulkPatchExtraDataItems($merchantProductExtraDataRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productBulkPatchExtraDataItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductExtraDataRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductExtraDataRequest[]**](../Model/MerchantProductExtraDataRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult**](../Model/SingleOfProductCreationResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productCreate()`

```php
productCreate($merchantProductRequest, $ignoreStock, $ignorePrice): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult
```

Updates or creates products

Updates or creates products. The endpoint is purge and replace. <br />If you do not include an attribute, it is overwritten with null. <br />Extra data arrays are not effected by purge and replace, and remain unchanged. <br />To exclude stock from the update, set the **Ignore stock** attribute to **true**. <br />To exclude price from the update, set the **Ignore price** attribute to **true**. <br /> <br />**NB:** the **Merchant product number** must be unique.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductRequest[]
$ignoreStock = false; // bool
$ignorePrice = false; // bool

try {
    $result = $apiInstance->productCreate($merchantProductRequest, $ignoreStock, $ignorePrice);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductRequest[]**](../Model/MerchantProductRequest.md)|  | |
| **ignoreStock** | **bool**|  | [optional] [default to false] |
| **ignorePrice** | **bool**|  | [optional] [default to false] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult**](../Model/SingleOfProductCreationResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productDelete()`

```php
productDelete($merchantProductNo): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Deletes a product

Deletes a product based on the **Merchant product number**. <br /> <br />**NB:** ChannelEngine deactivates but does not delete the product entirely, as it might be still referenced in orders. <br />Therefore, the references used for this product cannot be reused.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductNo = 'merchantProductNo_example'; // string | The MerchantProductNo of the product you wish to delete.

try {
    $result = $apiInstance->productDelete($merchantProductNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductNo** | **string**| The MerchantProductNo of the product you wish to delete. | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productFreeze()`

```php
productFreeze($freezeProductRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfApiResponse
```

Updates selected products and sets them either to frozen or not-frozen status.

Changes state of products by updating it with FREEZE or UNFREEZE state. <br />All fields are required.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$freezeProductRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\FreezeProductRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\FreezeProductRequest[]

try {
    $result = $apiInstance->productFreeze($freezeProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productFreeze: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **freezeProductRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\FreezeProductRequest[]**](../Model/FreezeProductRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfApiResponse**](../Model/SingleOfApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetByFilter()`

```php
productGetByFilter($search, $eanList, $merchantProductNoList, $pageSize, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductResponse
```

Gets products

Retrieve all products. Apply available filters to narrow down your search.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
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
    $result = $apiInstance->productGetByFilter($search, $eanList, $merchantProductNoList, $pageSize, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productGetByFilter: ', $e->getMessage(), PHP_EOL;
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

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductResponse**](../Model/CollectionOfMerchantProductResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productGetByMerchantProductNo()`

```php
productGetByMerchantProductNo($merchantProductNo): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfMerchantProductResponse
```

Gets a product

Retrieves a product based on the **Merchant product number**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductNo = 'merchantProductNo_example'; // string | The unique product reference used by the Merchant (sku).

try {
    $result = $apiInstance->productGetByMerchantProductNo($merchantProductNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productGetByMerchantProductNo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductNo** | **string**| The unique product reference used by the Merchant (sku). | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfMerchantProductResponse**](../Model/SingleOfMerchantProductResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productPatch()`

```php
productPatch($merchantProductNo, $operation): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult
```

Updates product attributes

Updates specific attributes of a single product based on the **Merchant product number**. The endpoint uses the [JSON Patch](http://jsonpatch.com/). <br /> <br />Sample request: <br /><pre> <br /> PATCH /v2/products/{merchantProductNo} <br /> { <br /> \"value\": \"Value\", <br /> \"path\": \"Name\", <br /> \"op\": \"replace\" <br /> } <br /></pre> <br />For adding, removing or replacing ExtraData, use PATCH v2/Products/extra-data endpoint

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductNo = 'merchantProductNo_example'; // string | The MerchantProductNo of the product you wish to patch
$operation = array(new \FriendsOfCE\Merchant\ApiClient\Model\Operation()); // \FriendsOfCE\Merchant\ApiClient\Model\Operation[] | The JsonPatchDocument providing the operations you wish to perform on the product. <br /> Value contains the value you wish to set on the property you're updating (used with operations \"add\" and \"replace\"). <br /> Path contains the path to the property you're updating (e.g. Description). Every property in the model used for creation an updating can be used. <br /> Op contains the operation you wish to perform (\"add\",\"replace\",\"remove\"). <br /> From is only used when using the \"move\" operation. It refers to the source path of the value to be moved.

try {
    $result = $apiInstance->productPatch($merchantProductNo, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductNo** | **string**| The MerchantProductNo of the product you wish to patch | |
| **operation** | [**\FriendsOfCE\Merchant\ApiClient\Model\Operation[]**](../Model/Operation.md)| The JsonPatchDocument providing the operations you wish to perform on the product. &lt;br /&gt; Value contains the value you wish to set on the property you&#39;re updating (used with operations \&quot;add\&quot; and \&quot;replace\&quot;). &lt;br /&gt; Path contains the path to the property you&#39;re updating (e.g. Description). Every property in the model used for creation an updating can be used. &lt;br /&gt; Op contains the operation you wish to perform (\&quot;add\&quot;,\&quot;replace\&quot;,\&quot;remove\&quot;). &lt;br /&gt; From is only used when using the \&quot;move\&quot; operation. It refers to the source path of the value to be moved. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult**](../Model/SingleOfProductCreationResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productPatchExtraDataItems()`

```php
productPatchExtraDataItems($merchantProductExtraDataRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult
```

Adds, updates, or deletes a custom attribute

Adds, updates, or deletes the specific custom attribute (a.k.a. extra data key) for a single product. <br />You can update a single attribute for a product. The format of this endpoint is [JSON Patch](http://jsonpatch.com/). <br /> <br />**NB:** the **Merchant product number** must be unique. <br /> <br />Sample requests: <br /> <br />Adding ExtraData: <br /><pre> <br /> PATCH /v2/products/extra-data <br /> { <br /> \"MerchantProductNo\": \"{merchantProductNo}\", <br /> \"Operations\": [ <br /> { <br /> \"Op\": \"add\", <br /> \"Key\": \"{Key}\", <br /> \"Value\": \"{Value}\" <br /> } <br /> ] <br /> } <br /> </pre> <br />Updating ExtraData: <br /><pre> <br /> PATCH /v2/products/extra-data <br /> { <br /> \"MerchantProductNo\": \"{merchantProductNo}\", <br /> \"Operations\": [ <br /> { <br /> \"Op\": \"replace\", <br /> \"Key\": \"{Key}\", <br /> \"Value\": \"{Value}\" <br /> } <br /> ] <br /> } <br /></pre> <br />Removing ExtraData with key: <br /><pre> <br /> PATCH /v2/products/extra-data <br /> { <br /> \"MerchantProductNo\": \"{merchantProductNo}\", <br /> \"Operations\": [ <br /> { <br /> \"Op\": \"remove\", <br /> \"Key\": \"{Key}\", <br /> } <br /> ] <br /> } <br /></pre>

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductExtraDataRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductExtraDataRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductExtraDataRequest

try {
    $result = $apiInstance->productPatchExtraDataItems($merchantProductExtraDataRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productPatchExtraDataItems: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductExtraDataRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductExtraDataRequest**](../Model/MerchantProductExtraDataRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult**](../Model/SingleOfProductCreationResult.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productV21Create()`

```php
productV21Create($singleMerchantUpsertProductRequest): \FriendsOfCE\Merchant\ApiClient\Model\AsyncApiResponse
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Create or update a product

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Creates or updates a product <br />This update call is a purge and replace call, meaning the full product will get overwritten with the new payload. <br />For creates, it is obligated to use MERCHANT_PRODUCT_NO as the identifier.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantUpsertProductRequest = {"IdentifierType":"MERCHANT_PRODUCT_NO","Model":{"ProductIdentifier":"sku123","Name":"My fantastic product","Description":"This is a great product!","Details":"A beautiful product!","Brand":"My brand","Size":"L","Color":"Blue","Gtin":"1845678901001","ParentMerchantProductNo":null,"GrandParentMerchantProductNo":null,"ManufacturerProductNo":"vpn123","Price":100.0,"Msrp":124.49,"PurchasePrice":70.0,"MinPrice":99.0,"MaxPrice":150.0,"VatRateType":"STANDARD","ShippingCost":9.99,"ShippingTime":"Overnight","Url":"https://www.myshop.com/product/sku123","ImageUrl":"https://www.myshop.com/product/sku123/image.jpg","ExtraImageUrl1":null,"ExtraImageUrl2":null,"ExtraImageUrl3":null,"ExtraImageUrl4":null,"ExtraImageUrl5":null,"ExtraImageUrl6":null,"ExtraImageUrl7":null,"ExtraImageUrl8":null,"ExtraImageUrl9":null,"CategoryTrail":"RootCategory > SubCategory > ProductCategory","Segment":null,"ExtraData":{"MyCustomAttribute1":{"Value":"MyCustomValue"}}}}; // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantUpsertProductRequest | The product data to upsert

try {
    $result = $apiInstance->productV21Create($singleMerchantUpsertProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productV21Create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantUpsertProductRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantUpsertProductRequest**](../Model/SingleMerchantUpsertProductRequest.md)| The product data to upsert | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\AsyncApiResponse**](../Model/AsyncApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productV21Delete()`

```php
productV21Delete($asyncApiProductIdentifierType, $productIdentifier): \FriendsOfCE\Merchant\ApiClient\Model\AsyncApiResponse
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Delete a product

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Delete a product. <br />This update call is a delete call, meaning the product will be deleted.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$asyncApiProductIdentifierType = 'asyncApiProductIdentifierType_example'; // string | The type of identifier to use
$productIdentifier = 'productIdentifier_example'; // string | The identifier of the product

try {
    $result = $apiInstance->productV21Delete($asyncApiProductIdentifierType, $productIdentifier);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productV21Delete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **asyncApiProductIdentifierType** | **string**| The type of identifier to use | [optional] |
| **productIdentifier** | **string**| The identifier of the product | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\AsyncApiResponse**](../Model/AsyncApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productV21Patch()`

```php
productV21Patch($singleMerchantPatchProductRequest): \FriendsOfCE\Merchant\ApiClient\Model\AsyncApiResponse
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Update part of a product

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Update part of the product data. <br />This update call is a patch call, meaning only the provided product updates are being applied.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantPatchProductRequest = {"IdentifierType":"MERCHANT_PRODUCT_NO","Model":{"ProductIdentifier":"sku123","Operations":[{"value":"S","path":"/Size","op":"add"}]}}; // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantPatchProductRequest | The product updates to be made

try {
    $result = $apiInstance->productV21Patch($singleMerchantPatchProductRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductsApi->productV21Patch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantPatchProductRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantPatchProductRequest**](../Model/SingleMerchantPatchProductRequest.md)| The product updates to be made | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\AsyncApiResponse**](../Model/AsyncApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
