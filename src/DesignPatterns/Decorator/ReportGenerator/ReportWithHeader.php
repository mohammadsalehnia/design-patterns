<?php

namespace Src\DesignPatterns\Decorator\ReportGenerator;

class ReportWithHeader extends ReportGeneratorDecorator
{

    public function generate(): string
    {
        return <<<REPORT
                    Report header
                    {$this->reportGenerator->generate()}
        REPORT;

    }
}
