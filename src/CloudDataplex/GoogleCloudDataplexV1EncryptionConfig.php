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

class GoogleCloudDataplexV1EncryptionConfig extends \Google\Model
{
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $encryptionState;
  /**
   * @var string
   */
  public $etag;
  protected $failureDetailsType = GoogleCloudDataplexV1EncryptionConfigFailureDetails::class;
  protected $failureDetailsDataType = '';
  /**
   * @var string
   */
  public $key;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $updateTime;

  /**
   * @param string
   */
  public function setCreateTime($createTime)
  {
    $this->createTime = $createTime;
  }
  /**
   * @return string
   */
  public function getCreateTime()
  {
    return $this->createTime;
  }
  /**
   * @param string
   */
  public function setEncryptionState($encryptionState)
  {
    $this->encryptionState = $encryptionState;
  }
  /**
   * @return string
   */
  public function getEncryptionState()
  {
    return $this->encryptionState;
  }
  /**
   * @param string
   */
  public function setEtag($etag)
  {
    $this->etag = $etag;
  }
  /**
   * @return string
   */
  public function getEtag()
  {
    return $this->etag;
  }
  /**
   * @param GoogleCloudDataplexV1EncryptionConfigFailureDetails
   */
  public function setFailureDetails(GoogleCloudDataplexV1EncryptionConfigFailureDetails $failureDetails)
  {
    $this->failureDetails = $failureDetails;
  }
  /**
   * @return GoogleCloudDataplexV1EncryptionConfigFailureDetails
   */
  public function getFailureDetails()
  {
    return $this->failureDetails;
  }
  /**
   * @param string
   */
  public function setKey($key)
  {
    $this->key = $key;
  }
  /**
   * @return string
   */
  public function getKey()
  {
    return $this->key;
  }
  /**
   * @param string
   */
  public function setName($name)
  {
    $this->name = $name;
  }
  /**
   * @return string
   */
  public function getName()
  {
    return $this->name;
  }
  /**
   * @param string
   */
  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
  /**
   * @return string
   */
  public function getUpdateTime()
  {
    return $this->updateTime;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(GoogleCloudDataplexV1EncryptionConfig::class, 'Google_Service_CloudDataplex_GoogleCloudDataplexV1EncryptionConfig');
