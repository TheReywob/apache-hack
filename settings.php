<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<?php
session_start();
require "connect.php";

$id = $_SESSION['userId'];

$sql = "select * from users where id = '$id'";
$result = $connect->query($sql);
  while ($row = $result->fetch_assoc()){
    $current_un = $row['username'];
    $current_pw = $row['password'];
    $current_fn = $row['firstName'];
    $current_ln = $row['lastName'];
    $current_ut = $row['userType'];
    $current_ad = $row['isAdmin'];
    $current_pc = $row['paycheck'];
    $current_ti = $row['taxID'];
    $current_st = $row['street'];
    $current_ct = $row['city'];
    $current_zp = $row['zip'];
  }
  for ($i = 0; $i < strlen($current_pw); $i++) {
    $hidden_pw .= "*";
  }
?>

<body>
    <!-- The navigation menu -->
    <div class="topnav">
        <a href="main_page.php">Home</a>
        <a href="settings.php">Settings</a>
        <a href="signout.php" class="split">Sign Out</a>
    </div>

    <div class="row">
        <div class="column" style="width: 100%;">
            <div class="card">
                <div class="container">
                    <h2 style="font-size:50px;">Settings</h2>
                    <p>Adjust your account information.</p>
                </div>
            </div>
        </div>
      </div>

<div class="card">
      <div class="row">
        <div class="column">
          <h1 style="text-align: center;">New Info</h1>
        </div>
        <div class="column">
          <h1 style="text-align: center;">Current Info</h1>
        </div>
      </div>

      <form action="update_database.php" method="post" style="margin: 0;">
      <div class="row">
        <div class="column">
          <label for="username"><b>Username: </b></label>
          <input type="text" placeholder="New Username" name="username">
        </div>
        <div class="column">
          <p>Current Username: <?php echo $current_un; ?></p>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <label for="password"><b>Password: </b></label>
          <input type="password" placeholder="New Password" name="password">
        </div>
        <div class="column">
          <p>Current Password: <?php echo $hidden_pw; ?></p>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <label for="fName"><b>First Name: </b></label>
          <input type="text" placeholder="Change First Name" name="fName">
        </div>
        <div class="column">
          <p>Current First Name: <?php echo $current_fn; ?></p>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <label for="lName"><b>Last Name: </b></label>
          <input type="text" placeholder="Change Last Name" name="lName">
        </div>
        <div class="column">
          <p>Current Last Name: <?php echo $current_ln; ?></p>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <label for="street"><b>Street: </b></label>
          <input type="text" placeholder="New Address" name="street">
        </div>
        <div class="column">
          <p>Current Street: <?php echo $current_st; ?></p>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <label for="city"><b>City: </b></label>
          <input type="text" placeholder="New City" name="city">
        </div>
        <div class="column">
          <p>Current City: <?php echo $current_ct; ?></p>
        </div>
      </div>

      <div class="row">
        <div class="column">
          <label for="zip"><b>Zip Code: </b></label>
          <input type="text" placeholder="New ZIP Code" name="zip">
        </div>
        <div class="column">
          <p>Current ZIP Code: <?php echo $current_zp; ?></p>
        </div>
      </div>

      <?php
      // If user is an Admin, print the admin menu
      if ($current_ad == 1) {
        echo '<hr><h2>Admin Section</h2><div class="row"><div class="column">';
        echo '<label for="userType"><b>User Type: '.$current_ut.'</b></label>';
        echo '</div></div><br>';

        echo '<div class="row"><div class="column">';
        echo '<label for="isAdmin"><b>isAdmin: '.$current_ad.'</b></label>';
        echo '</div></div><br>';

        echo '<div class="row"><div class="column">';
        echo '<label for="paycheck"><b>Paycheck Amount: '.$current_pc.'</b></label>';
        echo '</div></div><br>';

        echo '<div class="row"><div class="column">';
        echo '<label for="taxid"><b>TaxID: '.$current_ti.'</b></label>';
        echo '</div></div><br>';
      }
       ?>

    </form>
  </div>


  </body>
  </html>
