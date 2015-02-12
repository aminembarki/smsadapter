<?php
/**
 * Interface for the Sms adapters
 *
 * @author Amine Mbarki <aminembaki@gmail.com>
 */
namespace Smsadapter;

interface Adapter
{
    /**
     * Prepare new text message.
     *
     * @param array $options
     *
     */
    public function authenticate(array $options);

    /**
     * Prepare new text message.
     *
     * @param string $to
     * @param string $from
     * @param string $message
     * @param string $unicode
     *
     * @return integer|boolean The number of bytes that were message was sent
     */
    public function sendMessage($to, $from, $message, $unicode = null);
} 