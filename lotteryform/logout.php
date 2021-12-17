<?php
require ("login.php");
require ("otp_submit.php");
// require ("databaseConnection.php");

session_destroy();

header("location:login.php");
// header("location:htmlFormToMysql.php");

?>