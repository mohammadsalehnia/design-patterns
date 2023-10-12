<?php

namespace Src\DesignPatterns\Flyweight\Faker;

class User
{
    private $id;

    private UserProfile $profile;

    /**
     * @param $id
     * @param UserProfile $profile
     */
    public function __construct($id, UserProfile $profile)
    {
        $this->id = $id;
        $this->profile = $profile;
    }


    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return UserProfile
     */
    public function getUserProfile(): UserProfile
    {
        return $this->profile;
    }





}
