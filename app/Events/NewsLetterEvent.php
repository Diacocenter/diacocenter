<?php

namespace App\Events;

use App\Models\NewsLetter;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class NewsLetterEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public NewsLetter $newsLetter;

    /**
     * Create a new event instance.
     */
    public function __construct(NewsLetter $newsLetter)
    {
        $this->newsLetter = $newsLetter;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return array<int, \Illuminate\Broadcasting\Channel>
     */
//    public function broadcastOn(): array
//    {
//        return [
//            new PrivateChannel('channel-name'),
//        ];
//    }
}
