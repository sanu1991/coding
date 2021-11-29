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
require("databaseConnection.php");
// To store data from - HTML form to mysql database :

    // $_POST : super global variable to collect form data
    // check whether the variable is set/declared
    if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['phone_number']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['confirm_password']) && isset($_POST['l_d_e']) && isset($_POST['terms'])) {

        $fname = $_POST["first_name"];
        $last_name = $_POST["last_name"];
        $phone_number = $_POST["phone_number"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $confirm_password = $_POST["confirm_password"];
        $l_d_e = $_POST["l_d_e"];
        $terms = $_POST["terms"];
        
        // echo $fname;
    
    // to store in mysql
    $data_insert = "INSERT INTO registerform(FirstName, LastName, PhoneNo, Email, Password, ConfirmPassword, ReceiveLotteryDisplayEmails, Terms) VALUES('$fname','$last_name','$phone_number','$email','$password','$confirm_password','$l_d_e','$terms')";
    
    $result = $connection->query($data_insert); // run query   
    
    if($result){
        header("location:login.php");
    } else{
     echo "error!";
    }
    }

?>

<div id="content">
<div id="gridContainer">
    <div id="img">
        <img id="reg_page" src="img.jpg" alt="error">
    </div>
    <div id="register">
        <p style="font-size: 30px;">Register</p> <br> <br>
        <p style="font-size: 20px;">Manage all your lottery efficiently</p> <br>
        <p style="font-size: 10px;">Let's get you all set up so you can verify your personal account and begin setting up your profile. </p> <br> <br>


        <form style="line-height: 2;" action="register.php" method="post">
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

                <div>                    
                    <input type="checkbox" name="l_d_e" value="yes">
                    <label>Yes, I want to receive Lottery Display emails</label>  
                </div>
                <div>                    
                    <input type="checkbox" name="terms" value="agree">
                    <label>I agree to all the Term, Privacy Policy and Fees</label>  
                </div>
                
                <div class="input-group">
                    <button class="btn" type="submit" name="save" >Create Account</button>
                </div>
        </form> <br>

        <div style="display: flex;">
        <p>Already have an account?</p> &nbsp;
        <a style="text-decoration:none;" href="login.php">Log in</a>
        </div>

    </div>
</div>
</div>
</body>
</html>