<?php
/**
 * Plivo adapter using the Clickatell SDK for PHP v2.x
 *
 * @package SmsAdapter
 * @author Amine Mbarki <aminembaki@gmail.com>
 */

namespace Smsadapter\Adapter;

use Smsadapter\Adapter;


class Plivo implements Adapter
{

    protected $service;

    public function __construct()
    {

    }

    public function authenticate(array $options)
    {
        $this->service = new \Plivo\RestAPI($options['api_key'], $options['api_secret']);

    }

    public function sendMessage($to, $from, $message, $unicode = null)
    {
        // Send a message
        $params = array(
            'src' => $from,
            'dst' => $to,
            'text' => $message,
            'type' => 'sms',
        );
        return $this->service->send_message($params);
    }
} 