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

        <form style="line-height: 2;" action="login.php" method="post">
            
                <div class="input-group">
                    <label>Username</label> <br>
                    <input type="text" name="user_name" placeholder="Email">
                </div>
                <div class="input-group">
                    <label>Password</label> <br>
                    <input type="text" name="password" placeholder="Password">
                </div>


                <div>
                    <?php

                    require ("databaseConnection.php");

                    session_start();
                    if(empty($_SESSION["id"])){

                    if(isset($_POST['user_name']) && isset($_POST['password'])) {
                        $user_name = $_POST["user_name"];
                        $user_password = $_POST["password"];
                        
                        $select = "SELECT id FROM registerform WHERE Email='$user_name' AND Password='$user_password' "; 

                        $result = $connection->query($select);

                        $mysqli_num_rows = mysqli_num_rows($result); // chk whether id selected or not

                        if($mysqli_num_rows){
                            header("location:content.php"); // to redirect the page to other page
                            } 
                            else{
                                echo "invalid username or password !";
                            }
                        }
                    }
                    ?>
                </div>


                <div style="display: flex;">
                    <div>                    
                        <input type="checkbox" name="remember" value="yes">
                        <label>Remember me</label>  
                    </div>
                    <div>                    
                        <a style="text-decoration: none; margin-left: 75px; font-size: 13px;" href="edit.php">Reset Password ?</a> 
                    </div>
                </div>
                
                <div class="input-group">
                    <button class="btn" type="submit" name="save" >Sign in</button>
                </div>
        </form> <br>
        <div style="display: flex;">
        <p>Don't have an account yet?</p> &nbsp;
        <a style="text-decoration:none;" href="register.php">Join Lottery Display</a>
        </div>

    </div>
</div>


</div>
</body>
</html>