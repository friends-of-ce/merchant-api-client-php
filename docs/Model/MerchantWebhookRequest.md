# # MerchantWebhookRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The unique name of a webhook. |
**url** | **string** | The callback URL used by a webhook. E.g.: https://test-store.com/callback. |
**isActive** | **bool** | Determines if a webhook is active, and callbacks should proceed. | [optional]
**events** | [**\FriendsOfCE\Merchant\ApiClient\Model\WebhookEventType[]**](WebhookEventType.md) | The events supported by the webhook. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
