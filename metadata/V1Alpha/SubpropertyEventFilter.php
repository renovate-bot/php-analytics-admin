<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/analytics/admin/v1alpha/subproperty_event_filter.proto

namespace GPBMetadata\Google\Analytics\Admin\V1Alpha;

class SubpropertyEventFilter
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Google\Api\FieldBehavior::initOnce();
        \GPBMetadata\Google\Api\Resource::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
=google/analytics/admin/v1alpha/subproperty_event_filter.protogoogle.analytics.admin.v1alphagoogle/api/resource.proto"�
SubpropertyEventFilterCondition
null_filter (H e
string_filter (2L.google.analytics.admin.v1alpha.SubpropertyEventFilterCondition.StringFilterH 

field_name (	B�A�
StringFiltero

match_type (2V.google.analytics.admin.v1alpha.SubpropertyEventFilterCondition.StringFilter.MatchTypeB�A
value (	B�A
case_sensitive (B�A"�
	MatchType
MATCH_TYPE_UNSPECIFIED 	
EXACT
BEGINS_WITH
	ENDS_WITH
CONTAINS
FULL_REGEXP
PARTIAL_REGEXPB

one_filter"�
 SubpropertyEventFilterExpressionX
or_group (2D.google.analytics.admin.v1alpha.SubpropertyEventFilterExpressionListH Z
not_expression (2@.google.analytics.admin.v1alpha.SubpropertyEventFilterExpressionH [
filter_condition (2?.google.analytics.admin.v1alpha.SubpropertyEventFilterConditionH B
expr"�
$SubpropertyEventFilterExpressionListd
filter_expressions (2@.google.analytics.admin.v1alpha.SubpropertyEventFilterExpressionB�A�A"�
SubpropertyEventFilterClausen
filter_clause_type (2M.google.analytics.admin.v1alpha.SubpropertyEventFilterClause.FilterClauseTypeB�A`
filter_expression (2@.google.analytics.admin.v1alpha.SubpropertyEventFilterExpressionB�A"P
FilterClauseType"
FILTER_CLAUSE_TYPE_UNSPECIFIED 
INCLUDE
EXCLUDE"�
SubpropertyEventFilter
name (	B�A#
apply_to_property (	B�AH �\\
filter_clauses (2<.google.analytics.admin.v1alpha.SubpropertyEventFilterClauseB�A�A:��A�
4analyticsadmin.googleapis.com/SubpropertyEventFilterIproperties/{property}/subpropertyEventFilters/{sub_property_event_filter}*subpropertyEventFilters2subpropertyEventFilterB
_apply_to_propertyB�
"com.google.analytics.admin.v1alphaBSubpropertyEventFilterProtoPZ>cloud.google.com/go/analytics/admin/apiv1alpha/adminpb;adminpbbproto3'
        , true);

        static::$is_initialized = true;
    }
}

