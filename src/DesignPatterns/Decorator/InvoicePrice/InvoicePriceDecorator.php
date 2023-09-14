<?php

namespace Src\DesignPatterns\Decorator\InvoicePrice;

class InvoicePriceDecorator implements InvoicePrice
{

    private $invoicePrice;

    /**
     * @param InvoicePrice $invoicePrice
     */
    public function __construct(InvoicePrice $invoicePrice)
    {
        $this->invoicePrice = $invoicePrice;
    }

    public function price(): int
    {
        return $this->invoicePrice->price();
    }

}
