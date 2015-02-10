<?php
/**
 * Created by PhpStorm.
 * User: amine
 * Date: 2/9/2015
 * Time: 4:25 PM
 */
require '../vendor/autoload.php';

class ClickatellAdapter implements SmsAdapterInterface{

    protected $service;

    public function __construct()
    {

    }

    public function authenticate(array $options)
    {
        $this->service =   new ClickatellRest($options['api_token']);
    }

    public function sendMessage( $to, $from, $message, $unicode=null )
    {
        $response  = $this->service->sendMessage(
         $to,
         $message
        );
        return $response->sid;
    }
} 