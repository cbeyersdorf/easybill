<?php
/**
 * Task
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
 * OpenAPI spec version: 1.57.0
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.17
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
 * Task Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Task implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Task';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'category' => 'string',
        'category_custom' => 'string',
        'created_at' => '\DateTime',
        'customer_id' => 'int',
        'description' => 'string',
        'document_id' => 'int',
        'end_at' => '\DateTime',
        'finish_at' => '\DateTime',
        'id' => 'int',
        'login_id' => 'int',
        'name' => 'string',
        'position_id' => 'int',
        'priority' => 'string',
        'project_id' => 'int',
        'start_at' => '\DateTime',
        'status' => 'string',
        'status_percent' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'category' => null,
        'category_custom' => null,
        'created_at' => 'date-time',
        'customer_id' => 'int64',
        'description' => null,
        'document_id' => 'int64',
        'end_at' => 'date-time',
        'finish_at' => 'date-time',
        'id' => 'int64',
        'login_id' => 'int64',
        'name' => null,
        'position_id' => 'int64',
        'priority' => null,
        'project_id' => 'int64',
        'start_at' => 'date-time',
        'status' => null,
        'status_percent' => null
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
        'category' => 'category',
        'category_custom' => 'category_custom',
        'created_at' => 'created_at',
        'customer_id' => 'customer_id',
        'description' => 'description',
        'document_id' => 'document_id',
        'end_at' => 'end_at',
        'finish_at' => 'finish_at',
        'id' => 'id',
        'login_id' => 'login_id',
        'name' => 'name',
        'position_id' => 'position_id',
        'priority' => 'priority',
        'project_id' => 'project_id',
        'start_at' => 'start_at',
        'status' => 'status',
        'status_percent' => 'status_percent'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'category' => 'setCategory',
        'category_custom' => 'setCategoryCustom',
        'created_at' => 'setCreatedAt',
        'customer_id' => 'setCustomerId',
        'description' => 'setDescription',
        'document_id' => 'setDocumentId',
        'end_at' => 'setEndAt',
        'finish_at' => 'setFinishAt',
        'id' => 'setId',
        'login_id' => 'setLoginId',
        'name' => 'setName',
        'position_id' => 'setPositionId',
        'priority' => 'setPriority',
        'project_id' => 'setProjectId',
        'start_at' => 'setStartAt',
        'status' => 'setStatus',
        'status_percent' => 'setStatusPercent'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'category' => 'getCategory',
        'category_custom' => 'getCategoryCustom',
        'created_at' => 'getCreatedAt',
        'customer_id' => 'getCustomerId',
        'description' => 'getDescription',
        'document_id' => 'getDocumentId',
        'end_at' => 'getEndAt',
        'finish_at' => 'getFinishAt',
        'id' => 'getId',
        'login_id' => 'getLoginId',
        'name' => 'getName',
        'position_id' => 'getPositionId',
        'priority' => 'getPriority',
        'project_id' => 'getProjectId',
        'start_at' => 'getStartAt',
        'status' => 'getStatus',
        'status_percent' => 'getStatusPercent'
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

    const CATEGORY_CALL = 'CALL';
    const CATEGORY_EMAIL = 'EMAIL';
    const CATEGORY_FAX = 'FAX';
    const CATEGORY_LUNCH = 'LUNCH';
    const CATEGORY_MEETING = 'MEETING';
    const CATEGORY_TRAVEL = 'TRAVEL';
    const CATEGORY_CUSTOM = 'CUSTOM';
    const PRIORITY_LOW = 'LOW';
    const PRIORITY_NORMAL = 'NORMAL';
    const PRIORITY_HIGH = 'HIGH';
    const STATUS_WAITING = 'WAITING';
    const STATUS_PROCESSING = 'PROCESSING';
    const STATUS_DONE = 'DONE';
    const STATUS_CANCEL = 'CANCEL';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCategoryAllowableValues()
    {
        return [
            self::CATEGORY_CALL,
            self::CATEGORY_EMAIL,
            self::CATEGORY_FAX,
            self::CATEGORY_LUNCH,
            self::CATEGORY_MEETING,
            self::CATEGORY_TRAVEL,
            self::CATEGORY_CUSTOM,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPriorityAllowableValues()
    {
        return [
            self::PRIORITY_LOW,
            self::PRIORITY_NORMAL,
            self::PRIORITY_HIGH,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_WAITING,
            self::STATUS_PROCESSING,
            self::STATUS_DONE,
            self::STATUS_CANCEL,
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
        $this->container['category'] = isset($data['category']) ? $data['category'] : null;
        $this->container['category_custom'] = isset($data['category_custom']) ? $data['category_custom'] : null;
        $this->container['created_at'] = isset($data['created_at']) ? $data['created_at'] : null;
        $this->container['customer_id'] = isset($data['customer_id']) ? $data['customer_id'] : null;
        $this->container['description'] = isset($data['description']) ? $data['description'] : null;
        $this->container['document_id'] = isset($data['document_id']) ? $data['document_id'] : null;
        $this->container['end_at'] = isset($data['end_at']) ? $data['end_at'] : null;
        $this->container['finish_at'] = isset($data['finish_at']) ? $data['finish_at'] : null;
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['login_id'] = isset($data['login_id']) ? $data['login_id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['position_id'] = isset($data['position_id']) ? $data['position_id'] : null;
        $this->container['priority'] = isset($data['priority']) ? $data['priority'] : 'NORMAL';
        $this->container['project_id'] = isset($data['project_id']) ? $data['project_id'] : null;
        $this->container['start_at'] = isset($data['start_at']) ? $data['start_at'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['status_percent'] = isset($data['status_percent']) ? $data['status_percent'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($this->container['category']) && !in_array($this->container['category'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'category', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($this->container['priority']) && !in_array($this->container['priority'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'priority', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
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
     * Gets category
     *
     * @return string
     */
    public function getCategory()
    {
        return $this->container['category'];
    }

    /**
     * Sets category
     *
     * @param string $category category
     *
     * @return $this
     */
    public function setCategory($category)
    {
        $allowedValues = $this->getCategoryAllowableValues();
        if (!is_null($category) && !in_array($category, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'category', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['category'] = $category;

        return $this;
    }

    /**
     * Gets category_custom
     *
     * @return string
     */
    public function getCategoryCustom()
    {
        return $this->container['category_custom'];
    }

    /**
     * Sets category_custom
     *
     * @param string $category_custom The name of your custom category. Can only have a value if \"category\" is \"CUSTOM\".
     *
     * @return $this
     */
    public function setCategoryCustom($category_custom)
    {
        $this->container['category_custom'] = $category_custom;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime $created_at created_at
     *
     * @return $this
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int $customer_id customer_id
     *
     * @return $this
     */
    public function setCustomerId($customer_id)
    {
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description description
     *
     * @return $this
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

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
     * Gets end_at
     *
     * @return \DateTime
     */
    public function getEndAt()
    {
        return $this->container['end_at'];
    }

    /**
     * Sets end_at
     *
     * @param \DateTime $end_at The deadline
     *
     * @return $this
     */
    public function setEndAt($end_at)
    {
        $this->container['end_at'] = $end_at;

        return $this;
    }

    /**
     * Gets finish_at
     *
     * @return \DateTime
     */
    public function getFinishAt()
    {
        return $this->container['finish_at'];
    }

    /**
     * Sets finish_at
     *
     * @param \DateTime $finish_at The time when the task was marked as done
     *
     * @return $this
     */
    public function setFinishAt($finish_at)
    {
        $this->container['finish_at'] = $finish_at;

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
     * @param int $login_id When omitted or null, the currently active login is used
     *
     * @return $this
     */
    public function setLoginId($login_id)
    {
        $this->container['login_id'] = $login_id;

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
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets position_id
     *
     * @return int
     */
    public function getPositionId()
    {
        return $this->container['position_id'];
    }

    /**
     * Sets position_id
     *
     * @param int $position_id position_id
     *
     * @return $this
     */
    public function setPositionId($position_id)
    {
        $this->container['position_id'] = $position_id;

        return $this;
    }

    /**
     * Gets priority
     *
     * @return string
     */
    public function getPriority()
    {
        return $this->container['priority'];
    }

    /**
     * Sets priority
     *
     * @param string $priority priority
     *
     * @return $this
     */
    public function setPriority($priority)
    {
        $allowedValues = $this->getPriorityAllowableValues();
        if (!is_null($priority) && !in_array($priority, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'priority', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['priority'] = $priority;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return int
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int $project_id project_id
     *
     * @return $this
     */
    public function setProjectId($project_id)
    {
        $this->container['project_id'] = $project_id;

        return $this;
    }

    /**
     * Gets start_at
     *
     * @return \DateTime
     */
    public function getStartAt()
    {
        return $this->container['start_at'];
    }

    /**
     * Sets start_at
     *
     * @param \DateTime $start_at start_at
     *
     * @return $this
     */
    public function setStartAt($start_at)
    {
        $this->container['start_at'] = $start_at;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets status_percent
     *
     * @return int
     */
    public function getStatusPercent()
    {
        return $this->container['status_percent'];
    }

    /**
     * Sets status_percent
     *
     * @param int $status_percent status_percent
     *
     * @return $this
     */
    public function setStatusPercent($status_percent)
    {
        $this->container['status_percent'] = $status_percent;

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


