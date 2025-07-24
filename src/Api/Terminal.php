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

namespace Cartalyst\Stripe\Api;

class Terminal extends Api
{
    /**
     * Returns a terminal connection tokens api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\ConnectionTokens
     */
    public function connectionTokens()
    {
        return new Terminal\ConnectionTokens($this->config);
    }

    /**
     * Returns a terminal locations api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\Locations
     */
    public function locations()
    {
        return new Terminal\Locations($this->config);
    }

    /**
     * Returns a terminal readers api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\Readers
     */
    public function readers()
    {
        return new Terminal\Readers($this->config);
    }

    /**
     * Returns a terminal configurations api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\Configurations
     */
    public function configurations()
    {
        return new Terminal\Configurations($this->config);
    }

    /**
     * Returns a terminal device deploy groups api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\DeviceDeployGroups
     */
    public function deviceDeployGroups()
    {
        return new Terminal\DeviceDeployGroups($this->config);
    }

    /**
     * Returns a terminal device assets api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\DeviceAssets
     */
    public function deviceAssets()
    {
        return new Terminal\DeviceAssets($this->config);
    }

    /**
     * Returns a terminal device asset versions api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\DeviceAssetVersions
     */
    public function deviceAssetVersions()
    {
        return new Terminal\DeviceAssetVersions($this->config);
    }

    /**
     * Returns a terminal deploy plans api instance.
     *
     * @return \Cartalyst\Stripe\Api\Terminal\DeployPlans
     */
    public function deployPlans()
    {
        return new Terminal\DeployPlans($this->config);
    }
}
