<?php

  include '../class/User.php';

  $oUser = new User();

  var_dump($oUser);
  if ( $oUser INSTANCEOF User) {
    echo "jest";
  }else {
    echo "nie jest";
  }

 ?>
