<?php

namespace Src\DesignPatterns\FactoryMethod;

class DownloadableProduct implements Product
{

    public function operation(): string
    {
        return "Download file";
    }
}
