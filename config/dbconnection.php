<?php

require 'class/User.php';

$host="localhost";
$db="paczkowarsztat";
$user="paczkowarsztat";
$password="aaa";

$connection = new PDO("mysql:host=$host;dbname=$db;", $user, $password);

User::$connection = $connection;

//
//i wywołuje się ją dwoma dwukropkami a nie strzałką

 ?>
