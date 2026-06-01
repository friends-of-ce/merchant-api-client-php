# FriendsOfCE\Merchant\ApiClient\CancellationsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**cancellationCreate()**](CancellationsApi.md#cancellationCreate) | **POST** /v2/cancellations | Creates a cancelation |
| [**cancellationGetForMerchant()**](CancellationsApi.md#cancellationGetForMerchant) | **GET** /v2/cancellations/merchant | Gets cancelations |
| [**cancellationMarkExportAsFailed()**](CancellationsApi.md#cancellationMarkExportAsFailed) | **POST** /v2/cancellations/mark-export-as-failed |  |


## `cancellationCreate()`

```php
cancellationCreate($merchantCancellationRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Creates a cancelation

Marks an order as fully or partially canceled based on order line and quantity input.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CancellationsApi(
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
    echo 'Exception when calling CancellationsApi->cancellationCreate: ', $e->getMessage(), PHP_EOL;
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
cancellationGetForMerchant($createdSince, $createdTo, $updatedSince, $updatedTo, $channelOrderNos, $merchantOrderNos, $merchantCancellationNos, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantCancellationResponse
```

Gets cancelations

Gets cancelations based on their creation date.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$createdSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the cancellation in ChannelEngine, starting from this date. This date is inclusive.
$createdTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the cancellation in ChannelEngine, until this date. This date is exclusive.
$updatedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the cancellation in ChannelEngine, starting from this date. This date is inclusive.
$updatedTo = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the cancellation in ChannelEngine, until this date. This date is exclusive.
$channelOrderNos = array('channelOrderNos_example'); // string[] | List of Channel Order Numbers to filter the cancellations on.
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | List of Merchant Order Numbers to filter the cancellations on.
$merchantCancellationNos = array('merchantCancellationNos_example'); // string[] | List of Merchant Cancellation Numbers to filter the cancellations on.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->cancellationGetForMerchant($createdSince, $createdTo, $updatedSince, $updatedTo, $channelOrderNos, $merchantOrderNos, $merchantCancellationNos, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationsApi->cancellationGetForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **createdSince** | **\DateTime**| Filter on the create date of the cancellation in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **createdTo** | **\DateTime**| Filter on the create date of the cancellation in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **updatedSince** | **\DateTime**| Filter on the update date of the cancellation in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **updatedTo** | **\DateTime**| Filter on the update date of the cancellation in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| List of Channel Order Numbers to filter the cancellations on. | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| List of Merchant Order Numbers to filter the cancellations on. | [optional] |
| **merchantCancellationNos** | [**string[]**](../Model/string.md)| List of Merchant Cancellation Numbers to filter the cancellations on. | [optional] |
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

## `cancellationMarkExportAsFailed()`

```php
cancellationMarkExportAsFailed($bulkMerchantMarkExportAsFailedForCancellationsRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```



### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\CancellationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkMerchantMarkExportAsFailedForCancellationsRequest = new \FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantMarkExportAsFailedForCancellationsRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantMarkExportAsFailedForCancellationsRequest

try {
    $result = $apiInstance->cancellationMarkExportAsFailed($bulkMerchantMarkExportAsFailedForCancellationsRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CancellationsApi->cancellationMarkExportAsFailed: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulkMerchantMarkExportAsFailedForCancellationsRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantMarkExportAsFailedForCancellationsRequest**](../Model/BulkMerchantMarkExportAsFailedForCancellationsRequest.md)|  | [optional] |

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
