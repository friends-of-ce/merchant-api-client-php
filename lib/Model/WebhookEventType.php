<?php
/**
 * WebhookEventType
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
 * The version of the OpenAPI document: 2.15.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Merchant\ApiClient\Model;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * WebhookEventType Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class WebhookEventType
{
    /**
     * Possible values of this enum
     */
    public const ORDERS_CREATE = 'ORDERS_CREATE';

    public const PRODUCTS_CHANGE = 'PRODUCTS_CHANGE';

    public const RETURNS_CHANGE = 'RETURNS_CHANGE';

    public const SHIPMENTS_CHANGE = 'SHIPMENTS_CHANGE';

    public const NOTIFICATIONS_CREATE = 'NOTIFICATIONS_CREATE';

    public const BUNDLE_PRODUCTS_CHANGE = 'BUNDLE_PRODUCTS_CHANGE';

    public const ORDERS_CHANGE = 'ORDERS_CHANGE';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::ORDERS_CREATE,
            self::PRODUCTS_CHANGE,
            self::RETURNS_CHANGE,
            self::SHIPMENTS_CHANGE,
            self::NOTIFICATIONS_CREATE,
            self::BUNDLE_PRODUCTS_CHANGE,
            self::ORDERS_CHANGE
        ];
    }
}


