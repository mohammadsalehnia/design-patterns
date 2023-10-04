<?php

namespace Src\DesignPatterns\Flyweight\DiscountGenerator;

use Illuminate\Support\Str;

class Client
{
    private DiscountFactory $discountFactory;

    /**
     * @param DiscountFactory $discountFactory
     */
    public function __construct(DiscountFactory $discountFactory)
    {
        $this->discountFactory = $discountFactory;
    }

    public function createDiscount()
    {
        foreach (range(1, 10000) as $counter) {

            $code = Str::random(10);
            $dateRang = mt_rand(1, 5);
            $limitRange = mt_rand(1, 5);
            $minRange = [0, 10000, 50000];
            $maxRange = [1000000, 2000000, 5000000];
            $percentRange = mt_rand(10, 40);


            $this->discountFactory->createDiscount(
                $code,
                0,
                \DateTimeImmutable::createFromMutable("+ {$dateRang} day"),
                $limitRange,
                $minRange,
                $maxRange,
                $percentRange
            );
        }
    }


}
