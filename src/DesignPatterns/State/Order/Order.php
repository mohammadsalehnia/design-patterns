<?php

namespace Src\DesignPatterns\State\Order;

use Src\DesignPatterns\State\Order\OrderStatuses\PendingStatus;

class Order
{
    private OrderStatus $status;

    /**
     */
    public function __construct()
    {
        $this->transitTo(new PendingStatus());
    }

    public function transitTo(OrderStatus $orderStatus): void
    {
        $this->status = $orderStatus;
        $this->status->setOrder($this);
    }


    public function paid(): void
    {
        $this->status->paid();
    }

    public function prepare(): void
    {
        $this->status->prepare();
    }

    public function ready(): void
    {
        $this->status->ready();
    }

    public function sent(): void
    {
        $this->status->sent();
    }

    public function delivered(): void
    {
        $this->status->delivered();
    }

}
