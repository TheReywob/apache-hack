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
        <a href="#">Home</a>
        <a href="#">News</a>
        <a href="#">Contacts</a>
        <a href="#">Settings</a>
        <a href="#" class="split">Sign Out</a>
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

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Whats New</h2>
                    <p class="title">Item Title Here</p>
                    <p>Nothing</p>
                    <p><button class="button">Start</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Data Virtualization</h2>
                    <p class="title">Item Title Here</p>
                    <p>lorem ipsum ipsum lorem.</p>
                    <p><button class="button">Start</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Leadership</h2>
                    <p class="title">Item Title Here</p>
                    <p>lorem ipsum ipsum lorem.</p>
                    <p><button class="button">Start</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Announcements</h2>
                    <p class="title">Item Title Here</p>
                    <p>lorem ipsum ipsum lorem.</p>
                    <p><button class="button">Start</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Employee Spotlight</h2>
                    <p class="title">Item Title Here</p>
                    <p>lorem ipsum ipsum lorem.</p>
                    <p><button class="button">Start</button></p>
                </div>
            </div>
        </div>

        <div class="column">
            <div class="card">
                <div class="container">
                    <h2>Appointments</h2>
                    <p class="title">Item Title Here</p>
                    <p>lorem ipsum ipsum lorem.</p>
                    <p><button class="button">Start</button></p>
                </div>
            </div>
        </div>

    </div>

</body>

</html>
