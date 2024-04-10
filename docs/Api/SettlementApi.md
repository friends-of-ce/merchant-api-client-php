# FriendsOfCE\Merchant\ApiClient\SettlementApi

All URIs are relative to https://demo.channelengine.net/api, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**settlementGetByFilter()**](SettlementApi.md#settlementGetByFilter) | **GET** /v2/settlements | Gets settlements |
| [**settlementUploadSettlement()**](SettlementApi.md#settlementUploadSettlement) | **POST** /v2/settlements/upload | Imports a settlement file. |


## `settlementGetByFilter()`

```php
settlementGetByFilter($unExportedOnly, $settlementIds, $channelSettlementNos, $channelIds, $fromStartDate, $toStartDate, $fromEndDate, $toEndDate, $fromCreateDate, $toCreateDate, $fromUpdateDate, $toUpdateDate, $page): \FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantSettlementReportsResponse
```

Gets settlements

Gets the settlements based on the available filters.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unExportedOnly = True; // bool | Filter on settlements that have not been exported before.
$settlementIds = array(56); // int[] | Filter on settlement IDs.
$channelSettlementNos = array('channelSettlementNos_example'); // string[] | Filter on channel settlement nos.
$channelIds = array(56); // int[] | Filter on channel id list.
$fromStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive.
$toStartDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive.
$fromEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the end date of the settlement in ChannelEngine, starting from this date. This date is inclusive.
$toEndDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the end date of the settlement in ChannelEngine, until this date. This date is exclusive.
$fromCreateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive.
$toCreateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive.
$fromUpdateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the settlement in ChannelEngine, starting from this date. This date is inclusive.
$toUpdateDate = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter on the update date of the settlement in ChannelEngine, until this date. This date is exclusive.
$page = 56; // int | The page to filter on. Starts at 1.

try {
    $result = $apiInstance->settlementGetByFilter($unExportedOnly, $settlementIds, $channelSettlementNos, $channelIds, $fromStartDate, $toStartDate, $fromEndDate, $toEndDate, $fromCreateDate, $toCreateDate, $fromUpdateDate, $toUpdateDate, $page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->settlementGetByFilter: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **unExportedOnly** | **bool**| Filter on settlements that have not been exported before. | [optional] |
| **settlementIds** | [**int[]**](../Model/int.md)| Filter on settlement IDs. | [optional] |
| **channelSettlementNos** | [**string[]**](../Model/string.md)| Filter on channel settlement nos. | [optional] |
| **channelIds** | [**int[]**](../Model/int.md)| Filter on channel id list. | [optional] |
| **fromStartDate** | **\DateTime**| Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **toStartDate** | **\DateTime**| Filter on the start date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fromEndDate** | **\DateTime**| Filter on the end date of the settlement in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **toEndDate** | **\DateTime**| Filter on the end date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fromCreateDate** | **\DateTime**| Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **toCreateDate** | **\DateTime**| Filter on the create date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **fromUpdateDate** | **\DateTime**| Filter on the update date of the settlement in ChannelEngine, starting from this date. This date is inclusive. | [optional] |
| **toUpdateDate** | **\DateTime**| Filter on the update date of the settlement in ChannelEngine, until this date. This date is exclusive. | [optional] |
| **page** | **int**| The page to filter on. Starts at 1. | [optional] |

### Return type

[**\FriendsOfCE\Merchant\ApiClient\Model\CollectionOfMerchantSettlementReportsResponse**](../Model/CollectionOfMerchantSettlementReportsResponse.md)

### Authorization

[apiKey](../../README.md#apiKey)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `settlementUploadSettlement()`

```php
settlementUploadSettlement($settlement, $channelId): \FriendsOfCE\Merchant\ApiClient\Model\ApiResponse
```

Imports a settlement file.

Imports a settlement file.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure API key authorization: apiKey
$config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKey('apikey', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = FriendsOfCE\Merchant\ApiClient\Configuration::getDefaultConfiguration()->setApiKeyPrefix('apikey', 'Bearer');


$apiInstance = new FriendsOfCE\Merchant\ApiClient\Api\SettlementApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$settlement = "/path/to/file.txt"; // \SplFileObject | Settlement file up to 1 MB with additional data.  Format should be the one that the channel expects.
$channelId = 56; // int | The channel ID for which the settlement is for.

try {
    $result = $apiInstance->settlementUploadSettlement($settlement, $channelId);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SettlementApi->settlementUploadSettlement: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **settlement** | **\SplFileObject****\SplFileObject**| Settlement file up to 1 MB with additional data.  Format should be the one that the channel expects. | |
| **channelId** | **int**| The channel ID for which the settlement is for. | [optional] |

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
