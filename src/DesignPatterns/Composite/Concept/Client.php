<?php

namespace Src\DesignPatterns\Composite\Concept;

class Client implements Component
{
    private $component;

    /**
     * @param Component $component
     */
    public function __construct(Component $component)
    {
        $this->component = $component;
    }


    public function operation()
    {
        // TODO: Implement operation() method.
    }
}
