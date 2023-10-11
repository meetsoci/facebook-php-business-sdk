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
use FacebookAdsV18\Object\Fields\InstagramInsightsResultFields;
use FacebookAdsV18\Object\Values\InstagramInsightsResultBreakdownValues;
use FacebookAdsV18\Object\Values\InstagramInsightsResultMetricTypeValues;
use FacebookAdsV18\Object\Values\InstagramInsightsResultMetricValues;
use FacebookAdsV18\Object\Values\InstagramInsightsResultPeriodValues;
use FacebookAdsV18\Object\Values\InstagramInsightsResultTimeframeValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class InstagramInsightsResult extends AbstractCrudObject {

  /**
   * @return InstagramInsightsResultFields
   */
  public static function getFieldsEnum() {
    return InstagramInsightsResultFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Breakdown'] = InstagramInsightsResultBreakdownValues::getInstance()->getValues();
    $ref_enums['Metric'] = InstagramInsightsResultMetricValues::getInstance()->getValues();
    $ref_enums['Period'] = InstagramInsightsResultPeriodValues::getInstance()->getValues();
    $ref_enums['MetricType'] = InstagramInsightsResultMetricTypeValues::getInstance()->getValues();
    $ref_enums['Timeframe'] = InstagramInsightsResultTimeframeValues::getInstance()->getValues();
    return $ref_enums;
  }


}
