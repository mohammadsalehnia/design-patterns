<?php

namespace Src\DesignPatterns\FactoryMethod;

class Client
{
    private Creator $creator;

    /**
     * @param Creator $creator
     */
    public function __construct(Creator $creator)
    {
        $this->creator = $creator;
    }


    public function doStuff(): string
    {
        return $this->creator->doSomething();
    }
}
