<?php

/**
 * Class represents one User - zrobić pozostałe klasy - paczkę rozmiar itp
 */
class User{

  private $id;
  private $addressId;
  private $name;
  private $surname;
  private $credits;
  private $hashedPassword;
  static public $connection;

  function __construct()
  {
    $this->id=-1;
    $this->addressId=null;
    $this->name='';
    $this->surname='';
    $this->credits=null;
    $this->hashedPassword='';

  }
  public function getId()
  {
    return $this->id;
  }
  public function getAddressId()
  {
    return $this->addressId;
  }
  public function setAddressId($addressId)
  {
    if (is_int($addressId)) {
      $this->addressId=$addressId;
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
  public function loadFromDB($idUser)
  {
    $sql="SELECT * FROM User WHERE id = $idUser";
// można prrzy pomocy var dum $sql wyciąć linię kodu i wpisać bezpośrednio do phpmyadmin
    if ($result = Self::$connection->query($sql)) {
      $row=$result->fetch(PDO::FETCH_ASSOC);

      $this->id=$row['id'];
      $this->name=$row['name'];
      $this->surname=$row['surname'];
      $this->credits=$row['credits'];
      $this->hashedPassword=$row['pass'];
      $this->addressId=$row['addressId'];
      //not "true" due to użycie widoku - it will be true aftr all
      return $row;
    }else {
      return false;
    }
  }

  static function loadAllFromDB()
  {
    $sql="SELECT * FROM User";
    $userList = [];
  if ($result = Self::$connection->query($sql)) {
    # code...
  }

  }
  // TODO: setter do connection
}


 ?>
