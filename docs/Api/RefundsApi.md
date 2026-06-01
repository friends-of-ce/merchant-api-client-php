# FriendsOfCE\Merchant\ApiClient\RefundsApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**refundAcknowledge()**](RefundsApi.md#refundAcknowledge) | **POST** /v2.1/refunds/merchant/acknowledge | [CLOSED BETA - AUTHORIZED USERS ONLY] Acknowledge a refund |
| [**refundCreate()**](RefundsApi.md#refundCreate) | **POST** /v2.1/refunds/merchant | [CLOSED BETA - AUTHORIZED USERS ONLY] Create a refund |
| [**refundGet()**](RefundsApi.md#refundGet) | **GET** /v2.1/refunds/merchant/{identifier} | [CLOSED BETA - AUTHORIZED USERS ONLY] Get refund by identifier |
| [**refundGetByFilter()**](RefundsApi.md#refundGetByFilter) | **GET** /v2.1/refunds/merchant | [CLOSED BETA - AUTHORIZED USERS ONLY] Get refunds by filter |
| [**refundUpsertReturnExtraData()**](RefundsApi.md#refundUpsertReturnExtraData) | **PATCH** /v2.1/refunds/merchant/extra-data | [CLOSED BETA - AUTHORIZED USERS ONLY] Upsert extra data for a refund |


## `refundAcknowledge()`

```php
refundAcknowledge($singleMerchantAcknowledgeRefundRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Acknowledge a refund

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Acknowledges a refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantAcknowledgeRefundRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgeRefundRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgeRefundRequest | The refund to acknowledge

try {
    $result = $apiInstance->refundAcknowledge($singleMerchantAcknowledgeRefundRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundAcknowledge: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantAcknowledgeRefundRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantAcknowledgeRefundRequest**](../Model/SingleMerchantAcknowledgeRefundRequest.md)| The refund to acknowledge | [optional] |

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

## `refundCreate()`

```php
refundCreate($singleMerchantCreateRefundRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Create a refund

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Creates a new refund

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$singleMerchantCreateRefundRequest = new \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreateRefundRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreateRefundRequest | The refund

try {
    $result = $apiInstance->refundCreate($singleMerchantCreateRefundRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundCreate: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **singleMerchantCreateRefundRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\SingleMerchantCreateRefundRequest**](../Model/SingleMerchantCreateRefundRequest.md)| The refund | [optional] |

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

## `refundGet()`

```php
refundGet($identifier, $type): \FriendsOfCE\Merchant\ApiClient\Model\SingleOfIRefund
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Get refund by identifier

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Gets a single refund by the given identifier

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifier = 'identifier_example'; // string | The identifier to search for
$type = 'REFUND_ID'; // string | Specify whether to search by ID, Merchant Refund No or Channel Refund No

try {
    $result = $apiInstance->refundGet($identifier, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundGet: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifier** | **string**| The identifier to search for | |
| **type** | **string**| Specify whether to search by ID, Merchant Refund No or Channel Refund No | [optional] [default to &#39;REFUND_ID&#39;] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\SingleOfIRefund**](../Model/SingleOfIRefund.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundGetByFilter()`

```php
refundGetByFilter($identifiersIdentifierType, $identifiersModels, $channelExportStatusStatuses, $channelExportStatusMaxNumberOfExportAttempts, $reasons, $createdDateRangeFromDate, $createdDateRangeToDate, $channelIds, $search, $isAcknowledgedByMerchant, $isAcknowledgedByChannel, $fulfillmentType, $creatorType, $externalBatchNos, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIRefund
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Get refunds by filter

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Gets multiple refunds by the given filter

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$identifiersIdentifierType = 'identifiersIdentifierType_example'; // string | The type of identifier: which identifier to filter on
$identifiersModels = array('identifiersModels_example'); // string[] | The value (of the selected type) to filter on
$channelExportStatusStatuses = array('channelExportStatusStatuses_example'); // string[]
$channelExportStatusMaxNumberOfExportAttempts = 56; // int
$reasons = array('reasons_example'); // string[]
$createdDateRangeFromDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$createdDateRangeToDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime
$channelIds = array(56); // int[]
$search = 'search_example'; // string
$isAcknowledgedByMerchant = True; // bool
$isAcknowledgedByChannel = True; // bool
$fulfillmentType = 'fulfillmentType_example'; // string
$creatorType = 'creatorType_example'; // string
$externalBatchNos = array('externalBatchNos_example'); // string[]
$page = 56; // int | Page number

try {
    $result = $apiInstance->refundGetByFilter($identifiersIdentifierType, $identifiersModels, $channelExportStatusStatuses, $channelExportStatusMaxNumberOfExportAttempts, $reasons, $createdDateRangeFromDate, $createdDateRangeToDate, $channelIds, $search, $isAcknowledgedByMerchant, $isAcknowledgedByChannel, $fulfillmentType, $creatorType, $externalBatchNos, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **identifiersIdentifierType** | **string**| The type of identifier: which identifier to filter on | [optional] |
| **identifiersModels** | [**string[]**](../Model/string.md)| The value (of the selected type) to filter on | [optional] |
| **channelExportStatusStatuses** | [**string[]**](../Model/string.md)|  | [optional] |
| **channelExportStatusMaxNumberOfExportAttempts** | **int**|  | [optional] |
| **reasons** | [**string[]**](../Model/string.md)|  | [optional] |
| **createdDateRangeFromDate** | **\DateTime**|  | [optional] |
| **createdDateRangeToDate** | **\DateTime**|  | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)|  | [optional] |
| **search** | **string**|  | [optional] |
| **isAcknowledgedByMerchant** | **bool**|  | [optional] |
| **isAcknowledgedByChannel** | **bool**|  | [optional] |
| **fulfillmentType** | **string**|  | [optional] |
| **creatorType** | **string**|  | [optional] |
| **externalBatchNos** | [**string[]**](../Model/string.md)|  | [optional] |
| **page** | **int**| Page number | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfIRefund**](../Model/CollectionOfIRefund.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refundUpsertReturnExtraData()`

```php
refundUpsertReturnExtraData($merchantUpsertRefundExtraDataRequest): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

[CLOSED BETA - AUTHORIZED USERS ONLY] Upsert extra data for a refund

Closed Beta - Authorized Users Only <br />This endpoint is under development and available only to approved beta participants. <br />Accounts without beta access will receive a forbidden response. <br /> <br />Upserts extra data for a refund and its lines.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\RefundsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantUpsertRefundExtraDataRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantUpsertRefundExtraDataRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantUpsertRefundExtraDataRequest | The refund extra data to upsert.

try {
    $result = $apiInstance->refundUpsertReturnExtraData($merchantUpsertRefundExtraDataRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RefundsApi->refundUpsertReturnExtraData: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantUpsertRefundExtraDataRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantUpsertRefundExtraDataRequest**](../Model/MerchantUpsertRefundExtraDataRequest.md)| The refund extra data to upsert. | [optional] |

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
