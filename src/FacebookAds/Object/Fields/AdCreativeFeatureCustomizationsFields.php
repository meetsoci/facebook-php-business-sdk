<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAds\Object\Fields;

use FacebookAds\Enum\AbstractEnum;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class AdCreativeFeatureCustomizationsFields extends AbstractEnum {

  const BACKGROUND_COLOR = 'background_color';
  const CATALOG_FEED_TAG_NAME = 'catalog_feed_tag_name';
  const FONT_NAME = 'font_name';
  const PRODUCT_RECOMMENDATION_TYPE = 'product_recommendation_type';
  const PRODUCT_VERSIONING_FALLBACK_STRATEGY = 'product_versioning_fallback_strategy';
  const SHOWCASE_CARD_DISPLAY = 'showcase_card_display';
  const TEXT_STYLE = 'text_style';
  const VIDEO_CROP_STYLE = 'video_crop_style';

  public function getFieldTypes() {
    return array(
      'background_color' => 'string',
      'catalog_feed_tag_name' => 'string',
      'font_name' => 'string',
      'product_recommendation_type' => 'string',
      'product_versioning_fallback_strategy' => 'string',
      'showcase_card_display' => 'string',
      'text_style' => 'string',
      'video_crop_style' => 'string',
    );
  }
}
