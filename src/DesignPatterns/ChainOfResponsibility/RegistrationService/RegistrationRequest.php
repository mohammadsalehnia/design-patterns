<?php

namespace Src\DesignPatterns\ChainOfResponsibility\RegistrationService;

class RegistrationRequest
{
    private string $username;
    private string $email;
    private string $password;
    private string $referral;

    /**
     * @param string $username
     * @param string $email
     * @param string $password
     * @param string $referral
     */
    public function __construct(string $username, string $email, string $password, string $referral)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->referral = $referral;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername(string $username): void
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getReferral(): string
    {
        return $this->referral;
    }

    /**
     * @param string $referral
     */
    public function setReferral(string $referral): void
    {
        $this->referral = $referral;
    }




}
