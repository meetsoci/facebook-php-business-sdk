<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object;

use FacebookAdsV18\Object\Fields\AdCreativeObjectStorySpecFields;
use FacebookAdsV18\Object\Traits\FieldValidation;

/**
 * @deprecated use AdCreativeObjectStorySpec instead
 */
class ObjectStorySpec extends AdCreativeObjectStorySpec {
  use FieldValidation;

  /**
   * @return AdCreativeObjectStorySpecFields
   */
  public static function getFieldsEnum() {
    return AdCreativeObjectStorySpecFields::getInstance();
  }
}
