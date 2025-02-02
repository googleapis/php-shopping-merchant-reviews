<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/shopping/merchant/reviews/v1beta/merchantreviews.proto

namespace Google\Shopping\Merchant\Reviews\V1beta;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Request message for the `InsertMerchantReview` method.
 *
 * Generated from protobuf message <code>google.shopping.merchant.reviews.v1beta.InsertMerchantReviewRequest</code>
 */
class InsertMerchantReviewRequest extends \Google\Protobuf\Internal\Message
{
    /**
     * Required. The account where the merchant review will be inserted.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $parent = '';
    /**
     * Required. The merchant review to insert.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reviews.v1beta.MerchantReview merchant_review = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $merchant_review = null;
    /**
     * Required. The data source of the
     * [merchantreview](https://support.google.com/merchants/answer/7045996?sjid=5253581244217581976-EU)
     * Format:
     * `accounts/{account}/dataSources/{datasource}`.
     *
     * Generated from protobuf field <code>string data_source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     */
    protected $data_source = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $parent
     *           Required. The account where the merchant review will be inserted.
     *           Format: accounts/{account}
     *     @type \Google\Shopping\Merchant\Reviews\V1beta\MerchantReview $merchant_review
     *           Required. The merchant review to insert.
     *     @type string $data_source
     *           Required. The data source of the
     *           [merchantreview](https://support.google.com/merchants/answer/7045996?sjid=5253581244217581976-EU)
     *           Format:
     *           `accounts/{account}/dataSources/{datasource}`.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Shopping\Merchant\Reviews\V1Beta\Merchantreviews::initOnce();
        parent::__construct($data);
    }

    /**
     * Required. The account where the merchant review will be inserted.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getParent()
    {
        return $this->parent;
    }

    /**
     * Required. The account where the merchant review will be inserted.
     * Format: accounts/{account}
     *
     * Generated from protobuf field <code>string parent = 1 [(.google.api.field_behavior) = REQUIRED];</code>
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
     * Required. The merchant review to insert.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reviews.v1beta.MerchantReview merchant_review = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return \Google\Shopping\Merchant\Reviews\V1beta\MerchantReview|null
     */
    public function getMerchantReview()
    {
        return $this->merchant_review;
    }

    public function hasMerchantReview()
    {
        return isset($this->merchant_review);
    }

    public function clearMerchantReview()
    {
        unset($this->merchant_review);
    }

    /**
     * Required. The merchant review to insert.
     *
     * Generated from protobuf field <code>.google.shopping.merchant.reviews.v1beta.MerchantReview merchant_review = 2 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param \Google\Shopping\Merchant\Reviews\V1beta\MerchantReview $var
     * @return $this
     */
    public function setMerchantReview($var)
    {
        GPBUtil::checkMessage($var, \Google\Shopping\Merchant\Reviews\V1beta\MerchantReview::class);
        $this->merchant_review = $var;

        return $this;
    }

    /**
     * Required. The data source of the
     * [merchantreview](https://support.google.com/merchants/answer/7045996?sjid=5253581244217581976-EU)
     * Format:
     * `accounts/{account}/dataSources/{datasource}`.
     *
     * Generated from protobuf field <code>string data_source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @return string
     */
    public function getDataSource()
    {
        return $this->data_source;
    }

    /**
     * Required. The data source of the
     * [merchantreview](https://support.google.com/merchants/answer/7045996?sjid=5253581244217581976-EU)
     * Format:
     * `accounts/{account}/dataSources/{datasource}`.
     *
     * Generated from protobuf field <code>string data_source = 3 [(.google.api.field_behavior) = REQUIRED];</code>
     * @param string $var
     * @return $this
     */
    public function setDataSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->data_source = $var;

        return $this;
    }

}

