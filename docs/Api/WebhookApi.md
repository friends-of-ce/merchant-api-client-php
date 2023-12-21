# FriendsOfCE\Merchant\ApiClient\WebhookApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**webhooksCreate()**](WebhookApi.md#webhooksCreate) | **POST** /v2/webhooks | Creates a webhook |
| [**webhooksDelete()**](WebhookApi.md#webhooksDelete) | **DELETE** /v2/webhooks/{webhookName} | Deletes a webhook |
| [**webhooksGetAll()**](WebhookApi.md#webhooksGetAll) | **GET** /v2/webhooks | Gets webhooks |
| [**webhooksUpdate()**](WebhookApi.md#webhooksUpdate) | **PUT** /v2/webhooks | Updates a webhook |


## `webhooksCreate()`

```php
webhooksCreate($merchantWebhookRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Creates a webhook

Creates a webhook on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantWebhookRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantWebhookRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantWebhookRequest

try {
    $result = $apiInstance->webhooksCreate($merchantWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantWebhookRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantWebhookRequest**](../Model/MerchantWebhookRequest.md)|  | [optional] |

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

## `webhooksDelete()`

```php
webhooksDelete($webhookName): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Deletes a webhook

Deletes a webhook from ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhookName = 'webhookName_example'; // string | The unique name of a webhook you want to delete.

try {
    $result = $apiInstance->webhooksDelete($webhookName);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksDelete: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhookName** | **string**| The unique name of a webhook you want to delete. | |

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

## `webhooksGetAll()`

```php
webhooksGetAll(): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantWebhookResponse
```

Gets webhooks

Gets all webhooks created on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->webhooksGetAll();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksGetAll: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantWebhookResponse**](../Model/CollectionOfMerchantWebhookResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `webhooksUpdate()`

```php
webhooksUpdate($merchantWebhookRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Updates a webhook

Updates a webhook on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantWebhookRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantWebhookRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantWebhookRequest

try {
    $result = $apiInstance->webhooksUpdate($merchantWebhookRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->webhooksUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantWebhookRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantWebhookRequest**](../Model/MerchantWebhookRequest.md)|  | [optional] |

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
