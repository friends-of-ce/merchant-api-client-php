<?php
/**
 * ReportType
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
 * ReportType Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReportType
{
    /**
     * Possible values of this enum
     */
    public const SUMMARY = 'SUMMARY';

    public const DETAILED = 'DETAILED';

    public const CUSTOM_JSON = 'CUSTOM_JSON';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::SUMMARY,
            self::DETAILED,
            self::CUSTOM_JSON
        ];
    }
}


