# FriendsOfCE\Merchant\ApiClient\OrderApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**orderAcknowledge()**](OrderApi.md#orderAcknowledge) | **POST** /v2/orders/acknowledge | Acknowledges orders |
| [**orderGetByFilter()**](OrderApi.md#orderGetByFilter) | **GET** /v2/orders | Gets orders by filter |
| [**orderGetNew()**](OrderApi.md#orderGetNew) | **GET** /v2/orders/new | Gets new orders |
| [**orderInvoice()**](OrderApi.md#orderInvoice) | **GET** /v2/orders/{merchantOrderNo}/invoice | Generates an order invoice |
| [**orderPackingSlip()**](OrderApi.md#orderPackingSlip) | **GET** /v2/orders/{merchantOrderNo}/packingslip | Generates a packing slip |
| [**orderUpdate()**](OrderApi.md#orderUpdate) | **PUT** /v2/orders/comment | Updates an order comment |
| [**orderUploadInvoice()**](OrderApi.md#orderUploadInvoice) | **POST** /v2/orders/{merchantOrderNo}/invoice | Uploads an order invoice |


## `orderAcknowledge()`

```php
orderAcknowledge($merchantOrderAcknowledgementRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Acknowledges orders

Acknowledges an order to confirm order import.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderAcknowledgementRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderAcknowledgementRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderAcknowledgementRequest | Relations between the id's returned by ChannelEngine and the references which the merchant uses.

try {
    $result = $apiInstance->orderAcknowledge($merchantOrderAcknowledgementRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderAcknowledge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderAcknowledgementRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderAcknowledgementRequest**](../Model/MerchantOrderAcknowledgementRequest.md)| Relations between the id&#39;s returned by ChannelEngine and the references which the merchant uses. | [optional] |

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

## `orderGetByFilter()`

```php
orderGetByFilter($statuses, $emailAddresses, $merchantOrderNos, $channelOrderNos, $fromDate, $toDate, $fromCreatedAtDate, $toCreatedAtDate, $excludeMarketplaceFulfilledOrdersAndLines, $fulfillmentType, $onlyWithCancellationRequests, $channelIds, $stockLocationIds, $isAcknowledged, $fromUpdatedAtDate, $toUpdatedAtDate, $fromAcknowledgedDate, $toAcknowledgedDate, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantOrderResponse
```

Gets orders by filter

Gets orders based on the available filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$statuses = array(new \FriendsOfCE\Merchant\ApiClient\Model\\FriendsOfCE\Merchant\ApiClient\Model\OrderStatusView()); // \FriendsOfCE\Merchant\ApiClient\Model\OrderStatusView[] | Order status(es) to filter on. AWAITING_PAYMENT orders will be excluded if it is not included in this Statuses filter.
$emailAddresses = array('emailAddresses_example'); // string[] | Client emailaddresses to filter on.
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | Filter on unique order reference used by the merchant.
$channelOrderNos = array('channelOrderNos_example'); // string[] | Filter on unique order reference used by the channel.
$fromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the order date, starting from this date. This date is inclusive.<br />The order date is based on the data we got from a channel.
$toDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the order date, until this date. This date is exclusive.<br />The order date is based on the data we got from a channel.
$fromCreatedAtDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the created at date in ChannelEngine, starting from this date. This date is inclusive.<br />The created date is set on the date and time when the order is created.
$toCreatedAtDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the created at date in ChannelEngine, until this date. This date is exclusive.<br />The created date is set on the date and time when the order is created.
$excludeMarketplaceFulfilledOrdersAndLines = True; // bool | Exclude order (lines) fulfilled by the marketplace (amazon:FBA, bol:LVB, etc.)
$fulfillmentType = new \FriendsOfCE\Merchant\ApiClient\Model\FulfillmentType(); // FulfillmentType | Filter orders on fulfillment type. This will include all orders lines, even if they are partially fulfilled by the marketplace.<br />To exclude orders and lines that are fulfilled by the marketplace from the response, set ExcludeMarketplaceFulfilledOrdersAndLines to true.
$onlyWithCancellationRequests = True; // bool | Filter on orders containing cancellation requests.<br />Some channels allow a customer to cancel an order until it has been shipped.<br />When an order has already been acknowledged in ChannelEngine, it can only be cancelled by creating a cancellation.
$channelIds = array(56); // int[] | Filter orders on channel(s).
$stockLocationIds = array(56); // int[] | Filter on stock locations
$isAcknowledged = True; // bool | Filter on acknowledged value
$fromUpdatedAtDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the order update date, starting from this date. This date is inclusive.
$toUpdatedAtDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the order update date, unitl this date. This date is exclusive.
$fromAcknowledgedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the order acknowledged date, starting from this date. This date is inclusive.
$toAcknowledgedDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the order acknowledged date, unitl this date. This date is exclusive.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->orderGetByFilter($statuses, $emailAddresses, $merchantOrderNos, $channelOrderNos, $fromDate, $toDate, $fromCreatedAtDate, $toCreatedAtDate, $excludeMarketplaceFulfilledOrdersAndLines, $fulfillmentType, $onlyWithCancellationRequests, $channelIds, $stockLocationIds, $isAcknowledged, $fromUpdatedAtDate, $toUpdatedAtDate, $fromAcknowledgedDate, $toAcknowledgedDate, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **statuses** | [**\FriendsOfCE\Merchant\ApiClient\Model\OrderStatusView[]**](../Model/\FriendsOfCE\Merchant\ApiClient\Model\OrderStatusView.md)| Order status(es) to filter on. AWAITING_PAYMENT orders will be excluded if it is not included in this Statuses filter. | [optional] |
| **emailAddresses** | [**string[]**](../Model/string.md)| Client emailaddresses to filter on. | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the merchant. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| Filter on unique order reference used by the channel. | [optional] |
| **fromDate** | **\DateTime**| Filter on the order date, starting from this date. This date is inclusive.&lt;br /&gt;The order date is based on the data we got from a channel. | [optional] |
| **toDate** | **\DateTime**| Filter on the order date, until this date. This date is exclusive.&lt;br /&gt;The order date is based on the data we got from a channel. | [optional] |
| **fromCreatedAtDate** | **\DateTime**| Filter on the created at date in ChannelEngine, starting from this date. This date is inclusive.&lt;br /&gt;The created date is set on the date and time when the order is created. | [optional] |
| **toCreatedAtDate** | **\DateTime**| Filter on the created at date in ChannelEngine, until this date. This date is exclusive.&lt;br /&gt;The created date is set on the date and time when the order is created. | [optional] |
| **excludeMarketplaceFulfilledOrdersAndLines** | **bool**| Exclude order (lines) fulfilled by the marketplace (amazon:FBA, bol:LVB, etc.) | [optional] |
| **fulfillmentType** | [**FulfillmentType**](../Model/.md)| Filter orders on fulfillment type. This will include all orders lines, even if they are partially fulfilled by the marketplace.&lt;br /&gt;To exclude orders and lines that are fulfilled by the marketplace from the response, set ExcludeMarketplaceFulfilledOrdersAndLines to true. | [optional] |
| **onlyWithCancellationRequests** | **bool**| Filter on orders containing cancellation requests.&lt;br /&gt;Some channels allow a customer to cancel an order until it has been shipped.&lt;br /&gt;When an order has already been acknowledged in ChannelEngine, it can only be cancelled by creating a cancellation. | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)| Filter orders on channel(s). | [optional] |
| **stockLocationIds** | [**int[]**](../Model/int.md)| Filter on stock locations | [optional] |
| **isAcknowledged** | **bool**| Filter on acknowledged value | [optional] |
| **fromUpdatedAtDate** | **\DateTime**| Filter on the order update date, starting from this date. This date is inclusive. | [optional] |
| **toUpdatedAtDate** | **\DateTime**| Filter on the order update date, unitl this date. This date is exclusive. | [optional] |
| **fromAcknowledgedDate** | **\DateTime**| Filter on the order acknowledged date, starting from this date. This date is inclusive. | [optional] |
| **toAcknowledgedDate** | **\DateTime**| Filter on the order acknowledged date, unitl this date. This date is exclusive. | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantOrderResponse**](../Model/CollectionOfMerchantOrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderGetNew()`

```php
orderGetNew($stockLocationId): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantOrderResponse
```

Gets new orders

Gets orders with the status **New**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$stockLocationId = 56; // int | The ChannelEngine id of the stock location.

try {
    $result = $apiInstance->orderGetNew($stockLocationId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderGetNew: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **stockLocationId** | **int**| The ChannelEngine id of the stock location. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantOrderResponse**](../Model/CollectionOfMerchantOrderResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderInvoice()`

```php
orderInvoice($merchantOrderNo, $useCustomerCulture): \SplFileObject
```

Generates an order invoice

Generates the ChannelEngine sales tax invoice for an order in PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderNo = 'merchantOrderNo_example'; // string | The unique order reference as used by the merchant.
$useCustomerCulture = false; // bool | Generate the invoice in the billing address' country's language.

try {
    $result = $apiInstance->orderInvoice($merchantOrderNo, $useCustomerCulture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderNo** | **string**| The unique order reference as used by the merchant. | |
| **useCustomerCulture** | **bool**| Generate the invoice in the billing address&#39; country&#39;s language. | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderPackingSlip()`

```php
orderPackingSlip($merchantOrderNo, $useCustomerCulture): \SplFileObject
```

Generates a packing slip

Generates the ChannelEngine packing slip for an order in PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderNo = 'merchantOrderNo_example'; // string | The unique order reference as used by the merchant.
$useCustomerCulture = false; // bool | Generate the invoice in the billing address' country's language.

try {
    $result = $apiInstance->orderPackingSlip($merchantOrderNo, $useCustomerCulture);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderPackingSlip: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderNo** | **string**| The unique order reference as used by the merchant. | |
| **useCustomerCulture** | **bool**| Generate the invoice in the billing address&#39; country&#39;s language. | [optional] [default to false] |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `orderUpdate()`

```php
orderUpdate($merchantOrderCommentUpdateRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Updates an order comment

Updates the merchant comment for an order based on the ChannelEngine **Order ID** or the **Merchant order number**.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderCommentUpdateRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderCommentUpdateRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderCommentUpdateRequest

try {
    $result = $apiInstance->orderUpdate($merchantOrderCommentUpdateRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderCommentUpdateRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderCommentUpdateRequest**](../Model/MerchantOrderCommentUpdateRequest.md)|  | [optional] |

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

## `orderUploadInvoice()`

```php
orderUploadInvoice($merchantOrderNo, $invoice, $invoiceNumber): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Uploads an order invoice

Uploads the invoice for an order in PDF.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\OrderApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderNo = 'merchantOrderNo_example'; // string | The unique order reference as used by the merchant.
$invoice = "/path/to/file.txt"; // \SplFileObject | PDF invoice file up to 1 MB with additional data.
$invoiceNumber = 'invoiceNumber_example'; // string | The invoice number used in the invoice.

try {
    $result = $apiInstance->orderUploadInvoice($merchantOrderNo, $invoice, $invoiceNumber);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderApi->orderUploadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderNo** | **string**| The unique order reference as used by the merchant. | |
| **invoice** | **\SplFileObject****\SplFileObject**| PDF invoice file up to 1 MB with additional data. | |
| **invoiceNumber** | **string**| The invoice number used in the invoice. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\ApiResponse**](../Model/ApiResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
