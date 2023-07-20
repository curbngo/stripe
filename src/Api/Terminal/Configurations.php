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

class Configurations extends Api
{
    /**
     * Creates a new terminal configuration.
     *
     * @param  array  $parameters
     * @return array
     */
    public function create(array $parameters = [])
    {
        return $this->_post('terminal/configurations', $parameters);
    }

    /**
     * Retrieves an existing terminal configuration.
     *
     * @param  string  $configurationId
     * @return array
     */
    public function find($configurationId)
    {
        return $this->_get("terminal/configurations/{$configurationId}");
    }

    /**
     * Updates an existing terminal configuration.
     *
     * @param  string  $configurationId
     * @param  array  $parameters
     * @return array
     */
    public function update($configurationId, array $parameters = [])
    {
        return $this->_post("terminal/configurations/{$configurationId}", $parameters);
    }

    /**
     * Deletes an existing terminal configuration.
     *
     * @param  string  $configurationId
     * @return array
     */
    public function delete($configurationId)
    {
        return $this->_delete("terminal/configurations/{$configurationId}");
    }

    /**
     * Lists all terminal configurations.
     *
     * @param  array  $parameters
     * @return array
     */
    public function all(array $parameters = [])
    {
        return $this->_get('terminal/configurations', $parameters);
    }
}