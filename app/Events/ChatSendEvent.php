<?php

namespace App\Events;

use App\ChatMessage;
use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class ChatSendEvent implements ShouldBroadcast
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
    public $data;
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(ChatMessage $chat)
    {
        $chat->to = $chat->to;
        $chat->from = $chat->from;
        unset($chat['to_id']);
        unset($chat['from_id']);
        $this->data = $chat;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        $channelId = array($this->data->from_id, $this->data->to_id);
        sort($channelId);
        //channel name format chatmessage1,2
        return new Channel('chatmessage' . implode(",", $channelId));
    }
}
