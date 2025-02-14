<?php

namespace Src\DesignPatterns\AbstractFactory\FormBuilder\Providers\Bootstrap\Elements;

use Src\DesignPatterns\AbstractFactory\FormBuilder\Elements\TextInput;

class BootstrapTextInput implements TextInput
{

    public function render(): string
    {
        return "<input type='text' class='form-control'>";
    }
}
