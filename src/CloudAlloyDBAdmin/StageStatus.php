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

namespace Google\Service\CloudAlloyDBAdmin;

class StageStatus extends \Google\Model
{
  protected $readPoolInstancesUpgradeType = ReadPoolInstancesUpgradeStageStatus::class;
  protected $readPoolInstancesUpgradeDataType = '';
  /**
   * @var string
   */
  public $stage;
  /**
   * @var string
   */
  public $state;

  /**
   * @param ReadPoolInstancesUpgradeStageStatus
   */
  public function setReadPoolInstancesUpgrade(ReadPoolInstancesUpgradeStageStatus $readPoolInstancesUpgrade)
  {
    $this->readPoolInstancesUpgrade = $readPoolInstancesUpgrade;
  }
  /**
   * @return ReadPoolInstancesUpgradeStageStatus
   */
  public function getReadPoolInstancesUpgrade()
  {
    return $this->readPoolInstancesUpgrade;
  }
  /**
   * @param string
   */
  public function setStage($stage)
  {
    $this->stage = $stage;
  }
  /**
   * @return string
   */
  public function getStage()
  {
    return $this->stage;
  }
  /**
   * @param string
   */
  public function setState($state)
  {
    $this->state = $state;
  }
  /**
   * @return string
   */
  public function getState()
  {
    return $this->state;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(StageStatus::class, 'Google_Service_CloudAlloyDBAdmin_StageStatus');
