<?php

$hostname = "localhost";
$un = "root";
$pw = "Bones123";
$db_name = "sql_inject_project";

$connect = new mysqli($hostname, $un, $pw, $db_name);
if ($connect->connect_error){
  die("Connection to database failed: " . $connect->connect_error);
}



 ?>
