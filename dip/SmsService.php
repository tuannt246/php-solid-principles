<?php

require_once 'MessageService.php';

class SmsService implements MessageService
{
    public function send($message)
    {
        echo "Email message: " . $message;
    }
}
