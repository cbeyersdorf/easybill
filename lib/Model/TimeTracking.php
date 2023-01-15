<?php
/**
 * TimeTracking
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
 * The version of the OpenAPI document: 1.78.0
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.3.0-SNAPSHOT
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
 * TimeTracking Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class TimeTracking implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TimeTracking';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'cleared_at' => '\DateTime',
        'created_at' => '\DateTime',
        'date_from_at' => '\DateTime',
        'date_thru_at' => '\DateTime',
        'description' => 'string',
        'hourly_rate' => 'float',
        'id' => 'int',
        'note' => 'string',
        'number' => 'string',
        'position_id' => 'int',
        'project_id' => 'int',
        'login_id' => 'int',
        'timer_value' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'cleared_at' => 'date-time',
        'created_at' => 'date-time',
        'date_from_at' => 'date-time',
        'date_thru_at' => 'date-time',
        'description' => null,
        'hourly_rate' => 'float',
        'id' => 'int64',
        'note' => null,
        'number' => null,
        'position_id' => 'int64',
        'project_id' => 'int64',
        'login_id' => 'int64',
        'timer_value' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'cleared_at' => true,
		'created_at' => false,
		'date_from_at' => true,
		'date_thru_at' => true,
		'description' => false,
		'hourly_rate' => false,
		'id' => false,
		'note' => true,
		'number' => true,
		'position_id' => true,
		'project_id' => true,
		'login_id' => true,
		'timer_value' => true
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
        'cleared_at' => 'cleared_at',
        'created_at' => 'created_at',
        'date_from_at' => 'date_from_at',
        'date_thru_at' => 'date_thru_at',
        'description' => 'description',
        'hourly_rate' => 'hourly_rate',
        'id' => 'id',
        'note' => 'note',
        'number' => 'number',
        'position_id' => 'position_id',
        'project_id' => 'project_id',
        'login_id' => 'login_id',
        'timer_value' => 'timer_value'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'cleared_at' => 'setClearedAt',
        'created_at' => 'setCreatedAt',
        'date_from_at' => 'setDateFromAt',
        'date_thru_at' => 'setDateThruAt',
        'description' => 'setDescription',
        'hourly_rate' => 'setHourlyRate',
        'id' => 'setId',
        'note' => 'setNote',
        'number' => 'setNumber',
        'position_id' => 'setPositionId',
        'project_id' => 'setProjectId',
        'login_id' => 'setLoginId',
        'timer_value' => 'setTimerValue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'cleared_at' => 'getClearedAt',
        'created_at' => 'getCreatedAt',
        'date_from_at' => 'getDateFromAt',
        'date_thru_at' => 'getDateThruAt',
        'description' => 'getDescription',
        'hourly_rate' => 'getHourlyRate',
        'id' => 'getId',
        'note' => 'getNote',
        'number' => 'getNumber',
        'position_id' => 'getPositionId',
        'project_id' => 'getProjectId',
        'login_id' => 'getLoginId',
        'timer_value' => 'getTimerValue'
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
        $this->setIfExists('cleared_at', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('date_from_at', $data ?? [], null);
        $this->setIfExists('date_thru_at', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('hourly_rate', $data ?? [], 0.0);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('note', $data ?? [], null);
        $this->setIfExists('number', $data ?? [], null);
        $this->setIfExists('position_id', $data ?? [], null);
        $this->setIfExists('project_id', $data ?? [], null);
        $this->setIfExists('login_id', $data ?? [], null);
        $this->setIfExists('timer_value', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
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
     * Gets cleared_at
     *
     * @return \DateTime|null
     */
    public function getClearedAt()
    {
        return $this->container['cleared_at'];
    }

    /**
     * Sets cleared_at
     *
     * @param \DateTime|null $cleared_at cleared_at
     *
     * @return self
     */
    public function setClearedAt($cleared_at)
    {
        if (is_null($cleared_at)) {
            array_push($this->openAPINullablesSetToNull, 'cleared_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('cleared_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['cleared_at'] = $cleared_at;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at created_at
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets date_from_at
     *
     * @return \DateTime|null
     */
    public function getDateFromAt()
    {
        return $this->container['date_from_at'];
    }

    /**
     * Sets date_from_at
     *
     * @param \DateTime|null $date_from_at date_from_at
     *
     * @return self
     */
    public function setDateFromAt($date_from_at)
    {
        if (is_null($date_from_at)) {
            array_push($this->openAPINullablesSetToNull, 'date_from_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_from_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_from_at'] = $date_from_at;

        return $this;
    }

    /**
     * Gets date_thru_at
     *
     * @return \DateTime|null
     */
    public function getDateThruAt()
    {
        return $this->container['date_thru_at'];
    }

    /**
     * Sets date_thru_at
     *
     * @param \DateTime|null $date_thru_at date_thru_at
     *
     * @return self
     */
    public function setDateThruAt($date_thru_at)
    {
        if (is_null($date_thru_at)) {
            array_push($this->openAPINullablesSetToNull, 'date_thru_at');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('date_thru_at', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['date_thru_at'] = $date_thru_at;

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
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

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
     * Gets number
     *
     * @return string|null
     */
    public function getNumber()
    {
        return $this->container['number'];
    }

    /**
     * Sets number
     *
     * @param string|null $number Can be chosen freely
     *
     * @return self
     */
    public function setNumber($number)
    {
        if (is_null($number)) {
            array_push($this->openAPINullablesSetToNull, 'number');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('number', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['number'] = $number;

        return $this;
    }

    /**
     * Gets position_id
     *
     * @return int|null
     */
    public function getPositionId()
    {
        return $this->container['position_id'];
    }

    /**
     * Sets position_id
     *
     * @param int|null $position_id position_id
     *
     * @return self
     */
    public function setPositionId($position_id)
    {
        if (is_null($position_id)) {
            array_push($this->openAPINullablesSetToNull, 'position_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('position_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['position_id'] = $position_id;

        return $this;
    }

    /**
     * Gets project_id
     *
     * @return int|null
     */
    public function getProjectId()
    {
        return $this->container['project_id'];
    }

    /**
     * Sets project_id
     *
     * @param int|null $project_id project_id
     *
     * @return self
     */
    public function setProjectId($project_id)
    {
        if (is_null($project_id)) {
            array_push($this->openAPINullablesSetToNull, 'project_id');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('project_id', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['project_id'] = $project_id;

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
     * @param int|null $login_id If omitted or null, the currently active login is used.
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
     * Gets timer_value
     *
     * @return int|null
     */
    public function getTimerValue()
    {
        return $this->container['timer_value'];
    }

    /**
     * Sets timer_value
     *
     * @param int|null $timer_value Tracked time in minutes
     *
     * @return self
     */
    public function setTimerValue($timer_value)
    {
        if (is_null($timer_value)) {
            array_push($this->openAPINullablesSetToNull, 'timer_value');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('timer_value', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['timer_value'] = $timer_value;

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


