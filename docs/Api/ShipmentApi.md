# FriendsOfCE\Merchant\ApiClient\ShipmentApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**shipmentCreate()**](ShipmentApi.md#shipmentCreate) | **POST** /v2/shipments | Create Shipment. |
| [**shipmentCreateForChannelMethod()**](ShipmentApi.md#shipmentCreateForChannelMethod) | **POST** /v2/shipments/channelmethod | Create shipment for channel provided shipping labels |
| [**shipmentGetShipmentLabelCarriers()**](ShipmentApi.md#shipmentGetShipmentLabelCarriers) | **POST** /v2/carriers/{merchantOrderNo} | Get carriers for channel provided shipping labels |
| [**shipmentIndex()**](ShipmentApi.md#shipmentIndex) | **GET** /v2/shipments/merchant | Get Shipments |
| [**shipmentShippingLabel()**](ShipmentApi.md#shipmentShippingLabel) | **GET** /v2/orders/{merchantShipmentNo}/shippinglabel | Download shipping label. |
| [**shipmentUpdate()**](ShipmentApi.md#shipmentUpdate) | **PUT** /v2/shipments/{merchantShipmentNo} | Update Shipment. |


## `shipmentCreate()`

```php
shipmentCreate($merchantShipmentRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Create Shipment.

Mark (part of) an order as shipped.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantShipmentRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentRequest

try {
    $result = $apiInstance->shipmentCreate($merchantShipmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantShipmentRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentRequest**](../Model/MerchantShipmentRequest.md)|  | [optional] |

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

## `shipmentCreateForChannelMethod()`

```php
shipmentCreateForChannelMethod($merchantChannelLabelShipmentRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Create shipment for channel provided shipping labels

Create a shipment, which will request a shipping label from the channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantChannelLabelShipmentRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantChannelLabelShipmentRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantChannelLabelShipmentRequest | The shipment to create

try {
    $result = $apiInstance->shipmentCreateForChannelMethod($merchantChannelLabelShipmentRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentCreateForChannelMethod: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantChannelLabelShipmentRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantChannelLabelShipmentRequest**](../Model/MerchantChannelLabelShipmentRequest.md)| The shipment to create | [optional] |

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

## `shipmentGetShipmentLabelCarriers()`

```php
shipmentGetShipmentLabelCarriers($merchantOrderNo, $merchantShipmentLabelCarrierRequest): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantShipmentLabelCarrierResponse
```

Get carriers for channel provided shipping labels

Get the carriers for buying a shipping label from the channel

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantOrderNo = 'merchantOrderNo_example'; // string | The merchant's order reference.
$merchantShipmentLabelCarrierRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentLabelCarrierRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentLabelCarrierRequest | The parcel information

try {
    $result = $apiInstance->shipmentGetShipmentLabelCarriers($merchantOrderNo, $merchantShipmentLabelCarrierRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentGetShipmentLabelCarriers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantOrderNo** | **string**| The merchant&#39;s order reference. | |
| **merchantShipmentLabelCarrierRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentLabelCarrierRequest**](../Model/MerchantShipmentLabelCarrierRequest.md)| The parcel information | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantShipmentLabelCarrierResponse**](../Model/CollectionOfMerchantShipmentLabelCarrierResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentIndex()`

```php
shipmentIndex($merchantShipmentNos, $merchantOrderNos, $method, $shippedFromCountryCodes, $fromShipmentDate, $toShipmentDate, $fromCreateDate, $toCreateDate, $fromUpdateDate, $toUpdateDate, $fulfillmentType, $channelShipmentNos, $channelOrderNos, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantShipmentResponse
```

Get Shipments

Gets all shipments that meet conditions.<br />If all filters are empty return all in default order (from the oldest one).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantShipmentNos = array('merchantShipmentNos_example'); // string[] | Filter on the unique references (ids) as used by the merchant.
$merchantOrderNos = array('merchantOrderNos_example'); // string[] | Filter on the unique references (ids) of order as used by the merchant.
$method = 'method_example'; // string | Filter on the shipping method.
$shippedFromCountryCodes = array('shippedFromCountryCodes_example'); // string[] | 2-digit Country code
$fromShipmentDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the shipment date, starting from this date. This date is inclusive.
$toShipmentDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the shipment date, until this date. This date is exclusive.
$fromCreateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the shipment in ChannelEngine, starting from this date. This date is inclusive.
$toCreateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the shipment in ChannelEngine, until this date. This date is exclusive.
$fromUpdateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the shipment in ChannelEngine, starting from this date. This date is inclusive.
$toUpdateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the shipment in ChannelEngine, until this date. This date is exclusive.
$fulfillmentType = new \FriendsOfCE\Merchant\ApiClient\Model\ShipmentFulfillmentType(); // ShipmentFulfillmentType | Filter on the fulfillment type of the shipment.
$channelShipmentNos = array('channelShipmentNos_example'); // string[] | Filter on the unique references (ids) as used by the channel.
$channelOrderNos = array('channelOrderNos_example'); // string[] | Filter on the unique references (ids) of order as used by the channel.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->shipmentIndex($merchantShipmentNos, $merchantOrderNos, $method, $shippedFromCountryCodes, $fromShipmentDate, $toShipmentDate, $fromCreateDate, $toCreateDate, $fromUpdateDate, $toUpdateDate, $fulfillmentType, $channelShipmentNos, $channelOrderNos, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentIndex: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantShipmentNos** | [**string[]**](../Model/string.md)| Filter on the unique references (ids) as used by the merchant. | [optional] |
| **merchantOrderNos** | [**string[]**](../Model/string.md)| Filter on the unique references (ids) of order as used by the merchant. | [optional] |
| **method** | **string**| Filter on the shipping method. | [optional] |
| **shippedFromCountryCodes** | [**string[]**](../Model/string.md)| 2-digit Country code | [optional] |
| **fromShipmentDate** | **\DateTime**| Filter on the shipment date, starting from this date. This date is inclusive. | [optional] |
| **toShipmentDate** | **\DateTime**| Filter on the shipment date, until this date. This date is exclusive. | [optional] |
| **fromCreateDate** | **\DateTime**| Filter on the create date of the shipment in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **toCreateDate** | **\DateTime**| Filter on the create date of the shipment in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fromUpdateDate** | **\DateTime**| Filter on the update date of the shipment in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **toUpdateDate** | **\DateTime**| Filter on the update date of the shipment in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fulfillmentType** | [**ShipmentFulfillmentType**](../Model/.md)| Filter on the fulfillment type of the shipment. | [optional] |
| **channelShipmentNos** | [**string[]**](../Model/string.md)| Filter on the unique references (ids) as used by the channel. | [optional] |
| **channelOrderNos** | [**string[]**](../Model/string.md)| Filter on the unique references (ids) of order as used by the channel. | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantShipmentResponse**](../Model/CollectionOfMerchantShipmentResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentShippingLabel()`

```php
shipmentShippingLabel($merchantShipmentNo): \SplFileObject
```

Download shipping label.

Downloads the shipping label for the shipment. There may pass some time between creating the shipment<br />and the availability of the label. So '404 Not Found' might incidate it is not available yet.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantShipmentNo = 'merchantShipmentNo_example'; // string | The unique shipment reference as used by the merchant.

try {
    $result = $apiInstance->shipmentShippingLabel($merchantShipmentNo);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentShippingLabel: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantShipmentNo** | **string**| The unique shipment reference as used by the merchant. | |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/vnd.shippingLabel`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `shipmentUpdate()`

```php
shipmentUpdate($merchantShipmentNo, $merchantShipmentTrackingRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Update Shipment.

Update an existing shipment with tracking information.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ShipmentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantShipmentNo = 'merchantShipmentNo_example'; // string | The merchant's shipment reference.
$merchantShipmentTrackingRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentTrackingRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentTrackingRequest | The updated tracking information.

try {
    $result = $apiInstance->shipmentUpdate($merchantShipmentNo, $merchantShipmentTrackingRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ShipmentApi->shipmentUpdate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantShipmentNo** | **string**| The merchant&#39;s shipment reference. | |
| **merchantShipmentTrackingRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantShipmentTrackingRequest**](../Model/MerchantShipmentTrackingRequest.md)| The updated tracking information. | [optional] |

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
