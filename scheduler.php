<?php
require_once 'vendor/autoload.php';
use App\Events\SomeEvent;
$event = new SomeEvent();
$event->handle();
