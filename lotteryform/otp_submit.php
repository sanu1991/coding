<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP submit</title>
</head>
<body>

<?php 
session_start();
require ("databaseConnection.php");
if(isset($_SESSION['id'])) {
    if(empty($_SESSION["otp"])){
?>

<div style="height: 30px;">
<?php 

$timestamp1 =  $_SERVER["REQUEST_TIME"];  // record the current time stamp 

if(($timestamp1 - $_SESSION['time']) < 60){
    // echo "OTP Expire !";

    if(isset($_POST['otp'])){
        $otp1 = $_POST['otp'];
        $_SESSION['otp'] = $otp1;

        $select_data1 = "SELECT otp FROM registerform WHERE otp = '$otp1'";

        $query2 = $connection -> query ($select_data1);

        $mysqli_num_rows1 = mysqli_num_rows($query2);      
            
        if($mysqli_num_rows1){        
            header("location: content.php");  
            die();          
        } else {
            echo "Wrong OTP !";
        }
    }     

    
    

?>
</div>
<form style="line-height: 2;" action="otp_submit.php" method="post">            
    
    <div class="input-group">
        <input type="text" name="otp" placeholder="Enter OTP">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Submit</button>
    </div>
</form>  



<?php 
} 
else{
    echo "OTP Expire ! <br>";
    echo "<a style='font-size:30px; border:2px solid skyblue; text-decoration: none; padding: 5px; margin: 10px; position:fixed;' href='logout.php'>Log in again</a>";
    }
    }
}else{
    header('location:login.php');
}
 ?>

</body>
</html>

