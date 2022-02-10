<?php

$hostname = "localhost";
$username = "root";
$password = "";

$dbname = "student_id";

$con = new mysqli($hostname, $username, $password, $dbname);

if ($con->connect_error) {
    die("connection failed" . $con->connect_error); // reason of failure
}
