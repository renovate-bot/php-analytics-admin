<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/analytics_admin.proto

namespace Google\Analytics\Admin\V1alpha;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message to be passed to CreateAdSenseLink method.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1alpha.CreateAdSenseLinkRequest</code>
 */
class CreateAdSenseLinkRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The property for which to create an AdSense Link.
     * Format: properties/{propertyId}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $parent = '';
    /**
     * Required. The AdSense Link to create
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AdSenseLink adsense_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $adsense_link = null;

    /**
     * @param string                                      $parent      Required. The property for which to create an AdSense Link.
     *                                                                 Format: properties/{propertyId}
     *                                                                 Example: properties/1234
     *                                                                 Please see {@see AnalyticsAdminServiceClient::propertyName()} for help formatting this field.
     * @param \Google\Analytics\Admin\V1alpha\AdSenseLink $adsenseLink Required. The AdSense Link to create
     *
     * @return \Google\Analytics\Admin\V1alpha\CreateAdSenseLinkRequest
     *
     * @experimental
     */
    public static function build(string $parent, \Google\Analytics\Admin\V1alpha\AdSenseLink $adsenseLink): self
    {
        return (new self())
            ->setParent($parent)
            ->setAdsenseLink($adsenseLink);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The property for which to create an AdSense Link.
     *           Format: properties/{propertyId}
     *           Example: properties/1234
     *     @type \Google\Analytics\Admin\V1alpha\AdSenseLink $adsense_link
     *           Required. The AdSense Link to create
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Alpha\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The property for which to create an AdSense Link.
     * Format: properties/{propertyId}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The property for which to create an AdSense Link.
     * Format: properties/{propertyId}
     * Example: properties/1234
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
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
     * Required. The AdSense Link to create
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AdSenseLink adsense_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Analytics\Admin\V1alpha\AdSenseLink|null
     */
    public function getAdsenseLink()
    {
        return $this->adsense_link;
    }

    public function hasAdsenseLink()
    {
        return isset($this->adsense_link);
    }

    public function clearAdsenseLink()
    {
        unset($this->adsense_link);
    }

    /**
     * Required. The AdSense Link to create
     *
     * Generated from protobuf field <code>.google.analytics.admin.v1alpha.AdSenseLink adsense_link = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Analytics\Admin\V1alpha\AdSenseLink $var
     * @return $this
     */
    public function setAdsenseLink($var)
    {
        GPBUtil::checkMessage($var, \Google\Analytics\Admin\V1alpha\AdSenseLink::class);
        $this->adsense_link = $var;

        return $this;
    }

}

