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
use FacebookAdsV18\Object\Fields\ProductCatalogDiagnosticGroupFields;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupAffectedChannelsValues;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupAffectedEntitiesValues;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupAffectedEntityValues;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupAffectedFeaturesValues;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupSeveritiesValues;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupSeverityValues;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupTypeValues;
use FacebookAdsV18\Object\Values\ProductCatalogDiagnosticGroupTypesValues;

/**
 * This class is auto-generated.
 *
 * For any issues or feature requests related to this class, please let us know
 * on github and we'll fix in our codegen framework. We'll not be able to accept
 * pull request for this class.
 *
 */

class ProductCatalogDiagnosticGroup extends AbstractObject {

  /**
   * @return ProductCatalogDiagnosticGroupFields
   */
  public static function getFieldsEnum() {
    return ProductCatalogDiagnosticGroupFields::getInstance();
  }

  protected static function getReferencedEnums() {
    $ref_enums = array();
    $ref_enums['AffectedChannels'] = ProductCatalogDiagnosticGroupAffectedChannelsValues::getInstance()->getValues();
    $ref_enums['AffectedEntity'] = ProductCatalogDiagnosticGroupAffectedEntityValues::getInstance()->getValues();
    $ref_enums['AffectedFeatures'] = ProductCatalogDiagnosticGroupAffectedFeaturesValues::getInstance()->getValues();
    $ref_enums['Severity'] = ProductCatalogDiagnosticGroupSeverityValues::getInstance()->getValues();
    $ref_enums['Type'] = ProductCatalogDiagnosticGroupTypeValues::getInstance()->getValues();
    $ref_enums['AffectedEntities'] = ProductCatalogDiagnosticGroupAffectedEntitiesValues::getInstance()->getValues();
    $ref_enums['Severities'] = ProductCatalogDiagnosticGroupSeveritiesValues::getInstance()->getValues();
    $ref_enums['Types'] = ProductCatalogDiagnosticGroupTypesValues::getInstance()->getValues();
    return $ref_enums;
  }


}
