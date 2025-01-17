<?php
/**
 * WebHook
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
 * The version of the OpenAPI document: 1.91.0
 * Generated by: https://openapi-generator.tech
 * Generator version: 7.9.0-SNAPSHOT
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
 * WebHook Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class WebHook implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'WebHook';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'content_type' => 'string',
        'description' => 'string',
        'events' => 'string[]',
        'id' => 'int',
        'is_active' => 'bool',
        'last_response' => '\cbeyersdorf\easybill\Model\WebHookLastResponse',
        'secret' => 'string',
        'url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'content_type' => null,
        'description' => null,
        'events' => null,
        'id' => 'int64',
        'is_active' => null,
        'last_response' => null,
        'secret' => null,
        'url' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'content_type' => false,
        'description' => false,
        'events' => false,
        'id' => false,
        'is_active' => false,
        'last_response' => false,
        'secret' => false,
        'url' => false
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
        'content_type' => 'content_type',
        'description' => 'description',
        'events' => 'events',
        'id' => 'id',
        'is_active' => 'is_active',
        'last_response' => 'last_response',
        'secret' => 'secret',
        'url' => 'url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'content_type' => 'setContentType',
        'description' => 'setDescription',
        'events' => 'setEvents',
        'id' => 'setId',
        'is_active' => 'setIsActive',
        'last_response' => 'setLastResponse',
        'secret' => 'setSecret',
        'url' => 'setUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'content_type' => 'getContentType',
        'description' => 'getDescription',
        'events' => 'getEvents',
        'id' => 'getId',
        'is_active' => 'getIsActive',
        'last_response' => 'getLastResponse',
        'secret' => 'getSecret',
        'url' => 'getUrl'
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

    public const CONTENT_TYPE_FORM = 'form';
    public const CONTENT_TYPE_JSON = 'json';
    public const EVENTS_DOCUMENT_CREATE = 'document.create';
    public const EVENTS_DOCUMENT_UPDATE = 'document.update';
    public const EVENTS_DOCUMENT_COMPLETED = 'document.completed';
    public const EVENTS_DOCUMENT_DELETED = 'document.deleted';
    public const EVENTS_DOCUMENT_PAYMENT_ADD = 'document.payment_add';
    public const EVENTS_DOCUMENT_PAYMENT_DELETE = 'document.payment_delete';
    public const EVENTS_CUSTOMER_CREATE = 'customer.create';
    public const EVENTS_CUSTOMER_UPDATE = 'customer.update';
    public const EVENTS_CUSTOMER_DELETE = 'customer.delete';
    public const EVENTS_CONTACT_CREATE = 'contact.create';
    public const EVENTS_CONTACT_UPDATE = 'contact.update';
    public const EVENTS_CONTACT_DELETE = 'contact.delete';
    public const EVENTS_POSITION_CREATE = 'position.create';
    public const EVENTS_POSITION_UPDATE = 'position.update';
    public const EVENTS_POSITION_DELETE = 'position.delete';
    public const EVENTS_POSTBOX_CREATE = 'postbox.create';
    public const EVENTS_POSTBOX_UPDATE = 'postbox.update';
    public const EVENTS_POSTBOX_DELETE = 'postbox.delete';
    public const EVENTS_POSTBOX_SENT = 'postbox.sent';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getContentTypeAllowableValues()
    {
        return [
            self::CONTENT_TYPE_FORM,
            self::CONTENT_TYPE_JSON,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventsAllowableValues()
    {
        return [
            self::EVENTS_DOCUMENT_CREATE,
            self::EVENTS_DOCUMENT_UPDATE,
            self::EVENTS_DOCUMENT_COMPLETED,
            self::EVENTS_DOCUMENT_DELETED,
            self::EVENTS_DOCUMENT_PAYMENT_ADD,
            self::EVENTS_DOCUMENT_PAYMENT_DELETE,
            self::EVENTS_CUSTOMER_CREATE,
            self::EVENTS_CUSTOMER_UPDATE,
            self::EVENTS_CUSTOMER_DELETE,
            self::EVENTS_CONTACT_CREATE,
            self::EVENTS_CONTACT_UPDATE,
            self::EVENTS_CONTACT_DELETE,
            self::EVENTS_POSITION_CREATE,
            self::EVENTS_POSITION_UPDATE,
            self::EVENTS_POSITION_DELETE,
            self::EVENTS_POSTBOX_CREATE,
            self::EVENTS_POSTBOX_UPDATE,
            self::EVENTS_POSTBOX_DELETE,
            self::EVENTS_POSTBOX_SENT,
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
        $this->setIfExists('content_type', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('events', $data ?? [], null);
        $this->setIfExists('id', $data ?? [], null);
        $this->setIfExists('is_active', $data ?? [], false);
        $this->setIfExists('last_response', $data ?? [], null);
        $this->setIfExists('secret', $data ?? [], null);
        $this->setIfExists('url', $data ?? [], null);
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

        if ($this->container['content_type'] === null) {
            $invalidProperties[] = "'content_type' can't be null";
        }
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!is_null($this->container['content_type']) && !in_array($this->container['content_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'content_type', must be one of '%s'",
                $this->container['content_type'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['events'] === null) {
            $invalidProperties[] = "'events' can't be null";
        }
        if ($this->container['secret'] === null) {
            $invalidProperties[] = "'secret' can't be null";
        }
        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
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
     * Gets content_type
     *
     * @return string
     */
    public function getContentType()
    {
        return $this->container['content_type'];
    }

    /**
     * Sets content_type
     *
     * @param string $content_type content_type
     *
     * @return self
     */
    public function setContentType($content_type)
    {
        if (is_null($content_type)) {
            throw new \InvalidArgumentException('non-nullable content_type cannot be null');
        }
        $allowedValues = $this->getContentTypeAllowableValues();
        if (!in_array($content_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'content_type', must be one of '%s'",
                    $content_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['content_type'] = $content_type;

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
     * Gets events
     *
     * @return string[]
     */
    public function getEvents()
    {
        return $this->container['events'];
    }

    /**
     * Sets events
     *
     * @param string[] $events events
     *
     * @return self
     */
    public function setEvents($events)
    {
        if (is_null($events)) {
            throw new \InvalidArgumentException('non-nullable events cannot be null');
        }
        $allowedValues = $this->getEventsAllowableValues();
        if (array_diff($events, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'events', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['events'] = $events;

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
     * Gets is_active
     *
     * @return bool|null
     */
    public function getIsActive()
    {
        return $this->container['is_active'];
    }

    /**
     * Sets is_active
     *
     * @param bool|null $is_active is_active
     *
     * @return self
     */
    public function setIsActive($is_active)
    {
        if (is_null($is_active)) {
            throw new \InvalidArgumentException('non-nullable is_active cannot be null');
        }
        $this->container['is_active'] = $is_active;

        return $this;
    }

    /**
     * Gets last_response
     *
     * @return \cbeyersdorf\easybill\Model\WebHookLastResponse|null
     */
    public function getLastResponse()
    {
        return $this->container['last_response'];
    }

    /**
     * Sets last_response
     *
     * @param \cbeyersdorf\easybill\Model\WebHookLastResponse|null $last_response last_response
     *
     * @return self
     */
    public function setLastResponse($last_response)
    {
        if (is_null($last_response)) {
            throw new \InvalidArgumentException('non-nullable last_response cannot be null');
        }
        $this->container['last_response'] = $last_response;

        return $this;
    }

    /**
     * Gets secret
     *
     * @return string
     */
    public function getSecret()
    {
        return $this->container['secret'];
    }

    /**
     * Sets secret
     *
     * @param string $secret secret
     *
     * @return self
     */
    public function setSecret($secret)
    {
        if (is_null($secret)) {
            throw new \InvalidArgumentException('non-nullable secret cannot be null');
        }
        $this->container['secret'] = $secret;

        return $this;
    }

    /**
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url url
     *
     * @return self
     */
    public function setUrl($url)
    {
        if (is_null($url)) {
            throw new \InvalidArgumentException('non-nullable url cannot be null');
        }
        $this->container['url'] = $url;

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


