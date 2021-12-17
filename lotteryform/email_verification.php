<?php 


if(isset($_GET['v_link'])){
    $vkey = $_GET['v_link'];

    require("databaseConnection.php");

    $select_data = "SELECT verified,v_link FROM registerform WHERE verified = 0 AND v_link = '$vkey' LIMIT 1 ";

    $query = $connection->query($select_data);

    if($query){
        $update = "UPDATE registerform SET verified = 1 WHERE v_link = '$vkey' LIMIT 1 ";
        $query1 = $connection->query($update);
        if($query1){
            header("location: login.php");
        }else{
            echo $connection->error;
        }
    }


}

    
?>
