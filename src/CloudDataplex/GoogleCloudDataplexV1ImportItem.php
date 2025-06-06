<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

namespace Google\Service\CloudDataplex;

class GoogleCloudDataplexV1ImportItem extends \Google\Collection
{
  protected $collection_key = 'aspectKeys';
  /**
   * @var string[]
   */
  public $aspectKeys;
  protected $entryType = GoogleCloudDataplexV1Entry::class;
  protected $entryDataType = '';
  protected $entryLinkType = GoogleCloudDataplexV1EntryLink::class;
  protected $entryLinkDataType = '';
  /**
   * @var string
   */
  public $updateMask;

  /**
   * @param string[]
   */
  public function setAspectKeys($aspectKeys)
  {
    $this->aspectKeys = $aspectKeys;
  }
  /**
   * @return string[]
   */
  public function getAspectKeys()
  {
    return $this->aspectKeys;
  }
  /**
   * @param GoogleCloudDataplexV1Entry
   */
  public function setEntry(GoogleCloudDataplexV1Entry $entry)
  {
    $this->entry = $entry;
  }
  /**
   * @return GoogleCloudDataplexV1Entry
   */
  public function getEntry()
  {
    return $this->entry;
  }
  /**
   * @param GoogleCloudDataplexV1EntryLink
   */
  public function setEntryLink(GoogleCloudDataplexV1EntryLink $entryLink)
  {
    $this->entryLink = $entryLink;
  }
  /**
   * @return GoogleCloudDataplexV1EntryLink
   */
  public function getEntryLink()
  {
    return $this->entryLink;
  }
  /**
   * @param string
   */
  public function setUpdateMask($updateMask)
  {
    $this->updateMask = $updateMask;
  }
  /**
   * @return string
   */
  public function getUpdateMask()
  {
    return $this->updateMask;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1ImportItem::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1ImportItem');
