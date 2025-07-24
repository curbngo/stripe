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

class DeviceAssetVersions extends Api
{
    /**
     * Creates a new terminal device asset version.
     *
     * @param  array  $parameters
     * @return array
     */
    public function create(array $parameters = [])
    {
        return $this->_post('terminal/device_asset_versions', $parameters);
    }

    /**
     * Retrieves an existing terminal device asset version.
     *
     * @param  string  $deviceAssetVersionId
     * @return array
     */
    public function find($deviceAssetVersionId)
    {
        return $this->_get("terminal/device_asset_versions/{$deviceAssetVersionId}");
    }

    /**
     * Lists all terminal device asset versions.
     *
     * @param  array  $parameters
     * @return array
     */
    public function all(array $parameters = [])
    {
        return $this->_get('terminal/device_asset_versions', $parameters);
    }
}