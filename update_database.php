<?php
session_start();
require "connect.php";

$id = $_SESSION['userId'];

// Import variables from the form
$new_un = $_POST['username'];
$new_pw = $_POST['password'];
$new_fn = $_POST['fName'];
$new_ln = $_POST['lName'];
$new_st = $_POST['street'];
$new_ct = $_POST['city'];
$new_zp = $_POST['zip'];

// Import old values from the DB
$sql = "SELECT * from users where id = '$id'";
$result = $connect->query($sql);
while ($row = $result->fetch_assoc()){
  $current_un = $row['username'];
  $current_pw = $row['password'];
  $current_fn = $row['firstName'];
  $current_ln = $row['lastName'];
  $current_st = $row['street'];
  $current_ct = $row['city'];
  $current_zp = $row['zip'];
}

// If any textboxes were left blank, leave them as the default values
if ($new_un == "") {
  $updated_un = $current_un;
} else {
  $updated_un = $new_un;
}
if ($new_pw == "") {
  $updated_pw = $current_pw;
} else {
  $updated_pw = $new_pw;
}
if ($new_fn == "") {
  $updated_fn = $current_fn;
} else {
  $updated_fn = $new_fn;
}
if ($new_ln == "") {
  $updated_ln = $current_ln;
} else {
  $updated_ln = $new_ln;
}
if ($new_st == "") {
  $updated_st = $current_st;
} else {
  $updated_st = $new_st;
}
if ($new_ct == "") {
  $updated_ct = $current_ct;
} else {
  $updated_ct = $new_ct;
}
if ($new_zp == "") {
  $updated_zp = $current_zp;
} else {
  $updated_zp = $new_zp;
}

// Sample SQL injection: (', paycheck='999.99)

// SQL update statement
$sql = "UPDATE users SET username='$updated_un', password='$updated_pw', firstName='$updated_fn', lastName='$updated_ln', street='$updated_st', city='$updated_ct', zip='$updated_zp' WHERE id='$id'";
// Verify the update statement was successful
if ($connect->query($sql) === TRUE) {
  header("Location: settings.php");
  exit();
} else {
  echo "There was an unexpected error when updating values in the database.";
}



 ?>
