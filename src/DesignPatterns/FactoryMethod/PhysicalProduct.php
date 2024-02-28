<?php

namespace Src\DesignPatterns\FactoryMethod;

class PhysicalProduct implements Product
{

    public function operation(): string
    {
        return "got to band page";
    }
}
