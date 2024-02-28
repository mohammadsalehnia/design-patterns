<?php

namespace Src\DesignPatterns\FactoryMethod;

abstract class Creator
{
    abstract public function factoryMethod(): Product;

    public function doSomething(): string
    {
        $product = $this->factoryMethod();
        return "done product operation: {$product->operation()}";
    }
}
