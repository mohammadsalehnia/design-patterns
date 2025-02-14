<?php

namespace Src\DesignPatterns\AbstractFactory\FormBuilder;

use Src\DesignPatterns\AbstractFactory\FormBuilder\Elements\Button;
use Src\DesignPatterns\AbstractFactory\FormBuilder\Elements\TextInput;

interface FormFactory
{
    public function createButton(): Button;

    public function createTextInput(): TextInput;
}
