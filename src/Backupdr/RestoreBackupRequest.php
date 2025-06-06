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

namespace Google\Service\Backupdr;

class RestoreBackupRequest extends \Google\Model
{
  protected $computeInstanceRestorePropertiesType = ComputeInstanceRestoreProperties::class;
  protected $computeInstanceRestorePropertiesDataType = '';
  protected $computeInstanceTargetEnvironmentType = ComputeInstanceTargetEnvironment::class;
  protected $computeInstanceTargetEnvironmentDataType = '';
  protected $diskRestorePropertiesType = DiskRestoreProperties::class;
  protected $diskRestorePropertiesDataType = '';
  protected $diskTargetEnvironmentType = DiskTargetEnvironment::class;
  protected $diskTargetEnvironmentDataType = '';
  protected $regionDiskTargetEnvironmentType = RegionDiskTargetEnvironment::class;
  protected $regionDiskTargetEnvironmentDataType = '';
  /**
   * @var string
   */
  public $requestId;

  /**
   * @param ComputeInstanceRestoreProperties
   */
  public function setComputeInstanceRestoreProperties(ComputeInstanceRestoreProperties $computeInstanceRestoreProperties)
  {
    $this->computeInstanceRestoreProperties = $computeInstanceRestoreProperties;
  }
  /**
   * @return ComputeInstanceRestoreProperties
   */
  public function getComputeInstanceRestoreProperties()
  {
    return $this->computeInstanceRestoreProperties;
  }
  /**
   * @param ComputeInstanceTargetEnvironment
   */
  public function setComputeInstanceTargetEnvironment(ComputeInstanceTargetEnvironment $computeInstanceTargetEnvironment)
  {
    $this->computeInstanceTargetEnvironment = $computeInstanceTargetEnvironment;
  }
  /**
   * @return ComputeInstanceTargetEnvironment
   */
  public function getComputeInstanceTargetEnvironment()
  {
    return $this->computeInstanceTargetEnvironment;
  }
  /**
   * @param DiskRestoreProperties
   */
  public function setDiskRestoreProperties(DiskRestoreProperties $diskRestoreProperties)
  {
    $this->diskRestoreProperties = $diskRestoreProperties;
  }
  /**
   * @return DiskRestoreProperties
   */
  public function getDiskRestoreProperties()
  {
    return $this->diskRestoreProperties;
  }
  /**
   * @param DiskTargetEnvironment
   */
  public function setDiskTargetEnvironment(DiskTargetEnvironment $diskTargetEnvironment)
  {
    $this->diskTargetEnvironment = $diskTargetEnvironment;
  }
  /**
   * @return DiskTargetEnvironment
   */
  public function getDiskTargetEnvironment()
  {
    return $this->diskTargetEnvironment;
  }
  /**
   * @param RegionDiskTargetEnvironment
   */
  public function setRegionDiskTargetEnvironment(RegionDiskTargetEnvironment $regionDiskTargetEnvironment)
  {
    $this->regionDiskTargetEnvironment = $regionDiskTargetEnvironment;
  }
  /**
   * @return RegionDiskTargetEnvironment
   */
  public function getRegionDiskTargetEnvironment()
  {
    return $this->regionDiskTargetEnvironment;
  }
  /**
   * @param string
   */
  public function setRequestId($requestId)
  {
    $this->requestId = $requestId;
  }
  /**
   * @return string
   */
  public function getRequestId()
  {
    return $this->requestId;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RestoreBackupRequest::class, 'Google_Service_Backupdr_RestoreBackupRequest');
