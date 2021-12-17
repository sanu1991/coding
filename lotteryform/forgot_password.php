
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password correction</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<div style="height: 30px;">
<?php 
require ("databaseConnection.php");
if(isset($_POST['first_name']) && isset($_POST['last_name']) && isset($_POST['email'])){
    // $id = $_POST['id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];

    $select_data = "SELECT * FROM registerform WHERE FirstName ='$first_name' AND LastName = '$last_name' AND Email = '$email'";

    $query = $connection -> query ($select_data);

    $mysqli_num_rows = mysqli_num_rows($query);

    if($mysqli_num_rows){
        // $select_data1 = "SELECT * FROM registerform WHERE Email = '$email' ";
        // $query1 = $connection -> query($select_data1);
        while($data = mysqli_fetch_assoc($query)){
            $pass = $data['Password'];
            $email1 = $data['Email'];
            
            // Sending password to email //
            $to_mail = $email1;
            $subject = "Password";
            $body = "Your Password is  -- $pass";
            $headers = "From: sayanpandab.ee.28@gmail.com";
            if(mail($to_mail,$subject,$body,$headers)){
                echo "Your password sent to your mail id : ".$to_mail;
                // header("location: login.php");
            } else {
                echo "Sending failed !";
            }

            // send sms to mobile
            // include ('sms_using_API.php');
        }
        
        // header('location: password_to_email.php');
    } else {
        echo "Enter correct data! ";
    }
}    
?>
</div>

<form style="line-height: 2;" action="forgot_password.php" method="post">            
    <div class="input-group">
        <label>First name</label> <br>
        <input type="text" name="first_name" placeholder="First name">
    </div>
    <div class="input-group">
        <label>Last name</label> <br>
        <input type="text" name="last_name" placeholder="Last name">
    </div>
    <div class="input-group">
        <label>Email</label> <br>
        <input type="text" name="email" placeholder="Email">
    </div>
    <div class="input-group">
        <button class="btn" type="submit" name="save" >Submit</button>
    </div>
</form>
<div class="input-group">
    <button class="btn"><a href="login.php" style="text-decoration: none; color: white">Go Back</a></button>
</div>

</body>
</html>
    