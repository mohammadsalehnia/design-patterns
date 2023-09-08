<?php

namespace Src\DesignPatterns\Basket;

class SingleProduct implements ProductItem
{
    private $price;

    /**
     * @param int $price
     */
    public function __construct(int $price)
    {
        $this->price = $price;
    }

    public function price():int
    {
        return $this->price;
    }
}
