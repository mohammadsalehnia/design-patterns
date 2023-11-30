<?php

namespace Src\DesignPatterns\TemplateMethod\ReportSystem;

use Illuminate\Database\Eloquent\Collection;

class UserReportInPDF extends UserReport
{


    public function export(Collection $users): void
    {
        // export data in pdf
//        $this->dataExport ;
    }
}
