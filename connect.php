<?php

$hostname = "localhost";
$un = "root";
$pw = "123456";
$db_name = "csi4480";

$connect = new mysqli($hostname, $un, $pw, $db_name);
if ($connect->connect_error){
  die("Connection to database failed: " . $connect->connect_error);
} else {
  echo "connection successful";
}



 ?>
