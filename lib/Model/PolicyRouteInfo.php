<?php
/**
 * PolicyRouteInfo
 *
 * PHP version 5
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Marketing API v.1.0
 *
 * IMPORTANT: This swagger links to Criteo production environment. Any test applied here will thus impact real campaigns.
 *
 * The version of the OpenAPI document: v.1.0
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
 * PolicyRouteInfo Class Doc Comment
 *
 * @category Class
 * @package  Criteo\Marketing
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class PolicyRouteInfo implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PolicyRouteInfo';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'route' => 'string',
        'method' => 'string',
        'controller_name' => 'string',
        'action_name' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPIFormats = [
        'route' => null,
        'method' => null,
        'controller_name' => null,
        'action_name' => null
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
        'route' => 'route',
        'method' => 'method',
        'controller_name' => 'controllerName',
        'action_name' => 'actionName'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'route' => 'setRoute',
        'method' => 'setMethod',
        'controller_name' => 'setControllerName',
        'action_name' => 'setActionName'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'route' => 'getRoute',
        'method' => 'getMethod',
        'controller_name' => 'getControllerName',
        'action_name' => 'getActionName'
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
        $this->container['route'] = isset($data['route']) ? $data['route'] : null;
        $this->container['method'] = isset($data['method']) ? $data['method'] : null;
        $this->container['controller_name'] = isset($data['controller_name']) ? $data['controller_name'] : null;
        $this->container['action_name'] = isset($data['action_name']) ? $data['action_name'] : null;
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
     * Gets route
     *
     * @return string|null
     */
    public function getRoute()
    {
        return $this->container['route'];
    }

    /**
     * Sets route
     *
     * @param string|null $route route
     *
     * @return $this
     */
    public function setRoute($route)
    {
        $this->container['route'] = $route;

        return $this;
    }

    /**
     * Gets method
     *
     * @return string|null
     */
    public function getMethod()
    {
        return $this->container['method'];
    }

    /**
     * Sets method
     *
     * @param string|null $method method
     *
     * @return $this
     */
    public function setMethod($method)
    {
        $this->container['method'] = $method;

        return $this;
    }

    /**
     * Gets controller_name
     *
     * @return string|null
     */
    public function getControllerName()
    {
        return $this->container['controller_name'];
    }

    /**
     * Sets controller_name
     *
     * @param string|null $controller_name controller_name
     *
     * @return $this
     */
    public function setControllerName($controller_name)
    {
        $this->container['controller_name'] = $controller_name;

        return $this;
    }

    /**
     * Gets action_name
     *
     * @return string|null
     */
    public function getActionName()
    {
        return $this->container['action_name'];
    }

    /**
     * Sets action_name
     *
     * @param string|null $action_name action_name
     *
     * @return $this
     */
    public function setActionName($action_name)
    {
        $this->container['action_name'] = $action_name;

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


