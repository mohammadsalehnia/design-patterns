<?php

namespace Src\DesignPatterns\Decorator\ReportGenerator;

interface ReportGenerator
{
    public function generate(): string;
}
