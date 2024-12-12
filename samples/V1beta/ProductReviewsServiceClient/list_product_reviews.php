<?php
/*
 * Copyright 2024 Google LLC
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     https://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/*
 * GENERATED CODE WARNING
 * This file was automatically generated - do not edit!
 */

require_once __DIR__ . '/../../../vendor/autoload.php';

// [START merchantapi_v1beta_generated_ProductReviewsService_ListProductReviews_sync]
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;
use Google\Shopping\Merchant\Reviews\V1beta\Client\ProductReviewsServiceClient;
use Google\Shopping\Merchant\Reviews\V1beta\ListProductReviewsRequest;
use Google\Shopping\Merchant\Reviews\V1beta\ProductReview;

/**
 * Lists product reviews.
 *
 * @param string $formattedParent The account to list product reviews for.
 *                                Format: accounts/{account}
 *                                Please see {@see ProductReviewsServiceClient::accountName()} for help formatting this field.
 */
function list_product_reviews_sample(string $formattedParent): void
{
    // Create a client.
    $productReviewsServiceClient = new ProductReviewsServiceClient();

    // Prepare the request message.
    $request = (new ListProductReviewsRequest())
        ->setParent($formattedParent);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $productReviewsServiceClient->listProductReviews($request);

        /** @var ProductReview $element */
        foreach ($response as $element) {
            printf('Element data: %s' . PHP_EOL, $element->serializeToJsonString());
        }
    } catch (ApiException $ex) {
        printf('Call failed with message: %s' . PHP_EOL, $ex->getMessage());
    }
}

/**
 * Helper to execute the sample.
 *
 * This sample has been automatically generated and should be regarded as a code
 * template only. It will require modifications to work:
 *  - It may require correct/in-range values for request initialization.
 *  - It may require specifying regional endpoints when creating the service client,
 *    please see the apiEndpoint client configuration option for more details.
 */
function callSample(): void
{
    $formattedParent = ProductReviewsServiceClient::accountName('[ACCOUNT]');

    list_product_reviews_sample($formattedParent);
}
// [END merchantapi_v1beta_generated_ProductReviewsService_ListProductReviews_sync]