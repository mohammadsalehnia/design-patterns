<?php

namespace Src\DesignPatterns\ChainOfResponsibility\RegistrationService;

use Src\DesignPatterns\ChainOfResponsibility\RegistrationService\checkers\EmailChecker;
use Src\DesignPatterns\ChainOfResponsibility\RegistrationService\checkers\UsernameChecker;

class RegistrationService
{
    public function register(RegistrationRequest $request): bool
    {
        return $this->checkerChain()->check($request);
    }

    private function checkerChain(): Checker
    {
        $usernameChecker = new UsernameChecker();
        return new EmailChecker($usernameChecker);
    }
}
