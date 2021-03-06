<?php
/**
 * InlineResponse201ProcessorInformationCardVerification
 *
 * PHP version 5
 *
 * @category Class
 * @package  CyberSource
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * CyberSource Flex API
 *
 * Simple PAN tokenization service
 *
 * OpenAPI spec version: 0.0.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace CyberSource\Model;

use \ArrayAccess;

/**
 * InlineResponse201ProcessorInformationCardVerification Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse201ProcessorInformationCardVerification implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_processorInformation_cardVerification';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'resultCode' => 'string',
        'resultCodeRaw' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'resultCode' => null,
        'resultCodeRaw' => null
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'resultCode' => 'resultCode',
        'resultCodeRaw' => 'resultCodeRaw'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'resultCode' => 'setResultCode',
        'resultCodeRaw' => 'setResultCodeRaw'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'resultCode' => 'getResultCode',
        'resultCodeRaw' => 'getResultCodeRaw'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    

    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['resultCode'] = isset($data['resultCode']) ? $data['resultCode'] : null;
        $this->container['resultCodeRaw'] = isset($data['resultCodeRaw']) ? $data['resultCodeRaw'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['resultCode']) && (strlen($this->container['resultCode']) > 1)) {
            $invalid_properties[] = "invalid value for 'resultCode', the character length must be smaller than or equal to 1.";
        }

        if (!is_null($this->container['resultCodeRaw']) && (strlen($this->container['resultCodeRaw']) > 10)) {
            $invalid_properties[] = "invalid value for 'resultCodeRaw', the character length must be smaller than or equal to 10.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if (strlen($this->container['resultCode']) > 1) {
            return false;
        }
        if (strlen($this->container['resultCodeRaw']) > 10) {
            return false;
        }
        return true;
    }


    /**
     * Gets resultCode
     * @return string
     */
    public function getResultCode()
    {
        return $this->container['resultCode'];
    }

    /**
     * Sets resultCode
     * @param string $resultCode CVN result code.
     * @return $this
     */
    public function setResultCode($resultCode)
    {
        if (!is_null($resultCode) && (strlen($resultCode) > 1)) {
            throw new \InvalidArgumentException('invalid length for $resultCode when calling InlineResponse201ProcessorInformationCardVerification., must be smaller than or equal to 1.');
        }

        $this->container['resultCode'] = $resultCode;

        return $this;
    }

    /**
     * Gets resultCodeRaw
     * @return string
     */
    public function getResultCodeRaw()
    {
        return $this->container['resultCodeRaw'];
    }

    /**
     * Sets resultCodeRaw
     * @param string $resultCodeRaw CVN result code sent directly from the processor. Returned only when the processor returns this value.  `Important` Do not use this field to evaluate the result of card verification. Use for debugging purposes only.
     * @return $this
     */
    public function setResultCodeRaw($resultCodeRaw)
    {
        if (!is_null($resultCodeRaw) && (strlen($resultCodeRaw) > 10)) {
            throw new \InvalidArgumentException('invalid length for $resultCodeRaw when calling InlineResponse201ProcessorInformationCardVerification., must be smaller than or equal to 10.');
        }

        $this->container['resultCodeRaw'] = $resultCodeRaw;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
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
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\CyberSource\ObjectSerializer::sanitizeForSerialization($this));
    }
}


