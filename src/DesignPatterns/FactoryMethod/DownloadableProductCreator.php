<?php

namespace Src\DesignPatterns\FactoryMethod;

class DownloadableProductCreator extends Creator
{

    public function factoryMethod(): Product
    {
        return new DownloadableProduct();
    }
}
