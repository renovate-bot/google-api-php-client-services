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

namespace Google\Service\DatabaseMigrationService;

class SqlServerToPostgresConfig extends \Google\Model
{
  protected $postgresDestinationConfigType = PostgresDestinationConfig::class;
  protected $postgresDestinationConfigDataType = '';
  protected $sqlserverSourceConfigType = SqlServerSourceConfig::class;
  protected $sqlserverSourceConfigDataType = '';

  /**
   * @param PostgresDestinationConfig
   */
  public function setPostgresDestinationConfig(PostgresDestinationConfig $postgresDestinationConfig)
  {
    $this->postgresDestinationConfig = $postgresDestinationConfig;
  }
  /**
   * @return PostgresDestinationConfig
   */
  public function getPostgresDestinationConfig()
  {
    return $this->postgresDestinationConfig;
  }
  /**
   * @param SqlServerSourceConfig
   */
  public function setSqlserverSourceConfig(SqlServerSourceConfig $sqlserverSourceConfig)
  {
    $this->sqlserverSourceConfig = $sqlserverSourceConfig;
  }
  /**
   * @return SqlServerSourceConfig
   */
  public function getSqlserverSourceConfig()
  {
    return $this->sqlserverSourceConfig;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(SqlServerToPostgresConfig::class, 'Google_Service_DatabaseMigrationService_SqlServerToPostgresConfig');
