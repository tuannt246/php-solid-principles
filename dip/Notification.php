<?php

require_once 'MessageService.php';

class Notification
{
    private $messageService;

    public function __construct(MessageService $messageService)
    {
        $this->messageService = $messageService;
    }

    public function send($message)
    {
        $this->messageService->send($message);
    }
}
