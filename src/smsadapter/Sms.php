<?php
/**
 * Point to Sms Service
 *
 * @author Amine Mbarki <aminembaki@gmail.com>
 */
namespace Smsadapter;

class Sms
{
    protected $service;

    public function setSmsAdapter(Adapter $service)
    {
        $this->service = $service;
    }

    public function authenticate(array $options)
    {
        $this->service->authenticate($options);

    }

    public function sendMessage($to, $from, $message, $unicode = null)
    {
        return $this->service->sendMessage($to, $from, $message, $unicode);
    }
}