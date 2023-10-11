<?php
 /*
 * Copyright (c) Meta Platforms, Inc. and affiliates.
 * All rights reserved.
 *
 * This source code is licensed under the license found in the
 * LICENSE file in the root directory of this source tree.
 */

namespace FacebookAdsV18\Object\Values;

use FacebookAdsV18\Enum\AbstractEnum;

/**
 * @method static PageRoles getInstance()
 */
class PageRoles extends AbstractEnum {

  const ADVERTISER  = 'ADVERTISER';
  const CONTENT_CREATOR = 'CONTENT_CREATOR';
  const MANAGER = 'MANAGER';
  const MODERATOR = 'MODERATOR';
  const INSIGHTS_ANALYST = 'INSIGHTS_ANALYST';
}
