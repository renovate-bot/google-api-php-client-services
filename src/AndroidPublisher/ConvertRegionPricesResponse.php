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

namespace Google\Service\AndroidPublisher;

class ConvertRegionPricesResponse extends \Google\Model
{
  protected $convertedOtherRegionsPriceType = ConvertedOtherRegionsPrice::class;
  protected $convertedOtherRegionsPriceDataType = '';
  protected $convertedRegionPricesType = ConvertedRegionPrice::class;
  protected $convertedRegionPricesDataType = 'map';
  protected $regionVersionType = RegionsVersion::class;
  protected $regionVersionDataType = '';

  /**
   * @param ConvertedOtherRegionsPrice
   */
  public function setConvertedOtherRegionsPrice(ConvertedOtherRegionsPrice $convertedOtherRegionsPrice)
  {
    $this->convertedOtherRegionsPrice = $convertedOtherRegionsPrice;
  }
  /**
   * @return ConvertedOtherRegionsPrice
   */
  public function getConvertedOtherRegionsPrice()
  {
    return $this->convertedOtherRegionsPrice;
  }
  /**
   * @param ConvertedRegionPrice[]
   */
  public function setConvertedRegionPrices($convertedRegionPrices)
  {
    $this->convertedRegionPrices = $convertedRegionPrices;
  }
  /**
   * @return ConvertedRegionPrice[]
   */
  public function getConvertedRegionPrices()
  {
    return $this->convertedRegionPrices;
  }
  /**
   * @param RegionsVersion
   */
  public function setRegionVersion(RegionsVersion $regionVersion)
  {
    $this->regionVersion = $regionVersion;
  }
  /**
   * @return RegionsVersion
   */
  public function getRegionVersion()
  {
    return $this->regionVersion;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConvertRegionPricesResponse::class, 'Google_Service_AndroidPublisher_ConvertRegionPricesResponse');
