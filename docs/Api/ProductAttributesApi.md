# FriendsOfCE\Merchant\ApiClient\ProductAttributesApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**productAttributeGroupAddProductExtraData()**](ProductAttributesApi.md#productAttributeGroupAddProductExtraData) | **PUT** /v2/product-attribute-group/{groupName}/add | Adds custom attributes to a group |
| [**productAttributeGroupCreate()**](ProductAttributesApi.md#productAttributeGroupCreate) | **POST** /v2/product-attribute-group | Creates a custom attribute group |
| [**productAttributeGroupDelete()**](ProductAttributesApi.md#productAttributeGroupDelete) | **DELETE** /v2/product-attribute-group/{groupName} | Deletes a custom attribute group |
| [**productAttributeGroupGetByFilter()**](ProductAttributesApi.md#productAttributeGroupGetByFilter) | **GET** /v2/product-attribute-group | Gets custom attribute groups |
| [**productAttributeGroupGetWithChannelsByFilter()**](ProductAttributesApi.md#productAttributeGroupGetWithChannelsByFilter) | **GET** /v2/product-attribute-group/linked-channels | Gets custom attribute groups and linked marketplaces |
| [**productAttributeGroupRemoveProductExtraData()**](ProductAttributesApi.md#productAttributeGroupRemoveProductExtraData) | **PUT** /v2/product-attribute-group/{groupName}/remove | Deletes custom attributes from a group |
| [**productAttributeGroupRenameProductAttributeGroup()**](ProductAttributesApi.md#productAttributeGroupRenameProductAttributeGroup) | **POST** /v2/product-attribute-group/rename | Renames custom attribute groups |


## `productAttributeGroupAddProductExtraData()`

```php
productAttributeGroupAddProductExtraData($groupName, $addProductExtraDataRequests): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Adds custom attributes to a group

Adds the provided custom attributes (a.k.a. extra data keys) to the custom attribute group.<br />**NB:** you can only add existing custom attributes to a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributesApi(
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
    echo 'Exception when calling ProductAttributesApi->productAttributeGroupAddProductExtraData: ', $e->getMessage(), PHP_EOL;
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

Creates a custom attribute group

Creates a custom attribute group based on the set of custom attributes (a.k.a. extra data keys).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributesApi(
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
    echo 'Exception when calling ProductAttributesApi->productAttributeGroupCreate: ', $e->getMessage(), PHP_EOL;
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

Deletes a custom attribute group

Deletes the custom attribute group based on the **Group name** provided.<br />**NB:** you can only delete a custom attribute group that does not have any markeplaces (a.k.a. channels) linked to it.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributesApi(
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
    echo 'Exception when calling ProductAttributesApi->productAttributeGroupDelete: ', $e->getMessage(), PHP_EOL;
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

Gets custom attribute groups

Gets the custom attribute groups based on the **Group name** provided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributesApi(
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
    echo 'Exception when calling ProductAttributesApi->productAttributeGroupGetByFilter: ', $e->getMessage(), PHP_EOL;
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

Gets custom attribute groups and linked marketplaces

Gets all custom attribute groups and marketplaces (a.k.a. channels) linked to them.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributesApi(
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
    echo 'Exception when calling ProductAttributesApi->productAttributeGroupGetWithChannelsByFilter: ', $e->getMessage(), PHP_EOL;
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

Deletes custom attributes from a group

Removes the custom attributes (a.k.a. extra data keys) from the custom attribute group.<br />**NB:** you can only remove existing custom attributes from a group.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributesApi(
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
    echo 'Exception when calling ProductAttributesApi->productAttributeGroupRemoveProductExtraData: ', $e->getMessage(), PHP_EOL;
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

Renames custom attribute groups

Renames the custom attribute groups.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ProductAttributesApi(
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
    echo 'Exception when calling ProductAttributesApi->productAttributeGroupRenameProductAttributeGroup: ', $e->getMessage(), PHP_EOL;
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
