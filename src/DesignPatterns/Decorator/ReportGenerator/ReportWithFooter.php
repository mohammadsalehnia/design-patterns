<?php

namespace Src\DesignPatterns\Decorator\ReportGenerator;

class ReportWithFooter extends ReportGeneratorDecorator
{

    public function generate(): string
    {
        return <<<REPOT
            {$this->reportGenerator->generate()}
            Report Footer
        REPOT;

    }
}
