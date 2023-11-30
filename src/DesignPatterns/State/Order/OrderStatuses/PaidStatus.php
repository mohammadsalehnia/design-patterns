<?php

namespace Src\DesignPatterns\State\Order\OrderStatuses;

use Src\DesignPatterns\State\CMS\Exceptions\InvalidStatusException;
use Src\DesignPatterns\State\Order\OrderStatus;

class PaidStatus extends OrderStatus
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
        $this->order->transitTo(new PrepareStatus());
    }

    public function ready(): void
    {
        throw new InvalidStatusException('Order in paid status cant transit to ready');
    }

    public function sent(): void
    {
        throw new InvalidStatusException('Order in paid status cant transit to sent');
    }

    public function delivered(): void
    {
        throw new InvalidStatusException('Order in paid status cant transit to delivered');
    }
}
