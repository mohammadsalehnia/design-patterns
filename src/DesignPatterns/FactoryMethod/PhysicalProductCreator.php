<?php

namespace Src\DesignPatterns\FactoryMethod;

class PhysicalProductCreator extends Creator
{

    public function factoryMethod(): Product
    {
        return new PhysicalProduct();
    }
}
