<?php

namespace Src\DesignPatterns\Flyweight\Faker;

class UserProfile
{
    private $firstname;
    private $lastName;
    private $age;
    private $city;

    /**
     * @param $firstname
     * @param $lastName
     * @param $age
     * @param $city
     */
    public function __construct($firstname, $lastName, $age, $city)
    {
        $this->firstname = $firstname;
        $this->lastName = $lastName;
        $this->age = $age;
        $this->city = $city;
    }


    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }




}
