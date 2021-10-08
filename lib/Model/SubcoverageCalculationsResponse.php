<?php
/**
 * SubcoverageCalculationsResponse
 *
 * PHP version 7.3
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Xactimate One API
 *
 * The Xactimate One API allows you to integrate your current services and applications directly with Xactimate One. It creates a seamless experience for your company as it manages claims with your internal software by sending and receiving data from the Xactimate One platform.
 *
 * The version of the OpenAPI document: 1.0.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.3.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * SubcoverageCalculationsResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class SubcoverageCalculationsResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubcoverageCalculationsResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'deductible' => '\OpenAPI\Client\Model\DeductibleResponse',
        'line_items' => '\OpenAPI\Client\Model\LineItemsCalculationsResponse',
        'per_occurence_limit_usage' => '\OpenAPI\Client\Model\UsageBreakdownResponse',
        'subcoverage_id' => 'string',
        'sublimits' => '\OpenAPI\Client\Model\SublimitCalculationsResponse[]',
        'subtotal' => '\OpenAPI\Client\Model\TotalBreakdownResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'deductible' => null,
        'line_items' => null,
        'per_occurence_limit_usage' => null,
        'subcoverage_id' => 'uuid',
        'sublimits' => null,
        'subtotal' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'deductible' => 'deductible',
        'line_items' => 'lineItems',
        'per_occurence_limit_usage' => 'perOccurenceLimitUsage',
        'subcoverage_id' => 'subcoverageId',
        'sublimits' => 'sublimits',
        'subtotal' => 'subtotal'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'deductible' => 'setDeductible',
        'line_items' => 'setLineItems',
        'per_occurence_limit_usage' => 'setPerOccurenceLimitUsage',
        'subcoverage_id' => 'setSubcoverageId',
        'sublimits' => 'setSublimits',
        'subtotal' => 'setSubtotal'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'deductible' => 'getDeductible',
        'line_items' => 'getLineItems',
        'per_occurence_limit_usage' => 'getPerOccurenceLimitUsage',
        'subcoverage_id' => 'getSubcoverageId',
        'sublimits' => 'getSublimits',
        'subtotal' => 'getSubtotal'
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
        $this->container['deductible'] = $data['deductible'] ?? null;
        $this->container['line_items'] = $data['line_items'] ?? null;
        $this->container['per_occurence_limit_usage'] = $data['per_occurence_limit_usage'] ?? null;
        $this->container['subcoverage_id'] = $data['subcoverage_id'] ?? null;
        $this->container['sublimits'] = $data['sublimits'] ?? null;
        $this->container['subtotal'] = $data['subtotal'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['line_items'] === null) {
            $invalidProperties[] = "'line_items' can't be null";
        }
        if ($this->container['subcoverage_id'] === null) {
            $invalidProperties[] = "'subcoverage_id' can't be null";
        }
        if ($this->container['sublimits'] === null) {
            $invalidProperties[] = "'sublimits' can't be null";
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
     * Gets deductible
     *
     * @return \OpenAPI\Client\Model\DeductibleResponse|null
     */
    public function getDeductible()
    {
        return $this->container['deductible'];
    }

    /**
     * Sets deductible
     *
     * @param \OpenAPI\Client\Model\DeductibleResponse|null $deductible deductible
     *
     * @return self
     */
    public function setDeductible($deductible)
    {
        $this->container['deductible'] = $deductible;

        return $this;
    }

    /**
     * Gets line_items
     *
     * @return \OpenAPI\Client\Model\LineItemsCalculationsResponse
     */
    public function getLineItems()
    {
        return $this->container['line_items'];
    }

    /**
     * Sets line_items
     *
     * @param \OpenAPI\Client\Model\LineItemsCalculationsResponse $line_items line_items
     *
     * @return self
     */
    public function setLineItems($line_items)
    {
        $this->container['line_items'] = $line_items;

        return $this;
    }

    /**
     * Gets per_occurence_limit_usage
     *
     * @return \OpenAPI\Client\Model\UsageBreakdownResponse|null
     */
    public function getPerOccurenceLimitUsage()
    {
        return $this->container['per_occurence_limit_usage'];
    }

    /**
     * Sets per_occurence_limit_usage
     *
     * @param \OpenAPI\Client\Model\UsageBreakdownResponse|null $per_occurence_limit_usage per_occurence_limit_usage
     *
     * @return self
     */
    public function setPerOccurenceLimitUsage($per_occurence_limit_usage)
    {
        $this->container['per_occurence_limit_usage'] = $per_occurence_limit_usage;

        return $this;
    }

    /**
     * Gets subcoverage_id
     *
     * @return string
     */
    public function getSubcoverageId()
    {
        return $this->container['subcoverage_id'];
    }

    /**
     * Sets subcoverage_id
     *
     * @param string $subcoverage_id The subcoverage id.
     *
     * @return self
     */
    public function setSubcoverageId($subcoverage_id)
    {
        $this->container['subcoverage_id'] = $subcoverage_id;

        return $this;
    }

    /**
     * Gets sublimits
     *
     * @return \OpenAPI\Client\Model\SublimitCalculationsResponse[]
     */
    public function getSublimits()
    {
        return $this->container['sublimits'];
    }

    /**
     * Sets sublimits
     *
     * @param \OpenAPI\Client\Model\SublimitCalculationsResponse[] $sublimits The sublimits.
     *
     * @return self
     */
    public function setSublimits($sublimits)
    {
        $this->container['sublimits'] = $sublimits;

        return $this;
    }

    /**
     * Gets subtotal
     *
     * @return \OpenAPI\Client\Model\TotalBreakdownResponse|null
     */
    public function getSubtotal()
    {
        return $this->container['subtotal'];
    }

    /**
     * Sets subtotal
     *
     * @param \OpenAPI\Client\Model\TotalBreakdownResponse|null $subtotal subtotal
     *
     * @return self
     */
    public function setSubtotal($subtotal)
    {
        $this->container['subtotal'] = $subtotal;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
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
    public function offsetSet($offset, $value)
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
    public function offsetUnset($offset)
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

