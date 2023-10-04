<?php

namespace Src\DesignPatterns\Flyweight\DiscountGenerator;

class Discount
{
    private string $code;
    private int $userId;
    private DiscountConstraints $constraints;

    /**
     * @param string $code
     * @param int $userId
     * @param DiscountConstraints $constraints
     */
    public function __construct(string $code, int $userId, DiscountConstraints $constraints)
    {
        $this->code = $code;
        $this->userId = $userId;
        $this->constraints = $constraints;
    }

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @return int
     */
    public function getUserId(): int
    {
        return $this->userId;
    }

    /**
     * @return DiscountConstraints
     */
    public function getConstraints(): DiscountConstraints
    {
        return $this->constraints;
    }




}
