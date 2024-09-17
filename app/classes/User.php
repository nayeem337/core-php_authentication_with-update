<?php

namespace App\classes;


class User
{
     public $username = 'admin';
     protected $password = '123123';
     private $accessLabel = 'Super Admin';

     public function add()
     {
         echo 'in add';
     }

     protected function delete()
     {
         echo 'in delete';
     }

    private function edit()
    {
        echo 'in edit';
    }

}