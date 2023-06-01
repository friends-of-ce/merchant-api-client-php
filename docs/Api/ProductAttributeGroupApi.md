# FriendsOfCE\Merchant\ApiClient\ProductAttributeGroupApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productAttributeGroupAddProductExtraData()**](ProductAttributeGroupApi.md#productAttributeGroupAddProductExtraData) | **PUT** /v2/product-attribute-group/{groupName}/add | Adds multiple product extra data to product attribute group. |
| [**productAttributeGroupCreate()**](ProductAttributeGroupApi.md#productAttributeGroupCreate) | **POST** /v2/product-attribute-group | Create product attribute groups. |
| [**productAttributeGroupDelete()**](ProductAttributeGroupApi.md#productAttributeGroupDelete) | **DELETE** /v2/product-attribute-group/{groupName} | Delete product attribute group. |
| [**productAttributeGroupGetByFilter()**](ProductAttributeGroupApi.md#productAttributeGroupGetByFilter) | **GET** /v2/product-attribute-group | Get product attribute groups with the keys of all linked custom fields. |
| [**productAttributeGroupGetWithChannelsByFilter()**](ProductAttributeGroupApi.md#productAttributeGroupGetWithChannelsByFilter) | **GET** /v2/product-attribute-group/linked-channels | Get product attribute groups with linked channels. |
| [**productAttributeGroupRemoveProductExtraData()**](ProductAttributeGroupApi.md#productAttributeGroupRemoveProductExtraData) | **PUT** /v2/product-attribute-group/{groupName}/remove | Removes multiple product extra data from product attribute group. |
| [**productAttributeGroupRenameProductAttributeGroup()**](ProductAttributeGroupApi.md#productAttributeGroupRenameProductAttributeGroup) | **POST** /v2/product-attribute-group/rename | Renames multiple product attribute groups. |


## `productAttributeGroupAddProductExtraData()`

```php
productAttributeGroupAddProductExtraData($groupName, $addProductExtraDataRequests): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Adds multiple product extra data to product attribute group.

Only existing and not already added product extra data can be added.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = 'groupName_example'; // string | The group name of the product attribute group you wish to add product extra data.
$addProductExtraDataRequests = new \FriendsOfCE\Merchant\ApiClient\Model\AddProductExtraDataRequests(); // \FriendsOfCE\Merchant\ApiClient\Model\AddProductExtraDataRequests | Product extra data keys to be added.

try {
    $result = $apiInstance->productAttributeGroupAddProductExtraData($groupName, $addProductExtraDataRequests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeGroupApi->productAttributeGroupAddProductExtraData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupName** | **string**| The group name of the product attribute group you wish to add product extra data. | |
| **addProductExtraDataRequests** | [**\FriendsOfCE\Merchant\ApiClient\Model\AddProductExtraDataRequests**](../Model/AddProductExtraDataRequests.md)| Product extra data keys to be added. | [optional] |

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

## `productAttributeGroupCreate()`

```php
productAttributeGroupCreate($productAttributeGroupRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Create product attribute groups.

Create a product attribute groups based on group names.<br />Product attribute groups are linked with product extra data keys.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$productAttributeGroupRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\ProductAttributeGroupRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\ProductAttributeGroupRequest[] | Collection of product attribute groups with linked product extra data keys.

try {
    $result = $apiInstance->productAttributeGroupCreate($productAttributeGroupRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeGroupApi->productAttributeGroupCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **productAttributeGroupRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\ProductAttributeGroupRequest[]**](../Model/ProductAttributeGroupRequest.md)| Collection of product attribute groups with linked product extra data keys. | |

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

## `productAttributeGroupDelete()`

```php
productAttributeGroupDelete($groupName): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Delete product attribute group.

Delete a product attribute group based on group name.<br />Product attribute group can be deleted only if it has no channel linked.<br />Note that we do really delete a product attribute group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = 'groupName_example'; // string | The group name of the product attribute group you wish to delete.

try {
    $result = $apiInstance->productAttributeGroupDelete($groupName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeGroupApi->productAttributeGroupDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupName** | **string**| The group name of the product attribute group you wish to delete. | |

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

## `productAttributeGroupGetByFilter()`

```php
productAttributeGroupGetByFilter($groupNames, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse
```

Get product attribute groups with the keys of all linked custom fields.

Get product attribute group by filters, there is possible to filter by GroupName.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupNames = array('groupNames_example'); // string[]
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->productAttributeGroupGetByFilter($groupNames, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeGroupApi->productAttributeGroupGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupNames** | [**string[]**](../Model/string.md)|  | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse**](../Model/CollectionOfMerchantProductAttributeGroupWithProductExtraDataResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributeGroupGetWithChannelsByFilter()`

```php
productAttributeGroupGetWithChannelsByFilter($groupNames, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse
```

Get product attribute groups with linked channels.

Get product attribute group by filters, there is possible to filter by GroupName.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupNames = array('groupNames_example'); // string[]
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->productAttributeGroupGetWithChannelsByFilter($groupNames, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeGroupApi->productAttributeGroupGetWithChannelsByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupNames** | [**string[]**](../Model/string.md)|  | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse**](../Model/CollectionOfMerchantProductAttributeGroupWithLinkedChannelsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `productAttributeGroupRemoveProductExtraData()`

```php
productAttributeGroupRemoveProductExtraData($groupName, $removeProductExtraDataRequests): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Removes multiple product extra data from product attribute group.

Only existing product extra data can be removed.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$groupName = 'groupName_example'; // string | The group name of the product attribute group you wish to remove product extra data.
$removeProductExtraDataRequests = new \FriendsOfCE\Merchant\ApiClient\Model\RemoveProductExtraDataRequests(); // \FriendsOfCE\Merchant\ApiClient\Model\RemoveProductExtraDataRequests | Product extra data keys to be removed.

try {
    $result = $apiInstance->productAttributeGroupRemoveProductExtraData($groupName, $removeProductExtraDataRequests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeGroupApi->productAttributeGroupRemoveProductExtraData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **groupName** | **string**| The group name of the product attribute group you wish to remove product extra data. | |
| **removeProductExtraDataRequests** | [**\FriendsOfCE\Merchant\ApiClient\Model\RemoveProductExtraDataRequests**](../Model/RemoveProductExtraDataRequests.md)| Product extra data keys to be removed. | [optional] |

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

## `productAttributeGroupRenameProductAttributeGroup()`

```php
productAttributeGroupRenameProductAttributeGroup($renameProductAttributeGroupRequests): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Renames multiple product attribute groups.

Renames existing product attribute groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributeGroupApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$renameProductAttributeGroupRequests = array(new \FriendsOfCE\Merchant\ApiClient\Model\RenameProductAttributeGroupRequests()); // \FriendsOfCE\Merchant\ApiClient\Model\RenameProductAttributeGroupRequests[] | List of old and new product attribute group names.

try {
    $result = $apiInstance->productAttributeGroupRenameProductAttributeGroup($renameProductAttributeGroupRequests);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductAttributeGroupApi->productAttributeGroupRenameProductAttributeGroup: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **renameProductAttributeGroupRequests** | [**\FriendsOfCE\Merchant\ApiClient\Model\RenameProductAttributeGroupRequests[]**](../Model/RenameProductAttributeGroupRequests.md)| List of old and new product attribute group names. | [optional] |

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
