# FriendsOfCE\Merchant\ApiClient\ReturnApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**returnAcknowledge()**](ReturnApi.md#returnAcknowledge) | **POST** /v2/returns/merchant/acknowledge | Acknowledge Return. |
| [**returnDeclareForMerchant()**](ReturnApi.md#returnDeclareForMerchant) | **POST** /v2/returns/merchant | Create Return. |
| [**returnGetByMerchantOrderNo()**](ReturnApi.md#returnGetByMerchantOrderNo) | **GET** /v2/returns/merchant/{merchantOrderNo} | Get Return. |
| [**returnGetDeclaredByChannel()**](ReturnApi.md#returnGetDeclaredByChannel) | **GET** /v2/returns/merchant | Get Returns. |
| [**returnGetReturns()**](ReturnApi.md#returnGetReturns) | **GET** /v2/returns | Get Returns. |
| [**returnGetUnhandled()**](ReturnApi.md#returnGetUnhandled) | **GET** /v2/returns/merchant/new | Get Unhandled Returns. |
| [**returnUpdateForMerchant()**](ReturnApi.md#returnUpdateForMerchant) | **PUT** /v2/returns | Mark a return as received. |


## `returnAcknowledge()`

```php
returnAcknowledge($merchantReturnAcknowledgeRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Acknowledge Return.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantReturnAcknowledgeRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnAcknowledgeRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnAcknowledgeRequest

try {
    $result = $apiInstance->returnAcknowledge($merchantReturnAcknowledgeRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnAcknowledge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantReturnAcknowledgeRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnAcknowledgeRequest**](../Model/MerchantReturnAcknowledgeRequest.md)|  | [optional] |

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

## `returnDeclareForMerchant()`

```php
returnDeclareForMerchant($merchantReturnRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Create Return.

Mark (part of) an order as returned by the customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantReturnRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnRequest

try {
    $result = $apiInstance->returnDeclareForMerchant($merchantReturnRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnDeclareForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantReturnRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnRequest**](../Model/MerchantReturnRequest.md)|  | [optional] |

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

## `returnGetByMerchantOrderNo()`

```php
returnGetByMerchantOrderNo($merchantOrderNo): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantSingleOrderReturnResponse
```

Get Return.

Retrieve returns based on the supplied merchant order number. May return more than 1 result.<br />This call is supposed to be used by merchants. Channels should use the 'GET /v2/returns/channel'<br />call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderNo = 'merchantOrderNo_example'; // string

try {
    $result = $apiInstance->returnGetByMerchantOrderNo($merchantOrderNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetByMerchantOrderNo: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderNo** | **string**|  | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantSingleOrderReturnResponse**](../Model/CollectionOfMerchantSingleOrderReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetDeclaredByChannel()`

```php
returnGetDeclaredByChannel($channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse
```

Get Returns.

Get all returns created by the channel. This call is supposed<br />to be used by merchants. Channels should use the 'GET /v2/returns/channel'<br />call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelIds = array(56); // int[] | Filter on Channel IDs
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | Filter on unique order reference used by the merchant.
$channelOrderNos = array('channelOrderNos_example'); // string[] | Filter on unique order reference used by the channel.
$fulfillmentType = new \FriendsOfCE\Merchant\ApiClient\Model\FulfillmentType(); // FulfillmentType | Filter on the fulfillment type of the order.
$statuses = array(new \FriendsOfCE\Merchant\ApiClient\Model\\FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus()); // \FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus[] | Return status(es) to filter on.
$reasons = array(new \FriendsOfCE\Merchant\ApiClient\Model\\FriendsOfCE\Merchant\ApiClient\Model\ReturnReason()); // \FriendsOfCE\Merchant\ApiClient\Model\ReturnReason[] | Return reason(s) to filter on.
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the creation date, starting from this date. This date is inclusive.
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the creation date, until this date. This date is exclusive.
$isAcknowledged = True; // bool | Filters based on acknowledgements
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->returnGetDeclaredByChannel($channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetDeclaredByChannel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on Channel IDs | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the merchant. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the channel. | [optional] |
| **fulfillmentType** | [**FulfillmentType**](../Model/.md)| Filter on the fulfillment type of the order. | [optional] |
| **statuses** | [**\FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus[]**](../Model/\FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus.md)| Return status(es) to filter on. | [optional] |
| **reasons** | [**\FriendsOfCE\Merchant\ApiClient\Model\ReturnReason[]**](../Model/\FriendsOfCE\Merchant\ApiClient\Model\ReturnReason.md)| Return reason(s) to filter on. | [optional] |
| **fromDate** | **\DateTime**| Filter on the creation date, starting from this date. This date is inclusive. | [optional] |
| **toDate** | **\DateTime**| Filter on the creation date, until this date. This date is exclusive. | [optional] |
| **isAcknowledged** | **bool**| Filters based on acknowledgements | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetReturns()`

```php
returnGetReturns($creatorType, $channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse
```

Get Returns.

Get all returns created by the merchant. This call is supposed<br />to be used by merchants. To get returns created by channels, the 'GET /v2/returns/merchant' endpoint should be used.<br />Channels should use the 'GET /v2/returns/channel' call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$creatorType = new \FriendsOfCE\Merchant\ApiClient\Model\CreatorFilter(); // CreatorFilter | Filter on the return's creator. Default is MIXED.
$channelIds = array(56); // int[] | Filter on Channel IDs
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | Filter on unique order reference used by the merchant.
$channelOrderNos = array('channelOrderNos_example'); // string[] | Filter on unique order reference used by the channel.
$fulfillmentType = new \FriendsOfCE\Merchant\ApiClient\Model\FulfillmentType(); // FulfillmentType | Filter on the fulfillment type of the order.
$statuses = array(new \FriendsOfCE\Merchant\ApiClient\Model\\FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus()); // \FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus[] | Return status(es) to filter on.
$reasons = array(new \FriendsOfCE\Merchant\ApiClient\Model\\FriendsOfCE\Merchant\ApiClient\Model\ReturnReason()); // \FriendsOfCE\Merchant\ApiClient\Model\ReturnReason[] | Return reason(s) to filter on.
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the creation date, starting from this date. This date is inclusive.
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the creation date, until this date. This date is exclusive.
$isAcknowledged = True; // bool | Filters based on acknowledgements
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->returnGetReturns($creatorType, $channelIds, $merchantOrderNos, $channelOrderNos, $fulfillmentType, $statuses, $reasons, $fromDate, $toDate, $isAcknowledged, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetReturns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **creatorType** | [**CreatorFilter**](../Model/.md)| Filter on the return&#39;s creator. Default is MIXED. | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on Channel IDs | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the merchant. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the channel. | [optional] |
| **fulfillmentType** | [**FulfillmentType**](../Model/.md)| Filter on the fulfillment type of the order. | [optional] |
| **statuses** | [**\FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus[]**](../Model/\FriendsOfCE\Merchant\ApiClient\Model\ReturnStatus.md)| Return status(es) to filter on. | [optional] |
| **reasons** | [**\FriendsOfCE\Merchant\ApiClient\Model\ReturnReason[]**](../Model/\FriendsOfCE\Merchant\ApiClient\Model\ReturnReason.md)| Return reason(s) to filter on. | [optional] |
| **fromDate** | **\DateTime**| Filter on the creation date, starting from this date. This date is inclusive. | [optional] |
| **toDate** | **\DateTime**| Filter on the creation date, until this date. This date is exclusive. | [optional] |
| **isAcknowledged** | **bool**| Filters based on acknowledgements | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnGetUnhandled()`

```php
returnGetUnhandled($channelIds, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse
```

Get Unhandled Returns.

Get all new / unhandled returns created by channels. This call is supposed<br />to be used by merchants. Channels should use the 'GET /v2/returns/channel'<br />call.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelIds = array(56); // int[] | Filter on Channel IDs
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->returnGetUnhandled($channelIds, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnGetUnhandled: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on Channel IDs | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantReturnResponse**](../Model/CollectionOfMerchantReturnResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `returnUpdateForMerchant()`

```php
returnUpdateForMerchant($merchantReturnUpdateRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Mark a return as received.

Mark a return as received.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReturnApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantReturnUpdateRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnUpdateRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnUpdateRequest

try {
    $result = $apiInstance->returnUpdateForMerchant($merchantReturnUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReturnApi->returnUpdateForMerchant: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantReturnUpdateRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantReturnUpdateRequest**](../Model/MerchantReturnUpdateRequest.md)|  | [optional] |

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
