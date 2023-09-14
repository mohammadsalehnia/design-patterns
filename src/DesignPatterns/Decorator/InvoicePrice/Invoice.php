<?php

namespace Src\DesignPatterns\Decorator\InvoicePrice;

class Invoice implements InvoicePrice
{

    public function price(): int
    {
        // TODO: Implement price() method.

        return 10000;
    }
}
