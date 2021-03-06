<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/ads/googleads/v5/resources/recommendation.proto

namespace Google\Ads\GoogleAds\V5\Resources\Recommendation;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The Maximize Conversions Opt-In recommendation.
 *
 * Generated from protobuf message <code>google.ads.googleads.v5.resources.Recommendation.MaximizeConversionsOptInRecommendation</code>
 */
class MaximizeConversionsOptInRecommendation extends \Google\Protobuf\Internal\Message
{
    /**
     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     */
    protected $recommended_budget_amount_micros = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Protobuf\Int64Value $recommended_budget_amount_micros
     *           Output only. The recommended new budget amount.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Ads\GoogleAds\V5\Resources\Recommendation::initOnce();
        parent::__construct($data);
    }

    /**
     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return \Google\Protobuf\Int64Value
     */
    public function getRecommendedBudgetAmountMicros()
    {
        return isset($this->recommended_budget_amount_micros) ? $this->recommended_budget_amount_micros : null;
    }

    public function hasRecommendedBudgetAmountMicros()
    {
        return isset($this->recommended_budget_amount_micros);
    }

    public function clearRecommendedBudgetAmountMicros()
    {
        unset($this->recommended_budget_amount_micros);
    }

    /**
     * Returns the unboxed value from <code>getRecommendedBudgetAmountMicros()</code>

     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @return int|string|null
     */
    public function getRecommendedBudgetAmountMicrosUnwrapped()
    {
        return $this->readWrapperValue("recommended_budget_amount_micros");
    }

    /**
     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param \Google\Protobuf\Int64Value $var
     * @return $this
     */
    public function setRecommendedBudgetAmountMicros($var)
    {
        GPBUtil::checkMessage($var, \Google\Protobuf\Int64Value::class);
        $this->recommended_budget_amount_micros = $var;

        return $this;
    }

    /**
     * Sets the field by wrapping a primitive type in a Google\Protobuf\Int64Value object.

     * Output only. The recommended new budget amount.
     *
     * Generated from protobuf field <code>.google.protobuf.Int64Value recommended_budget_amount_micros = 1 [(.google.api.field_behavior) = OUTPUT_ONLY];</code>
     * @param int|string|null $var
     * @return $this
     */
    public function setRecommendedBudgetAmountMicrosUnwrapped($var)
    {
        $this->writeWrapperValue("recommended_budget_amount_micros", $var);
        return $this;}

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(MaximizeConversionsOptInRecommendation::class, \Google\Ads\GoogleAds\V5\Resources\Recommendation_MaximizeConversionsOptInRecommendation::class);

