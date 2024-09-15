<?php


namespace App\classes;


class User
{
    public $users = [];

    public function __construct()
    {
        $this->users = [
            0 => [
                'id'         => 1,
                'name'       => 'Jannatul Nayeem',
                'email'      => 'jannatulnayeem333@gmail.com',
                'password'   => 123123
            ],
            1 => [
                'id'         => 2,
                'name'       => 'Ahasan Limon',
                'email'      => 'ahasanlimon444@gmail.com',
                'password'   => 123456
            ],
            2 => [
                'id'         => 3,
                'name'       => 'Arham Ahmed',
                'email'      => 'arham@gmail.com',
                'password'   => 789789
            ],
            3 => [
                'id'         => 4,
                'name'       => 'Kabir Hoshain',
                'email'      => 'kabir@gmail.com',
                'password'   => 999999
            ],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }
}
