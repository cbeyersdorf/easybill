<?php
/**
 * DocumentPayment
 *
 * PHP version 5
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * easybill REST API
 *
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format Please use the timezone `Europe/Berlin`. * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`  Date or datetime can be `null` because the attributes have been added later and the entry is older.
 *
 * OpenAPI spec version: 1.70.1
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.26
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace cbeyersdorf\easybill\Model;

use \ArrayAccess;
use \cbeyersdorf\easybill\ObjectSerializer;

/**
 * DocumentPayment Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class DocumentPayment implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'DocumentPayment';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'amount' => 'int',
        'document_id' => 'int',
        'id' => 'int',
        'is_overdue_fee' => 'bool',
        'login_id' => 'int',
        'notice' => 'string',
        'payment_at' => '\DateTime',
        'type' => 'string',
        'provider' => 'string',
        'reference' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'amount' => 'int32',
        'document_id' => 'int64',
        'id' => 'int64',
        'is_overdue_fee' => null,
        'login_id' => 'int64',
        'notice' => null,
        'payment_at' => 'date',
        'type' => null,
        'provider' => null,
        'reference' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'amount' => 'amount',
        'document_id' => 'document_id',
        'id' => 'id',
        'is_overdue_fee' => 'is_overdue_fee',
        'login_id' => 'login_id',
        'notice' => 'notice',
        'payment_at' => 'payment_at',
        'type' => 'type',
        'provider' => 'provider',
        'reference' => 'reference'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'amount' => 'setAmount',
        'document_id' => 'setDocumentId',
        'id' => 'setId',
        'is_overdue_fee' => 'setIsOverdueFee',
        'login_id' => 'setLoginId',
        'notice' => 'setNotice',
        'payment_at' => 'setPaymentAt',
        'type' => 'setType',
        'provider' => 'setProvider',
        'reference' => 'setReference'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'amount' => 'getAmount',
        'document_id' => 'getDocumentId',
        'id' => 'getId',
        'is_overdue_fee' => 'getIsOverdueFee',
        'login_id' => 'getLoginId',
        'notice' => 'getNotice',
        'payment_at' => 'getPaymentAt',
        'type' => 'getType',
        'provider' => 'getProvider',
        'reference' => 'getReference'
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
        return self::$swaggerModelName;
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
        $this->container['amount'] = isset($data['amount']) ? $data['amount'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['is_overdue_fee'] = isset($data['is_overdue_fee']) ? $data['is_overdue_fee'] : null;
        $this->container['login_id'] = isset($data['login_id']) ? $data['login_id'] : null;
        $this->container['notice'] = isset($data['notice']) ? $data['notice'] : '';
        $this->container['payment_at'] = isset($data['payment_at']) ? $data['payment_at'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : '';
        $this->container['provider'] = isset($data['provider']) ? $data['provider'] : '';
        $this->container['reference'] = isset($data['reference']) ? $data['reference'] : '';
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['amount'] === null) {
            $invalidProperties[] = "'amount' can't be null";
        }
        if ($this->container['document_id'] === null) {
            $invalidProperties[] = "'document_id' can't be null";
        }
        if (!is_null($this->container['type']) && (mb_strlen($this->container['type']) > 255)) {
            $invalidProperties[] = "invalid value for 'type', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['provider']) && (mb_strlen($this->container['provider']) > 255)) {
            $invalidProperties[] = "invalid value for 'provider', the character length must be smaller than or equal to 255.";
        }

        if (!is_null($this->container['reference']) && (mb_strlen($this->container['reference']) > 255)) {
            $invalidProperties[] = "invalid value for 'reference', the character length must be smaller than or equal to 255.";
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
     * Gets amount
     *
     * @return int
     */
    public function getAmount()
    {
        return $this->container['amount'];
    }

    /**
     * Sets amount
     *
     * @param int $amount amount
     *
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->container['amount'] = $amount;

        return $this;
    }

    /**
     * Gets document_id
     *
     * @return int
     */
    public function getDocumentId()
    {
        return $this->container['document_id'];
    }

    /**
     * Sets document_id
     *
     * @param int $document_id document_id
     *
     * @return $this
     */
    public function setDocumentId($document_id)
    {
        $this->container['document_id'] = $document_id;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets is_overdue_fee
     *
     * @return bool
     */
    public function getIsOverdueFee()
    {
        return $this->container['is_overdue_fee'];
    }

    /**
     * Sets is_overdue_fee
     *
     * @param bool $is_overdue_fee is_overdue_fee
     *
     * @return $this
     */
    public function setIsOverdueFee($is_overdue_fee)
    {
        $this->container['is_overdue_fee'] = $is_overdue_fee;

        return $this;
    }

    /**
     * Gets login_id
     *
     * @return int
     */
    public function getLoginId()
    {
        return $this->container['login_id'];
    }

    /**
     * Sets login_id
     *
     * @param int $login_id login_id
     *
     * @return $this
     */
    public function setLoginId($login_id)
    {
        $this->container['login_id'] = $login_id;

        return $this;
    }

    /**
     * Gets notice
     *
     * @return string
     */
    public function getNotice()
    {
        return $this->container['notice'];
    }

    /**
     * Sets notice
     *
     * @param string $notice notice
     *
     * @return $this
     */
    public function setNotice($notice)
    {
        $this->container['notice'] = $notice;

        return $this;
    }

    /**
     * Gets payment_at
     *
     * @return \DateTime
     */
    public function getPaymentAt()
    {
        return $this->container['payment_at'];
    }

    /**
     * Sets payment_at
     *
     * @param \DateTime $payment_at payment_at
     *
     * @return $this
     */
    public function setPaymentAt($payment_at)
    {
        $this->container['payment_at'] = $payment_at;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        if (!is_null($type) && (mb_strlen($type) > 255)) {
            throw new \InvalidArgumentException('invalid length for $type when calling DocumentPayment., must be smaller than or equal to 255.');
        }

        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets provider
     *
     * @return string
     */
    public function getProvider()
    {
        return $this->container['provider'];
    }

    /**
     * Sets provider
     *
     * @param string $provider provider
     *
     * @return $this
     */
    public function setProvider($provider)
    {
        if (!is_null($provider) && (mb_strlen($provider) > 255)) {
            throw new \InvalidArgumentException('invalid length for $provider when calling DocumentPayment., must be smaller than or equal to 255.');
        }

        $this->container['provider'] = $provider;

        return $this;
    }

    /**
     * Gets reference
     *
     * @return string
     */
    public function getReference()
    {
        return $this->container['reference'];
    }

    /**
     * Sets reference
     *
     * @param string $reference reference
     *
     * @return $this
     */
    public function setReference($reference)
    {
        if (!is_null($reference) && (mb_strlen($reference) > 255)) {
            throw new \InvalidArgumentException('invalid length for $reference when calling DocumentPayment., must be smaller than or equal to 255.');
        }

        $this->container['reference'] = $reference;

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
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


