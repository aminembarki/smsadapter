<?php
/**
 * Nexmo adapter using the Clickatell SDK for PHP v2.x
 *
 * @package SmsAdapter
 * @author Amine Mbarki <aminembaki@gmail.com>
 */



namespace Smsadapter\Adapter;


use Headzoo\Nexmo\Exception\Exception;
use Headzoo\Nexmo\Sms;
use Smsadapter\Adapter;

class Nexmo implements Adapter
{

    protected $service;

    public function __construct()
    {

    }

    public function authenticate(array $options)
    {
        $this->service = Sms::factory($options['api_key'], $options['api_secret'] , null);

    }

    public function sendMessage($to, $from, $message, $unicode = null)
    {
        try {
            $this->service->setFrom($from);
            return $this->service->text($to, $message);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
} 