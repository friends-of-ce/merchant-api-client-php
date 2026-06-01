# FriendsOfCE\Merchant\ApiClient\CustomFieldsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**customFieldsDeleteCustomFields()**](CustomFieldsApi.md#customFieldsDeleteCustomFields) | **DELETE** /v2/custom-fields | Delete custom fields by a given list of custom field ids (product extra data ids) |
| [**customFieldsGetCustomFields()**](CustomFieldsApi.md#customFieldsGetCustomFields) | **GET** /v2/custom-fields | Gets custom fields |


## `customFieldsDeleteCustomFields()`

```php
customFieldsDeleteCustomFields($customFieldsIds): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Delete custom fields by a given list of custom field ids (product extra data ids)

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customFieldsIds = array(56); // int[] | List of your custom fields Ids that you want to remove.

try {
    $result = $apiInstance->customFieldsDeleteCustomFields($customFieldsIds);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customFieldsDeleteCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customFieldsIds** | [**int[]**](../Model/int.md)| List of your custom fields Ids that you want to remove. | [optional] |

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

## `customFieldsGetCustomFields()`

```php
customFieldsGetCustomFields($pageIndex, $pageSize): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfCustomFieldResponse
```

Gets custom fields

Gets all custom fields in your ChannelEngine tenant, along with details on whether each field is public and actively in use.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CustomFieldsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$pageIndex = 56; // int | A page index to get the items (starts from 0)
$pageSize = 56; // int | Number of items to return (default 100)

try {
    $result = $apiInstance->customFieldsGetCustomFields($pageIndex, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomFieldsApi->customFieldsGetCustomFields: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **pageIndex** | **int**| A page index to get the items (starts from 0) | [optional] |
| **pageSize** | **int**| Number of items to return (default 100) | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfCustomFieldResponse**](../Model/CollectionOfCustomFieldResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
