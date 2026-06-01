# FriendsOfCE\Merchant\ApiClient\TargetsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**targetsCreateTargets()**](TargetsApi.md#targetsCreateTargets) | **POST** /v2/targets | Creates multiple targets |
| [**targetsDeleteTargets()**](TargetsApi.md#targetsDeleteTargets) | **DELETE** /v2/targets | Deletes multiple targets |
| [**targetsEditTargets()**](TargetsApi.md#targetsEditTargets) | **PUT** /v2/targets | Edits multiple targets |


## `targetsCreateTargets()`

```php
targetsCreateTargets($createEditTargetRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfListOfTargetResponseVm
```

Creates multiple targets

Creates multiple targets on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createEditTargetRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\CreateEditTargetRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\CreateEditTargetRequest[]

try {
    $result = $apiInstance->targetsCreateTargets($createEditTargetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->targetsCreateTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createEditTargetRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\CreateEditTargetRequest[]**](../Model/CreateEditTargetRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfListOfTargetResponseVm**](../Model/SingleOfListOfTargetResponseVm.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `targetsDeleteTargets()`

```php
targetsDeleteTargets($deleteTargetRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfDeleteTargetsResponse
```

Deletes multiple targets

Deletes multiple targets on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$deleteTargetRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\DeleteTargetRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\DeleteTargetRequest[]

try {
    $result = $apiInstance->targetsDeleteTargets($deleteTargetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->targetsDeleteTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **deleteTargetRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\DeleteTargetRequest[]**](../Model/DeleteTargetRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfDeleteTargetsResponse**](../Model/SingleOfDeleteTargetsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `targetsEditTargets()`

```php
targetsEditTargets($createEditTargetRequest): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfListOfTargetResponseVm
```

Edits multiple targets

Edits multiple targets on ChannelEngine.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\TargetsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createEditTargetRequest = array(new \FriendsOfCE\Merchant\ApiClient\Model\CreateEditTargetRequest()); // \FriendsOfCE\Merchant\ApiClient\Model\CreateEditTargetRequest[]

try {
    $result = $apiInstance->targetsEditTargets($createEditTargetRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TargetsApi->targetsEditTargets: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createEditTargetRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\CreateEditTargetRequest[]**](../Model/CreateEditTargetRequest.md)|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfListOfTargetResponseVm**](../Model/SingleOfListOfTargetResponseVm.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
