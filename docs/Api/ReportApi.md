# FriendsOfCE\Merchant\ApiClient\ReportApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**reportCreateSettlementsReport()**](ReportApi.md#reportCreateSettlementsReport) | **POST** /v2/reports/settlements | Creates a settlement report |
| [**reportGetReport()**](ReportApi.md#reportGetReport) | **GET** /v2/reports/{reportId} | Gets a settlement report |
| [**reportGetStatus()**](ReportApi.md#reportGetStatus) | **GET** /v2/reports/{reportId}/status | Gets the status of a settlement report |


## `reportCreateSettlementsReport()`

```php
reportCreateSettlementsReport($merchantCreateSettlementsReportRequest): \FriendsOfCE\Merchant\ApiClient\Model\MerchantCreateReportResponse
```

Creates a settlement report

Creates a settlement report based on the **Settlement ID** provided. There are two types of reports:<br />**SUMMARY** - a high level financial overview.<br />**DETAILED** - a detailed report containing all transactions.<br /> <br />**NB:** depending on the number of transactions within the settlement, it can take a few minutes for the report to be generated.

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

Gets a settlement report

Gets a settlement report based on the **Report ID** provided. The generated report is a CSV file with a semicolon (;) as a delimiter.<br />If a field has a comma (,) then it is enclosed in quotes (\"\").

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

Gets the status of a settlement report

Returns a report status based on the **Report ID** provided. There are four statuses:<br />**IN_PROGRESS** - the report is still being created.<br />**DONE** - the report has been created.<br />**FAILED** - the report creation failed.<br />**NOT_FOUND** - the Report ID was not found.<br /> <br />**NB:** if the status is **DONE**, the response contains a URL with a download path.

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
