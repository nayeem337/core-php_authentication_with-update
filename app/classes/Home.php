<?php

namespace App\classes;
use App\classes\User;
use App\classes\ExampleOne;
use App\classes\ExampleTwo;
use App\classes\Student;
use App\classes\Category;


class Home extends Student implements ExampleOne, ExampleTwo
{
    use Category;

    public $message;
    protected $name;
    private $mobile;

   public static $location = 'Farmgate';

    public function __construct()
    {
        $this->message   = 'Hellow World';
        $this->name      = 'BITM';
        $this->mobile    = '01572109979';
        $this->username  = 'editor';

        self::$location = 'Farmgate';
    }

    public function index ()
    {
     echo self::$location;
    }

    public static function bitm()
    {
        echo  self::$location;
    }

    protected function create()
    {
        echo 'In create';
    }

    private function update()
    {
        echo 'in update';
    }

    public function demo()
    {
       echo 'in demo';
    }

    public function test()
    {
        echo 'in test';
    }

    public function hello()
    {
        // TODO: Implement hello() method.
    }

    public function one()
    {
        // TODO: Implement one() method.
    }

    public function two()
    {
        // TODO: Implement two() method.
    }

    public function three()
    {
        // TODO: Implement three() method.
    }

    public function destroy()
    {
        // TODO: Implement destroy() method.
    }
}