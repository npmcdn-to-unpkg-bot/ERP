<?php

namespace Nixzen\Events;

use Nixzen\Events\Event;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class PurchaseRequestWasUpdated extends Event
{
    use SerializesModels;

    public $purchaserequest;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct($purchaserequest)
    {
        $this->purchaserequest = $purchaserequest;
    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}
