# # MerchantProductBundleRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**merchantProductNo** | **string** | A unique identifier of the new product bundle. (sku). |
**ean** | **string** | The EAN of GTIN of the product bundle. It cannot be associated with an existing product unless it is already an EAN of a multipack. |
**name** | **string** | The name of the bundle. |
**description** | **string** | A description of the bundle. Can contain these HTML tags:  div, span, pre, p, br, hr, hgroup, h1, h2, h3, h4, h5, h6, ul, ol, li, dl, dt, dd, strong, em, b, i, u, img, a, abbr, address, blockquote, area, audio, video, caption, table, tbody, td, tfoot, th, thead, tr. | [optional]
**copyAttributesFrom** | **string** | The unique merchant product number to copy the product attributes from for the bundle.  It must be a product that is contained in **Parts** | [optional]
**copyCustomFields** | **bool** | The boolean indicator to copy the custom fields from the merchant product number where the attributes are copied from. | [optional]
**price** | **float** | The price of the bundle. |
**parts** | [**\FriendsOfCE\Merchant\ApiClient\Model\MerchantProductBundlePartRequest[]**](MerchantProductBundlePartRequest.md) | The array for the parts making up the bundle |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
