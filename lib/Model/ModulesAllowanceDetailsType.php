<?php
/**
 * ModulesAllowanceDetailsType
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
 * ModulesAllowanceDetailsType Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ModulesAllowanceDetailsType
{
    /**
     * Possible values of this enum
     */
    public const DISCOUNT = 'DISCOUNT';

    public const DISCOUNT_INCENTIVE = 'DISCOUNT_INCENTIVE';

    public const DEFECTIVE = 'DEFECTIVE';

    public const PROMOTIONAL = 'PROMOTIONAL';

    public const UNSALEABLE_MERCHANDISE = 'UNSALEABLE_MERCHANDISE';

    public const SPECIAL = 'SPECIAL';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::DISCOUNT,
            self::DISCOUNT_INCENTIVE,
            self::DEFECTIVE,
            self::PROMOTIONAL,
            self::UNSALEABLE_MERCHANDISE,
            self::SPECIAL
        ];
    }
}


