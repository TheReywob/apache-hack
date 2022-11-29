<?php

// Open connection to the database
require "connect.php";
// Start a session
session_start();
// Store the username and password inputs as variables
$username = $_REQUEST['username'];
$password = $_REQUEST['password'];

// Find 'username' in database and store password as variable
$sql = "select * from users where username = '$username'";
$result = $connect->query($sql);
if ($result->num_rows == 0){
  $error = TRUE;
} else {
  while ($row = $result->fetch_assoc()){
    $password_check = $row['password'];
    $id = $row['userId'];
  }
}
// Check if password matches
if ($password_check === $password) {
  // Set session variables
  $_SESSION['user'] = $username;
  $_SESSION['userId'] = $id;
  header("location:main_page.php");
} else {
  $error = TRUE;
}

// If any errors present, print error message
if ($error === TRUE){
  echo "<h3>Incorrect username or password!</h3>";
}

// Close the database connection
$connect->close();
 ?>
