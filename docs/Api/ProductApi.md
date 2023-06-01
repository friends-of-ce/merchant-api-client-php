# FriendsOfCE\Merchant\ApiClient\ProductApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productBulkDelete()**](ProductApi.md#productBulkDelete) | **POST** /v2/products/bulkdelete | Delete multiple Products. |
| [**productBulkPatch()**](ProductApi.md#productBulkPatch) | **PATCH** /v2/products | Bulk Patch Products |
| [**productBulkPatchExtraDataItems()**](ProductApi.md#productBulkPatchExtraDataItems) | **PATCH** /v2/products/extra-data/bulk | Add/Update/Delete product extra data items. |
| [**productCreate()**](ProductApi.md#productCreate) | **POST** /v2/products | Upsert Products. |
| [**productDelete()**](ProductApi.md#productDelete) | **DELETE** /v2/products/{merchantProductNo} | Delete Product. |
| [**productGetByFilter()**](ProductApi.md#productGetByFilter) | **GET** /v2/products | Get Products. |
| [**productGetByMerchantProductNo()**](ProductApi.md#productGetByMerchantProductNo) | **GET** /v2/products/{merchantProductNo} | Get Product. |
| [**productPatch()**](ProductApi.md#productPatch) | **PATCH** /v2/products/{merchantProductNo} | Patch product |
| [**productPatchExtraDataItems()**](ProductApi.md#productPatchExtraDataItems) | **PATCH** /v2/products/extra-data | Add/Update/Delete a product&#39;s extra data items |


## `productBulkDelete()`

```php
productBulkDelete($requestBody): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Delete multiple Products.

Delete the products based on the merchant references.<br />Note that we do not really delete products, as the products<br />might still be referenced by orders. Therefore, the references<br />used for these products cannot be reused. We do however deactivate the products<br />which means that they will not be sent to channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
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
    echo 'Exception when calling ProductApi->productBulkDelete: ', $e->getMessage(), PHP_EOL;
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

Bulk Patch Products

This endpoint allows you to update multiple fields on a multiple products.<br />Products sent in a request can only be updated for the fields listed in object 'PropertiesToUpdate'. <br />In other words, you specify which products you want to update and which fields should be updated for all products.<br /><br />Sample request:<br /><br /> PATCH /v2/products<br /> {<br /> \"PropertiesToUpdate\": [<br /> \"name\",<br /> \"description\"<br /> ],<br /> \"MerchantProductRequestModels\": [<br /> {<br /> \"MerchantProductNo\": \"testMerchantProductNo\",<br /> \"Name\": \"testName\",<br /> \"Description\": \"testDescription\",<br /> },<br /> {<br /> \"MerchantProductNo\": \"testMerchantProductNo2\",<br /> \"Name\": \"testName3\",<br /> \"Description\": \"testDescription1\",<br /> }<br /> ]<br /> }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$patchMerchantProductDto = new \FriendsOfCE\Merchant\ApiClient\Model\PatchMerchantProductDto(); // \FriendsOfCE\Merchant\ApiClient\Model\PatchMerchantProductDto | 1) PropertiesToUpdate: Fields to update<br />2) MerchantProductRequestModels: Products to be updated

try {
    $result = $apiInstance->productBulkPatch($patchMerchantProductDto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productBulkPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **patchMerchantProductDto** | [**\FriendsOfCE\Merchant\ApiClient\Model\PatchMerchantProductDto**](../Model/PatchMerchantProductDto.md)| 1) PropertiesToUpdate: Fields to update&lt;br /&gt;2) MerchantProductRequestModels: Products to be updated | [optional] |

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

Add/Update/Delete product extra data items.

Add/Update/Delete product extra data items. This endpoint allows you to add, update or delete single datas on multiple products using operations,<br />without having to supply the other product information.<br /> <br />The supplied MerchantProductNo's need to be unique.<br /><br /> <br />ExtraData generated by our translation service are ignored and cannot be updated.<br /><br />Sample request:<br /> <br /> PATCH /v2/products/extra-data/bulk<br /> [<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"add\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> },<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"replace\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> },<br /> {<br /> \"Op\": \"add\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> }<br /> ]<br /> <br />Adding ExtraData:<br /><br /> PATCH /v2/products/extra-data/bulk<br /> [<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"add\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> },<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"add\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> }<br /> ]<br /> <br />Updating ExtraData:<br /><br /> PATCH /v2/products/extra-data/bulk<br /> [<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"replace\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> },<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"replace\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> }<br /> ]<br /> <br />Removing ExtraData with key:<br /><br /> PATCH /v2/products/extra-data/bulk<br /> [<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"remove\",<br /> \"Key\": \"{Key}\"<br /> }<br /> ]<br /> },<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"remove\",<br /> \"Key\": \"{Key}\"<br /> }<br /> ]<br /> }<br /> ]

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
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
    echo 'Exception when calling ProductApi->productBulkPatchExtraDataItems: ', $e->getMessage(), PHP_EOL;
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
productCreate($merchantProductRequest, $ignoreStock): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfProductCreationResult
```

Upsert Products.

Upsert (update or create) products. The parent serves as the 'base' product of the children.<br />For example, the children could be different sizes or colors of the parent product.<br />For channels where every size and color are different products this does not make any difference<br />(the children will just be sent separately, while ignoring the parent).<br />But there are channels where the parent and the children need to be sent together, for example<br />when there is one product with a list of sizes. In this case all the product information is retrieved<br />from the parent product while the size list is generated from the children.<br /> <br />Note that the parent itself is a 'blueprint' of the child products and we do our best to make sure it<br />does not end up on the marketplaces itself. Only the children can be purchased.<br /> <br />It's not possible to nest parent and children more than one level (A parent can have many children,<br />but any child cannot itself also have children).<br /> <br />For creating a new product the supplied MerchantProductNo should be unique and not exist on any product.<br />For updating the product, product with supplied MerchantProductNo should exist.<br /> <br />When \"ignoreStock\" query string parameter is set to \"true\", stock will not be updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantProductRequest[]
$ignoreStock = false; // bool

try {
    $result = $apiInstance->productCreate($merchantProductRequest, $ignoreStock);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductRequest[]**](../Model/MerchantProductRequest.md)|  | |
| **ignoreStock** | **bool**|  | [optional] [default to false] |

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

Delete Product.

Delete a product based on the merchant reference.<br />Note that we do not really delete a product, as the product<br />might still be referenced by orders etc. Therefore, the references<br />used for this product cannot be reused. We do however deactivate the product<br />which means that it will not be sent to channels.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
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
    echo 'Exception when calling ProductApi->productDelete: ', $e->getMessage(), PHP_EOL;
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

## `productGetByFilter()`

```php
productGetByFilter($search, $eanList, $merchantProductNoList, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductResponse
```

Get Products.

Retrieve all products.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$search = 'search_example'; // string | Search product(s) by Name, MerchantProductNo, Ean or Brand<br />This search is applied to the result after applying the other filters.
$eanList = array('eanList_example'); // string[] | Search products by submitting a list of EAN's.
$merchantProductNoList = array('merchantProductNoList_example'); // string[] | Search products by submitting a list of MerchantProductNo's.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->productGetByFilter($search, $eanList, $merchantProductNoList, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **search** | **string**| Search product(s) by Name, MerchantProductNo, Ean or Brand&lt;br /&gt;This search is applied to the result after applying the other filters. | [optional] |
| **eanList** | [**string[]**](../Model/string.md)| Search products by submitting a list of EAN&#39;s. | [optional] |
| **merchantProductNoList** | [**string[]**](../Model/string.md)| Search products by submitting a list of MerchantProductNo&#39;s. | [optional] |
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

Get Product.

Retrieve a product based on the merchant reference.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
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
    echo 'Exception when calling ProductApi->productGetByMerchantProductNo: ', $e->getMessage(), PHP_EOL;
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

Patch product

Patch products. This endpoint allows you to update single fields on a product using patch operations,<br />without having to supply the other product information.<br /><br />The format of this endpoint is a JsonPatchDocument. Examples of how this format works can be found here:<br />http://jsonpatch.com/<br /> <br />It's not possible to nest parent and children more than one level (A parent can have many children,<br />but any child cannot itself also have children).<br /> <br />The supplied MerchantProductNo needs to be unique.<br /><br /> <br />ExtraData used as translations is ignored and cannot be changed.<br /><br />Sample request:<br /> <br /> PATCH /v2/products/{merchantProductNo}<br /> {<br /> \"value\": \"Value\",<br /> \"path\": \"Name\",<br /> \"op\": \"replace\"<br /> }<br /> <br />Adding ExtraData:<br /><br /> PATCH /v2/products/{merchantProductNo}<br /> {<br /> \"value\": {\"key\": \"Key1\", \"value\": \"value1\"},<br /> \"path\": \"extraData/0\",<br /> \"op\": \"add\"<br /> }<br /> <br />Replacing ExtraData (will replace entire ExtraData collection):<br /><br /> PATCH /v2/products/{merchantProductNo}<br /> {<br /> \"value\": [{\"key\": \"Key1\", \"value\": \"value1\"}],<br /> \"path\": \"extraData\",<br /> \"op\": \"replace\"<br /> }<br /> <br />Removing all ExtraData:<br /><br /> PATCH /v2/products/{merchantProductNo}<br /> {<br /> \"path\": \"extraData\",<br /> \"op\": \"replace\"<br /> }<br /> <br /> Or:<br /> <br /> PATCH /v2/products/{merchantProductNo}<br /> {<br /> \"path\": \"extraData\",<br /> \"op\": \"remove\"<br /> }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantProductNo = 'merchantProductNo_example'; // string | The MerchantProductNo of the product you wish to patch
$operation = array(new \FriendsOfCE\Merchant\ApiClient\Model\Operation()); // \FriendsOfCE\Merchant\ApiClient\Model\Operation[] | The JsonPatchDocument providing the operations you wish to perform on the product. <br /> Value contains the value you wish to set on the property you're updating (used with operations \"add\" and \"replace\").<br /> Path contains the path to the property you're updating (e.g. Description). Every property in the model used for creation an updating can be used.<br /> Op contains the operation you wish to perform (\"add\",\"replace\",\"remove\").<br /> From is only used when using the \"move\" operation. It refers to the source path of the value to be moved.

try {
    $result = $apiInstance->productPatch($merchantProductNo, $operation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productPatch: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantProductNo** | **string**| The MerchantProductNo of the product you wish to patch | |
| **operation** | [**\FriendsOfCE\Merchant\ApiClient\Model\Operation[]**](../Model/Operation.md)| The JsonPatchDocument providing the operations you wish to perform on the product. &lt;br /&gt; Value contains the value you wish to set on the property you&#39;re updating (used with operations \&quot;add\&quot; and \&quot;replace\&quot;).&lt;br /&gt; Path contains the path to the property you&#39;re updating (e.g. Description). Every property in the model used for creation an updating can be used.&lt;br /&gt; Op contains the operation you wish to perform (\&quot;add\&quot;,\&quot;replace\&quot;,\&quot;remove\&quot;).&lt;br /&gt; From is only used when using the \&quot;move\&quot; operation. It refers to the source path of the value to be moved. | [optional] |

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

Add/Update/Delete a product's extra data items

Add/Update/Delete product extra data items. This endpoint allows you to Add, update or delete extra data on a product using the patch operation,<br />without having to supply the other product information.<br /> <br />ExtraData generated by our translation service are ignored and cannot be updated.<br /><br />Sample request:<br /> <br /> PATCH /v2/products/extra-data<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"add\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> }<br /> <br />Adding ExtraData:<br /><br /> PATCH /v2/products/extra-data<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"add\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> }<br /> <br />Updating ExtraData:<br /><br /> PATCH /v2/products/extra-data<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"replace\",<br /> \"Key\": \"{Key}\",<br /> \"Value\": \"{Value}\"<br /> }<br /> ]<br /> }<br /> <br />Removing ExtraData with key:<br /><br /> PATCH /v2/products/extra-data<br /> {<br /> \"MerchantProductNo\": \"{merchantProductNo}\",<br /> \"Operations\": [<br /> {<br /> \"Op\": \"remove\",<br /> \"Key\": \"{Key}\",<br /> }<br /> ]<br /> }

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductApi(
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
    echo 'Exception when calling ProductApi->productPatchExtraDataItems: ', $e->getMessage(), PHP_EOL;
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
