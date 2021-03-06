<?php
/**
 * InlineResponse2013ProcessorInformation
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
 * InlineResponse2013ProcessorInformation Class Doc Comment
 *
 * @category    Class
 * @package     CyberSource
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class InlineResponse2013ProcessorInformation implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'inline_response_201_3_processorInformation';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'transactionId' => 'string',
        'forwardedAcquirerCode' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerFormats = [
        'transactionId' => null,
        'forwardedAcquirerCode' => null
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
        'transactionId' => 'transactionId',
        'forwardedAcquirerCode' => 'forwardedAcquirerCode'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'transactionId' => 'setTransactionId',
        'forwardedAcquirerCode' => 'setForwardedAcquirerCode'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'transactionId' => 'getTransactionId',
        'forwardedAcquirerCode' => 'getForwardedAcquirerCode'
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
        $this->container['transactionId'] = isset($data['transactionId']) ? $data['transactionId'] : null;
        $this->container['forwardedAcquirerCode'] = isset($data['forwardedAcquirerCode']) ? $data['forwardedAcquirerCode'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if (!is_null($this->container['transactionId']) && (strlen($this->container['transactionId']) > 18)) {
            $invalid_properties[] = "invalid value for 'transactionId', the character length must be smaller than or equal to 18.";
        }

        if (!is_null($this->container['forwardedAcquirerCode']) && (strlen($this->container['forwardedAcquirerCode']) > 32)) {
            $invalid_properties[] = "invalid value for 'forwardedAcquirerCode', the character length must be smaller than or equal to 32.";
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

        if (strlen($this->container['transactionId']) > 18) {
            return false;
        }
        if (strlen($this->container['forwardedAcquirerCode']) > 32) {
            return false;
        }
        return true;
    }


    /**
     * Gets transactionId
     * @return string
     */
    public function getTransactionId()
    {
        return $this->container['transactionId'];
    }

    /**
     * Sets transactionId
     * @param string $transactionId Processor transaction ID.  This value identifies the transaction on a host system. This value is supported only for Moneris. It contains this information:   - Terminal used to process the transaction  - Shift during which the transaction took place  - Batch number  - Transaction number within the batch  You must store this value. If you give the customer a receipt, display this value on the receipt.  Example For the value 66012345001069003:   - Terminal ID = 66012345  - Shift number = 001  - Batch number = 069  - Transaction number = 003
     * @return $this
     */
    public function setTransactionId($transactionId)
    {
        if (!is_null($transactionId) && (strlen($transactionId) > 18)) {
            throw new \InvalidArgumentException('invalid length for $transactionId when calling InlineResponse2013ProcessorInformation., must be smaller than or equal to 18.');
        }

        $this->container['transactionId'] = $transactionId;

        return $this;
    }

    /**
     * Gets forwardedAcquirerCode
     * @return string
     */
    public function getForwardedAcquirerCode()
    {
        return $this->container['forwardedAcquirerCode'];
    }

    /**
     * Sets forwardedAcquirerCode
     * @param string $forwardedAcquirerCode Name of the Japanese acquirer that processed the transaction. Returned only for CCS (CAFIS) and JCN Gateway. Please contact the CyberSource Japan Support Group for more information.
     * @return $this
     */
    public function setForwardedAcquirerCode($forwardedAcquirerCode)
    {
        if (!is_null($forwardedAcquirerCode) && (strlen($forwardedAcquirerCode) > 32)) {
            throw new \InvalidArgumentException('invalid length for $forwardedAcquirerCode when calling InlineResponse2013ProcessorInformation., must be smaller than or equal to 32.');
        }

        $this->container['forwardedAcquirerCode'] = $forwardedAcquirerCode;

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


