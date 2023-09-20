<?php

namespace Src\DesignPatterns\Decorator\ReportGenerator;

class Client
{
    public function getReport()
    {
        $report = new ReportService();

        $reportWithHeader = new ReportWithHeader($report);

        $reportWithFooter = new ReportWithFooter($reportWithHeader);

        echo $reportWithFooter->generate();
    }
}
