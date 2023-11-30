<?php

namespace Src\DesignPatterns\State\Order\OrderStatuses;

use Src\DesignPatterns\State\CMS\Exceptions\InvalidStatusException;
use Src\DesignPatterns\State\Order\OrderStatus;

class PrepareStatus extends OrderStatus
{

    public function pending(): void
    {
        // TODO: Implement pending() method.
    }

    public function paid(): void
    {
        // TODO: Implement paid() method.
    }

    public function prepare(): void
    {
        // TODO: Implement prepare() method.
    }

    public function ready(): void
    {
        $this->order->transitTo(new ReadyStatus());
    }

    public function sent(): void
    {
        throw new InvalidStatusException('Order in prepare status cant transit to sent');
    }

    public function delivered(): void
    {
        throw new InvalidStatusException('Order in prepare status cant transit to delivered');
    }
}
