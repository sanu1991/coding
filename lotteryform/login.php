
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>form</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>

<?php
session_start();
require ("databaseConnection.php");
if(empty($_SESSION["id"])){

$atmp = 0;

if(isset($_POST['user_name']) && isset($_POST['password'])) {
    $user_name = $_POST["user_name"];

    $user_password = $_POST["password"];
    
    $atmp = $_POST['attmp'];
                                               
    if($atmp<4){
        $select = "SELECT id FROM registerform WHERE Email='$user_name' AND Password='$user_password' AND verified=1 "; 

        $query = $connection->query($select);
                           
        $mysqli_num_rows = mysqli_num_rows($query); // chk whether id selected or not

        if($mysqli_num_rows){

            $data = mysqli_fetch_array($query); // session purpose
            $id = $data['id']; // session purpose
            $_SESSION["id"] = $id; // session purpose

            // Sending otp to email //
            $otp = rand(11111,99999);
            // $_SESSION['session_otp'] = $otp;
            $timestamp =  $_SERVER["REQUEST_TIME"];  // generate the timestamp when otp is forwarded to user email/mobile.
            $_SESSION['time'] = $timestamp; // save the timestamp in session varibale for further use.

            $update = "UPDATE registerform SET otp='$otp' WHERE Email = '$user_name' AND Password='$user_password' AND verified=1 ";

            $query1 = $connection -> query($update);
                // Sending otp to mail id //
                $to_mail = $user_name;
                $subject = "OTP Verification";
                $body = "Your OTP is  -- $otp";
                $headers = "From: sayanpandab.ee.28@gmail.com";
                if(mail($to_mail,$subject,$body,$headers)){
                    // header("location: otp_submit.php");
                    
                    echo "success!";
                } else {
                    echo "Sending failed !";
                }           

            if(isset($_POST['remember'])) {
                $user_remember = $_POST["remember"];
                                    
                // set cookie - (cookie name, value, time) - for email & password remember //
                setcookie('emailcookie',$user_name,time()+60);
                setcookie('passwordcookie',$user_password,time()+60);
                
                
                header("location: otp_submit.php");
            }
            else {
                header("location: otp_submit.php");
            }

        } else {
            $atmp ++;
            echo "invalid username or password ! <br> ";
            echo "Your number of attemp is- $atmp";
        }                               
    } else {
        echo "Exceed no. of attempt";
    }
}
               
?>

    
<div id="content1">
<div id="gridContainer1">
    <div id="img1">
        <img id="log_page" src="img1.jpg" alt="error">
    </div>
    <div id="login">
        <img id="log_page1" src="img2.jpg" alt="error"> <br> <br>
        <p style="font-size: 30px;">Login</p> <br> <br>
        <p style="font-size: 20px;">Login to your account</p> <br>
        <p style="font-size: 10px;">Thank you for get back to Lottery Display, lets access our the best recommendation for you</p> <br>        

                <form style="line-height: 1;" action="login.php" method="post">
                <div class="input-group">
                    <label>Username</label> <br>
                    <input type="text" name="user_name" placeholder="Email" value= "<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie']; } ?>">
                </div>
                <div class="input-group">
                    <label>Password</label> <br>
                    <input type="text" name="password" placeholder="Password" value= "<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie']; } ?>">
                </div>
                
                <div style="height: 30px; font-size: 10px; font-weight: bold">
            


                </div>

                <?php 
                echo "<input type='hidden' name='attmp' value='".$atmp."'>" ;
                ?>
                
                <div style="display: flex;">
                    <div>                    
                        <input type="checkbox" name="remember">
                        <label>Remember me</label>  
                    </div>
                    <div>                    
                        <a style="text-decoration: none; margin-left: 75px; font-size: 13px;" href="forgot_password.php">Forgot Password ?</a> 
                    </div>
                </div>
                
                <div class="input-group">
                    <button class="btn" type="submit" name="save" >Sign in</button>
                </div>
        </form> <br>

        <div style="display: flex;">
        <p>Don't have an account yet?</p> &nbsp;
        <a style="text-decoration:none;" href="register_email_verification.php">Join Lottery Display</a>
        </div>

        <div>
            <?php include('google_api_config.php'); ?>
        </div>
        <br>
        <div>
            <?php include('fb_api_config.php'); ?>
        </div>

    </div>
</div>
</div>
<?php }
else {
    header('location: content.php');
} ?>
</body>
</html>

