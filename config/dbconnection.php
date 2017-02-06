<?php

require '../class/user.php';

$host="localhost";
$db="paczkomaty";
$user="root";
$password="coderslab";

$connection = new PDO('mysql:host=$host;dbname=$db'.$user, $password);

User::$connection = $connection;

//
//i wywołuje się ją dwoma dwukropkami a nie strzałką

 ?>
