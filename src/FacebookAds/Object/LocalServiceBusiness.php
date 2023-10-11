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
use FacebookAdsV18\Object\Fields\LocalServiceBusinessFields;
use FacebookAdsV18\Object\Values\LocalServiceBusinessAvailabilityValues;
use FacebookAdsV18\Object\Values\LocalServiceBusinessConditionValues;
use FacebookAdsV18\Object\Values\LocalServiceBusinessImageFetchStatusValues;
use FacebookAdsV18\Object\Values\LocalServiceBusinessVisibilityValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class LocalServiceBusiness extends AbstractCrudObject {

  /**
   * @return LocalServiceBusinessFields
   */
  public static function getFieldsEnum() {
    return LocalServiceBusinessFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['Availability'] = LocalServiceBusinessAvailabilityValues::getInstance()->getValues();
    $ref_enums['Condition'] = LocalServiceBusinessConditionValues::getInstance()->getValues();
    $ref_enums['ImageFetchStatus'] = LocalServiceBusinessImageFetchStatusValues::getInstance()->getValues();
    $ref_enums['Visibility'] = LocalServiceBusinessVisibilityValues::getInstance()->getValues();
    return $ref_enums;
  }


  public function getChannelsToIntegrityStatus(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/channels_to_integrity_status',
      new CatalogItemChannelsToIntegrityStatus(),
      'EDGE',
      CatalogItemChannelsToIntegrityStatus::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

  public function getSelf(array $fields = array(), array $params = array(), $pending = false) {
    $this->assureId();

    $param_types = array(
    );
    $enums = array(
    );

    $request = new ApiRequest(
      $this->api,
      $this->data['id'],
      RequestInterface::METHOD_GET,
      '/',
      new LocalServiceBusiness(),
      'NODE',
      LocalServiceBusiness::getFieldsEnum()->getValues(),
      new TypeChecker($param_types, $enums)
    );
    $request->addParams($params);
    $request->addFields($fields);
    return $pending ? $request : $request->execute();
  }

}
