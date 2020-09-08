<?php

namespace App\Observers;

use App\ChatMessage;
use App\Events\ChatSendEvent;

class ChatMessageObserver
{
    /**
     * Handle the chat message "created" event.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return void
     */
    public function created(ChatMessage $chatMessage)
    {
        broadcast(new ChatSendEvent($chatMessage));
    }

    /**
     * Handle the chat message "updated" event.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return void
     */
    public function updated(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Handle the chat message "deleted" event.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return void
     */
    public function deleted(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Handle the chat message "restored" event.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return void
     */
    public function restored(ChatMessage $chatMessage)
    {
        //
    }

    /**
     * Handle the chat message "force deleted" event.
     *
     * @param  \App\ChatMessage  $chatMessage
     * @return void
     */
    public function forceDeleted(ChatMessage $chatMessage)
    {
        //
    }
}
