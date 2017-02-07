<?php

/**
 * Każdy adres posiada miasto, kod, ulicę oraz numer mieszkania.
 */
class Address
{
  private $id;
  private $city;
  private $street;
  private $addressNumber;
  private $flatNumber;
  private $postalCode;

  function __construct()
  {
    $this->id=-1;
    $this->city='';
    $this->street='';
    $this->addressNumber=null;
    $this->flatNumber=null;
    $this->postalCode='';

  }
  public function getId()
  {
    return $this->id;
  }
  public function getCity()
  {
    return $this->city;
  }
  public function setCity($city)
  {
    if (is_string($city)) {
      $this->city=$city;
      return true;
    }else {
      echo "wartośc miasta nieprawidłowa";
    }
  }
  public function getStreet()
  {
    return $this->street;
  }
  public function setStreet($street)
  {
    if (is_string($street)) {
      $this->street=$street;
      return true;
    }else {
      echo "wartość ulicy nieprawidłowa";
    }
  }
  public function getAddressNumber()
  {
    return $this->$addressNumber;
  }
  public function setAddressNumber($addressNumber)
  {
    if (is_string($addressNumber)) {
      $this->addressNumber=$addressNumber;
      return true;
    }else {
      echo "numer domu nieprawidłowy";
    }
  }
  public function getFlatNumber()
  {
    return $this->flatNumber;
  }
  public function setFlatNumber($flatNumber)
  {
    if (is_string($flatNumber)) {
      $this->flatNumber=$flatNumber;
      return true;
    }else {
      echo "numer mieszkania nieprawidłowy";
    }
  }
  //cudowna funkcja sprawdzająca czy zawiera myślnik
  public function getPostalCode()
  {
    return $this->postalCode;
  }
  public function setPostalCode($postalCode)
  {
    if (is_string($postalCode)) {
      if (strpos($postalCode, '-')) {
        $this->postalCode=$postalCode;
        return true;
      }else {
        echo "wpisz kod w poprawnym formacie tj. XX-XXX nie zapominając o myślniku";
      }
    }else {
      echo "wartość kodu pocztowego nieprawidłowa";
    }
  }
}
$miejsce = new Address();
$miejsce->setCity("pcim");
$miejsce-> setStreet("jurajska");
$miejsce->setAddressNumber(13);
$miejsce->setFlatNumber(33);
$miejsce->setPostalCode("23-230");
var_dump($miejsce);

 ?>
