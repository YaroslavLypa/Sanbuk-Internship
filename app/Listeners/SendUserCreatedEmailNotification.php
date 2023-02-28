<?php

namespace App\Listeners;

use App\Events\UserCreated;
use App\Mail\UserCreatedSuccessful;
use Mail;

class SendUserCreatedEmailNotification
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
     * @param UserCreated $event
     * @return void
     */
    public function handle(UserCreated $event)
    {
        Mail::to($event->user)->queue(new UserCreatedSuccessful($event->user));
    }
}
