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

namespace Google\Service\BinaryAuthorization;

class VerificationRule extends \Google\Collection
{
  protected $collection_key = 'trustedSourceRepoPatterns';
  protected $attestationSourceType = AttestationSource::class;
  protected $attestationSourceDataType = '';
  /**
   * @var bool
   */
  public $configBasedBuildRequired;
  /**
   * @var string
   */
  public $customConstraints;
  /**
   * @var string
   */
  public $trustedBuilder;
  /**
   * @var string[]
   */
  public $trustedSourceRepoPatterns;

  /**
   * @param AttestationSource
   */
  public function setAttestationSource(AttestationSource $attestationSource)
  {
    $this->attestationSource = $attestationSource;
  }
  /**
   * @return AttestationSource
   */
  public function getAttestationSource()
  {
    return $this->attestationSource;
  }
  /**
   * @param bool
   */
  public function setConfigBasedBuildRequired($configBasedBuildRequired)
  {
    $this->configBasedBuildRequired = $configBasedBuildRequired;
  }
  /**
   * @return bool
   */
  public function getConfigBasedBuildRequired()
  {
    return $this->configBasedBuildRequired;
  }
  /**
   * @param string
   */
  public function setCustomConstraints($customConstraints)
  {
    $this->customConstraints = $customConstraints;
  }
  /**
   * @return string
   */
  public function getCustomConstraints()
  {
    return $this->customConstraints;
  }
  /**
   * @param string
   */
  public function setTrustedBuilder($trustedBuilder)
  {
    $this->trustedBuilder = $trustedBuilder;
  }
  /**
   * @return string
   */
  public function getTrustedBuilder()
  {
    return $this->trustedBuilder;
  }
  /**
   * @param string[]
   */
  public function setTrustedSourceRepoPatterns($trustedSourceRepoPatterns)
  {
    $this->trustedSourceRepoPatterns = $trustedSourceRepoPatterns;
  }
  /**
   * @return string[]
   */
  public function getTrustedSourceRepoPatterns()
  {
    return $this->trustedSourceRepoPatterns;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(VerificationRule::class, 'Google_Service_BinaryAuthorization_VerificationRule');
