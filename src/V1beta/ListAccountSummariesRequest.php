<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1beta/analytics_admin.proto

namespace Google\Analytics\Admin\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for ListAccountSummaries RPC.
 *
 * Generated from protobuf message <code>google.analytics.admin.v1beta.ListAccountSummariesRequest</code>
 */
class ListAccountSummariesRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * The maximum number of AccountSummary resources to return. The service may
     * return fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     */
    protected $page_size = 0;
    /**
     * A page token, received from a previous `ListAccountSummaries` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAccountSummaries`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     */
    protected $page_token = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $page_size
     *           The maximum number of AccountSummary resources to return. The service may
     *           return fewer than this value, even if there are additional pages.
     *           If unspecified, at most 50 resources will be returned.
     *           The maximum value is 200; (higher values will be coerced to the maximum)
     *     @type string $page_token
     *           A page token, received from a previous `ListAccountSummaries` call.
     *           Provide this to retrieve the subsequent page.
     *           When paginating, all other parameters provided to `ListAccountSummaries`
     *           must match the call that provided the page token.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Analytics\Admin\V1Beta\AnalyticsAdmin::initOnce();
        parent::__construct($data);
    }

    /**
     * The maximum number of AccountSummary resources to return. The service may
     * return fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @return int
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * The maximum number of AccountSummary resources to return. The service may
     * return fewer than this value, even if there are additional pages.
     * If unspecified, at most 50 resources will be returned.
     * The maximum value is 200; (higher values will be coerced to the maximum)
     *
     * Generated from protobuf field <code>int32 page_size = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPageSize($var)
    {
        GPBUtil::checkInt32($var);
        $this->page_size = $var;

        return $this;
    }

    /**
     * A page token, received from a previous `ListAccountSummaries` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAccountSummaries`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @return string
     */
    public function getPageToken()
    {
        return $this->page_token;
    }

    /**
     * A page token, received from a previous `ListAccountSummaries` call.
     * Provide this to retrieve the subsequent page.
     * When paginating, all other parameters provided to `ListAccountSummaries`
     * must match the call that provided the page token.
     *
     * Generated from protobuf field <code>string page_token = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setPageToken($var)
    {
        GPBUtil::checkString($var, True);
        $this->page_token = $var;

        return $this;
    }

}

