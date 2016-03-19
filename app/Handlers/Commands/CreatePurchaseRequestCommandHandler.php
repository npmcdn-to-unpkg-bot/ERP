<?php

namespace Nixzen\Handlers\Commands;

use Nixzen\Commands\CreatePurchaseRequestCommand;
use Illuminate\Queue\InteractsWithQueue;
use Nixzen\Repositories\PurchaseRequestRepository;
use Nixzen\Models\PurchaseRequestItem;
use Nixzen\Events\PurchaseRequestWasCreated;

class CreatePurchaseRequestCommandHandler
{
    public $purchaserequest;
    /**
     * Create the command handler.
     *
     * @return void
     */
    public function __construct(PurchaseRequestRepository $purchaserequest)
    {
        $this->purchaserequest = $purchaserequest;
    }

    /**
     * Handle the command.
     *
     * @param  CreatePurchaseRequestCommand  $command
     * @return void
     */
    public function handle(CreatePurchaseRequestCommand $command)
    {
        $purchaserequest = $this->purchaserequest->create((array) $command);
        foreach($command->items as $item){
					$purchaserequest->items()->create((array) $item);
        }
        event(new PurchaseRequestWasCreated($purchaserequest));
        return $purchaserequest;
    }
}
