<?php

namespace Src\DesignPatterns\Flyweight\DiscountGenerator;

class DiscountFactory
{
    private $discountConstraints = [];
    private $discounts = [];

    public function createDiscount(string $code, int $userId, \DateTimeImmutable $expirationDate, int $limit, int $minAmount, int $maxAmount, int $percent): Discount
    {
        $constraint = $this->createConstraints($expirationDate, $limit, $minAmount, $maxAmount, $percent);
        $discount = new Discount($code, $userId, $constraint);
        $this->discounts[] = $discount;
        return $discount;
    }

    private function createConstraints(\DateTimeImmutable $expirationDate, int $limit, int $minAmount, int $maxAmount, int $percent): DiscountConstraints
    {
        $key = $this->createKey(get_defined_vars());
        if (!isset($this->discountConstraints[$key])) {
            $this->discountConstraints[$key] = new DiscountConstraints($expirationDate, $limit, $minAmount, $maxAmount, $percent);
        }

        return $this->discountConstraints[$key];
    }

    private function createKey(array $data): string
    {
        ksort($data);
        return md5(implode('_', $data));
    }

    public function getDiscountList(): array
    {
        return $this->discounts;
    }


}
