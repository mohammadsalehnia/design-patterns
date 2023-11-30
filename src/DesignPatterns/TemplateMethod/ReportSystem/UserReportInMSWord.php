<?php

namespace Src\DesignPatterns\TemplateMethod\ReportSystem;

use Illuminate\Database\Eloquent\Collection;

class UserReportInMSWord extends UserReport
{

    public function export(Collection $users): void
    {
        // TODO: Implement export() method.
    }
}
