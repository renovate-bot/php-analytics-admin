<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing a Google Analytics property.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.Property</code>
 */
class Property extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name of this property.
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Immutable. The property type for this Property resource. When creating a
     * property, if the type is "PROPERTY_TYPE_UNSPECIFIED", then
     * "ORDINARY_PROPERTY" will be implied.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.PropertyType property_type = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $property_type = 0;
    /**
     * Output only. Time when the entity was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $create_time = null;
    /**
     * Output only. Time when entity payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $update_time = null;
    /**
     * Immutable. Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}, properties/{property}
     * Example: "accounts/100", "properties/101"
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     */
    protected $parent = '';
    /**
     * Required. Human-readable display name for this property.
     * The max allowed display name length is 100 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $display_name = '';
    /**
     * Industry associated with this property
     * Example: AUTOMOTIVE, FOOD_AND_DRINK
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.IndustryCategory industry_category = 6;</code>
     */
    protected $industry_category = 0;
    /**
     * Required. Reporting Time Zone, used as the day boundary for reports,
     * regardless of where the data originates. If the time zone honors DST,
     * Analytics will automatically adjust for the changes.
     * NOTE: Changing the time zone only affects data going forward, and is not
     * applied retroactively.
     * Format: https://www.iana.org/time-zones
     * Example: "America/Los_Angeles"
     *
     * Generated from protobuf field <code>string time_zone = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $time_zone = '';
    /**
     * The currency type used in reports involving monetary values.
     * Format: https://en.wikipedia.org/wiki/ISO_4217
     * Examples: "USD", "EUR", "JPY"
     *
     * Generated from protobuf field <code>string currency_code = 8;</code>
     */
    protected $currency_code = '';
    /**
     * Output only. The Google Analytics service level that applies to this
     * property.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ServiceLevel service_level = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $service_level = 0;
    /**
     * Output only. If set, the time at which this property was trashed. If not
     * set, then this property is not currently in the trash can.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $delete_time = null;
    /**
     * Output only. If set, the time at which this trashed property will be
     * permanently deleted. If not set, then this property is not currently in the
     * trash can and is not slated to be deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $expire_time = null;
    /**
     * Immutable. The resource name of the parent account
     * Format: accounts/{account_id}
     * Example: "accounts/123"
     *
     * Generated from protobuf field <code>string account = 13 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     */
    protected $account = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name of this property.
     *           Format: properties/{property_id}
     *           Example: "properties/1000"
     *     @type int $property_type
     *           Immutable. The property type for this Property resource. When creating a
     *           property, if the type is "PROPERTY_TYPE_UNSPECIFIED", then
     *           "ORDINARY_PROPERTY" will be implied.
     *     @type \Google\Protobuf\Timestamp $create_time
     *           Output only. Time when the entity was originally created.
     *     @type \Google\Protobuf\Timestamp $update_time
     *           Output only. Time when entity payload fields were last updated.
     *     @type string $parent
     *           Immutable. Resource name of this property's logical parent.
     *           Note: The Property-Moving UI can be used to change the parent.
     *           Format: accounts/{account}, properties/{property}
     *           Example: "accounts/100", "properties/101"
     *     @type string $display_name
     *           Required. Human-readable display name for this property.
     *           The max allowed display name length is 100 UTF-16 code units.
     *     @type int $industry_category
     *           Industry associated with this property
     *           Example: AUTOMOTIVE, FOOD_AND_DRINK
     *     @type string $time_zone
     *           Required. Reporting Time Zone, used as the day boundary for reports,
     *           regardless of where the data originates. If the time zone honors DST,
     *           Analytics will automatically adjust for the changes.
     *           NOTE: Changing the time zone only affects data going forward, and is not
     *           applied retroactively.
     *           Format: https://www.iana.org/time-zones
     *           Example: "America/Los_Angeles"
     *     @type string $currency_code
     *           The currency type used in reports involving monetary values.
     *           Format: https://en.wikipedia.org/wiki/ISO_4217
     *           Examples: "USD", "EUR", "JPY"
     *     @type int $service_level
     *           Output only. The Google Analytics service level that applies to this
     *           property.
     *     @type \Google\Protobuf\Timestamp $delete_time
     *           Output only. If set, the time at which this property was trashed. If not
     *           set, then this property is not currently in the trash can.
     *     @type \Google\Protobuf\Timestamp $expire_time
     *           Output only. If set, the time at which this trashed property will be
     *           permanently deleted. If not set, then this property is not currently in the
     *           trash can and is not slated to be deleted.
     *     @type string $account
     *           Immutable. The resource name of the parent account
     *           Format: accounts/{account_id}
     *           Example: "accounts/123"
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name of this property.
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name of this property.
     * Format: properties/{property_id}
     * Example: "properties/1000"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

    /**
     * Immutable. The property type for this Property resource. When creating a
     * property, if the type is "PROPERTY_TYPE_UNSPECIFIED", then
     * "ORDINARY_PROPERTY" will be implied.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.PropertyType property_type = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return int
     */
    public function getPropertyType()
    {
        return $this->property_type;
    }

    /**
     * Immutable. The property type for this Property resource. When creating a
     * property, if the type is "PROPERTY_TYPE_UNSPECIFIED", then
     * "ORDINARY_PROPERTY" will be implied.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.PropertyType property_type = 14 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param int $var
     * @return $this
     */
    public function setPropertyType($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1beta\PropertyType::class);
        $this->property_type = $var;

        return $this;
    }

    /**
     * Output only. Time when the entity was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getCreateTime()
    {
        return $this->create_time;
    }

    public function hasCreateTime()
    {
        return isset($this->create_time);
    }

    public function clearCreateTime()
    {
        unset($this->create_time);
    }

    /**
     * Output only. Time when the entity was originally created.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp create_time = 3 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setCreateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->create_time = $var;

        return $this;
    }

    /**
     * Output only. Time when entity payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    public function hasUpdateTime()
    {
        return isset($this->update_time);
    }

    public function clearUpdateTime()
    {
        unset($this->update_time);
    }

    /**
     * Output only. Time when entity payload fields were last updated.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp update_time = 4 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setUpdateTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->update_time = $var;

        return $this;
    }

    /**
     * Immutable. Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}, properties/{property}
     * Example: "accounts/100", "properties/101"
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Immutable. Resource name of this property's logical parent.
     * Note: The Property-Moving UI can be used to change the parent.
     * Format: accounts/{account}, properties/{property}
     * Example: "accounts/100", "properties/101"
     *
     * Generated from protobuf field <code>string parent = 2 [(.google.api.field_behavior) = IMMUTABLE];</code>
     * @param string $var
     * @return $this
     */
    public function setParent($var)
    {
        GPBUtil::checkString($var, True);
        $this->parent = $var;

        return $this;
    }

    /**
     * Required. Human-readable display name for this property.
     * The max allowed display name length is 100 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDisplayName()
    {
        return $this->display_name;
    }

    /**
     * Required. Human-readable display name for this property.
     * The max allowed display name length is 100 UTF-16 code units.
     *
     * Generated from protobuf field <code>string display_name = 5 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDisplayName($var)
    {
        GPBUtil::checkString($var, True);
        $this->display_name = $var;

        return $this;
    }

    /**
     * Industry associated with this property
     * Example: AUTOMOTIVE, FOOD_AND_DRINK
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.IndustryCategory industry_category = 6;</code>
     * @return int
     */
    public function getIndustryCategory()
    {
        return $this->industry_category;
    }

    /**
     * Industry associated with this property
     * Example: AUTOMOTIVE, FOOD_AND_DRINK
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.IndustryCategory industry_category = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setIndustryCategory($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1beta\IndustryCategory::class);
        $this->industry_category = $var;

        return $this;
    }

    /**
     * Required. Reporting Time Zone, used as the day boundary for reports,
     * regardless of where the data originates. If the time zone honors DST,
     * Analytics will automatically adjust for the changes.
     * NOTE: Changing the time zone only affects data going forward, and is not
     * applied retroactively.
     * Format: https://www.iana.org/time-zones
     * Example: "America/Los_Angeles"
     *
     * Generated from protobuf field <code>string time_zone = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getTimeZone()
    {
        return $this->time_zone;
    }

    /**
     * Required. Reporting Time Zone, used as the day boundary for reports,
     * regardless of where the data originates. If the time zone honors DST,
     * Analytics will automatically adjust for the changes.
     * NOTE: Changing the time zone only affects data going forward, and is not
     * applied retroactively.
     * Format: https://www.iana.org/time-zones
     * Example: "America/Los_Angeles"
     *
     * Generated from protobuf field <code>string time_zone = 7 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setTimeZone($var)
    {
        GPBUtil::checkString($var, True);
        $this->time_zone = $var;

        return $this;
    }

    /**
     * The currency type used in reports involving monetary values.
     * Format: https://en.wikipedia.org/wiki/ISO_4217
     * Examples: "USD", "EUR", "JPY"
     *
     * Generated from protobuf field <code>string currency_code = 8;</code>
     * @return string
     */
    public function getCurrencyCode()
    {
        return $this->currency_code;
    }

    /**
     * The currency type used in reports involving monetary values.
     * Format: https://en.wikipedia.org/wiki/ISO_4217
     * Examples: "USD", "EUR", "JPY"
     *
     * Generated from protobuf field <code>string currency_code = 8;</code>
     * @param string $var
     * @return $this
     */
    public function setCurrencyCode($var)
    {
        GPBUtil::checkString($var, True);
        $this->currency_code = $var;

        return $this;
    }

    /**
     * Output only. The Google Analytics service level that applies to this
     * property.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ServiceLevel service_level = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int
     */
    public function getServiceLevel()
    {
        return $this->service_level;
    }

    /**
     * Output only. The Google Analytics service level that applies to this
     * property.
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1beta.ServiceLevel service_level = 10 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int $var
     * @return $this
     */
    public function setServiceLevel($var)
    {
        GPBUtil::checkEnum($var, \Google\Analytics\Admin\V1beta\ServiceLevel::class);
        $this->service_level = $var;

        return $this;
    }

    /**
     * Output only. If set, the time at which this property was trashed. If not
     * set, then this property is not currently in the trash can.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getDeleteTime()
    {
        return $this->delete_time;
    }

    public function hasDeleteTime()
    {
        return isset($this->delete_time);
    }

    public function clearDeleteTime()
    {
        unset($this->delete_time);
    }

    /**
     * Output only. If set, the time at which this property was trashed. If not
     * set, then this property is not currently in the trash can.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp delete_time = 11 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setDeleteTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->delete_time = $var;

        return $this;
    }

    /**
     * Output only. If set, the time at which this trashed property will be
     * permanently deleted. If not set, then this property is not currently in the
     * trash can and is not slated to be deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Timestamp|null
     */
    public function getExpireTime()
    {
        return $this->expire_time;
    }

    public function hasExpireTime()
    {
        return isset($this->expire_time);
    }

    public function clearExpireTime()
    {
        unset($this->expire_time);
    }

    /**
     * Output only. If set, the time at which this trashed property will be
     * permanently deleted. If not set, then this property is not currently in the
     * trash can and is not slated to be deleted.
     *
     * Generated from protobuf field <code>.google.protobuf.Timestamp expire_time = 12 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Timestamp $var
     * @return $this
     */
    public function setExpireTime($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Timestamp::class);
        $this->expire_time = $var;

        return $this;
    }

    /**
     * Immutable. The resource name of the parent account
     * Format: accounts/{account_id}
     * Example: "accounts/123"
     *
     * Generated from protobuf field <code>string account = 13 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getAccount()
    {
        return $this->account;
    }

    /**
     * Immutable. The resource name of the parent account
     * Format: accounts/{account_id}
     * Example: "accounts/123"
     *
     * Generated from protobuf field <code>string account = 13 [(.google.api.field_behavior) = IMMUTABLE, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setAccount($var)
    {
        GPBUtil::checkString($var, True);
        $this->account = $var;

        return $this;
    }

}

