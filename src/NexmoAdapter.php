<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 2/9/2015
 * Time: 4:25 PM
 */
require '../vendor/autoload.php';

class NexmoAdapter implements SmsAdapterInterface{

    protected $service;

    public function __construct()
    {

    }

    public function authenticate(array $options)
    {
        $this->service = new NexmoMessage($options['api_key'], $options['api_secret']);

    }

    public function sendMessage( $to, $from, $message, $unicode=null )
    {
        $this->service->sendText( $to , $from, $message );
    }
} 