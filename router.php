<?php

include 'config/connection.php';
// var_dump ($_SERVER['REQUEST_METHOD']);
var_dump ($_SERVER['REQUEST_URI']);
if ($_SERVER['REQUEST_METHOD']=="GET") {
  if ($_SERVER['REQUEST_URI'] == '/paczkomat/paczkowarsztat/router.php/user') {
    $newUser = new User();
    $newUser->
  }else {
    echo "nie user";
  }
}

 ?>
