<?php
/**
 * ServiceDate
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
 * OpenAPI spec version: 1.71.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.28
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
 * ServiceDate Class Doc Comment
 *
 * @category Class
 * @description This object is only available in document type INVOICE or CREDIT.
 * @package  cbeyersdorf\easybill
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ServiceDate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ServiceDate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'type' => 'string',
        'date' => '\DateTime',
        'date_from' => '\DateTime',
        'date_to' => '\DateTime',
        'text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'type' => null,
        'date' => 'date',
        'date_from' => 'date',
        'date_to' => 'date',
        'text' => null
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
        'type' => 'type',
        'date' => 'date',
        'date_from' => 'date_from',
        'date_to' => 'date_to',
        'text' => 'text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'type' => 'setType',
        'date' => 'setDate',
        'date_from' => 'setDateFrom',
        'date_to' => 'setDateTo',
        'text' => 'setText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'type' => 'getType',
        'date' => 'getDate',
        'date_from' => 'getDateFrom',
        'date_to' => 'getDateTo',
        'text' => 'getText'
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

    const TYPE__DEFAULT = 'DEFAULT';
    const TYPE_SERVICE = 'SERVICE';
    const TYPE_DELIVERY = 'DELIVERY';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE__DEFAULT,
            self::TYPE_SERVICE,
            self::TYPE_DELIVERY,
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
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['date'] = isset($data['date']) ? $data['date'] : null;
        $this->container['date_from'] = isset($data['date_from']) ? $data['date_from'] : null;
        $this->container['date_to'] = isset($data['date_to']) ? $data['date_to'] : null;
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($this->container['type']) && !in_array($this->container['type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
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
     * @param string $type With DEFAULT no other fields are required and this message will be printed: 'Invoice date coincides with the time of supply'.<br/> For SERVICE or DELIVERY exactly one of the following fields must be set: date, date_from and date_to or text.
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime $date date
     *
     * @return $this
     */
    public function setDate($date)
    {
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets date_from
     *
     * @return \DateTime
     */
    public function getDateFrom()
    {
        return $this->container['date_from'];
    }

    /**
     * Sets date_from
     *
     * @param \DateTime $date_from date_from
     *
     * @return $this
     */
    public function setDateFrom($date_from)
    {
        $this->container['date_from'] = $date_from;

        return $this;
    }

    /**
     * Gets date_to
     *
     * @return \DateTime
     */
    public function getDateTo()
    {
        return $this->container['date_to'];
    }

    /**
     * Sets date_to
     *
     * @param \DateTime $date_to date_to
     *
     * @return $this
     */
    public function setDateTo($date_to)
    {
        $this->container['date_to'] = $date_to;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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


