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

class DeviceDeployGroups extends Api
{
    /**
     * Creates a new terminal device deploy group.
     *
     * @param  array  $parameters
     * @return array
     */
    public function create(array $parameters = [])
    {
        return $this->_post('terminal/device_deploy_groups', $parameters);
    }

    /**
     * Retrieves an existing terminal device deploy group.
     *
     * @param  string  $deviceDeployGroupId
     * @return array
     */
    public function find($deviceDeployGroupId)
    {
        return $this->_get("terminal/device_deploy_groups/{$deviceDeployGroupId}");
    }

    /**
     * Updates an existing terminal device deploy group.
     *
     * @param  string  $deviceDeployGroupId
     * @param  array  $parameters
     * @return array
     */
    public function update($deviceDeployGroupId, array $parameters = [])
    {
        return $this->_post("terminal/device_deploy_groups/{$deviceDeployGroupId}", $parameters);
    }

    /**
     * Lists all terminal device deploy groups.
     *
     * @param  array  $parameters
     * @return array
     */
    public function all(array $parameters = [])
    {
        return $this->_get('terminal/device_deploy_groups', $parameters);
    }
}