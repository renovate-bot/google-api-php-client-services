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

namespace Google\Service\NetAppFiles;

class BackupVault extends \Google\Model
{
  /**
   * @var string
   */
  public $backupRegion;
  protected $backupRetentionPolicyType = BackupRetentionPolicy::class;
  protected $backupRetentionPolicyDataType = '';
  /**
   * @var string
   */
  public $backupVaultType;
  /**
   * @var string
   */
  public $createTime;
  /**
   * @var string
   */
  public $description;
  /**
   * @var string
   */
  public $destinationBackupVault;
  /**
   * @var string[]
   */
  public $labels;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $sourceBackupVault;
  /**
   * @var string
   */
  public $sourceRegion;
  /**
   * @var string
   */
  public $state;

  /**
   * @param string
   */
  public function setBackupRegion($backupRegion)
  {
    $this->backupRegion = $backupRegion;
  }
  /**
   * @return string
   */
  public function getBackupRegion()
  {
    return $this->backupRegion;
  }
  /**
   * @param BackupRetentionPolicy
   */
  public function setBackupRetentionPolicy(BackupRetentionPolicy $backupRetentionPolicy)
  {
    $this->backupRetentionPolicy = $backupRetentionPolicy;
  }
  /**
   * @return BackupRetentionPolicy
   */
  public function getBackupRetentionPolicy()
  {
    return $this->backupRetentionPolicy;
  }
  /**
   * @param string
   */
  public function setBackupVaultType($backupVaultType)
  {
    $this->backupVaultType = $backupVaultType;
  }
  /**
   * @return string
   */
  public function getBackupVaultType()
  {
    return $this->backupVaultType;
  }
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
  public function setDescription($description)
  {
    $this->description = $description;
  }
  /**
   * @return string
   */
  public function getDescription()
  {
    return $this->description;
  }
  /**
   * @param string
   */
  public function setDestinationBackupVault($destinationBackupVault)
  {
    $this->destinationBackupVault = $destinationBackupVault;
  }
  /**
   * @return string
   */
  public function getDestinationBackupVault()
  {
    return $this->destinationBackupVault;
  }
  /**
   * @param string[]
   */
  public function setLabels($labels)
  {
    $this->labels = $labels;
  }
  /**
   * @return string[]
   */
  public function getLabels()
  {
    return $this->labels;
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
  public function setSourceBackupVault($sourceBackupVault)
  {
    $this->sourceBackupVault = $sourceBackupVault;
  }
  /**
   * @return string
   */
  public function getSourceBackupVault()
  {
    return $this->sourceBackupVault;
  }
  /**
   * @param string
   */
  public function setSourceRegion($sourceRegion)
  {
    $this->sourceRegion = $sourceRegion;
  }
  /**
   * @return string
   */
  public function getSourceRegion()
  {
    return $this->sourceRegion;
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
class_alias(BackupVault::class, 'Google_Service_NetAppFiles_BackupVault');
