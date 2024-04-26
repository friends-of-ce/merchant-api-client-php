<?php
/**
 * PurchaseOrderIdentifierType
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * ChannelEngine Merchant API
 *
 * ChannelEngine API for merchants
 *
 * The version of the OpenAPI document: 2.14.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Merchant\ApiClient\Model;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * PurchaseOrderIdentifierType Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PurchaseOrderIdentifierType
{
    /**
     * Possible values of this enum
     */
    public const PURCHASE_ORDER_ID = 'PURCHASE_ORDER_ID';

    public const CHANNEL_PURCHASE_ORDER_NO = 'CHANNEL_PURCHASE_ORDER_NO';

    public const MERCHANT_PURCHASE_ORDER_NO = 'MERCHANT_PURCHASE_ORDER_NO';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::PURCHASE_ORDER_ID,
            self::CHANNEL_PURCHASE_ORDER_NO,
            self::MERCHANT_PURCHASE_ORDER_NO
        ];
    }
}


