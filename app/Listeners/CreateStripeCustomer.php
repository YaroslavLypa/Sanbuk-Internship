<?php

namespace App\Listeners;

use App\Events\UserCreated;
use Illuminate\Contracts\Queue\ShouldQueue;

class CreateStripeCustomer implements ShouldQueue
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

    public function handle(UserCreated $event): void
    {
        $event->user->createOrGetStripeCustomer();
    }


}
