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

$sql = "SELECT * FROM users WHERE id = '$id'";
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
                        <h2 style="font-size:50px;">Profile Settings</h2>
                        <p>Adjust your account information.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column" style="width: 100%;">
                <div class="card">
                    <div class="container">
                        <h2>CURRENT</h2>
                        <div class="test1" style="text-align: left; margin: auto;">
                            <p>USERNAME:
                                <?php echo $current_un; ?> </p>
                            <p>PASSWORD:
                                <?php echo $hidden_pw; ?> </p>
                            <p>FIRST NAME:
                                <?php echo $current_fn; ?> </p>
                            <p>LAST NAME: <?php echo $current_ln; ?> </p>
                            <p>STREET:
                                <?php echo $current_st; ?> </p>
                            <p>CITY:
                                <?php echo $current_ct; ?> </p>
                            <p>ZIP:
                                <?php echo $current_zp; ?> </p>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="column" style="width: 100%;">
                <div class="card">
                    <div class="container" style="padding: 0;">
                        <h2>NEW</h2>
                        <form action="update_database.php" method="post" style="margin: auto; border: 0; text-align: left; padding: 0;">

                            <label for="username"><b>Username: </b></label>
                            <input type="text" placeholder="New Username" name="username">

                            <label for="password"><b>Password: </b></label>
                            <input type="password" placeholder="New Password" name="password">

                            <label for="fName"><b>First Name: </b></label>
                            <input type="text" placeholder="Change First Name" name="fName">

                            <label for="lName"><b>Last Name: </b></label>
                            <input type="text" placeholder="Change Last Name" name="lName">

                            <label for="street"><b>Street: </b></label>
                            <input type="text" placeholder="New Address" name="street">

                            <label for="city"><b>City: </b></label>
                            <input type="text" placeholder="New City" name="city">

                            <label for="zip"><b>Zip Code: </b></label>
                            <input type="text" placeholder="New ZIP Code" name="zip">

                            <?php
                        // If user is an Admin, print the admin menu
                        if ($current_ad == 1) {
                          if ($current_ut == 0) {
                            $userType = "employee";
                          } else {
                            $userType = "customer";
                          }
                          echo '<hr><h1>Admin Section</h1><div class="row"><div class="column">';
                          echo '<label for="userType">User Type: <b>'.$current_ut.'</b></label>';
                          echo '</div></div><br>';

                          echo '<div class="row"><div class="column">';
                          echo '<label for="isAdmin">isAdmin: <b>yes</b></label>';
                          echo '</div></div><br>';

                          echo '<div class="row"><div class="column">';
                          echo '<label for="paycheck">Paycheck Amount: <b>$'.$current_pc.'</b></label>';
                          echo '</div></div><br>';

                          echo '<div class="row"><div class="column">';
                          echo '<label for="taxid">TaxID: <b>'.$current_ti.'</b></label>';
                          echo '</div></div><br>';

                          echo '<h2>Edit Different User</h2>';
                          echo '<select name="user">';
                          $sql_drop = "SELECT id, username FROM users";
                          $result_drop = $connect->query($sql_drop);
                          while ($row_drop = $result_drop->fetch_assoc()){
                            // Add every username to a dropdown menu
                            echo '<option value="'.$row_drop['id'].'">'.$row_drop['username'].'</option>';
                          }
                          echo '</select><br><br>';
                        }
                         ?>

                                <input type="submit" value="Confirm" style="font-size: 30px; background-color: #4CAF50; border-radius: 4px;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>

</html>

<!-- <div class="card" style="width: 100%;">
      <div class="row" >
        <div class="column" >
          <h1 style="text-align: center;">New Info</h1>
        </div>
        <div class="column">
          <h1 style="text-align: center;">Current Info</h1>
        </div>
      </div>

      <form action="update_database.php" method="post" style="margin: 0;" >
      <div class="row">
        <div class="column">
          <label for="username"><b>Username: </b></label>
          <input type="text" placeholder="New Username" name="username">
        </div>
        <div class="column">
          <p style="text-align: center; padding-top: 20px; padding-left: 130px;">Current Username: <?php echo $current_un; ?></p>
        </div>
      </div> -->
<!-- <div class="row">
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
      </div> -->
<?php /*
      // If user is an Admin, print the admin menu
      if ($current_ad == 1) {
        if ($current_ut == 0) {
          $userType = "employee";
        } else {
          $userType = "customer";
        }
        echo '<hr><h1>Admin Section</h1><div class="row"><div class="column">';
        echo '<label for="userType">User Type: <b>'.$current_ut.'</b></label>';
        echo '</div></div><br>';

        echo '<div class="row"><div class="column">';
        echo '<label for="isAdmin">isAdmin: <b>yes</b></label>';
        echo '</div></div><br>';

        echo '<div class="row"><div class="column">';
        echo '<label for="paycheck">Paycheck Amount: <b>$'.$current_pc.'</b></label>';
        echo '</div></div><br>';

        echo '<div class="row"><div class="column">';
        echo '<label for="taxid">TaxID: <b>'.$current_ti.'</b></label>';
        echo '</div></div><br>';

        echo '<h2>Edit Different User</h2>';
        echo '<select name="user">';
        $sql_drop = "SELECT id, username FROM users";
        $result_drop = $connect->query($sql_drop);
        while ($row_drop = $result_drop->fetch_assoc()){
          // Add every username to a dropdown menu
          echo '<option value="'.$row_drop['id'].'">'.$row_drop['username'].'</option>';
        }
        echo '</select><br><br>';
      }
      */ ?> 
<!-- <input type="submit" value="Confirm" style="font-size: 30px; background-color: #4CAF50; border-radius: 4px;">
