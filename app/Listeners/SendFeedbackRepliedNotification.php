<?php

namespace App\Listeners;

use App\Events\FeedbackReplied;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use App\Models\Notice;

class SendFeedbackRepliedNotification
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  FeedbackReplied  $event
     * @return void
     */
    public function handle(FeedbackReplied $event)
    {
        $reply = $event->reply;
        Notice::create([
            'content' => $reply->notice_content,
            'to_user' => $reply->feedback->user_id,
        ]);
    }
}
