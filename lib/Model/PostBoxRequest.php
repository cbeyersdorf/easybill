<?php
/**
 * PostBoxRequest
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
 * PostBoxRequest Class Doc Comment
 *
 * @category Class
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class PostBoxRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'PostBoxRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'to' => 'string',
        'cc' => 'string',
        'from' => 'string',
        'subject' => 'string',
        'message' => 'string',
        'date' => '\DateTime',
        'send_by_self' => 'bool',
        'send_with_attachment' => 'bool',
        'document_file_type' => 'string',
        'post_send_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'to' => null,
        'cc' => null,
        'from' => null,
        'subject' => null,
        'message' => null,
        'date' => 'date',
        'send_by_self' => null,
        'send_with_attachment' => null,
        'document_file_type' => null,
        'post_send_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'to' => false,
        'cc' => false,
        'from' => false,
        'subject' => false,
        'message' => false,
        'date' => false,
        'send_by_self' => false,
        'send_with_attachment' => false,
        'document_file_type' => true,
        'post_send_type' => false
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
        'to' => 'to',
        'cc' => 'cc',
        'from' => 'from',
        'subject' => 'subject',
        'message' => 'message',
        'date' => 'date',
        'send_by_self' => 'send_by_self',
        'send_with_attachment' => 'send_with_attachment',
        'document_file_type' => 'document_file_type',
        'post_send_type' => 'post_send_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'to' => 'setTo',
        'cc' => 'setCc',
        'from' => 'setFrom',
        'subject' => 'setSubject',
        'message' => 'setMessage',
        'date' => 'setDate',
        'send_by_self' => 'setSendBySelf',
        'send_with_attachment' => 'setSendWithAttachment',
        'document_file_type' => 'setDocumentFileType',
        'post_send_type' => 'setPostSendType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'to' => 'getTo',
        'cc' => 'getCc',
        'from' => 'getFrom',
        'subject' => 'getSubject',
        'message' => 'getMessage',
        'date' => 'getDate',
        'send_by_self' => 'getSendBySelf',
        'send_with_attachment' => 'getSendWithAttachment',
        'document_file_type' => 'getDocumentFileType',
        'post_send_type' => 'getPostSendType'
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

    public const DOCUMENT_FILE_TYPE__DEFAULT = 'default';
    public const DOCUMENT_FILE_TYPE_ZUGFERD1 = 'zugferd1';
    public const DOCUMENT_FILE_TYPE_ZUGFERD2 = 'zugferd2';
    public const DOCUMENT_FILE_TYPE_XRECHNUNG = 'xrechnung';
    public const DOCUMENT_FILE_TYPE_XRECHNUNG_XML = 'xrechnung_xml';
    public const DOCUMENT_FILE_TYPE_XRECHNUNG2_2_XML = 'xrechnung2_2_xml';
    public const DOCUMENT_FILE_TYPE_XRECHNUNG3_0_XML = 'xrechnung3_0_xml';
    public const POST_SEND_TYPE_STANDARD = 'post_send_type_standard';
    public const POST_SEND_TYPE_REGISTERED = 'post_send_type_registered';
    public const POST_SEND_TYPE_REGISTERED_AND_PERSONAL = 'post_send_type_registered_and_personal';
    public const POST_SEND_TYPE_REGISTERED_AND_RECEIPT = 'post_send_type_registered_and_receipt';
    public const POST_SEND_TYPE_REGISTERED_THROWIN = 'post_send_type_registered_throwin';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDocumentFileTypeAllowableValues()
    {
        return [
            self::DOCUMENT_FILE_TYPE__DEFAULT,
            self::DOCUMENT_FILE_TYPE_ZUGFERD1,
            self::DOCUMENT_FILE_TYPE_ZUGFERD2,
            self::DOCUMENT_FILE_TYPE_XRECHNUNG,
            self::DOCUMENT_FILE_TYPE_XRECHNUNG_XML,
            self::DOCUMENT_FILE_TYPE_XRECHNUNG2_2_XML,
            self::DOCUMENT_FILE_TYPE_XRECHNUNG3_0_XML,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPostSendTypeAllowableValues()
    {
        return [
            self::POST_SEND_TYPE_STANDARD,
            self::POST_SEND_TYPE_REGISTERED,
            self::POST_SEND_TYPE_REGISTERED_AND_PERSONAL,
            self::POST_SEND_TYPE_REGISTERED_AND_RECEIPT,
            self::POST_SEND_TYPE_REGISTERED_THROWIN,
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
        $this->setIfExists('to', $data ?? [], null);
        $this->setIfExists('cc', $data ?? [], null);
        $this->setIfExists('from', $data ?? [], null);
        $this->setIfExists('subject', $data ?? [], null);
        $this->setIfExists('message', $data ?? [], null);
        $this->setIfExists('date', $data ?? [], null);
        $this->setIfExists('send_by_self', $data ?? [], null);
        $this->setIfExists('send_with_attachment', $data ?? [], true);
        $this->setIfExists('document_file_type', $data ?? [], null);
        $this->setIfExists('post_send_type', $data ?? [], null);
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

        $allowedValues = $this->getDocumentFileTypeAllowableValues();
        if (!is_null($this->container['document_file_type']) && !in_array($this->container['document_file_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'document_file_type', must be one of '%s'",
                $this->container['document_file_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPostSendTypeAllowableValues();
        if (!is_null($this->container['post_send_type']) && !in_array($this->container['post_send_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'post_send_type', must be one of '%s'",
                $this->container['post_send_type'],
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
     * Gets to
     *
     * @return string|null
     */
    public function getTo()
    {
        return $this->container['to'];
    }

    /**
     * Sets to
     *
     * @param string|null $to to
     *
     * @return self
     */
    public function setTo($to)
    {
        if (is_null($to)) {
            throw new \InvalidArgumentException('non-nullable to cannot be null');
        }
        $this->container['to'] = $to;

        return $this;
    }

    /**
     * Gets cc
     *
     * @return string|null
     */
    public function getCc()
    {
        return $this->container['cc'];
    }

    /**
     * Sets cc
     *
     * @param string|null $cc cc
     *
     * @return self
     */
    public function setCc($cc)
    {
        if (is_null($cc)) {
            throw new \InvalidArgumentException('non-nullable cc cannot be null');
        }
        $this->container['cc'] = $cc;

        return $this;
    }

    /**
     * Gets from
     *
     * @return string|null
     */
    public function getFrom()
    {
        return $this->container['from'];
    }

    /**
     * Sets from
     *
     * @param string|null $from from
     *
     * @return self
     */
    public function setFrom($from)
    {
        if (is_null($from)) {
            throw new \InvalidArgumentException('non-nullable from cannot be null');
        }
        $this->container['from'] = $from;

        return $this;
    }

    /**
     * Gets subject
     *
     * @return string|null
     */
    public function getSubject()
    {
        return $this->container['subject'];
    }

    /**
     * Sets subject
     *
     * @param string|null $subject subject
     *
     * @return self
     */
    public function setSubject($subject)
    {
        if (is_null($subject)) {
            throw new \InvalidArgumentException('non-nullable subject cannot be null');
        }
        $this->container['subject'] = $subject;

        return $this;
    }

    /**
     * Gets message
     *
     * @return string|null
     */
    public function getMessage()
    {
        return $this->container['message'];
    }

    /**
     * Sets message
     *
     * @param string|null $message message
     *
     * @return self
     */
    public function setMessage($message)
    {
        if (is_null($message)) {
            throw new \InvalidArgumentException('non-nullable message cannot be null');
        }
        $this->container['message'] = $message;

        return $this;
    }

    /**
     * Gets date
     *
     * @return \DateTime|null
     */
    public function getDate()
    {
        return $this->container['date'];
    }

    /**
     * Sets date
     *
     * @param \DateTime|null $date date
     *
     * @return self
     */
    public function setDate($date)
    {
        if (is_null($date)) {
            throw new \InvalidArgumentException('non-nullable date cannot be null');
        }
        $this->container['date'] = $date;

        return $this;
    }

    /**
     * Gets send_by_self
     *
     * @return bool|null
     */
    public function getSendBySelf()
    {
        return $this->container['send_by_self'];
    }

    /**
     * Sets send_by_self
     *
     * @param bool|null $send_by_self send_by_self
     *
     * @return self
     */
    public function setSendBySelf($send_by_self)
    {
        if (is_null($send_by_self)) {
            throw new \InvalidArgumentException('non-nullable send_by_self cannot be null');
        }
        $this->container['send_by_self'] = $send_by_self;

        return $this;
    }

    /**
     * Gets send_with_attachment
     *
     * @return bool|null
     */
    public function getSendWithAttachment()
    {
        return $this->container['send_with_attachment'];
    }

    /**
     * Sets send_with_attachment
     *
     * @param bool|null $send_with_attachment send_with_attachment
     *
     * @return self
     */
    public function setSendWithAttachment($send_with_attachment)
    {
        if (is_null($send_with_attachment)) {
            throw new \InvalidArgumentException('non-nullable send_with_attachment cannot be null');
        }
        $this->container['send_with_attachment'] = $send_with_attachment;

        return $this;
    }

    /**
     * Gets document_file_type
     *
     * @return string|null
     */
    public function getDocumentFileType()
    {
        return $this->container['document_file_type'];
    }

    /**
     * Sets document_file_type
     *
     * @param string|null $document_file_type When set to null, the setting on the customer is used
     *
     * @return self
     */
    public function setDocumentFileType($document_file_type)
    {
        if (is_null($document_file_type)) {
            array_push($this->openAPINullablesSetToNull, 'document_file_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('document_file_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getDocumentFileTypeAllowableValues();
        if (!is_null($document_file_type) && !in_array($document_file_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'document_file_type', must be one of '%s'",
                    $document_file_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['document_file_type'] = $document_file_type;

        return $this;
    }

    /**
     * Gets post_send_type
     *
     * @return string|null
     */
    public function getPostSendType()
    {
        return $this->container['post_send_type'];
    }

    /**
     * Sets post_send_type
     *
     * @param string|null $post_send_type This value indicates what method is used when the document is send via mail. The different types are offered by the german post as additional services. The registered mail options will include a tracking number which will be  added to the postbox when known.  If the value is omitted or empty when a postbox is created with the type \"POST\" post_send_type_standard will be used.  For postbox with a different type than \"POST\" this field will hold a empty string.
     *
     * @return self
     */
    public function setPostSendType($post_send_type)
    {
        if (is_null($post_send_type)) {
            throw new \InvalidArgumentException('non-nullable post_send_type cannot be null');
        }
        $allowedValues = $this->getPostSendTypeAllowableValues();
        if (!in_array($post_send_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'post_send_type', must be one of '%s'",
                    $post_send_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['post_send_type'] = $post_send_type;

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


