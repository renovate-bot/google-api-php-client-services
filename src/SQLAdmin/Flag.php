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

namespace Google\Service\SQLAdmin;

class Flag extends \Google\Collection
{
  protected $collection_key = 'appliesTo';
  /**
   * @var string[]
   */
  public $allowedIntValues;
  /**
   * @var string[]
   */
  public $allowedStringValues;
  /**
   * @var string[]
   */
  public $appliesTo;
  /**
   * @var string
   */
  public $flagScope;
  /**
   * @var bool
   */
  public $inBeta;
  /**
   * @var string
   */
  public $kind;
  /**
   * @var string
   */
  public $maxValue;
  /**
   * @var string
   */
  public $minValue;
  /**
   * @var string
   */
  public $name;
  /**
   * @var string
   */
  public $recommendedIntValue;
  /**
   * @var string
   */
  public $recommendedStringValue;
  /**
   * @var bool
   */
  public $requiresRestart;
  /**
   * @var string
   */
  public $type;

  /**
   * @param string[]
   */
  public function setAllowedIntValues($allowedIntValues)
  {
    $this->allowedIntValues = $allowedIntValues;
  }
  /**
   * @return string[]
   */
  public function getAllowedIntValues()
  {
    return $this->allowedIntValues;
  }
  /**
   * @param string[]
   */
  public function setAllowedStringValues($allowedStringValues)
  {
    $this->allowedStringValues = $allowedStringValues;
  }
  /**
   * @return string[]
   */
  public function getAllowedStringValues()
  {
    return $this->allowedStringValues;
  }
  /**
   * @param string[]
   */
  public function setAppliesTo($appliesTo)
  {
    $this->appliesTo = $appliesTo;
  }
  /**
   * @return string[]
   */
  public function getAppliesTo()
  {
    return $this->appliesTo;
  }
  /**
   * @param string
   */
  public function setFlagScope($flagScope)
  {
    $this->flagScope = $flagScope;
  }
  /**
   * @return string
   */
  public function getFlagScope()
  {
    return $this->flagScope;
  }
  /**
   * @param bool
   */
  public function setInBeta($inBeta)
  {
    $this->inBeta = $inBeta;
  }
  /**
   * @return bool
   */
  public function getInBeta()
  {
    return $this->inBeta;
  }
  /**
   * @param string
   */
  public function setKind($kind)
  {
    $this->kind = $kind;
  }
  /**
   * @return string
   */
  public function getKind()
  {
    return $this->kind;
  }
  /**
   * @param string
   */
  public function setMaxValue($maxValue)
  {
    $this->maxValue = $maxValue;
  }
  /**
   * @return string
   */
  public function getMaxValue()
  {
    return $this->maxValue;
  }
  /**
   * @param string
   */
  public function setMinValue($minValue)
  {
    $this->minValue = $minValue;
  }
  /**
   * @return string
   */
  public function getMinValue()
  {
    return $this->minValue;
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
  public function setRecommendedIntValue($recommendedIntValue)
  {
    $this->recommendedIntValue = $recommendedIntValue;
  }
  /**
   * @return string
   */
  public function getRecommendedIntValue()
  {
    return $this->recommendedIntValue;
  }
  /**
   * @param string
   */
  public function setRecommendedStringValue($recommendedStringValue)
  {
    $this->recommendedStringValue = $recommendedStringValue;
  }
  /**
   * @return string
   */
  public function getRecommendedStringValue()
  {
    return $this->recommendedStringValue;
  }
  /**
   * @param bool
   */
  public function setRequiresRestart($requiresRestart)
  {
    $this->requiresRestart = $requiresRestart;
  }
  /**
   * @return bool
   */
  public function getRequiresRestart()
  {
    return $this->requiresRestart;
  }
  /**
   * @param string
   */
  public function setType($type)
  {
    $this->type = $type;
  }
  /**
   * @return string
   */
  public function getType()
  {
    return $this->type;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Flag::class, 'Google_Service_SQLAdmin_Flag');
