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
use FacebookAdsV18\Object\Fields\AdCreativeLinkDataImageOverlaySpecFields;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageOverlaySpecCustomTextTypeValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageOverlaySpecOverlayTemplateValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageOverlaySpecPositionValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageOverlaySpecTextFontValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageOverlaySpecTextTypeValues;
use FacebookAdsV18\Object\Values\AdCreativeLinkDataImageOverlaySpecThemeColorValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeLinkDataImageOverlaySpec extends AbstractObject {

  /**
   * @return AdCreativeLinkDataImageOverlaySpecFields
   */
  public static function getFieldsEnum() {
    return AdCreativeLinkDataImageOverlaySpecFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['CustomTextType'] = AdCreativeLinkDataImageOverlaySpecCustomTextTypeValues::getInstance()->getValues();
    $ref_enums['OverlayTemplate'] = AdCreativeLinkDataImageOverlaySpecOverlayTemplateValues::getInstance()->getValues();
    $ref_enums['Position'] = AdCreativeLinkDataImageOverlaySpecPositionValues::getInstance()->getValues();
    $ref_enums['TextFont'] = AdCreativeLinkDataImageOverlaySpecTextFontValues::getInstance()->getValues();
    $ref_enums['TextType'] = AdCreativeLinkDataImageOverlaySpecTextTypeValues::getInstance()->getValues();
    $ref_enums['ThemeColor'] = AdCreativeLinkDataImageOverlaySpecThemeColorValues::getInstance()->getValues();
    return $ref_enums;
  }


}
