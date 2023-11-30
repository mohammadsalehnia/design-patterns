<?php

namespace Src\DesignPatterns\State\Order\OrderStatuses;

use Src\DesignPatterns\State\CMS\Exceptions\InvalidStatusException;
use Src\DesignPatterns\State\Order\OrderStatus;

class PendingStatus extends OrderStatus
{

    public function pending(): void
    {
        throw new InvalidStatusException('Order in pending cant transit to pending.');
    }

    public function paid(): void
    {
        $this->order->transitTo(new PaidStatus());
    }

    public function prepare(): void
    {
        throw new InvalidStatusException('Order in pending cant transit to prepare.');
    }

    public function ready(): void
    {
        throw new InvalidStatusException('Order in pending cant transit to ready.');
    }

    public function sent(): void
    {
        throw new InvalidStatusException('Order in pending cant transit to sent.');
    }

    public function delivered(): void
    {
        throw new InvalidStatusException('Order in pending cant transit to delivered.');
    }
}
