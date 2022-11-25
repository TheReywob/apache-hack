<?php

// Open connection to the database
require "connect.php";
// Store the username and password inputs as variables
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// Find 'username' in database and store password as variable
$sql = "select * from users where username = '$username'";
$result = $connect->query($sql);
while ($row = $result->fetch_assoc()){
  $password_check = $row['password'];
}

// Check if password matches
if ($password_check === $password) {
  //header("location:home.php");
  echo "success";
} else {
  echo 'Incorrect username or password!';
  exit;
}


 ?>
