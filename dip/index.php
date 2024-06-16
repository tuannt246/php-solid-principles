<?php

require 'EmailService.php';
require 'SmsService.php';
require 'Notification.php';

$emailService = new EmailService();
$notification = new Notification($emailService);
$notification->send("Hello via Email");

echo "\n";

$smsService = new SmsService();
$notification = new Notification($smsService);
$notification->send("Hello via SMS");

echo "\n";
