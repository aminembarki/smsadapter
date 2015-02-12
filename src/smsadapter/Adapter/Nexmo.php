<?php
/**
 * Nexmo adapter using the Clickatell SDK for PHP v2.x
 *
 * @package SmsAdapter
 * @author Amine Mbarki <aminembaki@gmail.com>
 */


namespace Smsadapter\Adapter;

use NexmoMessage;
use Smsadapter\Adapter;

class Nexmo implements Adapter
{

    protected $service;

    public function __construct()
    {

    }

    public function authenticate(array $options)
    {
        $this->service = new NexmoMessage($options['api_key'], $options['api_secret']);

    }

    public function sendMessage($to, $from, $message, $unicode = null)
    {
        $this->service->sendText($to, $from, $message);
    }
} 