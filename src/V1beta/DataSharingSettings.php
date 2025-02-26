<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/resources.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * A resource message representing data sharing settings of a Google Analytics
 * account.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.DataSharingSettings</code>
 */
class DataSharingSettings extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. Resource name.
     * Format: accounts/{account}/dataSharingSettings
     * Example: "accounts/1000/dataSharingSettings"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $name = '';
    /**
     * Allows Google support to access the data in order to help troubleshoot
     * issues.
     *
     * Generated from protobuf field <code>bool sharing_with_google_support_enabled = 2;</code>
     */
    protected $sharing_with_google_support_enabled = false;
    /**
     * Allows Google sales teams that are assigned to the customer to access the
     * data in order to suggest configuration changes to improve results.
     * Sales team restrictions still apply when enabled.
     *
     * Generated from protobuf field <code>bool sharing_with_google_assigned_sales_enabled = 3;</code>
     */
    protected $sharing_with_google_assigned_sales_enabled = false;
    /**
     * Allows any of Google sales to access the data in order to suggest
     * configuration changes to improve results.
     *
     * Generated from protobuf field <code>bool sharing_with_google_any_sales_enabled = 4;</code>
     */
    protected $sharing_with_google_any_sales_enabled = false;
    /**
     * Allows Google to use the data to improve other Google products or services.
     *
     * Generated from protobuf field <code>bool sharing_with_google_products_enabled = 5;</code>
     */
    protected $sharing_with_google_products_enabled = false;
    /**
     * Allows Google to share the data anonymously in aggregate form with others.
     *
     * Generated from protobuf field <code>bool sharing_with_others_enabled = 6;</code>
     */
    protected $sharing_with_others_enabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Output only. Resource name.
     *           Format: accounts/{account}/dataSharingSettings
     *           Example: "accounts/1000/dataSharingSettings"
     *     @type bool $sharing_with_google_support_enabled
     *           Allows Google support to access the data in order to help troubleshoot
     *           issues.
     *     @type bool $sharing_with_google_assigned_sales_enabled
     *           Allows Google sales teams that are assigned to the customer to access the
     *           data in order to suggest configuration changes to improve results.
     *           Sales team restrictions still apply when enabled.
     *     @type bool $sharing_with_google_any_sales_enabled
     *           Allows any of Google sales to access the data in order to suggest
     *           configuration changes to improve results.
     *     @type bool $sharing_with_google_products_enabled
     *           Allows Google to use the data to improve other Google products or services.
     *     @type bool $sharing_with_others_enabled
     *           Allows Google to share the data anonymously in aggregate form with others.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\Resources::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. Resource name.
     * Format: accounts/{account}/dataSharingSettings
     * Example: "accounts/1000/dataSharingSettings"
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Output only. Resource name.
     * Format: accounts/{account}/dataSharingSettings
     * Example: "accounts/1000/dataSharingSettings"
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
     * Allows Google support to access the data in order to help troubleshoot
     * issues.
     *
     * Generated from protobuf field <code>bool sharing_with_google_support_enabled = 2;</code>
     * @return bool
     */
    public function getSharingWithGoogleSupportEnabled()
    {
        return $this->sharing_with_google_support_enabled;
    }

    /**
     * Allows Google support to access the data in order to help troubleshoot
     * issues.
     *
     * Generated from protobuf field <code>bool sharing_with_google_support_enabled = 2;</code>
     * @param bool $var
     * @return $this
     */
    public function setSharingWithGoogleSupportEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->sharing_with_google_support_enabled = $var;

        return $this;
    }

    /**
     * Allows Google sales teams that are assigned to the customer to access the
     * data in order to suggest configuration changes to improve results.
     * Sales team restrictions still apply when enabled.
     *
     * Generated from protobuf field <code>bool sharing_with_google_assigned_sales_enabled = 3;</code>
     * @return bool
     */
    public function getSharingWithGoogleAssignedSalesEnabled()
    {
        return $this->sharing_with_google_assigned_sales_enabled;
    }

    /**
     * Allows Google sales teams that are assigned to the customer to access the
     * data in order to suggest configuration changes to improve results.
     * Sales team restrictions still apply when enabled.
     *
     * Generated from protobuf field <code>bool sharing_with_google_assigned_sales_enabled = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setSharingWithGoogleAssignedSalesEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->sharing_with_google_assigned_sales_enabled = $var;

        return $this;
    }

    /**
     * Allows any of Google sales to access the data in order to suggest
     * configuration changes to improve results.
     *
     * Generated from protobuf field <code>bool sharing_with_google_any_sales_enabled = 4;</code>
     * @return bool
     */
    public function getSharingWithGoogleAnySalesEnabled()
    {
        return $this->sharing_with_google_any_sales_enabled;
    }

    /**
     * Allows any of Google sales to access the data in order to suggest
     * configuration changes to improve results.
     *
     * Generated from protobuf field <code>bool sharing_with_google_any_sales_enabled = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setSharingWithGoogleAnySalesEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->sharing_with_google_any_sales_enabled = $var;

        return $this;
    }

    /**
     * Allows Google to use the data to improve other Google products or services.
     *
     * Generated from protobuf field <code>bool sharing_with_google_products_enabled = 5;</code>
     * @return bool
     */
    public function getSharingWithGoogleProductsEnabled()
    {
        return $this->sharing_with_google_products_enabled;
    }

    /**
     * Allows Google to use the data to improve other Google products or services.
     *
     * Generated from protobuf field <code>bool sharing_with_google_products_enabled = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setSharingWithGoogleProductsEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->sharing_with_google_products_enabled = $var;

        return $this;
    }

    /**
     * Allows Google to share the data anonymously in aggregate form with others.
     *
     * Generated from protobuf field <code>bool sharing_with_others_enabled = 6;</code>
     * @return bool
     */
    public function getSharingWithOthersEnabled()
    {
        return $this->sharing_with_others_enabled;
    }

    /**
     * Allows Google to share the data anonymously in aggregate form with others.
     *
     * Generated from protobuf field <code>bool sharing_with_others_enabled = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setSharingWithOthersEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->sharing_with_others_enabled = $var;

        return $this;
    }

}

