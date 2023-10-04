<?php

namespace Src\DesignPatterns\Flyweight\DiscountGenerator;

class DiscountConstraints
{
    private $expirationDate;
    private int $limit;
    private int $minAmount = 0;
    private int $maxAmount;
    private int $percent;

    /**
     * @param $expirationDate
     * @param int $limit
     * @param int $minAmount
     * @param int $maxAmount
     * @param int $percent
     */
    public function __construct($expirationDate, int $limit, int $minAmount, int $maxAmount, int $percent)
    {
        $this->expirationDate = $expirationDate;
        $this->limit = $limit;
        $this->minAmount = $minAmount;
        $this->maxAmount = $maxAmount;
        $this->percent = $percent;
    }

    /**
     * @return mixed
     */
    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

    /**
     * @return int
     */
    public function getLimit(): int
    {
        return $this->limit;
    }

    /**
     * @return int
     */
    public function getMinAmount(): int
    {
        return $this->minAmount;
    }

    /**
     * @return int
     */
    public function getMaxAmount(): int
    {
        return $this->maxAmount;
    }

    /**
     * @return int
     */
    public function getPercent(): int
    {
        return $this->percent;
    }




}
