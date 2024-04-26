# FriendsOfCE\Merchant\ApiClient\PurchaseOrdersManagementApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**purchaseOrdersManagementAcknowledge()**](PurchaseOrdersManagementApi.md#purchaseOrdersManagementAcknowledge) | **POST** /v2/purchase-orders/lines/acknowledge | Acknowledges lines of a purchase order |
| [**purchaseOrdersManagementCreateInvoice()**](PurchaseOrdersManagementApi.md#purchaseOrdersManagementCreateInvoice) | **POST** /v2/purchase-orders/invoice | Creates a purchase order invoice |
| [**purchaseOrdersManagementCreateInvoices()**](PurchaseOrdersManagementApi.md#purchaseOrdersManagementCreateInvoices) | **POST** /v2/purchase-orders/invoice/bulk | Creates a purchase order invoices in a bulk |
| [**purchaseOrdersManagementGetByFilter()**](PurchaseOrdersManagementApi.md#purchaseOrdersManagementGetByFilter) | **GET** /v2/purchase-orders | Gets purchase orders by filter |


## `purchaseOrdersManagementAcknowledge()`

```php
purchaseOrdersManagementAcknowledge($singleMerchantAcknowledgePurchaseOrderLinesRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Acknowledges lines of a purchase order

Creates line acknowledgements (i.e., accepted, backordered, rejected) for a purchase order.<br />Request will be accepted and data persisted only if all validations passed.<br />Any validation messages and errors will be returned in a HTTP 4xx response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantAcknowledgePurchaseOrderLinesRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgePurchaseOrderLinesRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgePurchaseOrderLinesRequest | Model for purchase order and lines data to be acknowledged with the channel.

try {
    $result = $apiInstance->purchaseOrdersManagementAcknowledge($singleMerchantAcknowledgePurchaseOrderLinesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersManagementApi->purchaseOrdersManagementAcknowledge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantAcknowledgePurchaseOrderLinesRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgePurchaseOrderLinesRequest**](../Model/SingleMerchantAcknowledgePurchaseOrderLinesRequest.md)| Model for purchase order and lines data to be acknowledged with the channel. | [optional] |

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

## `purchaseOrdersManagementCreateInvoice()`

```php
purchaseOrdersManagementCreateInvoice($singleMerchantCreatePurchaseOrderInvoiceRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Creates a purchase order invoice

Creates invoice for a purchase order.<br />Request will be accepted and data persisted only if all validations passed.<br />Any validation messages and errors will be returned in a HTTP 4xx response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantCreatePurchaseOrderInvoiceRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderInvoiceRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderInvoiceRequest | Model for purchase order invoice.

try {
    $result = $apiInstance->purchaseOrdersManagementCreateInvoice($singleMerchantCreatePurchaseOrderInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersManagementApi->purchaseOrdersManagementCreateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantCreatePurchaseOrderInvoiceRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderInvoiceRequest**](../Model/SingleMerchantCreatePurchaseOrderInvoiceRequest.md)| Model for purchase order invoice. | [optional] |

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

## `purchaseOrdersManagementCreateInvoices()`

```php
purchaseOrdersManagementCreateInvoices($bulkMerchantCreatePurchaseOrderInvoicesRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Creates a purchase order invoices in a bulk

Creates invoices for a purchase orders in a bulk.<br />Request will be accepted and data persisted only if all validations passed.<br />Any validation messages and errors will be returned in a HTTP 4xx response.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkMerchantCreatePurchaseOrderInvoicesRequest = new \FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantCreatePurchaseOrderInvoicesRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantCreatePurchaseOrderInvoicesRequest | Model for purchase order invoices.

try {
    $result = $apiInstance->purchaseOrdersManagementCreateInvoices($bulkMerchantCreatePurchaseOrderInvoicesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersManagementApi->purchaseOrdersManagementCreateInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **bulkMerchantCreatePurchaseOrderInvoicesRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantCreatePurchaseOrderInvoicesRequest**](../Model/BulkMerchantCreatePurchaseOrderInvoicesRequest.md)| Model for purchase order invoices. | [optional] |

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

## `purchaseOrdersManagementGetByFilter()`

```php
purchaseOrdersManagementGetByFilter($identifiersIdentifierType, $identifiersModels, $statuses, $orderDateRangeFromDate, $orderDateRangeToDate, $createDateRangeFromDate, $createDateRangeToDate, $updateDateRangeFromDate, $updateDateRangeToDate, $channelIds, $type, $pageIndex, $pageSize): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIPurchaseOrderByFilter
```

Gets purchase orders by filter

Gets purchase orders based on the available filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersManagementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiersIdentifierType = new \FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderIdentifierType(); // PurchaseOrderIdentifierType
$identifiersModels = array('identifiersModels_example'); // string[]
$statuses = array(new \FriendsOfCE\Merchant\ApiClient\Model\\FriendsOfCE\Merchant\ApiClient\Model\ModulesPurchaseOrderStatus()); // \FriendsOfCE\Merchant\ApiClient\Model\ModulesPurchaseOrderStatus[]
$orderDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$orderDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$channelIds = array(56); // int[]
$type = new \FriendsOfCE\Merchant\ApiClient\Model\ModulesPurchaseOrderType(); // ModulesPurchaseOrderType
$pageIndex = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->purchaseOrdersManagementGetByFilter($identifiersIdentifierType, $identifiersModels, $statuses, $orderDateRangeFromDate, $orderDateRangeToDate, $createDateRangeFromDate, $createDateRangeToDate, $updateDateRangeFromDate, $updateDateRangeToDate, $channelIds, $type, $pageIndex, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersManagementApi->purchaseOrdersManagementGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifiersIdentifierType** | [**PurchaseOrderIdentifierType**](../Model/.md)|  | [optional] |
| **identifiersModels** | [**string[]**](../Model/string.md)|  | [optional] |
| **statuses** | [**\FriendsOfCE\Merchant\ApiClient\Model\ModulesPurchaseOrderStatus[]**](../Model/\FriendsOfCE\Merchant\ApiClient\Model\ModulesPurchaseOrderStatus.md)|  | [optional] |
| **orderDateRangeFromDate** | **\DateTime**|  | [optional] |
| **orderDateRangeToDate** | **\DateTime**|  | [optional] |
| **createDateRangeFromDate** | **\DateTime**|  | [optional] |
| **createDateRangeToDate** | **\DateTime**|  | [optional] |
| **updateDateRangeFromDate** | **\DateTime**|  | [optional] |
| **updateDateRangeToDate** | **\DateTime**|  | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)|  | [optional] |
| **type** | [**ModulesPurchaseOrderType**](../Model/.md)|  | [optional] |
| **pageIndex** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIPurchaseOrderByFilter**](../Model/CollectionOfIPurchaseOrderByFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
