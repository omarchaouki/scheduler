<?php 
namespace App\Events;
use App\Scheduler\Event;
class SomeEvent extends Event
{
    public function handle()
    {
        return true;
    }
}
