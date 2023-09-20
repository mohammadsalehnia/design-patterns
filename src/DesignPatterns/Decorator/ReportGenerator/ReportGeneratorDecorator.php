<?php

namespace Src\DesignPatterns\Decorator\ReportGenerator;

abstract class ReportGeneratorDecorator implements ReportGenerator
{
    protected ReportGenerator $reportGenerator;

    /**
     * @param ReportGenerator $reportGenerator
     */
    public function __construct(ReportGenerator $reportGenerator)
    {
        $this->reportGenerator = $reportGenerator;
    }


}
