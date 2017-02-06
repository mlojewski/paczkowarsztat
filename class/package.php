<?php

/**
 *
 */
class Package
{
  private $id;
  private $user;
  private $size;
  function __construct()
  {
    $this->id=-1;
    $this->user='';
    $this->size='';
  }
  public function getId()
  {
    return $this->id;
  }
  public function getUser()
  {
    return $this->user;
  }
  public function setUser($user)

  {
    if (is_string($user)) {
      $this->user=$user;
      return true;
    }else {
      echo "nieprawidłowy użytkownik";
    }
  }
  public function getSize()
  {
    return $this->size;
  }
  public function setSize($size)
  {
    if ($size = 'S' || $size = 'M' || $size = 'L' || $size = 'XL') {
      $this->size=$size;
    }else {
      echo "nieprawidłowy rozmiar - możliwe rozmiary to S, M, L oraz XL";
    }
  }
}
$paczka = new Package ();
$paczka->setUser("jurek");
$paczka->setSize("M");
var_dump($paczka);
// coś jest nie tak z rozmiarem - zwraca ino true

 ?>
