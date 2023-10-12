<?php

namespace Src\DesignPatterns\Flyweight\Faker;

class UserFaker
{
    private $users;
    private $userProfiles;

    public function createUser($id, $firstName, $lastName, $age, $city): User
    {
        $profile = $this->crateUserProfile($firstName, $lastName, $age, $city);

        $user = new User($id, $profile);

        $this->users[] = $user;

        return $user;
    }

    private function crateUserProfile($firstName, $lastName, $age, $city): UserProfile
    {
        $key = $this->generateKey(get_defined_vars());
        if (!isset($this->userProfiles[$key])) {
            $this->userProfiles[$key] = new UserProfile($firstName, $lastName, $age, $city);
        }
        return $this->userProfiles[$key];
    }

    private function generateKey($data): string
    {
        ksort($data);
        return md5(implode('_', $data));
    }
}
