<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

include "dbcon.php";

$selectProducts1 = "SELECT * FROM cart";
$queryProducts1 = mysqli_query($con, $selectProducts1) or die("SQL Query Failed.");

if (mysqli_num_rows($queryProducts1) > 0) {

    $output1 = mysqli_fetch_all($queryProducts1, MYSQLI_ASSOC);
    echo json_encode($output1); // return json format

} else {
    echo json_encode(array('message' => 'No Record Found.', 'status' => false));
}
