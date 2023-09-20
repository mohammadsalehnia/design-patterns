<?php

namespace Src\DesignPatterns\Decorator\ReportGenerator;

class ReportService implements ReportGenerator
{

    public function generate(): string
    {
        return 'String Report';
    }
}
