
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register with email verification</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 

require("databaseConnection.php");

// if(empty($_SESSION["email"])){

    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone_number']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) ) {
        $fname = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone_number = $_POST["phone_number"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];

        // generate verification key //
        $v_link = md5(time().$email);

        // Sending verification link to email //
        $to_mail = $email;
        $subject = "Verification Link";
        $body = "<a href='http://localhost/php/lotteryform/email_verification.php?v_link=$v_link'>Register Account</a>"; // create verification link
        $headers = "From: sayanpandab.ee.28@gmail.com \r\n";
        $headers .= "MIME-Version: 1.0" . "\r\n";
        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

        if(mail($to_mail,$subject,$body,$headers)){
            // echo "Your password sent to your mail id : ".$to_mail;
            // header("location: email_ver_msg.php");

            $data_insert = "INSERT INTO registerform(FirstName, LastName, PhoneNo, Email, Password, ConfirmPassword, v_link) VALUES('$fname','$last_name','$phone_number','$email','$password','$confirm_password','$v_link')";
    
            $result = $connection->query($data_insert); // run query   
            
            if($result){
                header("location: email_ver_msg.php");
            } else {
            echo "error!";
            }

        } else {
            echo "Sending failed !";
        }
   
    }

?>

    <div>

        <p style="font-size: 30px;">Register</p> <br><br>

        <form style="line-height: 2;" action="register_email_verification.php" method="post">
            <div style="display: flex;">
                <div class="input-group">
                    <label>First Name</label> <br>
                    <input type="text" name="first_name">
                </div>
                <div class="input-group">
                    <label>Last Name</label> <br>
                    <input type="text" name="last_name">
                </div>
            </div>

            <div style="display: flex;">
                <div class="input-group">
                    <label>Phone Number</label> <br>
                    <input type="text" name="phone_number">
                </div>
                <div class="input-group">
                    <label>Email</label> <br>
                    <input type="text" name="email">
                </div>
            </div>

            <div style="display: flex;">
                <div class="input-group">
                    <label>Password</label> <br>
                    <input type="text" name="password">
                </div>
                <div class="input-group">
                    <label>Confirm Password</label> <br>
                    <input type="text" name="confirm_password">
                </div>
            </div>                
            <div class="input-group">
                <button class="btn" type="submit" name="save" >Create Account</button>
            </div>
        </form> <br>

        <div class="input-group">
        <p>Already have an account?</p> <br>
        <a class="btn" style="text-decoration:none;" href="login.php">Log in</a>
        </div>

    </div>
</body>
</html>
        