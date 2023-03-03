<?php

namespace App\Providers;

use App\Events\BookingCreated;
use App\Events\UserCreated;
use App\Listeners\ChargeBooking;
use App\Listeners\CreateStripeCustomer;
use App\Listeners\SendUserCreatedEmailNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event to listener mappings for the application.
     *
     * @var array<class-string, array<int, class-string>>
     */
    protected $listen = [
        UserCreated::class => [
            SendUserCreatedEmailNotification::class,
            CreateStripeCustomer::class,
        ],
        BookingCreated::class => [
            ChargeBooking::class,
        ],
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Determine if events and listeners should be automatically discovered.
     *
     * @return bool
     */
    public function shouldDiscoverEvents()
    {
        return false;
    }
}
