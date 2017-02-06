<?php

/**
 *
 */
class Size
{
  private $size;
  private $price;

  function __construct()
  {
    $this->size='';
    $this->price='';
  }
  public function getSize()
  {
    return $this->size;
  }
  public function setSize($size)
  {
    if ($size = 'S' || $size = 'M' || $size = 'L' || $size = 'XL') {
      $this->size=$size;
      return true;
    }else {
      echo "nieprawidłowy rozmiar - możliwe rozmiary to S, M, L oraz XL";
    }
  }
  public function getPrice()
  {
      return $this->price;
  }
  public function setPrice($price)
  {
    if (is_float($price)) {
      $this->price=$price;
      return true;
    }else {
      echo "podana wartość jest nieprawidłowa";
    }
  }
}

$rozmiar= new Size ();
$rozmiar->setSize("L");
$rozmiar->setPrice(19.0);
var_dump($rozmiar);
 ?>
