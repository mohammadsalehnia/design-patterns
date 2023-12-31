<?php

namespace Src\DesignPatterns\ChainOfResponsibility\RegistrationService\checkers;

use App\Models\User;
use Src\DesignPatterns\ChainOfResponsibility\RegistrationService\Checker;
use Src\DesignPatterns\ChainOfResponsibility\RegistrationService\RegistrationRequest;

class UsernameChecker extends Checker
{
    public function check(RegistrationRequest $request): bool
    {
        if ($this->usernameExist($request->getUsername())) {
            return false;
        }
        return parent::check($request); // TODO: Change the autogenerated stub
    }

    private function usernameExist(string $username)
    {
        return User::whereEmail($username)->exists();

    }
}
