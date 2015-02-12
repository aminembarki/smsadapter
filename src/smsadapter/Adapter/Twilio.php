<?php
/**
 * Twilio adapter using the Clickatell SDK for PHP v2.x
 *
 * @package SmsAdapter
 * @author Amine Mbarki <aminembaki@gmail.com>
 */

namespace Smsadapter\Adapter;

use Services_Twilio;
use Smsadapter\Adapter;

class Twilio implements Adapter
{

    protected $service;

    public function __construct()
    {

    }

    public function authenticate(array $options)
    {
        $this->service = new Services_Twilio($options['api_key'], $options['api_secret']);

    }

    public function sendMessage($to, $from, $message, $unicode = null)
    {
        $response = $this->service->account->messages->create(array(
            "From" => $from,
            "To" => $to,
            "Body" => $message,
        ));

        return $response->sid;
    }
} 