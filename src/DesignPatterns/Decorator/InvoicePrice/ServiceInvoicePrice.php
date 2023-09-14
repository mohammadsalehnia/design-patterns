<?php

namespace Src\DesignPatterns\Decorator\InvoicePrice;

class ServiceInvoicePrice extends InvoicePriceDecorator
{
    public function price(): int
    {
        return parent::price() + 20000;
    }
}
