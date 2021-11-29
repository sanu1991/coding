<?php 

$hostname = "localhost";
$username = "root";
$password = "";

$dbname = "lotteryform";

$connection = new mysqli ($hostname, $username, $password, $dbname); // connection done by object oriented
if($connection->connect_error){ 
die("connection failed".$connection -> connect_error); // reason of failure //by object oriented
}
//  else {
//     echo "success !";
// }


?>