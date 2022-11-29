<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>

<?php session_start(); ?>

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
                    <img src="logo.png" style="max-width:500px ;">
                    <h2 style="font-size:50px;">Hey, <?php echo $_SESSION['username']; ?></h2>
                </div>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Whats New</h2>
                    <p class="title">Here's what's new.</p>
                    <p>Some description text.</p>
                    <p><button class="button">See More</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Data Virtualization</h2>
                    <p class="title">Very important data!</p>
                    <p>Description about data.</p>
                    <p><button class="button">See More</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Leadership</h2>
                    <p class="title">We're lead by the best.</p>
                    <p>Description about our leadership.</p>
                    <p><button class="button">See More</button></p>
                </div>
            </div>
        </div>
      </div>

      <div class="row">
        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Announcements</h2>
                    <p class="title">Important announcements here!</p>
                    <p>Check out these recent announcements.</p>
                    <p><button class="button">See More</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Employee Spotlight</h2>
                    <p class="title">EOTM</p>
                    <p>The best of the best.</p>
                    <p><button class="button">See More</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Appointments</h2>
                    <p class="title">Got an appointment?</p>
                    <p>See more details here.</p>
                    <p><button class="button">See More</button></p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
