<?php

namespace Src\DesignPatterns\AbstractFactory\FormBuilder\Providers\Bootstrap;

use Src\DesignPatterns\AbstractFactory\FormBuilder\Elements\Button;
use Src\DesignPatterns\AbstractFactory\FormBuilder\Elements\TextInput;
use Src\DesignPatterns\AbstractFactory\FormBuilder\FormFactory;
use Src\DesignPatterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapButton;
use Src\DesignPatterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements\BootstrapTextInput;

class BootstrapFormFactory implements FormFactory
{

    public function createButton(): Button
    {
        return new BootstrapButton();
    }

    public function createTextInput(): TextInput
    {
        return new BootstrapTextInput();
    }
}
