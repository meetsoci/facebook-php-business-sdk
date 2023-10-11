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
use FacebookAdsV18\Object\Fields\AdCreativePostClickConfigurationFields;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativePostClickConfiguration extends AbstractObject {

  /**
   * @return AdCreativePostClickConfigurationFields
   */
  public static function getFieldsEnum() {
    return AdCreativePostClickConfigurationFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    return $ref_enums;
  }


}
