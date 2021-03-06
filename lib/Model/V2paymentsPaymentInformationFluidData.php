<?php
/**
 * V2paymentsPaymentInformationFluidData
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
 * V2paymentsPaymentInformationFluidData Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class V2paymentsPaymentInformationFluidData implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'v2payments_paymentInformation_fluidData';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'key' => 'string',
        'descriptor' => 'string',
        'value' => 'string',
        'encoding' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'key' => null,
        'descriptor' => null,
        'value' => null,
        'encoding' => null
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
        'key' => 'key',
        'descriptor' => 'descriptor',
        'value' => 'value',
        'encoding' => 'encoding'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'key' => 'setKey',
        'descriptor' => 'setDescriptor',
        'value' => 'setValue',
        'encoding' => 'setEncoding'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'key' => 'getKey',
        'descriptor' => 'getDescriptor',
        'value' => 'getValue',
        'encoding' => 'getEncoding'
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
        $this->container['key'] = isset($data['key']) ? $data['key'] : null;
        $this->container['descriptor'] = isset($data['descriptor']) ? $data['descriptor'] : null;
        $this->container['value'] = isset($data['value']) ? $data['value'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['descriptor']) && (strlen($this->container['descriptor']) > 128)) {
            $invalid_properties[] = "invalid value for 'descriptor', the character length must be smaller than or equal to 128.";
        }

        if (!is_null($this->container['value']) && (strlen($this->container['value']) > 3072)) {
            $invalid_properties[] = "invalid value for 'value', the character length must be smaller than or equal to 3072.";
        }

        if (!is_null($this->container['encoding']) && (strlen($this->container['encoding']) > 6)) {
            $invalid_properties[] = "invalid value for 'encoding', the character length must be smaller than or equal to 6.";
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

        if (strlen($this->container['descriptor']) > 128) {
            return false;
        }
        if (strlen($this->container['value']) > 3072) {
            return false;
        }
        if (strlen($this->container['encoding']) > 6) {
            return false;
        }
        return true;
    }


    /**
     * Gets key
     * @return string
     */
    public function getKey()
    {
        return $this->container['key'];
    }

    /**
     * Sets key
     * @param string $key TBD
     * @return $this
     */
    public function setKey($key)
    {
        $this->container['key'] = $key;

        return $this;
    }

    /**
     * Gets descriptor
     * @return string
     */
    public function getDescriptor()
    {
        return $this->container['descriptor'];
    }

    /**
     * Sets descriptor
     * @param string $descriptor Format of the encrypted payment data.
     * @return $this
     */
    public function setDescriptor($descriptor)
    {
        if (!is_null($descriptor) && (strlen($descriptor) > 128)) {
            throw new \InvalidArgumentException('invalid length for $descriptor when calling V2paymentsPaymentInformationFluidData., must be smaller than or equal to 128.');
        }

        $this->container['descriptor'] = $descriptor;

        return $this;
    }

    /**
     * Gets value
     * @return string
     */
    public function getValue()
    {
        return $this->container['value'];
    }

    /**
     * Sets value
     * @param string $value The encrypted payment data value. If using Apple Pay or Samsung Pay, the values are:   - Apple Pay: RklEPUNPTU1PTi5BUFBMRS5JTkFQUC5QQVlNRU5U   - Samsung Pay: RklEPUNPTU1PTi5TQU1TVU5HLklOQVBQLlBBWU1FTlQ=
     * @return $this
     */
    public function setValue($value)
    {
        if (!is_null($value) && (strlen($value) > 3072)) {
            throw new \InvalidArgumentException('invalid length for $value when calling V2paymentsPaymentInformationFluidData., must be smaller than or equal to 3072.');
        }

        $this->container['value'] = $value;

        return $this;
    }

    /**
     * Gets encoding
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /**
     * Sets encoding
     * @param string $encoding Encoding method used to encrypt the payment data.  Possible value: Base64
     * @return $this
     */
    public function setEncoding($encoding)
    {
        if (!is_null($encoding) && (strlen($encoding) > 6)) {
            throw new \InvalidArgumentException('invalid length for $encoding when calling V2paymentsPaymentInformationFluidData., must be smaller than or equal to 6.');
        }

        $this->container['encoding'] = $encoding;

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


