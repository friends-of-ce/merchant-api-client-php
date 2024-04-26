<?php
/**
 * IImportInformation
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

use \ArrayAccess;
use \FriendsOfCE\Merchant\ApiClient\ObjectSerializer;

/**
 * IImportInformation Class Doc Comment
 *
 * @category Class
 * @package  FriendsOfCE\Merchant\ApiClient
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class IImportInformation implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'IImportInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'importContainers' => 'string',
        'internationalCommercialTerms' => 'string',
        'methodOfPayment' => 'string',
        'portOfDelivery' => 'string',
        'shippingInstructions' => 'string',
        'dealCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'importContainers' => null,
        'internationalCommercialTerms' => null,
        'methodOfPayment' => null,
        'portOfDelivery' => null,
        'shippingInstructions' => null,
        'dealCode' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'importContainers' => true,
		'internationalCommercialTerms' => true,
		'methodOfPayment' => true,
		'portOfDelivery' => true,
		'shippingInstructions' => true,
		'dealCode' => true
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
        'importContainers' => 'ImportContainers',
        'internationalCommercialTerms' => 'InternationalCommercialTerms',
        'methodOfPayment' => 'MethodOfPayment',
        'portOfDelivery' => 'PortOfDelivery',
        'shippingInstructions' => 'ShippingInstructions',
        'dealCode' => 'DealCode'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'importContainers' => 'setImportContainers',
        'internationalCommercialTerms' => 'setInternationalCommercialTerms',
        'methodOfPayment' => 'setMethodOfPayment',
        'portOfDelivery' => 'setPortOfDelivery',
        'shippingInstructions' => 'setShippingInstructions',
        'dealCode' => 'setDealCode'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'importContainers' => 'getImportContainers',
        'internationalCommercialTerms' => 'getInternationalCommercialTerms',
        'methodOfPayment' => 'getMethodOfPayment',
        'portOfDelivery' => 'getPortOfDelivery',
        'shippingInstructions' => 'getShippingInstructions',
        'dealCode' => 'getDealCode'
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
        $this->setIfExists('importContainers', $data ?? [], null);
        $this->setIfExists('internationalCommercialTerms', $data ?? [], null);
        $this->setIfExists('methodOfPayment', $data ?? [], null);
        $this->setIfExists('portOfDelivery', $data ?? [], null);
        $this->setIfExists('shippingInstructions', $data ?? [], null);
        $this->setIfExists('dealCode', $data ?? [], null);
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
     * Gets importContainers
     *
     * @return string|null
     */
    public function getImportContainers()
    {
        return $this->container['importContainers'];
    }

    /**
     * Sets importContainers
     *
     * @param string|null $importContainers importContainers
     *
     * @return self
     */
    public function setImportContainers($importContainers)
    {
        if (is_null($importContainers)) {
            array_push($this->openAPINullablesSetToNull, 'importContainers');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('importContainers', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['importContainers'] = $importContainers;

        return $this;
    }

    /**
     * Gets internationalCommercialTerms
     *
     * @return string|null
     */
    public function getInternationalCommercialTerms()
    {
        return $this->container['internationalCommercialTerms'];
    }

    /**
     * Sets internationalCommercialTerms
     *
     * @param string|null $internationalCommercialTerms internationalCommercialTerms
     *
     * @return self
     */
    public function setInternationalCommercialTerms($internationalCommercialTerms)
    {
        if (is_null($internationalCommercialTerms)) {
            array_push($this->openAPINullablesSetToNull, 'internationalCommercialTerms');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('internationalCommercialTerms', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['internationalCommercialTerms'] = $internationalCommercialTerms;

        return $this;
    }

    /**
     * Gets methodOfPayment
     *
     * @return string|null
     */
    public function getMethodOfPayment()
    {
        return $this->container['methodOfPayment'];
    }

    /**
     * Sets methodOfPayment
     *
     * @param string|null $methodOfPayment methodOfPayment
     *
     * @return self
     */
    public function setMethodOfPayment($methodOfPayment)
    {
        if (is_null($methodOfPayment)) {
            array_push($this->openAPINullablesSetToNull, 'methodOfPayment');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('methodOfPayment', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['methodOfPayment'] = $methodOfPayment;

        return $this;
    }

    /**
     * Gets portOfDelivery
     *
     * @return string|null
     */
    public function getPortOfDelivery()
    {
        return $this->container['portOfDelivery'];
    }

    /**
     * Sets portOfDelivery
     *
     * @param string|null $portOfDelivery portOfDelivery
     *
     * @return self
     */
    public function setPortOfDelivery($portOfDelivery)
    {
        if (is_null($portOfDelivery)) {
            array_push($this->openAPINullablesSetToNull, 'portOfDelivery');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('portOfDelivery', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['portOfDelivery'] = $portOfDelivery;

        return $this;
    }

    /**
     * Gets shippingInstructions
     *
     * @return string|null
     */
    public function getShippingInstructions()
    {
        return $this->container['shippingInstructions'];
    }

    /**
     * Sets shippingInstructions
     *
     * @param string|null $shippingInstructions shippingInstructions
     *
     * @return self
     */
    public function setShippingInstructions($shippingInstructions)
    {
        if (is_null($shippingInstructions)) {
            array_push($this->openAPINullablesSetToNull, 'shippingInstructions');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('shippingInstructions', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['shippingInstructions'] = $shippingInstructions;

        return $this;
    }

    /**
     * Gets dealCode
     *
     * @return string|null
     */
    public function getDealCode()
    {
        return $this->container['dealCode'];
    }

    /**
     * Sets dealCode
     *
     * @param string|null $dealCode dealCode
     *
     * @return self
     */
    public function setDealCode($dealCode)
    {
        if (is_null($dealCode)) {
            array_push($this->openAPINullablesSetToNull, 'dealCode');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('dealCode', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['dealCode'] = $dealCode;

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


