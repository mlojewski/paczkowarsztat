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


var_dump($requestClass);
var_dump($request);
if(isset($arrayRequest[4])){
  $requestClass = $arrayRequest[4];
}else {
  echo "nie podałeś nazwy klasy";
  die();
}


if ($_SERVER['REQUEST_METHOD']=="GET") {
  if ($requestClass == 'user') {
    $oUser = new User();
    $userData=$oUser->loadFromDB(1);
    var_dump($userData);
  }else {
    echo "nie user";
  }
}

 ?>
