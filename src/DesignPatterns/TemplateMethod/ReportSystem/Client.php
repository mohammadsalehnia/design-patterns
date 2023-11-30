<?php

namespace Src\DesignPatterns\TemplateMethod\ReportSystem;

use App\Models\User;

class Client
{
    private UserReport $reporter;

    /**
     * @param UserReport $reporter
     */
    public function __construct(UserReport $reporter)
    {
        $this->reporter = $reporter;
    }


    public function exportUsers(string $key)
    {
        // use key somewhere
        $this->reporter->generate(User::all());
    }
}
