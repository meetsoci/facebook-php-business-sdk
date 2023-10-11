<?php
/**
 * Copyright (c) 2014-present, Facebook, Inc. All rights reserved.
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

use FacebookAdsV18\Object\AdCreative;
use FacebookAdsV18\Object\AdCreativeLinkData;
use FacebookAdsV18\Object\AdCreativeObjectStorySpec;
use FacebookAdsV18\Object\AdImage;
use FacebookAdsV18\Object\Fields\AdCreativeLinkDataChildAttachmentFields;
use FacebookAdsV18\Object\Fields\AdCreativeLinkDataFields;
use FacebookAdsV18\Object\Fields\AdCreativeObjectStorySpecFields;
use FacebookAdsV18\Object\ObjectStorySpec;
use FacebookAdsV18\Object\ObjectStory\LinkData;
use FacebookAdsV18\Object\ObjectStory\AttachmentData;
use FacebookAdsV18\Object\Fields\AdCreativeFields;
use FacebookAdsV18\Object\Fields\AdImageFields;
use FacebookAdsV18\Object\Fields\ObjectStorySpecFields;
use FacebookAdsV18\Object\Fields\ObjectStory\LinkDataFields;
use FacebookAdsV18\Object\Fields\ObjectStory\AttachmentDataFields;

class AdCreativeTest extends AbstractCrudObjectTestCase {

  public function testCrud() {
    $creative = new AdCreative(null, $this->getConfig()->accountId);
    $creative->{AdCreativeFields::TITLE} = 'My Test Ad';
    $creative->{AdCreativeFields::NAME} = 'My Test Ad';
    $creative->{AdCreativeFields::BODY} = 'My Test Ad Body';
    $creative->{AdCreativeFields::OBJECT_ID} = $this->getConfig()->pageId;
    $this->assertCanCreate($creative);
    $this->assertCanRead($creative);
    $this->assertCanUpdate(
      $creative,
      array(
        AdCreativeFields::NAME => 'My Test Ad '. $this->getConfig()->testRunId,
      ));
    $this->assertCanBeLabeled($creative);
    $this->assertCanDelete($creative);
  }

  public function testMultiProductObjectSpec() {
    // Create a new AdCreative
    $creative = new AdCreative(null, $this->getConfig()->accountId);
    $creative->{AdCreativeFields::NAME} = 'Multi Product Ad Creative';

    // Create a new ObjectStorySpec to create an unpublished post
    $story = new AdCreativeObjectStorySpec();
    $story->{AdCreativeObjectStorySpecFields::PAGE_ID} = $this->getConfig()->pageId;

    // Create LinkData object representing data for a link page post
    $link = new AdCreativeLinkData();
    $link->{AdCreativeLinkDataFields::LINK} = $this->getConfig()->appUrl;
    $link->{AdCreativeLinkDataFields::CAPTION} = 'My Caption';

    // Upload a test image to use in Attachments
    $adImage = new AdImage(null, $this->getConfig()->accountId);
    $adImage->{AdImageFields::FILENAME} = $this->getConfig()->testImagePath;
    $adImage->save();

    // Create 3 products as this will be a multi-product ad
    $product1 = (new AdCreativeLinkData())->setData(array(
        AdCreativeLinkDataChildAttachmentFields::LINK => $this->getConfig()->appUrl.'p1',
        AdCreativeLinkDataChildAttachmentFields::IMAGE_HASH => $adImage->hash,
        AdCreativeLinkDataChildAttachmentFields::NAME => 'Product 1',
        AdCreativeLinkDataChildAttachmentFields::DESCRIPTION => '$100',
    ));

    $product2 = (new AdCreativeLinkData())->setData(array(
        AdCreativeLinkDataChildAttachmentFields::LINK => $this->getConfig()->appUrl.'p2',
        AdCreativeLinkDataChildAttachmentFields::IMAGE_HASH => $adImage->hash,
        AdCreativeLinkDataChildAttachmentFields::NAME => 'Product 2',
        AdCreativeLinkDataChildAttachmentFields::DESCRIPTION => '$200',
    ));

    $product3 = (new AdCreativeLinkData())->setData(array(
        AdCreativeLinkDataChildAttachmentFields::LINK => $this->getConfig()->appUrl.'p3',
        AdCreativeLinkDataChildAttachmentFields::IMAGE_HASH => $adImage->hash,
        AdCreativeLinkDataChildAttachmentFields::NAME => 'Product 3',
        AdCreativeLinkDataChildAttachmentFields::DESCRIPTION => '$300',
    ));

    // Add the products into the child attachments
    $link->{AdCreativeLinkDataFields::CHILD_ATTACHMENTS} = array(
      $product1,
      $product2,
      $product3,
    );

    $story->{AdCreativeObjectStorySpecFields::LINK_DATA} = $link;
    $creative->{AdCreativeFields::OBJECT_STORY_SPEC} = $story;

    $this->assertCanCreate($creative);
    $this->assertCanDelete($creative);
  }
}
