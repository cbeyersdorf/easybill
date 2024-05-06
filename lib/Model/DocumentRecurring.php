<?php
/**
 * DocumentRecurring
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
 * Generator version: 7.6.0-SNAPSHOT
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
 * DocumentRecurring Class Doc Comment
 *
 * @category Class
 * @description This object is only available in document type RECURRING.
 * @package  cbeyersdorf\easybill
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class DocumentRecurring implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'DocumentRecurring';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'next_date' => '\DateTime',
        'frequency' => 'string',
        'frequency_special' => 'string',
        'interval' => 'int',
        'end_date_or_count' => 'string',
        'status' => 'string',
        'as_draft' => 'bool',
        'is_notify' => 'bool',
        'send_as' => 'string',
        'is_sign' => 'bool',
        'is_paid' => 'bool',
        'paid_date_option' => 'string',
        'is_sepa' => 'bool',
        'sepa_local_instrument' => 'string',
        'sepa_sequence_type' => 'string',
        'sepa_reference' => 'string',
        'sepa_remittance_information' => 'string',
        'target_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'next_date' => 'date',
        'frequency' => null,
        'frequency_special' => null,
        'interval' => null,
        'end_date_or_count' => null,
        'status' => null,
        'as_draft' => null,
        'is_notify' => null,
        'send_as' => null,
        'is_sign' => null,
        'is_paid' => null,
        'paid_date_option' => null,
        'is_sepa' => null,
        'sepa_local_instrument' => null,
        'sepa_sequence_type' => null,
        'sepa_reference' => null,
        'sepa_remittance_information' => null,
        'target_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'next_date' => false,
        'frequency' => false,
        'frequency_special' => true,
        'interval' => false,
        'end_date_or_count' => true,
        'status' => false,
        'as_draft' => false,
        'is_notify' => false,
        'send_as' => true,
        'is_sign' => false,
        'is_paid' => false,
        'paid_date_option' => false,
        'is_sepa' => false,
        'sepa_local_instrument' => true,
        'sepa_sequence_type' => true,
        'sepa_reference' => true,
        'sepa_remittance_information' => true,
        'target_type' => false
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
        'next_date' => 'next_date',
        'frequency' => 'frequency',
        'frequency_special' => 'frequency_special',
        'interval' => 'interval',
        'end_date_or_count' => 'end_date_or_count',
        'status' => 'status',
        'as_draft' => 'as_draft',
        'is_notify' => 'is_notify',
        'send_as' => 'send_as',
        'is_sign' => 'is_sign',
        'is_paid' => 'is_paid',
        'paid_date_option' => 'paid_date_option',
        'is_sepa' => 'is_sepa',
        'sepa_local_instrument' => 'sepa_local_instrument',
        'sepa_sequence_type' => 'sepa_sequence_type',
        'sepa_reference' => 'sepa_reference',
        'sepa_remittance_information' => 'sepa_remittance_information',
        'target_type' => 'target_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'next_date' => 'setNextDate',
        'frequency' => 'setFrequency',
        'frequency_special' => 'setFrequencySpecial',
        'interval' => 'setInterval',
        'end_date_or_count' => 'setEndDateOrCount',
        'status' => 'setStatus',
        'as_draft' => 'setAsDraft',
        'is_notify' => 'setIsNotify',
        'send_as' => 'setSendAs',
        'is_sign' => 'setIsSign',
        'is_paid' => 'setIsPaid',
        'paid_date_option' => 'setPaidDateOption',
        'is_sepa' => 'setIsSepa',
        'sepa_local_instrument' => 'setSepaLocalInstrument',
        'sepa_sequence_type' => 'setSepaSequenceType',
        'sepa_reference' => 'setSepaReference',
        'sepa_remittance_information' => 'setSepaRemittanceInformation',
        'target_type' => 'setTargetType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'next_date' => 'getNextDate',
        'frequency' => 'getFrequency',
        'frequency_special' => 'getFrequencySpecial',
        'interval' => 'getInterval',
        'end_date_or_count' => 'getEndDateOrCount',
        'status' => 'getStatus',
        'as_draft' => 'getAsDraft',
        'is_notify' => 'getIsNotify',
        'send_as' => 'getSendAs',
        'is_sign' => 'getIsSign',
        'is_paid' => 'getIsPaid',
        'paid_date_option' => 'getPaidDateOption',
        'is_sepa' => 'getIsSepa',
        'sepa_local_instrument' => 'getSepaLocalInstrument',
        'sepa_sequence_type' => 'getSepaSequenceType',
        'sepa_reference' => 'getSepaReference',
        'sepa_remittance_information' => 'getSepaRemittanceInformation',
        'target_type' => 'getTargetType'
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

    public const FREQUENCY_DAILY = 'DAILY';
    public const FREQUENCY_WEEKLY = 'WEEKLY';
    public const FREQUENCY_MONTHLY = 'MONTHLY';
    public const FREQUENCY_YEARLY = 'YEARLY';
    public const FREQUENCY_SPECIAL_LASTDAYOFMONTH = 'LASTDAYOFMONTH';
    public const STATUS_RUNNING = 'RUNNING';
    public const STATUS_PAUSE = 'PAUSE';
    public const STATUS_STOP = 'STOP';
    public const STATUS_WAITING = 'WAITING';
    public const SEND_AS_EMAIL = 'EMAIL';
    public const SEND_AS_FAX = 'FAX';
    public const SEND_AS_POST = 'POST';
    public const PAID_DATE_OPTION_CREATED_DATE = 'created_date';
    public const PAID_DATE_OPTION_DUE_DATE = 'due_date';
    public const PAID_DATE_OPTION_NEXT_VALID_DATE = 'next_valid_date';
    public const SEPA_LOCAL_INSTRUMENT_CORE = 'CORE';
    public const SEPA_LOCAL_INSTRUMENT_COR1 = 'COR1';
    public const SEPA_LOCAL_INSTRUMENT_B2_B = 'B2B';
    public const SEPA_SEQUENCE_TYPE_FRST = 'FRST';
    public const SEPA_SEQUENCE_TYPE_OOFF = 'OOFF';
    public const SEPA_SEQUENCE_TYPE_FNAL = 'FNAL';
    public const SEPA_SEQUENCE_TYPE_RCUR = 'RCUR';
    public const TARGET_TYPE_INVOICE = 'INVOICE';
    public const TARGET_TYPE_CREDIT = 'CREDIT';
    public const TARGET_TYPE_ORDER = 'ORDER';
    public const TARGET_TYPE_OFFER = 'OFFER';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencyAllowableValues()
    {
        return [
            self::FREQUENCY_DAILY,
            self::FREQUENCY_WEEKLY,
            self::FREQUENCY_MONTHLY,
            self::FREQUENCY_YEARLY,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getFrequencySpecialAllowableValues()
    {
        return [
            self::FREQUENCY_SPECIAL_LASTDAYOFMONTH,
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
            self::STATUS_RUNNING,
            self::STATUS_PAUSE,
            self::STATUS_STOP,
            self::STATUS_WAITING,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSendAsAllowableValues()
    {
        return [
            self::SEND_AS_EMAIL,
            self::SEND_AS_FAX,
            self::SEND_AS_POST,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPaidDateOptionAllowableValues()
    {
        return [
            self::PAID_DATE_OPTION_CREATED_DATE,
            self::PAID_DATE_OPTION_DUE_DATE,
            self::PAID_DATE_OPTION_NEXT_VALID_DATE,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSepaLocalInstrumentAllowableValues()
    {
        return [
            self::SEPA_LOCAL_INSTRUMENT_CORE,
            self::SEPA_LOCAL_INSTRUMENT_COR1,
            self::SEPA_LOCAL_INSTRUMENT_B2_B,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getSepaSequenceTypeAllowableValues()
    {
        return [
            self::SEPA_SEQUENCE_TYPE_FRST,
            self::SEPA_SEQUENCE_TYPE_OOFF,
            self::SEPA_SEQUENCE_TYPE_FNAL,
            self::SEPA_SEQUENCE_TYPE_RCUR,
        ];
    }

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTargetTypeAllowableValues()
    {
        return [
            self::TARGET_TYPE_INVOICE,
            self::TARGET_TYPE_CREDIT,
            self::TARGET_TYPE_ORDER,
            self::TARGET_TYPE_OFFER,
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
        $this->setIfExists('next_date', $data ?? [], null);
        $this->setIfExists('frequency', $data ?? [], 'MONTHLY');
        $this->setIfExists('frequency_special', $data ?? [], null);
        $this->setIfExists('interval', $data ?? [], null);
        $this->setIfExists('end_date_or_count', $data ?? [], null);
        $this->setIfExists('status', $data ?? [], 'WAITING');
        $this->setIfExists('as_draft', $data ?? [], false);
        $this->setIfExists('is_notify', $data ?? [], false);
        $this->setIfExists('send_as', $data ?? [], null);
        $this->setIfExists('is_sign', $data ?? [], false);
        $this->setIfExists('is_paid', $data ?? [], false);
        $this->setIfExists('paid_date_option', $data ?? [], 'created_date');
        $this->setIfExists('is_sepa', $data ?? [], false);
        $this->setIfExists('sepa_local_instrument', $data ?? [], null);
        $this->setIfExists('sepa_sequence_type', $data ?? [], null);
        $this->setIfExists('sepa_reference', $data ?? [], null);
        $this->setIfExists('sepa_remittance_information', $data ?? [], null);
        $this->setIfExists('target_type', $data ?? [], 'INVOICE');
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

        if ($this->container['next_date'] === null) {
            $invalidProperties[] = "'next_date' can't be null";
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!is_null($this->container['frequency']) && !in_array($this->container['frequency'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency', must be one of '%s'",
                $this->container['frequency'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getFrequencySpecialAllowableValues();
        if (!is_null($this->container['frequency_special']) && !in_array($this->container['frequency_special'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'frequency_special', must be one of '%s'",
                $this->container['frequency_special'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getStatusAllowableValues();
        if (!is_null($this->container['status']) && !in_array($this->container['status'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'status', must be one of '%s'",
                $this->container['status'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSendAsAllowableValues();
        if (!is_null($this->container['send_as']) && !in_array($this->container['send_as'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'send_as', must be one of '%s'",
                $this->container['send_as'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getPaidDateOptionAllowableValues();
        if (!is_null($this->container['paid_date_option']) && !in_array($this->container['paid_date_option'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'paid_date_option', must be one of '%s'",
                $this->container['paid_date_option'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSepaLocalInstrumentAllowableValues();
        if (!is_null($this->container['sepa_local_instrument']) && !in_array($this->container['sepa_local_instrument'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sepa_local_instrument', must be one of '%s'",
                $this->container['sepa_local_instrument'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getSepaSequenceTypeAllowableValues();
        if (!is_null($this->container['sepa_sequence_type']) && !in_array($this->container['sepa_sequence_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'sepa_sequence_type', must be one of '%s'",
                $this->container['sepa_sequence_type'],
                implode("', '", $allowedValues)
            );
        }

        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!is_null($this->container['target_type']) && !in_array($this->container['target_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'target_type', must be one of '%s'",
                $this->container['target_type'],
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
     * Gets next_date
     *
     * @return \DateTime
     */
    public function getNextDate()
    {
        return $this->container['next_date'];
    }

    /**
     * Sets next_date
     *
     * @param \DateTime $next_date Must be in the future
     *
     * @return self
     */
    public function setNextDate($next_date)
    {
        if (is_null($next_date)) {
            throw new \InvalidArgumentException('non-nullable next_date cannot be null');
        }
        $this->container['next_date'] = $next_date;

        return $this;
    }

    /**
     * Gets frequency
     *
     * @return string|null
     */
    public function getFrequency()
    {
        return $this->container['frequency'];
    }

    /**
     * Sets frequency
     *
     * @param string|null $frequency frequency
     *
     * @return self
     */
    public function setFrequency($frequency)
    {
        if (is_null($frequency)) {
            throw new \InvalidArgumentException('non-nullable frequency cannot be null');
        }
        $allowedValues = $this->getFrequencyAllowableValues();
        if (!in_array($frequency, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency', must be one of '%s'",
                    $frequency,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency'] = $frequency;

        return $this;
    }

    /**
     * Gets frequency_special
     *
     * @return string|null
     */
    public function getFrequencySpecial()
    {
        return $this->container['frequency_special'];
    }

    /**
     * Sets frequency_special
     *
     * @param string|null $frequency_special frequency_special
     *
     * @return self
     */
    public function setFrequencySpecial($frequency_special)
    {
        if (is_null($frequency_special)) {
            array_push($this->openAPINullablesSetToNull, 'frequency_special');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('frequency_special', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getFrequencySpecialAllowableValues();
        if (!is_null($frequency_special) && !in_array($frequency_special, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'frequency_special', must be one of '%s'",
                    $frequency_special,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['frequency_special'] = $frequency_special;

        return $this;
    }

    /**
     * Gets interval
     *
     * @return int|null
     */
    public function getInterval()
    {
        return $this->container['interval'];
    }

    /**
     * Sets interval
     *
     * @param int|null $interval interval
     *
     * @return self
     */
    public function setInterval($interval)
    {
        if (is_null($interval)) {
            throw new \InvalidArgumentException('non-nullable interval cannot be null');
        }
        $this->container['interval'] = $interval;

        return $this;
    }

    /**
     * Gets end_date_or_count
     *
     * @return string|null
     */
    public function getEndDateOrCount()
    {
        return $this->container['end_date_or_count'];
    }

    /**
     * Sets end_date_or_count
     *
     * @param string|null $end_date_or_count Date of last exectution day or number of times to exectute
     *
     * @return self
     */
    public function setEndDateOrCount($end_date_or_count)
    {
        if (is_null($end_date_or_count)) {
            array_push($this->openAPINullablesSetToNull, 'end_date_or_count');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('end_date_or_count', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['end_date_or_count'] = $end_date_or_count;

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
     * Gets as_draft
     *
     * @return bool|null
     */
    public function getAsDraft()
    {
        return $this->container['as_draft'];
    }

    /**
     * Sets as_draft
     *
     * @param bool|null $as_draft as_draft
     *
     * @return self
     */
    public function setAsDraft($as_draft)
    {
        if (is_null($as_draft)) {
            throw new \InvalidArgumentException('non-nullable as_draft cannot be null');
        }
        $this->container['as_draft'] = $as_draft;

        return $this;
    }

    /**
     * Gets is_notify
     *
     * @return bool|null
     */
    public function getIsNotify()
    {
        return $this->container['is_notify'];
    }

    /**
     * Sets is_notify
     *
     * @param bool|null $is_notify is_notify
     *
     * @return self
     */
    public function setIsNotify($is_notify)
    {
        if (is_null($is_notify)) {
            throw new \InvalidArgumentException('non-nullable is_notify cannot be null');
        }
        $this->container['is_notify'] = $is_notify;

        return $this;
    }

    /**
     * Gets send_as
     *
     * @return string|null
     */
    public function getSendAs()
    {
        return $this->container['send_as'];
    }

    /**
     * Sets send_as
     *
     * @param string|null $send_as send_as
     *
     * @return self
     */
    public function setSendAs($send_as)
    {
        if (is_null($send_as)) {
            array_push($this->openAPINullablesSetToNull, 'send_as');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('send_as', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSendAsAllowableValues();
        if (!is_null($send_as) && !in_array($send_as, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'send_as', must be one of '%s'",
                    $send_as,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['send_as'] = $send_as;

        return $this;
    }

    /**
     * Gets is_sign
     *
     * @return bool|null
     */
    public function getIsSign()
    {
        return $this->container['is_sign'];
    }

    /**
     * Sets is_sign
     *
     * @param bool|null $is_sign is_sign
     *
     * @return self
     */
    public function setIsSign($is_sign)
    {
        if (is_null($is_sign)) {
            throw new \InvalidArgumentException('non-nullable is_sign cannot be null');
        }
        $this->container['is_sign'] = $is_sign;

        return $this;
    }

    /**
     * Gets is_paid
     *
     * @return bool|null
     */
    public function getIsPaid()
    {
        return $this->container['is_paid'];
    }

    /**
     * Sets is_paid
     *
     * @param bool|null $is_paid is_paid
     *
     * @return self
     */
    public function setIsPaid($is_paid)
    {
        if (is_null($is_paid)) {
            throw new \InvalidArgumentException('non-nullable is_paid cannot be null');
        }
        $this->container['is_paid'] = $is_paid;

        return $this;
    }

    /**
     * Gets paid_date_option
     *
     * @return string|null
     */
    public function getPaidDateOption()
    {
        return $this->container['paid_date_option'];
    }

    /**
     * Sets paid_date_option
     *
     * @param string|null $paid_date_option Option is used to determine what date is used for the payment if is_paid is true. \"next_valid_date\" selects the next workday in regards to the created date of the document if the date falls on a saturday or sunday.
     *
     * @return self
     */
    public function setPaidDateOption($paid_date_option)
    {
        if (is_null($paid_date_option)) {
            throw new \InvalidArgumentException('non-nullable paid_date_option cannot be null');
        }
        $allowedValues = $this->getPaidDateOptionAllowableValues();
        if (!in_array($paid_date_option, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'paid_date_option', must be one of '%s'",
                    $paid_date_option,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['paid_date_option'] = $paid_date_option;

        return $this;
    }

    /**
     * Gets is_sepa
     *
     * @return bool|null
     */
    public function getIsSepa()
    {
        return $this->container['is_sepa'];
    }

    /**
     * Sets is_sepa
     *
     * @param bool|null $is_sepa is_sepa
     *
     * @return self
     */
    public function setIsSepa($is_sepa)
    {
        if (is_null($is_sepa)) {
            throw new \InvalidArgumentException('non-nullable is_sepa cannot be null');
        }
        $this->container['is_sepa'] = $is_sepa;

        return $this;
    }

    /**
     * Gets sepa_local_instrument
     *
     * @return string|null
     */
    public function getSepaLocalInstrument()
    {
        return $this->container['sepa_local_instrument'];
    }

    /**
     * Sets sepa_local_instrument
     *
     * @param string|null $sepa_local_instrument COR1 is deprecated use CORE instead.
     *
     * @return self
     */
    public function setSepaLocalInstrument($sepa_local_instrument)
    {
        if (is_null($sepa_local_instrument)) {
            array_push($this->openAPINullablesSetToNull, 'sepa_local_instrument');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sepa_local_instrument', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSepaLocalInstrumentAllowableValues();
        if (!is_null($sepa_local_instrument) && !in_array($sepa_local_instrument, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sepa_local_instrument', must be one of '%s'",
                    $sepa_local_instrument,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sepa_local_instrument'] = $sepa_local_instrument;

        return $this;
    }

    /**
     * Gets sepa_sequence_type
     *
     * @return string|null
     */
    public function getSepaSequenceType()
    {
        return $this->container['sepa_sequence_type'];
    }

    /**
     * Sets sepa_sequence_type
     *
     * @param string|null $sepa_sequence_type sepa_sequence_type
     *
     * @return self
     */
    public function setSepaSequenceType($sepa_sequence_type)
    {
        if (is_null($sepa_sequence_type)) {
            array_push($this->openAPINullablesSetToNull, 'sepa_sequence_type');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sepa_sequence_type', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $allowedValues = $this->getSepaSequenceTypeAllowableValues();
        if (!is_null($sepa_sequence_type) && !in_array($sepa_sequence_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'sepa_sequence_type', must be one of '%s'",
                    $sepa_sequence_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['sepa_sequence_type'] = $sepa_sequence_type;

        return $this;
    }

    /**
     * Gets sepa_reference
     *
     * @return string|null
     */
    public function getSepaReference()
    {
        return $this->container['sepa_reference'];
    }

    /**
     * Sets sepa_reference
     *
     * @param string|null $sepa_reference sepa_reference
     *
     * @return self
     */
    public function setSepaReference($sepa_reference)
    {
        if (is_null($sepa_reference)) {
            array_push($this->openAPINullablesSetToNull, 'sepa_reference');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sepa_reference', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sepa_reference'] = $sepa_reference;

        return $this;
    }

    /**
     * Gets sepa_remittance_information
     *
     * @return string|null
     */
    public function getSepaRemittanceInformation()
    {
        return $this->container['sepa_remittance_information'];
    }

    /**
     * Sets sepa_remittance_information
     *
     * @param string|null $sepa_remittance_information sepa_remittance_information
     *
     * @return self
     */
    public function setSepaRemittanceInformation($sepa_remittance_information)
    {
        if (is_null($sepa_remittance_information)) {
            array_push($this->openAPINullablesSetToNull, 'sepa_remittance_information');
        } else {
            $nullablesSetToNull = $this->getOpenAPINullablesSetToNull();
            $index = array_search('sepa_remittance_information', $nullablesSetToNull);
            if ($index !== FALSE) {
                unset($nullablesSetToNull[$index]);
                $this->setOpenAPINullablesSetToNull($nullablesSetToNull);
            }
        }
        $this->container['sepa_remittance_information'] = $sepa_remittance_information;

        return $this;
    }

    /**
     * Gets target_type
     *
     * @return string|null
     */
    public function getTargetType()
    {
        return $this->container['target_type'];
    }

    /**
     * Sets target_type
     *
     * @param string|null $target_type The document type that will be generated. Can not be changed on existing documents.
     *
     * @return self
     */
    public function setTargetType($target_type)
    {
        if (is_null($target_type)) {
            throw new \InvalidArgumentException('non-nullable target_type cannot be null');
        }
        $allowedValues = $this->getTargetTypeAllowableValues();
        if (!in_array($target_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'target_type', must be one of '%s'",
                    $target_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['target_type'] = $target_type;

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


