<?php

namespace App\Listeners;

use App\Events\PurchaseConfirmationEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;

class UpdateProductQtyAfterPurchase
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(PurchaseConfirmationEvent $event): void
    {
        //
    }
}
