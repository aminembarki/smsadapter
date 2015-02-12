<?php
/**
 * Clickatell adapter using the Clickatell SDK for PHP v2.x
 *
 * @package SmsAdapter
 * @author Amine Mbarki <aminembaki@gmail.com>
 */

namespace Smsadapter\Adapter;

use Clickatell\Api\ClickatellRest;
use Smsadapter\Adapter;

class Clickatell implements Adapter
{

    protected $service;

    public function __construct()
    {

    }

    public function authenticate(array $options)
    {
        $this->service = new ClickatellRest($options['api_token']);
    }

    public function sendMessage($to, $from, $message, $unicode = null)
    {
        $response = $this->service->sendMessage(
            $to,
            $message
        );
        return $response;
    }
} 