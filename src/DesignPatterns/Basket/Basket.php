<?php

namespace Src\DesignPatterns\Basket;

class Basket
{
    private $items;

    public function add(ProductItem $productItem)
    {
        $this->items [] = $productItem;
    }

    public function totalPrice(): int
    {
        $total = 0;

        foreach ($this->items as $item) {
            $total += $item->price();
        }

        return $total;
    }
}
