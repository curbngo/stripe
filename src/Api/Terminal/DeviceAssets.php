<?php

/**
 * Part of the Stripe package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Stripe
 * @version    2.4.6
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2021, Cartalyst LLC
 * @link       https://cartalyst.com
 */

namespace Cartalyst\Stripe\Api\Terminal;

use Cartalyst\Stripe\Api\Api;

class DeviceAssets extends Api
{
    /**
     * Creates a new terminal device asset.
     *
     * @param  array  $parameters
     * @return array
     */
    public function create(array $parameters = [])
    {
        return $this->_post('terminal/device_assets', $parameters);
    }

    /**
     * Retrieves an existing terminal device asset.
     *
     * @param  string  $deviceAssetId
     * @return array
     */
    public function find($deviceAssetId)
    {
        return $this->_get("terminal/device_assets/{$deviceAssetId}");
    }

    /**
     * Lists all terminal device assets.
     *
     * @param  array  $parameters
     * @return array
     */
    public function all(array $parameters = [])
    {
        return $this->_get('terminal/device_assets', $parameters);
    }
}