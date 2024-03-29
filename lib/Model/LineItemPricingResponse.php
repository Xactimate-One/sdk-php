<?php
/**
 * LineItemPricingResponse
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
 * LineItemPricingResponse Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class LineItemPricingResponse implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'LineItemPricingResponse';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cost' => '\OpenAPI\Client\Model\DepreciatedCostBreakdownResponse',
        'depreciation_percentage' => 'double',
        'grand_total' => '\OpenAPI\Client\Model\DepreciatedCostBreakdownResponse',
        'subactivities' => '\OpenAPI\Client\Model\LineItemActivityPricingResponse[]',
        'taxes' => '\OpenAPI\Client\Model\DepreciatedCostBreakdownResponse',
        'unit_cost' => '\OpenAPI\Client\Model\DepreciatedCostBreakdownResponse'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cost' => null,
        'depreciation_percentage' => 'double',
        'grand_total' => null,
        'subactivities' => null,
        'taxes' => null,
        'unit_cost' => null
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
        'cost' => 'cost',
        'depreciation_percentage' => 'depreciationPercentage',
        'grand_total' => 'grandTotal',
        'subactivities' => 'subactivities',
        'taxes' => 'taxes',
        'unit_cost' => 'unitCost'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cost' => 'setCost',
        'depreciation_percentage' => 'setDepreciationPercentage',
        'grand_total' => 'setGrandTotal',
        'subactivities' => 'setSubactivities',
        'taxes' => 'setTaxes',
        'unit_cost' => 'setUnitCost'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cost' => 'getCost',
        'depreciation_percentage' => 'getDepreciationPercentage',
        'grand_total' => 'getGrandTotal',
        'subactivities' => 'getSubactivities',
        'taxes' => 'getTaxes',
        'unit_cost' => 'getUnitCost'
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
        $this->container['cost'] = $data['cost'] ?? null;
        $this->container['depreciation_percentage'] = $data['depreciation_percentage'] ?? null;
        $this->container['grand_total'] = $data['grand_total'] ?? null;
        $this->container['subactivities'] = $data['subactivities'] ?? null;
        $this->container['taxes'] = $data['taxes'] ?? null;
        $this->container['unit_cost'] = $data['unit_cost'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['cost'] === null) {
            $invalidProperties[] = "'cost' can't be null";
        }
        if ($this->container['grand_total'] === null) {
            $invalidProperties[] = "'grand_total' can't be null";
        }
        if ($this->container['subactivities'] === null) {
            $invalidProperties[] = "'subactivities' can't be null";
        }
        if ($this->container['taxes'] === null) {
            $invalidProperties[] = "'taxes' can't be null";
        }
        if ($this->container['unit_cost'] === null) {
            $invalidProperties[] = "'unit_cost' can't be null";
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
     * Gets cost
     *
     * @return \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse
     */
    public function getCost()
    {
        return $this->container['cost'];
    }

    /**
     * Sets cost
     *
     * @param \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse $cost cost
     *
     * @return self
     */
    public function setCost($cost)
    {
        $this->container['cost'] = $cost;

        return $this;
    }

    /**
     * Gets depreciation_percentage
     *
     * @return double|null
     */
    public function getDepreciationPercentage()
    {
        return $this->container['depreciation_percentage'];
    }

    /**
     * Sets depreciation_percentage
     *
     * @param double|null $depreciation_percentage The percentage of depreciation applied, if any.
     *
     * @return self
     */
    public function setDepreciationPercentage($depreciation_percentage)
    {
        $this->container['depreciation_percentage'] = $depreciation_percentage;

        return $this;
    }

    /**
     * Gets grand_total
     *
     * @return \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse
     */
    public function getGrandTotal()
    {
        return $this->container['grand_total'];
    }

    /**
     * Sets grand_total
     *
     * @param \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse $grand_total grand_total
     *
     * @return self
     */
    public function setGrandTotal($grand_total)
    {
        $this->container['grand_total'] = $grand_total;

        return $this;
    }

    /**
     * Gets subactivities
     *
     * @return \OpenAPI\Client\Model\LineItemActivityPricingResponse[]
     */
    public function getSubactivities()
    {
        return $this->container['subactivities'];
    }

    /**
     * Sets subactivities
     *
     * @param \OpenAPI\Client\Model\LineItemActivityPricingResponse[] $subactivities The pricing of various activities the line item contains.
     *
     * @return self
     */
    public function setSubactivities($subactivities)
    {
        $this->container['subactivities'] = $subactivities;

        return $this;
    }

    /**
     * Gets taxes
     *
     * @return \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse
     */
    public function getTaxes()
    {
        return $this->container['taxes'];
    }

    /**
     * Sets taxes
     *
     * @param \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse $taxes taxes
     *
     * @return self
     */
    public function setTaxes($taxes)
    {
        $this->container['taxes'] = $taxes;

        return $this;
    }

    /**
     * Gets unit_cost
     *
     * @return \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse
     */
    public function getUnitCost()
    {
        return $this->container['unit_cost'];
    }

    /**
     * Sets unit_cost
     *
     * @param \OpenAPI\Client\Model\DepreciatedCostBreakdownResponse $unit_cost unit_cost
     *
     * @return self
     */
    public function setUnitCost($unit_cost)
    {
        $this->container['unit_cost'] = $unit_cost;

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


