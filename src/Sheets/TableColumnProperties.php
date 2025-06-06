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

namespace Google\Service\Sheets;

class TableColumnProperties extends \Google\Model
{
  /**
   * @var int
   */
  public $columnIndex;
  /**
   * @var string
   */
  public $columnName;
  /**
   * @var string
   */
  public $columnType;
  protected $dataValidationRuleType = TableColumnDataValidationRule::class;
  protected $dataValidationRuleDataType = '';

  /**
   * @param int
   */
  public function setColumnIndex($columnIndex)
  {
    $this->columnIndex = $columnIndex;
  }
  /**
   * @return int
   */
  public function getColumnIndex()
  {
    return $this->columnIndex;
  }
  /**
   * @param string
   */
  public function setColumnName($columnName)
  {
    $this->columnName = $columnName;
  }
  /**
   * @return string
   */
  public function getColumnName()
  {
    return $this->columnName;
  }
  /**
   * @param string
   */
  public function setColumnType($columnType)
  {
    $this->columnType = $columnType;
  }
  /**
   * @return string
   */
  public function getColumnType()
  {
    return $this->columnType;
  }
  /**
   * @param TableColumnDataValidationRule
   */
  public function setDataValidationRule(TableColumnDataValidationRule $dataValidationRule)
  {
    $this->dataValidationRule = $dataValidationRule;
  }
  /**
   * @return TableColumnDataValidationRule
   */
  public function getDataValidationRule()
  {
    return $this->dataValidationRule;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(TableColumnProperties::class, 'Google_Service_Sheets_TableColumnProperties');
