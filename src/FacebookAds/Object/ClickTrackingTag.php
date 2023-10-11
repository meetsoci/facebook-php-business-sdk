<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object;

use FacebookAdsV18\Object\Fields\ClickTrackingTagFields;
use FacebookAdsV18\Http\RequestInterface;

class ClickTrackingTag extends AbstractCrudObject {

  /**
   * @deprecated getEndpoint function is deprecated
   * @return string
   */
  protected function getEndpoint() {
    return 'trackingtag';
  }

  /**
   * @return ClickTrackingTagFields
   */
  public static function getFieldsEnum() {
    return ClickTrackingTagFields::getInstance();
  }

  public function deleteSelf(array $params = array()) {
    $this->getApi()->call(
      '/'.$this->parentId.'/'.$this->getEndpoint(),
      RequestInterface::METHOD_DELETE,
      $params);
  }
}
