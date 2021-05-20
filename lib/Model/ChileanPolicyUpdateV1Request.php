<?php
/**
 * ChileanPolicyUpdateV1Request
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
 * ChileanPolicyUpdateV1Request Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ChileanPolicyUpdateV1Request implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ChileanPolicyUpdateV1Request';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'apply_deductible_across_all_coverages' => 'bool',
        'beneficiary_stakeholder_ids' => 'string[]',
        'broker_stakeholder_id' => 'string',
        'country' => 'string',
        'coverages' => '\OpenAPI\Client\Model\IChileanCoverageOrSublimitV1Request[]',
        'currency' => 'string',
        'deductible' => '\OpenAPI\Client\Model\DeductibleV1Request',
        'effective_date' => '\DateTime',
        'expiration_date' => '\DateTime',
        'inception_date' => '\DateTime',
        'insured_stakeholder_ids' => 'string[]',
        'insurer_stakeholder_id' => 'string',
        'item_number' => 'int',
        'mortgages' => '\OpenAPI\Client\Model\MortgageV1Request[]',
        'onsite_contact_stakeholder_id' => 'string',
        'policy_number' => 'string',
        'policy_owner_stakeholder_id' => 'string',
        'risk_address' => '\OpenAPI\Client\Model\AddressV1Request'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'apply_deductible_across_all_coverages' => null,
        'beneficiary_stakeholder_ids' => 'uuid',
        'broker_stakeholder_id' => 'uuid',
        'country' => null,
        'coverages' => null,
        'currency' => null,
        'deductible' => null,
        'effective_date' => 'date-time',
        'expiration_date' => 'date-time',
        'inception_date' => 'date-time',
        'insured_stakeholder_ids' => 'uuid',
        'insurer_stakeholder_id' => 'uuid',
        'item_number' => 'int32',
        'mortgages' => null,
        'onsite_contact_stakeholder_id' => 'uuid',
        'policy_number' => null,
        'policy_owner_stakeholder_id' => 'uuid',
        'risk_address' => null
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
        'apply_deductible_across_all_coverages' => 'applyDeductibleAcrossAllCoverages',
        'beneficiary_stakeholder_ids' => 'beneficiaryStakeholderIds',
        'broker_stakeholder_id' => 'brokerStakeholderId',
        'country' => 'country',
        'coverages' => 'coverages',
        'currency' => 'currency',
        'deductible' => 'deductible',
        'effective_date' => 'effectiveDate',
        'expiration_date' => 'expirationDate',
        'inception_date' => 'inceptionDate',
        'insured_stakeholder_ids' => 'insuredStakeholderIds',
        'insurer_stakeholder_id' => 'insurerStakeholderId',
        'item_number' => 'itemNumber',
        'mortgages' => 'mortgages',
        'onsite_contact_stakeholder_id' => 'onsiteContactStakeholderId',
        'policy_number' => 'policyNumber',
        'policy_owner_stakeholder_id' => 'policyOwnerStakeholderId',
        'risk_address' => 'riskAddress'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'apply_deductible_across_all_coverages' => 'setApplyDeductibleAcrossAllCoverages',
        'beneficiary_stakeholder_ids' => 'setBeneficiaryStakeholderIds',
        'broker_stakeholder_id' => 'setBrokerStakeholderId',
        'country' => 'setCountry',
        'coverages' => 'setCoverages',
        'currency' => 'setCurrency',
        'deductible' => 'setDeductible',
        'effective_date' => 'setEffectiveDate',
        'expiration_date' => 'setExpirationDate',
        'inception_date' => 'setInceptionDate',
        'insured_stakeholder_ids' => 'setInsuredStakeholderIds',
        'insurer_stakeholder_id' => 'setInsurerStakeholderId',
        'item_number' => 'setItemNumber',
        'mortgages' => 'setMortgages',
        'onsite_contact_stakeholder_id' => 'setOnsiteContactStakeholderId',
        'policy_number' => 'setPolicyNumber',
        'policy_owner_stakeholder_id' => 'setPolicyOwnerStakeholderId',
        'risk_address' => 'setRiskAddress'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'apply_deductible_across_all_coverages' => 'getApplyDeductibleAcrossAllCoverages',
        'beneficiary_stakeholder_ids' => 'getBeneficiaryStakeholderIds',
        'broker_stakeholder_id' => 'getBrokerStakeholderId',
        'country' => 'getCountry',
        'coverages' => 'getCoverages',
        'currency' => 'getCurrency',
        'deductible' => 'getDeductible',
        'effective_date' => 'getEffectiveDate',
        'expiration_date' => 'getExpirationDate',
        'inception_date' => 'getInceptionDate',
        'insured_stakeholder_ids' => 'getInsuredStakeholderIds',
        'insurer_stakeholder_id' => 'getInsurerStakeholderId',
        'item_number' => 'getItemNumber',
        'mortgages' => 'getMortgages',
        'onsite_contact_stakeholder_id' => 'getOnsiteContactStakeholderId',
        'policy_number' => 'getPolicyNumber',
        'policy_owner_stakeholder_id' => 'getPolicyOwnerStakeholderId',
        'risk_address' => 'getRiskAddress'
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
        $this->container['apply_deductible_across_all_coverages'] = $data['apply_deductible_across_all_coverages'] ?? null;
        $this->container['beneficiary_stakeholder_ids'] = $data['beneficiary_stakeholder_ids'] ?? null;
        $this->container['broker_stakeholder_id'] = $data['broker_stakeholder_id'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['coverages'] = $data['coverages'] ?? null;
        $this->container['currency'] = $data['currency'] ?? null;
        $this->container['deductible'] = $data['deductible'] ?? null;
        $this->container['effective_date'] = $data['effective_date'] ?? null;
        $this->container['expiration_date'] = $data['expiration_date'] ?? null;
        $this->container['inception_date'] = $data['inception_date'] ?? null;
        $this->container['insured_stakeholder_ids'] = $data['insured_stakeholder_ids'] ?? null;
        $this->container['insurer_stakeholder_id'] = $data['insurer_stakeholder_id'] ?? null;
        $this->container['item_number'] = $data['item_number'] ?? null;
        $this->container['mortgages'] = $data['mortgages'] ?? null;
        $this->container['onsite_contact_stakeholder_id'] = $data['onsite_contact_stakeholder_id'] ?? null;
        $this->container['policy_number'] = $data['policy_number'] ?? null;
        $this->container['policy_owner_stakeholder_id'] = $data['policy_owner_stakeholder_id'] ?? null;
        $this->container['risk_address'] = $data['risk_address'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['country'] === null) {
            $invalidProperties[] = "'country' can't be null";
        }
        if ((mb_strlen($this->container['country']) > 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be smaller than or equal to 2.";
        }

        if ((mb_strlen($this->container['country']) < 2)) {
            $invalidProperties[] = "invalid value for 'country', the character length must be bigger than or equal to 2.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) > 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be smaller than or equal to 3.";
        }

        if (!is_null($this->container['currency']) && (mb_strlen($this->container['currency']) < 3)) {
            $invalidProperties[] = "invalid value for 'currency', the character length must be bigger than or equal to 3.";
        }

        if ($this->container['risk_address'] === null) {
            $invalidProperties[] = "'risk_address' can't be null";
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
     * Gets apply_deductible_across_all_coverages
     *
     * @return bool|null
     */
    public function getApplyDeductibleAcrossAllCoverages()
    {
        return $this->container['apply_deductible_across_all_coverages'];
    }

    /**
     * Sets apply_deductible_across_all_coverages
     *
     * @param bool|null $apply_deductible_across_all_coverages apply_deductible_across_all_coverages
     *
     * @return self
     */
    public function setApplyDeductibleAcrossAllCoverages($apply_deductible_across_all_coverages)
    {
        $this->container['apply_deductible_across_all_coverages'] = $apply_deductible_across_all_coverages;

        return $this;
    }

    /**
     * Gets beneficiary_stakeholder_ids
     *
     * @return string[]|null
     */
    public function getBeneficiaryStakeholderIds()
    {
        return $this->container['beneficiary_stakeholder_ids'];
    }

    /**
     * Sets beneficiary_stakeholder_ids
     *
     * @param string[]|null $beneficiary_stakeholder_ids beneficiary_stakeholder_ids
     *
     * @return self
     */
    public function setBeneficiaryStakeholderIds($beneficiary_stakeholder_ids)
    {
        $this->container['beneficiary_stakeholder_ids'] = $beneficiary_stakeholder_ids;

        return $this;
    }

    /**
     * Gets broker_stakeholder_id
     *
     * @return string|null
     */
    public function getBrokerStakeholderId()
    {
        return $this->container['broker_stakeholder_id'];
    }

    /**
     * Sets broker_stakeholder_id
     *
     * @param string|null $broker_stakeholder_id broker_stakeholder_id
     *
     * @return self
     */
    public function setBrokerStakeholderId($broker_stakeholder_id)
    {
        $this->container['broker_stakeholder_id'] = $broker_stakeholder_id;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string $country country
     *
     * @return self
     */
    public function setCountry($country)
    {
        if ((mb_strlen($country) > 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ChileanPolicyUpdateV1Request., must be smaller than or equal to 2.');
        }
        if ((mb_strlen($country) < 2)) {
            throw new \InvalidArgumentException('invalid length for $country when calling ChileanPolicyUpdateV1Request., must be bigger than or equal to 2.');
        }

        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets coverages
     *
     * @return \OpenAPI\Client\Model\IChileanCoverageOrSublimitV1Request[]|null
     */
    public function getCoverages()
    {
        return $this->container['coverages'];
    }

    /**
     * Sets coverages
     *
     * @param \OpenAPI\Client\Model\IChileanCoverageOrSublimitV1Request[]|null $coverages coverages
     *
     * @return self
     */
    public function setCoverages($coverages)
    {
        $this->container['coverages'] = $coverages;

        return $this;
    }

    /**
     * Gets currency
     *
     * @return string|null
     */
    public function getCurrency()
    {
        return $this->container['currency'];
    }

    /**
     * Sets currency
     *
     * @param string|null $currency currency
     *
     * @return self
     */
    public function setCurrency($currency)
    {
        if (!is_null($currency) && (mb_strlen($currency) > 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ChileanPolicyUpdateV1Request., must be smaller than or equal to 3.');
        }
        if (!is_null($currency) && (mb_strlen($currency) < 3)) {
            throw new \InvalidArgumentException('invalid length for $currency when calling ChileanPolicyUpdateV1Request., must be bigger than or equal to 3.');
        }

        $this->container['currency'] = $currency;

        return $this;
    }

    /**
     * Gets deductible
     *
     * @return \OpenAPI\Client\Model\DeductibleV1Request|null
     */
    public function getDeductible()
    {
        return $this->container['deductible'];
    }

    /**
     * Sets deductible
     *
     * @param \OpenAPI\Client\Model\DeductibleV1Request|null $deductible deductible
     *
     * @return self
     */
    public function setDeductible($deductible)
    {
        $this->container['deductible'] = $deductible;

        return $this;
    }

    /**
     * Gets effective_date
     *
     * @return \DateTime|null
     */
    public function getEffectiveDate()
    {
        return $this->container['effective_date'];
    }

    /**
     * Sets effective_date
     *
     * @param \DateTime|null $effective_date effective_date
     *
     * @return self
     */
    public function setEffectiveDate($effective_date)
    {
        $this->container['effective_date'] = $effective_date;

        return $this;
    }

    /**
     * Gets expiration_date
     *
     * @return \DateTime|null
     */
    public function getExpirationDate()
    {
        return $this->container['expiration_date'];
    }

    /**
     * Sets expiration_date
     *
     * @param \DateTime|null $expiration_date expiration_date
     *
     * @return self
     */
    public function setExpirationDate($expiration_date)
    {
        $this->container['expiration_date'] = $expiration_date;

        return $this;
    }

    /**
     * Gets inception_date
     *
     * @return \DateTime|null
     */
    public function getInceptionDate()
    {
        return $this->container['inception_date'];
    }

    /**
     * Sets inception_date
     *
     * @param \DateTime|null $inception_date inception_date
     *
     * @return self
     */
    public function setInceptionDate($inception_date)
    {
        $this->container['inception_date'] = $inception_date;

        return $this;
    }

    /**
     * Gets insured_stakeholder_ids
     *
     * @return string[]|null
     */
    public function getInsuredStakeholderIds()
    {
        return $this->container['insured_stakeholder_ids'];
    }

    /**
     * Sets insured_stakeholder_ids
     *
     * @param string[]|null $insured_stakeholder_ids insured_stakeholder_ids
     *
     * @return self
     */
    public function setInsuredStakeholderIds($insured_stakeholder_ids)
    {
        $this->container['insured_stakeholder_ids'] = $insured_stakeholder_ids;

        return $this;
    }

    /**
     * Gets insurer_stakeholder_id
     *
     * @return string|null
     */
    public function getInsurerStakeholderId()
    {
        return $this->container['insurer_stakeholder_id'];
    }

    /**
     * Sets insurer_stakeholder_id
     *
     * @param string|null $insurer_stakeholder_id insurer_stakeholder_id
     *
     * @return self
     */
    public function setInsurerStakeholderId($insurer_stakeholder_id)
    {
        $this->container['insurer_stakeholder_id'] = $insurer_stakeholder_id;

        return $this;
    }

    /**
     * Gets item_number
     *
     * @return int|null
     */
    public function getItemNumber()
    {
        return $this->container['item_number'];
    }

    /**
     * Sets item_number
     *
     * @param int|null $item_number The item number
     *
     * @return self
     */
    public function setItemNumber($item_number)
    {
        $this->container['item_number'] = $item_number;

        return $this;
    }

    /**
     * Gets mortgages
     *
     * @return \OpenAPI\Client\Model\MortgageV1Request[]|null
     */
    public function getMortgages()
    {
        return $this->container['mortgages'];
    }

    /**
     * Sets mortgages
     *
     * @param \OpenAPI\Client\Model\MortgageV1Request[]|null $mortgages mortgages
     *
     * @return self
     */
    public function setMortgages($mortgages)
    {
        $this->container['mortgages'] = $mortgages;

        return $this;
    }

    /**
     * Gets onsite_contact_stakeholder_id
     *
     * @return string|null
     */
    public function getOnsiteContactStakeholderId()
    {
        return $this->container['onsite_contact_stakeholder_id'];
    }

    /**
     * Sets onsite_contact_stakeholder_id
     *
     * @param string|null $onsite_contact_stakeholder_id onsite_contact_stakeholder_id
     *
     * @return self
     */
    public function setOnsiteContactStakeholderId($onsite_contact_stakeholder_id)
    {
        $this->container['onsite_contact_stakeholder_id'] = $onsite_contact_stakeholder_id;

        return $this;
    }

    /**
     * Gets policy_number
     *
     * @return string|null
     */
    public function getPolicyNumber()
    {
        return $this->container['policy_number'];
    }

    /**
     * Sets policy_number
     *
     * @param string|null $policy_number policy_number
     *
     * @return self
     */
    public function setPolicyNumber($policy_number)
    {
        $this->container['policy_number'] = $policy_number;

        return $this;
    }

    /**
     * Gets policy_owner_stakeholder_id
     *
     * @return string|null
     */
    public function getPolicyOwnerStakeholderId()
    {
        return $this->container['policy_owner_stakeholder_id'];
    }

    /**
     * Sets policy_owner_stakeholder_id
     *
     * @param string|null $policy_owner_stakeholder_id policy_owner_stakeholder_id
     *
     * @return self
     */
    public function setPolicyOwnerStakeholderId($policy_owner_stakeholder_id)
    {
        $this->container['policy_owner_stakeholder_id'] = $policy_owner_stakeholder_id;

        return $this;
    }

    /**
     * Gets risk_address
     *
     * @return \OpenAPI\Client\Model\AddressV1Request
     */
    public function getRiskAddress()
    {
        return $this->container['risk_address'];
    }

    /**
     * Sets risk_address
     *
     * @param \OpenAPI\Client\Model\AddressV1Request $risk_address risk_address
     *
     * @return self
     */
    public function setRiskAddress($risk_address)
    {
        $this->container['risk_address'] = $risk_address;

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


