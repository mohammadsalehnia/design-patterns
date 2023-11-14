<?php

namespace Src\DesignPatterns\ChainOfResponsibility\RegistrationService;

abstract class Checker
{
    private Checker $nextChecker;

    /**
     * @param Checker|null $nextChecker
     */
    public function __construct(Checker $nextChecker = null)
    {
        $this->nextChecker = $nextChecker;
    }

    public function check(RegistrationRequest $request): bool
    {
        if (isset($this->nextChecker)) {
            return $this->nextChecker->check($request);
        }
        return true;
    }


}
