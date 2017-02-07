<?php

require 'config/dbconnection.php';
// var_dump ($_SERVER['REQUEST_METHOD']);
// var_dump ($_SERVER['REQUEST_URI']);
// deklaracje zmiennych

$request = '';
$arrayRequest = [];
$requestClass='';

//parsowanie zapytania
$request = $_SERVER['REQUEST_URI'];
$arrayRequest = explode('/', $request);


// var_dump($requestClass);
// var_dump($request);
if(isset($arrayRequest[4])){
  $requestClass = $arrayRequest[4];
}else {
  echo "nie podałeś nazwy klasy";
  die();
}
if ($_SERVER['REQUEST_METHOD']=="GET") {
  if ($_SERVER['REQUEST_URI'] == '/paczkomat/paczkowarsztat/router.php/user') {

  }else {
    echo "nie user";
  }
}

 ?>
