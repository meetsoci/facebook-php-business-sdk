<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object;

use FacebookAdsV18\ApiRequest;
use FacebookAdsV18\Cursor;
use FacebookAdsV18\Http\RequestInterface;
use FacebookAdsV18\TypeChecker;
use FacebookAdsV18\Object\Fields\AdsInsightsFields;
use FacebookAdsV18\Object\Values\AdsInsightsActionAttributionWindowsValues;
use FacebookAdsV18\Object\Values\AdsInsightsActionBreakdownsValues;
use FacebookAdsV18\Object\Values\AdsInsightsActionReportTimeValues;
use FacebookAdsV18\Object\Values\AdsInsightsBreakdownsValues;
use FacebookAdsV18\Object\Values\AdsInsightsDatePresetValues;
use FacebookAdsV18\Object\Values\AdsInsightsLevelValues;
use FacebookAdsV18\Object\Values\AdsInsightsSummaryActionBreakdownsValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdsInsights extends AbstractObject {

  /**
   * @deprecated getEndpoint function is deprecated
   */
  protected function getEndpoint() {
    return 'insights';
  }

  /**
   * @return AdsInsightsFields
   */
  public static function getFieldsEnum() {
    return AdsInsightsFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['ActionAttributionWindows'] = AdsInsightsActionAttributionWindowsValues::getInstance()->getValues();
    $ref_enums['ActionBreakdowns'] = AdsInsightsActionBreakdownsValues::getInstance()->getValues();
    $ref_enums['ActionReportTime'] = AdsInsightsActionReportTimeValues::getInstance()->getValues();
    $ref_enums['Breakdowns'] = AdsInsightsBreakdownsValues::getInstance()->getValues();
    $ref_enums['DatePreset'] = AdsInsightsDatePresetValues::getInstance()->getValues();
    $ref_enums['Level'] = AdsInsightsLevelValues::getInstance()->getValues();
    $ref_enums['SummaryActionBreakdowns'] = AdsInsightsSummaryActionBreakdownsValues::getInstance()->getValues();
    return $ref_enums;
  }


}
