# FriendsOfCE\Merchant\ApiClient\ReportApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportCreateSettlementsReport()**](ReportApi.md#reportCreateSettlementsReport) | **POST** /v2/reports/settlements | Create settlements report |
| [**reportGetReport()**](ReportApi.md#reportGetReport) | **GET** /v2/reports/{reportId} | Get report |
| [**reportGetStatus()**](ReportApi.md#reportGetStatus) | **GET** /v2/reports/{reportId}/status | Check report status |


## `reportCreateSettlementsReport()`

```php
reportCreateSettlementsReport($merchantCreateSettlementsReportRequest): \FriendsOfCE\Merchant\ApiClient\Model\MerchantCreateReportResponse
```

Create settlements report

Create report base on settlement ids.<br />There is two types of reports:<br />SUMMARY - transactions grouped by Currency, ChannelSellerId, ChannelName,<br />DETAILED - all transactions.<br />Depends on amount of settlements transactions generating report can take few minutes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$merchantCreateSettlementsReportRequest = new \FriendsOfCE\Merchant\ApiClient\Model\MerchantCreateSettlementsReportRequest(); // \FriendsOfCE\Merchant\ApiClient\Model\MerchantCreateSettlementsReportRequest | To provide settlementIds and type of report SUMMARY or DETAILED.

try {
    $result = $apiInstance->reportCreateSettlementsReport($merchantCreateSettlementsReportRequest);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportCreateSettlementsReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **merchantCreateSettlementsReportRequest** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantCreateSettlementsReportRequest**](../Model/MerchantCreateSettlementsReportRequest.md)| To provide settlementIds and type of report SUMMARY or DETAILED. | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\MerchantCreateReportResponse**](../Model/MerchantCreateReportResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: `application/json-patch+json`, `application/json`, `application/*+json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGetReport()`

```php
reportGetReport($reportId): \SplFileObject
```

Get report

Get report using report id.<br />Report is generated as csv file with \";\" as delimiter.<br />If some field has `,` (comma) then use quotes around.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = 'reportId_example'; // string | 

try {
    $result = $apiInstance->reportGetReport($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportGetReport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `reportGetStatus()`

```php
reportGetStatus($reportId): \FriendsOfCE\Merchant\ApiClient\Model\MerchantGetReportStatusResponse
```

Check report status

Check report status using report Id.<br />There are four statuses of report:<br />IN_PROGRESS - creating report didn't finish yet,<br />DONE - report is done,<br />FAILED - creating report was failed, it is not available,<br />NOT_FOUND - cannot found such reportId.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\ReportApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$reportId = 'reportId_example'; // string | 

try {
    $result = $apiInstance->reportGetStatus($reportId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportApi->reportGetStatus: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **reportId** | **string**|  | |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\MerchantGetReportStatusResponse**](../Model/MerchantGetReportStatusResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
