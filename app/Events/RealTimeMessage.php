<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Queue\SerializesModels;
// use Illuminate\Foundation\Events\Dispatchable;
// use Illuminate\Broadcasting\InteractsWithSockets;

class RealTimeMessage implements ShouldBroadcast
{
    use SerializesModels;

    public string $message;
    public int $user_id;

    public function __construct(string $message, int $user_id, )
    {
        $this->user_id  = $user_id;
        $this->message = $message;
    }

    public function broadcastOn(): Channel
    {
        // return new Channel('events');
        return new PrivateChannel('events');
    }
}
