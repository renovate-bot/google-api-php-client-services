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

class Stats extends \Google\Model
{
  /**
   * @var int
   */
  public $failed;
  /**
   * @var int
   */
  public $notStarted;
  /**
   * @var int
   */
  public $ongoing;
  /**
   * @var int
   */
  public $success;

  /**
   * @param int
   */
  public function setFailed($failed)
  {
    $this->failed = $failed;
  }
  /**
   * @return int
   */
  public function getFailed()
  {
    return $this->failed;
  }
  /**
   * @param int
   */
  public function setNotStarted($notStarted)
  {
    $this->notStarted = $notStarted;
  }
  /**
   * @return int
   */
  public function getNotStarted()
  {
    return $this->notStarted;
  }
  /**
   * @param int
   */
  public function setOngoing($ongoing)
  {
    $this->ongoing = $ongoing;
  }
  /**
   * @return int
   */
  public function getOngoing()
  {
    return $this->ongoing;
  }
  /**
   * @param int
   */
  public function setSuccess($success)
  {
    $this->success = $success;
  }
  /**
   * @return int
   */
  public function getSuccess()
  {
    return $this->success;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Stats::class, 'Google_Service_CloudAlloyDBAdmin_Stats');
