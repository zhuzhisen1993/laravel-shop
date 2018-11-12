<?php

namespace App\Providers;

use App\Events\Orderpaid;
use App\Events\OrderReviewed;
use App\Listeners\SendOrderPaidMaill;
use App\Listeners\UpdateProductSoldCount;
use Illuminate\Support\Facades\Event;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Listeners\RegisteredListener;
use Illuminate\Auth\Events\Registered;
use App\Listeners\UpdateProductRating;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            RegisteredListener::class,
        ],
        Orderpaid::class =>[
            UpdateProductSoldCount::class,
            SendOrderPaidMaill::class,
        ],
        OrderReviewed::class =>[
            UpdateProductRating::class,
        ]
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
