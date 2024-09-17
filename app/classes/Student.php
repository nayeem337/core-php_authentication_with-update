<?php


namespace App\classes;


abstract class Student
{
   public $city = 'Dhaka';

   public function hai()
   {
       echo $this->city;
   }

   public abstract function destroy();
}