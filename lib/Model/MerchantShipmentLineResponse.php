<?php
/**
 * MerchantShipmentLineResponse
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
 * The version of the OpenAPI document: 2.13.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.1.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace FriendsOfCE\Merchant\ApiClient\Model;

use \ArrayAccess;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * MerchantShipmentLineResponse Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class MerchantShipmentLineResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'MerchantShipmentLineResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'merchantProductNo' => 'string',
        'merchantBundleProductNo' => 'string',
        'channelProductNo' => 'string',
        'orderLine' => '\FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineResponse',
        'shipmentStatus' => '\FriendsOfCE\Merchant\ApiClient\Model\ShipmentLineStatus',
        'extraData' => 'array<string,string>',
        'quantity' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'merchantProductNo' => null,
        'merchantBundleProductNo' => null,
        'channelProductNo' => null,
        'orderLine' => null,
        'shipmentStatus' => null,
        'extraData' => null,
        'quantity' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'merchantProductNo' => false,
		'merchantBundleProductNo' => true,
		'channelProductNo' => true,
		'orderLine' => false,
		'shipmentStatus' => false,
		'extraData' => true,
		'quantity' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'merchantProductNo' => 'MerchantProductNo',
        'merchantBundleProductNo' => 'MerchantBundleProductNo',
        'channelProductNo' => 'ChannelProductNo',
        'orderLine' => 'OrderLine',
        'shipmentStatus' => 'ShipmentStatus',
        'extraData' => 'ExtraData',
        'quantity' => 'Quantity'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'merchantProductNo' => 'setMerchantProductNo',
        'merchantBundleProductNo' => 'setMerchantBundleProductNo',
        'channelProductNo' => 'setChannelProductNo',
        'orderLine' => 'setOrderLine',
        'shipmentStatus' => 'setShipmentStatus',
        'extraData' => 'setExtraData',
        'quantity' => 'setQuantity'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'merchantProductNo' => 'getMerchantProductNo',
        'merchantBundleProductNo' => 'getMerchantBundleProductNo',
        'channelProductNo' => 'getChannelProductNo',
        'orderLine' => 'getOrderLine',
        'shipmentStatus' => 'getShipmentStatus',
        'extraData' => 'getExtraData',
        'quantity' => 'getQuantity'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }


    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('merchantProductNo', $data ?? [], null);
        $this->setIfExists('merchantBundleProductNo', $data ?? [], null);
        $this->setIfExists('channelProductNo', $data ?? [], null);
        $this->setIfExists('orderLine', $data ?? [], null);
        $this->setIfExists('shipmentStatus', $data ?? [], null);
        $this->setIfExists('extraData', $data ?? [], null);
        $this->setIfExists('quantity', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['merchantProductNo'] === null) {
            $invalidProperties[] = "'merchantProductNo' can't be null";
        }
        if ((mb_strlen($this->container['merchantProductNo']) < 1)) {
            $invalidProperties[] = "invalid value for 'merchantProductNo', the character length must be bigger than or equal to 1.";
        }

        if ($this->container['quantity'] === null) {
            $invalidProperties[] = "'quantity' can't be null";
        }
        if (($this->container['quantity'] < 0)) {
            $invalidProperties[] = "invalid value for 'quantity', must be bigger than or equal to 0.";
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets merchantProductNo
     *
     * @return string
     */
    public function getMerchantProductNo()
    {
        return $this->container['merchantProductNo'];
    }

    /**
     * Sets merchantProductNo
     *
     * @param string $merchantProductNo The unique product reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantProductNo($merchantProductNo)
    {
        if (is_null($merchantProductNo)) {
            throw new \InvalidArgumentException('non-nullable merchantProductNo cannot be null');
        }

        if ((mb_strlen($merchantProductNo) < 1)) {
            throw new \InvalidArgumentException('invalid length for $merchantProductNo when calling MerchantShipmentLineResponse., must be bigger than or equal to 1.');
        }

        $this->container['merchantProductNo'] = $merchantProductNo;

        return $this;
    }

    /**
     * Gets merchantBundleProductNo
     *
     * @return string|null
     */
    public function getMerchantBundleProductNo()
    {
        return $this->container['merchantBundleProductNo'];
    }

    /**
     * Sets merchantBundleProductNo
     *
     * @param string|null $merchantBundleProductNo The unique bundle product reference used by the Merchant.
     *
     * @return self
     */
    public function setMerchantBundleProductNo($merchantBundleProductNo)
    {
        if (is_null($merchantBundleProductNo)) {
            array_push($this->openAPINullablesSetToNull, 'merchantBundleProductNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('merchantBundleProductNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['merchantBundleProductNo'] = $merchantBundleProductNo;

        return $this;
    }

    /**
     * Gets channelProductNo
     *
     * @return string|null
     */
    public function getChannelProductNo()
    {
        return $this->container['channelProductNo'];
    }

    /**
     * Sets channelProductNo
     *
     * @param string|null $channelProductNo The unique product reference used by the Channel.
     *
     * @return self
     */
    public function setChannelProductNo($channelProductNo)
    {
        if (is_null($channelProductNo)) {
            array_push($this->openAPINullablesSetToNull, 'channelProductNo');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('channelProductNo', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['channelProductNo'] = $channelProductNo;

        return $this;
    }

    /**
     * Gets orderLine
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineResponse|null
     */
    public function getOrderLine()
    {
        return $this->container['orderLine'];
    }

    /**
     * Sets orderLine
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\MerchantOrderLineResponse|null $orderLine orderLine
     *
     * @return self
     */
    public function setOrderLine($orderLine)
    {
        if (is_null($orderLine)) {
            throw new \InvalidArgumentException('non-nullable orderLine cannot be null');
        }
        $this->container['orderLine'] = $orderLine;

        return $this;
    }

    /**
     * Gets shipmentStatus
     *
     * @return \FriendsOfCE\Merchant\ApiClient\Model\ShipmentLineStatus|null
     */
    public function getShipmentStatus()
    {
        return $this->container['shipmentStatus'];
    }

    /**
     * Sets shipmentStatus
     *
     * @param \FriendsOfCE\Merchant\ApiClient\Model\ShipmentLineStatus|null $shipmentStatus shipmentStatus
     *
     * @return self
     */
    public function setShipmentStatus($shipmentStatus)
    {
        if (is_null($shipmentStatus)) {
            throw new \InvalidArgumentException('non-nullable shipmentStatus cannot be null');
        }
        $this->container['shipmentStatus'] = $shipmentStatus;

        return $this;
    }

    /**
     * Gets extraData
     *
     * @return array<string,string>|null
     */
    public function getExtraData()
    {
        return $this->container['extraData'];
    }

    /**
     * Sets extraData
     *
     * @param array<string,string>|null $extraData Extra data on the shipment line. Each item must have an unqiue key
     *
     * @return self
     */
    public function setExtraData($extraData)
    {
        if (is_null($extraData)) {
            array_push($this->openAPINullablesSetToNull, 'extraData');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('extraData', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['extraData'] = $extraData;

        return $this;
    }

    /**
     * Gets quantity
     *
     * @return int
     */
    public function getQuantity()
    {
        return $this->container['quantity'];
    }

    /**
     * Sets quantity
     *
     * @param int $quantity Number of items of the product in the shipment.
     *
     * @return self
     */
    public function setQuantity($quantity)
    {
        if (is_null($quantity)) {
            throw new \InvalidArgumentException('non-nullable quantity cannot be null');
        }

        if (($quantity < 0)) {
            throw new \InvalidArgumentException('invalid value for $quantity when calling MerchantShipmentLineResponse., must be bigger than or equal to 0.');
        }

        $this->container['quantity'] = $quantity;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


