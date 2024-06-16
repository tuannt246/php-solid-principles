<?php

require_once 'MessageService.php';

class EmailService implements MessageService
{
    public function send($message)
    {
        echo "Email message: " . $message;
    }
}


