<?php
/**
 * ClaimCreateRequest
 *
 * PHP version 7.2
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
 * The version of the OpenAPI document: null
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 5.2.0-SNAPSHOT
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
 * ClaimCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ClaimCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ClaimCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'claim_manager_email' => 'string',
        'claim_number' => 'string',
        'claim_template_id' => 'string',
        'loss' => '\OpenAPI\Client\Model\LossCreateRequest',
        'name' => 'string',
        'policy' => '\OpenAPI\Client\Model\ICoverageOrSublimitV1RequestIPolicyCreateRequest',
        'reference_number' => 'string',
        'stakeholders' => '\OpenAPI\Client\Model\ClaimCreateStakeholderCreateRequest[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'claim_manager_email' => 'email',
        'claim_number' => null,
        'claim_template_id' => 'uuid',
        'loss' => null,
        'name' => null,
        'policy' => null,
        'reference_number' => null,
        'stakeholders' => null
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
        'claim_manager_email' => 'claimManagerEmail',
        'claim_number' => 'claimNumber',
        'claim_template_id' => 'claimTemplateId',
        'loss' => 'loss',
        'name' => 'name',
        'policy' => 'policy',
        'reference_number' => 'referenceNumber',
        'stakeholders' => 'stakeholders'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'claim_manager_email' => 'setClaimManagerEmail',
        'claim_number' => 'setClaimNumber',
        'claim_template_id' => 'setClaimTemplateId',
        'loss' => 'setLoss',
        'name' => 'setName',
        'policy' => 'setPolicy',
        'reference_number' => 'setReferenceNumber',
        'stakeholders' => 'setStakeholders'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'claim_manager_email' => 'getClaimManagerEmail',
        'claim_number' => 'getClaimNumber',
        'claim_template_id' => 'getClaimTemplateId',
        'loss' => 'getLoss',
        'name' => 'getName',
        'policy' => 'getPolicy',
        'reference_number' => 'getReferenceNumber',
        'stakeholders' => 'getStakeholders'
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
        $this->container['claim_manager_email'] = $data['claim_manager_email'] ?? null;
        $this->container['claim_number'] = $data['claim_number'] ?? null;
        $this->container['claim_template_id'] = $data['claim_template_id'] ?? null;
        $this->container['loss'] = $data['loss'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['policy'] = $data['policy'] ?? null;
        $this->container['reference_number'] = $data['reference_number'] ?? null;
        $this->container['stakeholders'] = $data['stakeholders'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['claim_manager_email'] === null) {
            $invalidProperties[] = "'claim_manager_email' can't be null";
        }
        if ($this->container['claim_template_id'] === null) {
            $invalidProperties[] = "'claim_template_id' can't be null";
        }
        if ($this->container['loss'] === null) {
            $invalidProperties[] = "'loss' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['policy'] === null) {
            $invalidProperties[] = "'policy' can't be null";
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
     * Gets claim_manager_email
     *
     * @return string
     */
    public function getClaimManagerEmail()
    {
        return $this->container['claim_manager_email'];
    }

    /**
     * Sets claim_manager_email
     *
     * @param string $claim_manager_email The email address of the claim manager
     *
     * @return self
     */
    public function setClaimManagerEmail($claim_manager_email)
    {
        $this->container['claim_manager_email'] = $claim_manager_email;

        return $this;
    }

    /**
     * Gets claim_number
     *
     * @return string|null
     */
    public function getClaimNumber()
    {
        return $this->container['claim_number'];
    }

    /**
     * Sets claim_number
     *
     * @param string|null $claim_number The claim number
     *
     * @return self
     */
    public function setClaimNumber($claim_number)
    {
        $this->container['claim_number'] = $claim_number;

        return $this;
    }

    /**
     * Gets claim_template_id
     *
     * @return string
     */
    public function getClaimTemplateId()
    {
        return $this->container['claim_template_id'];
    }

    /**
     * Sets claim_template_id
     *
     * @param string $claim_template_id The claim template id
     *
     * @return self
     */
    public function setClaimTemplateId($claim_template_id)
    {
        $this->container['claim_template_id'] = $claim_template_id;

        return $this;
    }

    /**
     * Gets loss
     *
     * @return \OpenAPI\Client\Model\LossCreateRequest
     */
    public function getLoss()
    {
        return $this->container['loss'];
    }

    /**
     * Sets loss
     *
     * @param \OpenAPI\Client\Model\LossCreateRequest $loss loss
     *
     * @return self
     */
    public function setLoss($loss)
    {
        $this->container['loss'] = $loss;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The claim name
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets policy
     *
     * @return \OpenAPI\Client\Model\ICoverageOrSublimitV1RequestIPolicyCreateRequest
     */
    public function getPolicy()
    {
        return $this->container['policy'];
    }

    /**
     * Sets policy
     *
     * @param \OpenAPI\Client\Model\ICoverageOrSublimitV1RequestIPolicyCreateRequest $policy policy
     *
     * @return self
     */
    public function setPolicy($policy)
    {
        $this->container['policy'] = $policy;

        return $this;
    }

    /**
     * Gets reference_number
     *
     * @return string|null
     */
    public function getReferenceNumber()
    {
        return $this->container['reference_number'];
    }

    /**
     * Sets reference_number
     *
     * @param string|null $reference_number The reference number
     *
     * @return self
     */
    public function setReferenceNumber($reference_number)
    {
        $this->container['reference_number'] = $reference_number;

        return $this;
    }

    /**
     * Gets stakeholders
     *
     * @return \OpenAPI\Client\Model\ClaimCreateStakeholderCreateRequest[]|null
     */
    public function getStakeholders()
    {
        return $this->container['stakeholders'];
    }

    /**
     * Sets stakeholders
     *
     * @param \OpenAPI\Client\Model\ClaimCreateStakeholderCreateRequest[]|null $stakeholders The stakeholders
     *
     * @return self
     */
    public function setStakeholders($stakeholders)
    {
        $this->container['stakeholders'] = $stakeholders;

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


