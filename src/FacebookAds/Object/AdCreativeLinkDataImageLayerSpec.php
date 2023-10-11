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
use FacebookAdsV18\Object\Fields\AdCreativeLinkDataImageLayerSpecFields;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageLayerSpecBlendingModeValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageLayerSpecFrameSourceValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageLayerSpecImageSourceValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageLayerSpecLayerTypeValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageLayerSpecOverlayPositionValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageLayerSpecOverlayShapeValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageLayerSpecTextFontValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeLinkDataImageLayerSpec extends AbstractObject {

  /**
   * @return AdCreativeLinkDataImageLayerSpecFields
   */
  public static function getFieldsEnum() {
    return AdCreativeLinkDataImageLayerSpecFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['BlendingMode'] = AdCreativeLinkDataImageLayerSpecBlendingModeValues::getInstance()->getValues();
    $ref_enums['FrameSource'] = AdCreativeLinkDataImageLayerSpecFrameSourceValues::getInstance()->getValues();
    $ref_enums['ImageSource'] = AdCreativeLinkDataImageLayerSpecImageSourceValues::getInstance()->getValues();
    $ref_enums['LayerType'] = AdCreativeLinkDataImageLayerSpecLayerTypeValues::getInstance()->getValues();
    $ref_enums['OverlayPosition'] = AdCreativeLinkDataImageLayerSpecOverlayPositionValues::getInstance()->getValues();
    $ref_enums['OverlayShape'] = AdCreativeLinkDataImageLayerSpecOverlayShapeValues::getInstance()->getValues();
    $ref_enums['TextFont'] = AdCreativeLinkDataImageLayerSpecTextFontValues::getInstance()->getValues();
    return $ref_enums;
  }


}
