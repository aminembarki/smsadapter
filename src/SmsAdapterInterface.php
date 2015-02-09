<?php
/**
 * Created by PhpStorm.
 * User: aminembarki@gmail.com
 * Date: 2/9/2015
 * Time: 4:21 PM
 */

interface SmsAdapterInterface {
    public function authenticate(array $options);

    /**
     * Prepare new text message.
     *
     * If $unicode is not provided we will try to detect the
     * message type. Otherwise set to TRUE if you require
     * unicode characters.
     */
    public function sendMessage( $to, $from, $message, $unicode);
} 