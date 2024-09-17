<?php


namespace App\classes;


trait Category
{
  public $x = 10;
  public $y = 20;
  public $z = 0;

  public function subtraction()
  {
      $this->z = $this->x - $this->y;
      echo $this->z;
  }
}