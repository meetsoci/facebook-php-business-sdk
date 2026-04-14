<?php
/**
 * Copyright (c) 2015-present, Facebook, Inc. All rights reserved.
 *
 * You are hereby granted a non-exclusive, worldwide, royalty-free license to
 * use, copy, modify, and distribute this software in source code or binary
 * form for use in connection with the web services and APIs provided by
 * Facebook.
 *
 * As with any software that integrates with the Facebook platform, your use
 * of this software is subject to the Facebook Developer Principles and
 * Policies [http://developers.facebook.com/policy/]. This copyright notice
 * shall be included in all copies or substantial portions of the software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL
 * THE AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING
 * FROM, OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER
 * DEALINGS IN THE SOFTWARE.
 *
 */

namespace FacebookAdsTest\Object;

use FacebookAdsTest\AbstractUnitTestCase;
use FacebookAds\Object\ServerSide\AttributionSetting;

class AttributionSettingTest extends AbstractUnitTestCase {
  public function testConstructorAndNormalize() {
    $attribution_setting = new AttributionSetting(array(
      'inactivity_window_hours' => 24,
      'reattribution_window_hours' => 48,
    ));

    $expected = array(
      'inactivity_window_hours' => 24,
      'reattribution_window_hours' => 48,
    );
    $this->assertEquals($expected, $attribution_setting->normalize());
  }

  public function testSettersAndGetters() {
    $attribution_setting = (new AttributionSetting())
      ->setInactivityWindowHours(24)
      ->setReattributionWindowHours(48);

    $this->assertEquals(24, $attribution_setting->getInactivityWindowHours());
    $this->assertEquals(48, $attribution_setting->getReattributionWindowHours());
  }

  public function testArrayAccessOffsetGet() {
    $attribution_setting = new AttributionSetting(array(
      'inactivity_window_hours' => 24,
      'reattribution_window_hours' => 48,
    ));

    // This exercises offsetGet() which has a ': mixed' return type
    // that is incompatible with PHP 7.2 (mixed type was added in PHP 8.0)
    $this->assertEquals(24, $attribution_setting['inactivity_window_hours']);
    $this->assertEquals(48, $attribution_setting['reattribution_window_hours']);
  }

  public function testArrayAccessOffsetExists() {
    $attribution_setting = new AttributionSetting(array(
      'inactivity_window_hours' => 24,
    ));

    $this->assertTrue(isset($attribution_setting['inactivity_window_hours']));
    $this->assertFalse(isset($attribution_setting['nonexistent']));
  }

  public function testArrayAccessOffsetSet() {
    $attribution_setting = new AttributionSetting();
    $attribution_setting['inactivity_window_hours'] = 72;

    $this->assertEquals(72, $attribution_setting['inactivity_window_hours']);
  }

  public function testArrayAccessOffsetUnset() {
    $attribution_setting = new AttributionSetting(array(
      'inactivity_window_hours' => 24,
    ));

    unset($attribution_setting['inactivity_window_hours']);
    $this->assertNull($attribution_setting['inactivity_window_hours']);
  }
}
