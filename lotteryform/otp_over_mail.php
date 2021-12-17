<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP over mail</title>
</head>
<body>
<div style="height: 30px;">
<?php 
session_start();
// if(!empty($_SESSION['id'])) {

require ("databaseConnection.php");
if(isset($_POST['email'])){
    $email = $_POST['email'];

    $select_data = "SELECT * FROM registerform WHERE Email = '$email'";

    $query = $connection -> query ($select_data);

    $mysqli_num_rows = mysqli_num_rows($query);

    if($mysqli_num_rows){
        // to generate random OTP //
        $otp = rand(11111,99999);
        $update = "UPDATE registerform SET otp='$otp' WHERE Email = '$email'";
        $query1 = $connection -> query($update);

        while($data = mysqli_fetch_assoc($query)){
            $email1 = $data['Email'];
            
            // Sending otp to email //
            $to_mail = $email1;
            $subject = "OTP Verification";
            $body = "Your OTP is  -- $otp";
            $headers = "From: sayanpandab.ee.28@gmail.com";
            if(mail($to_mail,$subject,$body,$headers)){
                header("location: otp_submit.php");
            } else {
                echo "Sending failed !";
            }
        }
        
        // header('location: password_to_email.php');
    } else {
        echo "Enter correct Email! ";
    }
}    
?>
</div>
<form style="line-height: 2;" action="otp_over_mail.php" method="post">            
    
    <div class="input-group">
        <label>Email</label> <br>
        <input type="text" name="email" placeholder="Email">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Submit</button>
    </div>
</form>  



</body>
</html>

