# FriendsOfCE\Merchant\ApiClient\PurchaseOrdersApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**acknowledge()**](PurchaseOrdersApi.md#acknowledge) | **POST** /v2/purchase-orders/lines/acknowledge | Acknowledges lines of a purchase order |
| [**create()**](PurchaseOrdersApi.md#create) | **POST** /v2/purchase-orders/shipments | Create a purchase order shipment. |
| [**getByFilter()**](PurchaseOrdersApi.md#getByFilter) | **GET** /v2/purchase-orders/shipments/merchant | Gets purchase order shipments by filter |
| [**getByFilter_0()**](PurchaseOrdersApi.md#getByFilter_0) | **GET** /v2/purchase-orders | Gets purchase orders by filter |
| [**purchaseOrdersCreateInvoice()**](PurchaseOrdersApi.md#purchaseOrdersCreateInvoice) | **POST** /v2/purchase-orders/invoice | Creates a purchase order invoice |
| [**purchaseOrdersCreateInvoices()**](PurchaseOrdersApi.md#purchaseOrdersCreateInvoices) | **POST** /v2/purchase-orders/invoice/bulk | Creates a purchase order invoices in a bulk |
| [**update()**](PurchaseOrdersApi.md#update) | **PUT** /v2/purchase-orders/shipments | Update a purchase order shipment. |


## `acknowledge()`

```php
acknowledge($singleMerchantAcknowledgePurchaseOrderLinesRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
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


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantAcknowledgePurchaseOrderLinesRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgePurchaseOrderLinesRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgePurchaseOrderLinesRequest | Model for purchase order and lines data to be acknowledged with the channel.

try {
    $result = $apiInstance->acknowledge($singleMerchantAcknowledgePurchaseOrderLinesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->acknowledge: ', $e->getMessage(), PHP_EOL;
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

## `create()`

```php
create($singleMerchantCreatePurchaseOrderShipmentRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Create a purchase order shipment.

One shipments can ship (parts of) multiple orders

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantCreatePurchaseOrderShipmentRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderShipmentRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderShipmentRequest

try {
    $result = $apiInstance->create($singleMerchantCreatePurchaseOrderShipmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->create: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantCreatePurchaseOrderShipmentRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderShipmentRequest**](../Model/SingleMerchantCreatePurchaseOrderShipmentRequest.md)|  | [optional] |

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

## `getByFilter()`

```php
getByFilter($channelId, $identifiersIdentifierType, $identifiersModels, $shippedDateRangeFromDate, $shippedDateRangeToDate, $createDateRangeFromDate, $createDateRangeToDate, $updateDateRangeFromDate, $updateDateRangeToDate, $billOfLadingNumber, $carrierName, $pageIndex, $pageSize): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIPurchaseOrderShipmentByFilter
```

Gets purchase order shipments by filter

Gets purchase order shipments based on the available filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$channelId = 56; // int | The identifier of the channel
$identifiersIdentifierType = new \FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderShipmentIdentifierTypeValue(); // PurchaseOrderShipmentIdentifierTypeValue | The type of identifier: which identifier to filter on
$identifiersModels = array('identifiersModels_example'); // string[] | The value (of the selected type) to filter on
$shippedDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$shippedDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$updateDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$billOfLadingNumber = 'billOfLadingNumber_example'; // string | The Bill of Lading number. Multiple shipments can have the same Bill of Lading number
$carrierName = 'carrierName_example'; // string | The name of the carrier
$pageIndex = 56; // int
$pageSize = 56; // int

try {
    $result = $apiInstance->getByFilter($channelId, $identifiersIdentifierType, $identifiersModels, $shippedDateRangeFromDate, $shippedDateRangeToDate, $createDateRangeFromDate, $createDateRangeToDate, $updateDateRangeFromDate, $updateDateRangeToDate, $billOfLadingNumber, $carrierName, $pageIndex, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **channelId** | **int**| The identifier of the channel | [optional] |
| **identifiersIdentifierType** | [**PurchaseOrderShipmentIdentifierTypeValue**](../Model/.md)| The type of identifier: which identifier to filter on | [optional] |
| **identifiersModels** | [**string[]**](../Model/string.md)| The value (of the selected type) to filter on | [optional] |
| **shippedDateRangeFromDate** | **\DateTime**|  | [optional] |
| **shippedDateRangeToDate** | **\DateTime**|  | [optional] |
| **createDateRangeFromDate** | **\DateTime**|  | [optional] |
| **createDateRangeToDate** | **\DateTime**|  | [optional] |
| **updateDateRangeFromDate** | **\DateTime**|  | [optional] |
| **updateDateRangeToDate** | **\DateTime**|  | [optional] |
| **billOfLadingNumber** | **string**| The Bill of Lading number. Multiple shipments can have the same Bill of Lading number | [optional] |
| **carrierName** | **string**| The name of the carrier | [optional] |
| **pageIndex** | **int**|  | [optional] |
| **pageSize** | **int**|  | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIPurchaseOrderShipmentByFilter**](../Model/CollectionOfIPurchaseOrderShipmentByFilter.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getByFilter_0()`

```php
getByFilter_0($identifiersIdentifierType, $identifiersModels, $statuses, $orderDateRangeFromDate, $orderDateRangeToDate, $createDateRangeFromDate, $createDateRangeToDate, $updateDateRangeFromDate, $updateDateRangeToDate, $channelIds, $type, $pageIndex, $pageSize): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIPurchaseOrderByFilter
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


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiersIdentifierType = new \FriendsOfCE\Merchant\ApiClient\Model\PurchaseOrderIdentifierType(); // PurchaseOrderIdentifierType | The type of identifier: which identifier to filter on
$identifiersModels = array('identifiersModels_example'); // string[] | The value (of the selected type) to filter on
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
    $result = $apiInstance->getByFilter_0($identifiersIdentifierType, $identifiersModels, $statuses, $orderDateRangeFromDate, $orderDateRangeToDate, $createDateRangeFromDate, $createDateRangeToDate, $updateDateRangeFromDate, $updateDateRangeToDate, $channelIds, $type, $pageIndex, $pageSize);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->getByFilter_0: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifiersIdentifierType** | [**PurchaseOrderIdentifierType**](../Model/.md)| The type of identifier: which identifier to filter on | [optional] |
| **identifiersModels** | [**string[]**](../Model/string.md)| The value (of the selected type) to filter on | [optional] |
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

## `purchaseOrdersCreateInvoice()`

```php
purchaseOrdersCreateInvoice($singleMerchantCreatePurchaseOrderInvoiceRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
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


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantCreatePurchaseOrderInvoiceRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderInvoiceRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreatePurchaseOrderInvoiceRequest | Model for purchase order invoice.

try {
    $result = $apiInstance->purchaseOrdersCreateInvoice($singleMerchantCreatePurchaseOrderInvoiceRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersCreateInvoice: ', $e->getMessage(), PHP_EOL;
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

## `purchaseOrdersCreateInvoices()`

```php
purchaseOrdersCreateInvoices($bulkMerchantCreatePurchaseOrderInvoicesRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
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


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$bulkMerchantCreatePurchaseOrderInvoicesRequest = new \FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantCreatePurchaseOrderInvoicesRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\BulkMerchantCreatePurchaseOrderInvoicesRequest | Model for purchase order invoices.

try {
    $result = $apiInstance->purchaseOrdersCreateInvoices($bulkMerchantCreatePurchaseOrderInvoicesRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->purchaseOrdersCreateInvoices: ', $e->getMessage(), PHP_EOL;
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

## `update()`

```php
update($singleMerchantUpdatePurchaseOrderShipmentRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Update a purchase order shipment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\PurchaseOrdersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantUpdatePurchaseOrderShipmentRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantUpdatePurchaseOrderShipmentRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantUpdatePurchaseOrderShipmentRequest

try {
    $result = $apiInstance->update($singleMerchantUpdatePurchaseOrderShipmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PurchaseOrdersApi->update: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantUpdatePurchaseOrderShipmentRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantUpdatePurchaseOrderShipmentRequest**](../Model/SingleMerchantUpdatePurchaseOrderShipmentRequest.md)|  | [optional] |

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
