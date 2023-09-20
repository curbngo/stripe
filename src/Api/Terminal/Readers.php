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

class Readers extends Api
{
    /**
     * Creates a new terminal reader.
     *
     * @param  array  $parameters
     * @return array
     */
    public function create(array $parameters = [])
    {
        return $this->_post('terminal/readers', $parameters);
    }

    /**
     * Retrieves an existing terminal reader.
     *
     * @param  string  $readerId
     * @return array
     */
    public function find($readerId)
    {
        return $this->_get("terminal/readers/{$readerId}");
    }

    /**
     * Updates an existing terminal reader.
     *
     * @param  string  $readerId
     * @param  array  $parameters
     * @return array
     */
    public function update($readerId, array $parameters = [])
    {
        return $this->_post("terminal/readers/{$readerId}", $parameters);
    }

    /**
     * Deletes an existing terminal reader.
     *
     * @param  string  $readerId
     * @return array
     */
    public function delete($readerId)
    {
        return $this->_delete("terminal/readers/{$readerId}");
    }

    /**
     * Lists all terminal readers.
     *
     * @param  array  $parameters
     * @return array
     */
    public function all(array $parameters = [])
    {
        return $this->_get('terminal/readers', $parameters);
    }

    /**
     * Initiates a payment flow on a Reader.
     *
     * @param  string  $readerId
     * @param  array  $parameters
     * @return array
     */
    public function processPaymentIntent($readerId, array $parameters = [])
    {
        return $this->_post("terminal/readers/{$readerId}/process_payment_intent", $parameters);
    }

    /**
     * Cancels the current reader action.
     *
     * @param  string  $readerId
     * @param  array  $parameters
     * @return array
     */
    public function cancelAction($readerId, array $parameters = [])
    {
        return $this->_post("terminal/readers/{$readerId}/cancel_action", $parameters);
    }

    /**
     * Refunds a payment on a Reader.
     *
     * @param  string  $readerId
     * @param  array  $parameters
     * @return array
     */
    public function refundPayment($readerId, array $parameters = [])
    {
        return $this->_post("terminal/readers/{$readerId}/refund_payment", $parameters);
    }

    /**
     * Sets reader display to show cart details.
     *
     * @param  string  $readerId
     * @param  array  $parameters
     * @return array
     */
    public function setReaderDisplay($readerId, array $parameters = [])
    {
        return $this->_post("terminal/readers/{$readerId}/set_reader_display", $parameters);
    }
}
