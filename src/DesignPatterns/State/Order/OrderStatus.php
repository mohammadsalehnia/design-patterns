<?php

namespace Src\DesignPatterns\State\Order;

abstract class OrderStatus
{
    protected Order $order;

    public function setOrder(Order $order): void
    {
        $this->order = $order;
    }

    abstract public function pending(): void;

    abstract public function paid(): void;

    abstract public function prepare(): void;

    abstract public function ready(): void;

    abstract public function sent(): void;

    abstract public function delivered(): void;


}
