<?php
/**
 * Project
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * easybill REST API
 *
 * The first version of the easybill REST API. [CHANGELOG](https://api.easybill.de/rest/v1/CHANGELOG.md)  ## Authentication  You can choose between two available methods: `Basic Auth` or `Bearer Token`.  In each HTTP request, one of the following HTTP headers is required:  ``` # Basic Auth Authorization: Basic base64_encode('<email>:<api_key>') # Bearer Token Authorization: Bearer <api_key> ```  ## Limitations  ### Request Limit  * PLUS: 10 requests per minute * BUSINESS: 60 requests per minute  If the limit is exceeded, you will receive the HTTP error: `429 Too Many Requests`  ### Result Limit  All result lists are limited to 100 by default. This limit can be increased by the query parameter `limit` to a maximum of 1000.  ## Query filter  Many list resources can be filtered. In `/documents` you can filter e.g. by number with `/documents?number=111028654`. If you want to filter multiple numbers, you can either enter them separated by commas `/documents?number=111028654,222006895` or as an array `/documents?number[]=111028654&number[]=222006895`.  **Warning**: The maximum size of an HTTP request line in bytes is 4094. If this limit is exceeded, you will receive the HTTP error: `414 Request-URI Too Large`  ### Escape commas in query  You can escape commans in query `name=Patrick\\, Peter` if you submit the header `X-Easybill-Escape: true` in your request.  ## Property login_id  This is the login of your admin or employee account.  ## Date and Date-Time format Please use the timezone `Europe/Berlin`. * **date** = *Y-m-d* = `2016-12-31` * **date-time** = *Y-m-d H:i:s* = `2016-12-31 03:13:37`  Date or datetime can be `null` because the attributes have been added later and the entry is older.
 *
 * The version of the OpenAPI document: 1.87.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.7.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace cbeyersdorf\easybill\Model;

use \ArrayAccess;
use \cbeyersdorf\easybill\ObjectSerializer;

/**
 * Project Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Project implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Project';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'budget_amount' => 'int',
        'budget_time' => 'int',
        'customer_id' => 'int',
        'hourly_rate' => 'float',
        'id' => 'int',
        'login_id' => 'int',
        'name' => 'string',
        'note' => 'string',
        'status' => 'string',
        'due_at' => '\DateTime',
        'budget_notify_frequency' => 'string',
        'consumed_time' => 'int',
        'consumed_amount' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'budget_amount' => null,
        'budget_time' => null,
        'customer_id' => 'int64',
        'hourly_rate' => 'float',
        'id' => 'int64',
        'login_id' => 'int64',
        'name' => null,
        'note' => null,
        'status' => null,
        'due_at' => 'date',
        'budget_notify_frequency' => null,
        'consumed_time' => null,
        'consumed_amount' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'budget_amount' => false,
        'budget_time' => false,
        'customer_id' => true,
        'hourly_rate' => false,
        'id' => false,
        'login_id' => true,
        'name' => false,
        'note' => true,
        'status' => false,
        'due_at' => true,
        'budget_notify_frequency' => false,
        'consumed_time' => false,
        'consumed_amount' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

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
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'budget_amount' => 'budget_amount',
        'budget_time' => 'budget_time',
        'customer_id' => 'customer_id',
        'hourly_rate' => 'hourly_rate',
        'id' => 'id',
        'login_id' => 'login_id',
        'name' => 'name',
        'note' => 'note',
        'status' => 'status',
        'due_at' => 'due_at',
        'budget_notify_frequency' => 'budget_notify_frequency',
        'consumed_time' => 'consumed_time',
        'consumed_amount' => 'consumed_amount'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'budget_amount' => 'setBudgetAmount',
        'budget_time' => 'setBudgetTime',
        'customer_id' => 'setCustomerId',
        'hourly_rate' => 'setHourlyRate',
        'id' => 'setId',
        'login_id' => 'setLoginId',
        'name' => 'setName',
        'note' => 'setNote',
        'status' => 'setStatus',
        'due_at' => 'setDueAt',
        'budget_notify_frequency' => 'setBudgetNotifyFrequency',
        'consumed_time' => 'setConsumedTime',
        'consumed_amount' => 'setConsumedAmount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'budget_amount' => 'getBudgetAmount',
        'budget_time' => 'getBudgetTime',
        'customer_id' => 'getCustomerId',
        'hourly_rate' => 'getHourlyRate',
        'id' => 'getId',
        'login_id' => 'getLoginId',
        'name' => 'getName',
        'note' => 'getNote',
        'status' => 'getStatus',
        'due_at' => 'getDueAt',
        'budget_notify_frequency' => 'getBudgetNotifyFrequency',
        'consumed_time' => 'getConsumedTime',
        'consumed_amount' => 'getConsumedAmount'
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

    public const STATUS_OPEN = 'OPEN';
    public const STATUS_DONE = 'DONE';
    public const STATUS_CANCEL = 'CANCEL';
    public const BUDGET_NOTIFY_FREQUENCY_ALWAYS = 'ALWAYS';
    public const BUDGET_NOTIFY_FREQUENCY_ONCE = 'ONCE';
    public const BUDGET_NOTIFY_FREQUENCY_NEVER = 'NEVER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OPEN,
            self::STATUS_DONE,
            self::STATUS_CANCEL,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getBudgetNotifyFrequencyAllowableValues()
    {
        return [
            self::BUDGET_NOTIFY_FREQUENCY_ALWAYS,
            self::BUDGET_NOTIFY_FREQUENCY_ONCE,
            self::BUDGET_NOTIFY_FREQUENCY_NEVER,
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
        $this->setIfExists('budget_amount', $data ?? [], null);
        $this->setIfExists('budget_time', $data ?? [], null);
        $this->setIfExists('customer_id', $data ?? [], null);
        $this->setIfExists('hourly_rate', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('login_id', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 'OPEN');
        $this->setIfExists('due_at', $data ?? [], null);
        $this->setIfExists('budget_notify_frequency', $data ?? [], 'ALWAYS');
        $this->setIfExists('consumed_time', $data ?? [], null);
        $this->setIfExists('consumed_amount', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getBudgetNotifyFrequencyAllowableValues();
        if (!is_null($this->container['budget_notify_frequency']) && !in_array($this->container['budget_notify_frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'budget_notify_frequency', must be one of '%s'",
                $this->container['budget_notify_frequency'],
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
     * Gets budget_amount
     *
     * @return int|null
     */
    public function getBudgetAmount()
    {
        return $this->container['budget_amount'];
    }

    /**
     * Sets budget_amount
     *
     * @param int|null $budget_amount Project budget in cents (e.g. \"150\" = 1.50€)
     *
     * @return self
     */
    public function setBudgetAmount($budget_amount)
    {
        if (is_null($budget_amount)) {
            throw new \InvalidArgumentException('non-nullable budget_amount cannot be null');
        }
        $this->container['budget_amount'] = $budget_amount;

        return $this;
    }

    /**
     * Gets budget_time
     *
     * @return int|null
     */
    public function getBudgetTime()
    {
        return $this->container['budget_time'];
    }

    /**
     * Sets budget_time
     *
     * @param int|null $budget_time Time budget in minutes (e.g. \"90\" = 1 hour and 30 minutes)
     *
     * @return self
     */
    public function setBudgetTime($budget_time)
    {
        if (is_null($budget_time)) {
            throw new \InvalidArgumentException('non-nullable budget_time cannot be null');
        }
        $this->container['budget_time'] = $budget_time;

        return $this;
    }

    /**
     * Gets customer_id
     *
     * @return int|null
     */
    public function getCustomerId()
    {
        return $this->container['customer_id'];
    }

    /**
     * Sets customer_id
     *
     * @param int|null $customer_id customer_id
     *
     * @return self
     */
    public function setCustomerId($customer_id)
    {
        if (is_null($customer_id)) {
            array_push($this->openAPINullablesSetToNull, 'customer_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('customer_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['customer_id'] = $customer_id;

        return $this;
    }

    /**
     * Gets hourly_rate
     *
     * @return float|null
     */
    public function getHourlyRate()
    {
        return $this->container['hourly_rate'];
    }

    /**
     * Sets hourly_rate
     *
     * @param float|null $hourly_rate Hourly rate in cents (e.g. \"150\" = 1.50€)
     *
     * @return self
     */
    public function setHourlyRate($hourly_rate)
    {
        if (is_null($hourly_rate)) {
            throw new \InvalidArgumentException('non-nullable hourly_rate cannot be null');
        }
        $this->container['hourly_rate'] = $hourly_rate;

        return $this;
    }

    /**
     * Gets id
     *
     * @return int|null
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param int|null $id id
     *
     * @return self
     */
    public function setId($id)
    {
        if (is_null($id)) {
            throw new \InvalidArgumentException('non-nullable id cannot be null');
        }
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets login_id
     *
     * @return int|null
     */
    public function getLoginId()
    {
        return $this->container['login_id'];
    }

    /**
     * Sets login_id
     *
     * @param int|null $login_id If omitted or null, the currently active login is used
     *
     * @return self
     */
    public function setLoginId($login_id)
    {
        if (is_null($login_id)) {
            array_push($this->openAPINullablesSetToNull, 'login_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('login_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
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
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets note
     *
     * @return string|null
     */
    public function getNote()
    {
        return $this->container['note'];
    }

    /**
     * Sets note
     *
     * @param string|null $note note
     *
     * @return self
     */
    public function setNote($note)
    {
        if (is_null($note)) {
            array_push($this->openAPINullablesSetToNull, 'note');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('note', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['note'] = $note;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string|null $status status
     *
     * @return self
     */
    public function setStatus($status)
    {
        if (is_null($status)) {
            throw new \InvalidArgumentException('non-nullable status cannot be null');
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'status', must be one of '%s'",
                    $status,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets due_at
     *
     * @return \DateTime|null
     */
    public function getDueAt()
    {
        return $this->container['due_at'];
    }

    /**
     * Sets due_at
     *
     * @param \DateTime|null $due_at due_at
     *
     * @return self
     */
    public function setDueAt($due_at)
    {
        if (is_null($due_at)) {
            array_push($this->openAPINullablesSetToNull, 'due_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('due_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['due_at'] = $due_at;

        return $this;
    }

    /**
     * Gets budget_notify_frequency
     *
     * @return string|null
     */
    public function getBudgetNotifyFrequency()
    {
        return $this->container['budget_notify_frequency'];
    }

    /**
     * Sets budget_notify_frequency
     *
     * @param string|null $budget_notify_frequency budget_notify_frequency
     *
     * @return self
     */
    public function setBudgetNotifyFrequency($budget_notify_frequency)
    {
        if (is_null($budget_notify_frequency)) {
            throw new \InvalidArgumentException('non-nullable budget_notify_frequency cannot be null');
        }
        $allowedValues = $this->getBudgetNotifyFrequencyAllowableValues();
        if (!in_array($budget_notify_frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'budget_notify_frequency', must be one of '%s'",
                    $budget_notify_frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['budget_notify_frequency'] = $budget_notify_frequency;

        return $this;
    }

    /**
     * Gets consumed_time
     *
     * @return int|null
     */
    public function getConsumedTime()
    {
        return $this->container['consumed_time'];
    }

    /**
     * Sets consumed_time
     *
     * @param int|null $consumed_time consumed_time
     *
     * @return self
     */
    public function setConsumedTime($consumed_time)
    {
        if (is_null($consumed_time)) {
            throw new \InvalidArgumentException('non-nullable consumed_time cannot be null');
        }
        $this->container['consumed_time'] = $consumed_time;

        return $this;
    }

    /**
     * Gets consumed_amount
     *
     * @return int|null
     */
    public function getConsumedAmount()
    {
        return $this->container['consumed_amount'];
    }

    /**
     * Sets consumed_amount
     *
     * @param int|null $consumed_amount consumed_amount
     *
     * @return self
     */
    public function setConsumedAmount($consumed_amount)
    {
        if (is_null($consumed_amount)) {
            throw new \InvalidArgumentException('non-nullable consumed_amount cannot be null');
        }
        $this->container['consumed_amount'] = $consumed_amount;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
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
    #[\ReturnTypeWillChange]
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
    public function offsetSet($offset, $value): void
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
    public function offsetUnset($offset): void
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
    #[\ReturnTypeWillChange]
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


