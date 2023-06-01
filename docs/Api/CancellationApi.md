# FriendsOfCE\Merchant\ApiClient\CancellationApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancellationCreate()**](CancellationApi.md#cancellationCreate) | **POST** /v2/cancellations | Create Cancellation. |
| [**cancellationGetForMerchant()**](CancellationApi.md#cancellationGetForMerchant) | **GET** /v2/cancellations/merchant | Get Cancellations. |


## `cancellationCreate()`

```php
cancellationCreate($merchantCancellationRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Create Cancellation.

Mark (part of) an order as cancelled.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CancellationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantCancellationRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantCancellationRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantCancellationRequest

try {
    $result = $apiInstance->cancellationCreate($merchantCancellationRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantCancellationRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantCancellationRequest**](../Model/MerchantCancellationRequest.md)|  | [optional] |

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

## `cancellationGetForMerchant()`

```php
cancellationGetForMerchant($createdSince, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantCancellationResponse
```

Get Cancellations.

Gets cancellations created since the supplied date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CancellationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createdSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the cancellation in ChannelEngine, starting from this date. This date is inclusive.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->cancellationGetForMerchant($createdSince, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationApi->cancellationGetForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createdSince** | **\DateTime**| Filter on the create date of the cancellation in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantCancellationResponse**](../Model/CollectionOfMerchantCancellationResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
