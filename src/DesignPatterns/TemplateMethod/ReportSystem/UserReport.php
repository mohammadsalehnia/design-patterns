<?php

namespace Src\DesignPatterns\TemplateMethod\ReportSystem;

use Illuminate\Database\Eloquent\Collection;

abstract class UserReport
{

    // generate is template method
    public function generate(Collection $users)
    {
        $result = $this->prepare($users);
        $this->export($result);
    }

    private function prepare(Collection $users)
    {
//        return something
    }

    abstract public function export(Collection$users): void;

}
