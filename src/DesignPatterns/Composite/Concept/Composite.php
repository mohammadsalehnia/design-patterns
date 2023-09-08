<?php

namespace Src\DesignPatterns\Composite\Concept;

class Composite implements Component
{
    private $components;

    public function addComponent(Component $component)
    {
        $this->components[] = $component;
    }

    public function operation()
    {
        // TODO: Implement operation() method.
    }
}
