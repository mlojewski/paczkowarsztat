<?php

require 'config/dbconnection.php';
// var_dump ($_SERVER['REQUEST_METHOD']);
// var_dump ($_SERVER['REQUEST_URI']);
// deklaracje zmiennych

$request = '';
$arrayRequest = [];
$requestClass='';
$requestParam=null;

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

if (isset($arrayRequest[5])) {
  $requestParam = intval($arrayRequest[5]);
  //rzutowanie jawne - wpisanie (int) przed $arrayRequest
}else {
  echo "nie podałeś parametru<br>";
}

if ($_SERVER['REQUEST_METHOD']=="GET") {
  if ($requestClass == 'user') {

    //wyświetl jednego
      if  ($requestParam>0) {
        $oUser = new User();
        $userData=$oUser->loadFromDB($requestParam);
        print_r($userData);
      }
      if ($requestParam == null) {
        $allUsers=User::loadAllFromDB();
        print_r(json_encode($allUsers));
      }
    } else {
    echo "nie user";
  }

}


 ?>
