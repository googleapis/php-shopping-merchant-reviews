<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reviews/v1beta/merchantreviews.proto

namespace Google\Shopping\Merchant\Reviews\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `GetMerchantReview` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reviews.v1beta.GetMerchantReviewRequest</code>
 */
class GetMerchantReviewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The ID of the merchant review.
     * Format: accounts/{account}/merchantReviews/{merchantReview}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     */
    protected $name = '';

    /**
     * @param string $name Required. The ID of the merchant review.
     *                     Format: accounts/{account}/merchantReviews/{merchantReview}
     *                     Please see {@see MerchantReviewsServiceClient::merchantReviewName()} for help formatting this field.
     *
     * @return \Google\Shopping\Merchant\Reviews\V1beta\GetMerchantReviewRequest
     *
     * @experimental
     */
    public static function build(string $name): self
    {
        return (new self())
            ->setName($name);
    }

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $name
     *           Required. The ID of the merchant review.
     *           Format: accounts/{account}/merchantReviews/{merchantReview}
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reviews\V1Beta\Merchantreviews::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The ID of the merchant review.
     * Format: accounts/{account}/merchantReviews/{merchantReview}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Required. The ID of the merchant review.
     * Format: accounts/{account}/merchantReviews/{merchantReview}
     *
     * Generated from protobuf field <code>string name = 1 [(.google.api.field_behavior) = REQUIRED, (.google.api.resource_reference) = {</code>
     * @param string $var
     * @return $this
     */
    public function setName($var)
    {
        GPBUtil::checkString($var, True);
        $this->name = $var;

        return $this;
    }

}
