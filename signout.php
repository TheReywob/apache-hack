<?php
session_start();
$_SESSION['username'] = '';
$_SESSION['userId'] = '';
session_destroy();
header("location:index.html");
 ?>
