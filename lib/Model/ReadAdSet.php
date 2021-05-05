<?php
/**
 * ReadAdSet
 *
 * PHP version 5
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Criteo API Transition Swagger
 *
 * This is used to help Criteo clients transition from MAPI to Criteo API
 *
 * The version of the OpenAPI document: 1.0
 * 
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 4.1.3
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace Criteo\Marketing\Model;

use \ArrayAccess;
use \Criteo\Marketing\ObjectSerializer;

/**
 * ReadAdSet Class Doc Comment
 *
 * @category Class
 * @description ad set read model
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ReadAdSet implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ReadAdSet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'name' => 'string',
        'advertiser_id' => 'string',
        'campaign_id' => 'string',
        'destination_environment' => 'string',
        'schedule' => '\Criteo\Marketing\Model\ReadAdSetSchedule',
        'bidding' => '\Criteo\Marketing\Model\ReadAdSetBidding',
        'targeting' => '\Criteo\Marketing\Model\AdSetTargeting',
        'budget' => '\Criteo\Marketing\Model\ReadAdSetBudget'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'name' => null,
        'advertiser_id' => null,
        'campaign_id' => null,
        'destination_environment' => null,
        'schedule' => null,
        'bidding' => null,
        'targeting' => null,
        'budget' => null
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
        'name' => 'name',
        'advertiser_id' => 'advertiserId',
        'campaign_id' => 'campaignId',
        'destination_environment' => 'destinationEnvironment',
        'schedule' => 'schedule',
        'bidding' => 'bidding',
        'targeting' => 'targeting',
        'budget' => 'budget'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'name' => 'setName',
        'advertiser_id' => 'setAdvertiserId',
        'campaign_id' => 'setCampaignId',
        'destination_environment' => 'setDestinationEnvironment',
        'schedule' => 'setSchedule',
        'bidding' => 'setBidding',
        'targeting' => 'setTargeting',
        'budget' => 'setBudget'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'name' => 'getName',
        'advertiser_id' => 'getAdvertiserId',
        'campaign_id' => 'getCampaignId',
        'destination_environment' => 'getDestinationEnvironment',
        'schedule' => 'getSchedule',
        'bidding' => 'getBidding',
        'targeting' => 'getTargeting',
        'budget' => 'getBudget'
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

    const DESTINATION_ENVIRONMENT_UNDEFINED = 'undefined';
    const DESTINATION_ENVIRONMENT_WEB = 'web';
    const DESTINATION_ENVIRONMENT_APP = 'app';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDestinationEnvironmentAllowableValues()
    {
        return [
            self::DESTINATION_ENVIRONMENT_UNDEFINED,
            self::DESTINATION_ENVIRONMENT_WEB,
            self::DESTINATION_ENVIRONMENT_APP,
        ];
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['advertiser_id'] = isset($data['advertiser_id']) ? $data['advertiser_id'] : null;
        $this->container['campaign_id'] = isset($data['campaign_id']) ? $data['campaign_id'] : null;
        $this->container['destination_environment'] = isset($data['destination_environment']) ? $data['destination_environment'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['bidding'] = isset($data['bidding']) ? $data['bidding'] : null;
        $this->container['targeting'] = isset($data['targeting']) ? $data['targeting'] : null;
        $this->container['budget'] = isset($data['budget']) ? $data['budget'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getDestinationEnvironmentAllowableValues();
        if (!is_null($this->container['destination_environment']) && !in_array($this->container['destination_environment'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'destination_environment', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name Name of the ad set
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets advertiser_id
     *
     * @return string|null
     */
    public function getAdvertiserId()
    {
        return $this->container['advertiser_id'];
    }

    /**
     * Sets advertiser_id
     *
     * @param string|null $advertiser_id Advertiser id of the campaign this ad set belongs to
     *
     * @return $this
     */
    public function setAdvertiserId($advertiser_id)
    {
        $this->container['advertiser_id'] = $advertiser_id;

        return $this;
    }

    /**
     * Gets campaign_id
     *
     * @return string|null
     */
    public function getCampaignId()
    {
        return $this->container['campaign_id'];
    }

    /**
     * Sets campaign_id
     *
     * @param string|null $campaign_id Campaign id this ad set belongs to
     *
     * @return $this
     */
    public function setCampaignId($campaign_id)
    {
        $this->container['campaign_id'] = $campaign_id;

        return $this;
    }

    /**
     * Gets destination_environment
     *
     * @return string|null
     */
    public function getDestinationEnvironment()
    {
        return $this->container['destination_environment'];
    }

    /**
     * Sets destination_environment
     *
     * @param string|null $destination_environment The environment that an ad click will lead a user to
     *
     * @return $this
     */
    public function setDestinationEnvironment($destination_environment)
    {
        $allowedValues = $this->getDestinationEnvironmentAllowableValues();
        if (!is_null($destination_environment) && !in_array($destination_environment, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'destination_environment', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['destination_environment'] = $destination_environment;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return \Criteo\Marketing\Model\ReadAdSetSchedule|null
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param \Criteo\Marketing\Model\ReadAdSetSchedule|null $schedule schedule
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets bidding
     *
     * @return \Criteo\Marketing\Model\ReadAdSetBidding|null
     */
    public function getBidding()
    {
        return $this->container['bidding'];
    }

    /**
     * Sets bidding
     *
     * @param \Criteo\Marketing\Model\ReadAdSetBidding|null $bidding bidding
     *
     * @return $this
     */
    public function setBidding($bidding)
    {
        $this->container['bidding'] = $bidding;

        return $this;
    }

    /**
     * Gets targeting
     *
     * @return \Criteo\Marketing\Model\AdSetTargeting|null
     */
    public function getTargeting()
    {
        return $this->container['targeting'];
    }

    /**
     * Sets targeting
     *
     * @param \Criteo\Marketing\Model\AdSetTargeting|null $targeting targeting
     *
     * @return $this
     */
    public function setTargeting($targeting)
    {
        $this->container['targeting'] = $targeting;

        return $this;
    }

    /**
     * Gets budget
     *
     * @return \Criteo\Marketing\Model\ReadAdSetBudget|null
     */
    public function getBudget()
    {
        return $this->container['budget'];
    }

    /**
     * Sets budget
     *
     * @param \Criteo\Marketing\Model\ReadAdSetBudget|null $budget budget
     *
     * @return $this
     */
    public function setBudget($budget)
    {
        $this->container['budget'] = $budget;

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
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
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


