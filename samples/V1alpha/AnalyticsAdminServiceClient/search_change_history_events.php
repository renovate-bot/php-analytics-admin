<?php
/*
 * Copyright 2022 Google LLC
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

// [START analyticsadmin_v1alpha_generated_AnalyticsAdminService_SearchChangeHistoryEvents_sync]
use Google\Analytics\Admin\V1alpha\ChangeHistoryEvent;
use Google\Analytics\Admin\V1alpha\Client\AnalyticsAdminServiceClient;
use Google\Analytics\Admin\V1alpha\SearchChangeHistoryEventsRequest;
use Google\ApiCore\ApiException;
use Google\ApiCore\PagedListResponse;

/**
 * Searches through all changes to an account or its children given the
 * specified set of filters.
 *
 * Only returns the subset of changes supported by the API. The UI may return
 * additional changes.
 *
 * @param string $formattedAccount The account resource for which to return change history
 *                                 resources. Format: accounts/{account}
 *
 *                                 Example: `accounts/100`
 *                                 Please see {@see AnalyticsAdminServiceClient::accountName()} for help formatting this field.
 */
function search_change_history_events_sample(string $formattedAccount): void
{
    // Create a client.
    $analyticsAdminServiceClient = new AnalyticsAdminServiceClient();

    // Prepare the request message.
    $request = (new SearchChangeHistoryEventsRequest())
        ->setAccount($formattedAccount);

    // Call the API and handle any network failures.
    try {
        /** @var PagedListResponse $response */
        $response = $analyticsAdminServiceClient->searchChangeHistoryEvents($request);

        /** @var ChangeHistoryEvent $element */
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
    $formattedAccount = AnalyticsAdminServiceClient::accountName('[ACCOUNT]');

    search_change_history_events_sample($formattedAccount);
}
// [END analyticsadmin_v1alpha_generated_AnalyticsAdminService_SearchChangeHistoryEvents_sync]
