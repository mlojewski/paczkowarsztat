<?php

/**
 * Class represents one User - zrobić pozostałe klasy - paczkę rozmiar itp
 */
class User{

  private $id;
  private $address;
  private $name;
  private $surname;
  private $credits;
  private $hashedPassword;
  static public $connection;

  function __construct()
  {
    $this->id=-1;
    $this->address='';
    $this->name='';
    $this->surname='';
    $this->credits=null;
    $this->hashedPassword='';

  }
  public function getId()
  {
    return $this->id;
  }
  public function getAddress()
  {
    return $this->address;
  }
  public function setAddress($address)
  {
    if (is_string($address)) {
      $this->address=$address;
      return true;
    }else {
      echo "podano nieprawidłowy adres";
    }
  }
  public function getName()
  {
    return $this->name;
  }
  public function setName($name)
  {
    if (is_string($name)) {
      $this->name=$name;
      return true;
    }else {
      echo "podano nieprawidłowe imię";
    }
  }
  public function getSurname()
  {
    return $this->surname;
  }
  public function setSurname($surname)
  {
    if (is_string($surname)) {
      $this->surname=$surname;
      return true;
    }else {
      echo "podano nieprawidłowe nazwisko";
    }
  }
  public function getCredits()
  {
    return $this->credits;
  }
  public function setCredits($credits)
  {
    if (is_int($credits)) {
    $this->credits=$credits;
    return true;
  }else {
    echo "nieprawidłowe dane";
  }
  }
  public function getHashedPassword()
  {
    return $this->hashedPassword;
  }
  public function setHashedPassword($hashedPassword)
  {
    $hashedPassword=password_hash($password, PASSWORD_BCRYPT);
    $this->hashedPassword=$hashedPassword;
    return true;
  }
  // TODO: setter do connection
}


 ?>
