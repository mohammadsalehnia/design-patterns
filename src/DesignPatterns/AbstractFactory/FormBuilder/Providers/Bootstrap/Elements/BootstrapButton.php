<?php

namespace Src\DesignPatterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Src\DesignPatterns\AbstractFactory\FormBuilder\Elements\Button;

class BootstrapButton implements Button
{

    public function render(): string
    {
        return "<button class='btn btn-primary'>Submit</button>";
    }
}
