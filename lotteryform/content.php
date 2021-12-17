<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Content</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
<?php 
// require ("databaseConnection.php");
session_start();

    if(isset($_SESSION['LAST_ACTIVE_TIME'])){
        if((time() - $_SESSION['LAST_ACTIVE_TIME']) > 240 ){
            header('location:logout.php');
            die();
        }
        }
        
        $_SESSION['LAST_ACTIVE_TIME'] = time();

        // if (!isset($_SESSION['facebook_access_token'])){
        //     header('location:logout.php');
        // }
        // if (!isset($_SESSION['otp'])){
        //     header('location:logout.php');
        // }
        // if (!isset($_SESSION['access_token'])){
        //     header('location:logout.php');
        // }
        // if (empty($_SESSION['code'])){
        // echo $_SESSION['email'];
        // echo "error!";
        // header('location:logout.php');
        // }
?>
    
<div style="padding:15px">
    <div><a style="font-size:30px; border:2px solid red; text-decoration: none; padding: 5px; margin: 50px" href="https://www.naukri.com/mnjuser/profile?&utm_campaign=jobalert_revamp&utm_medium=mailer&utm_source=updateprofile/id/">Naukri</a></div><br>

    <div><a style="font-size:30px; border:2px solid red; text-decoration: none; padding: 5px; margin: 50px" href="https://mail.google.com/mail/u/0/h/d136s75wkbjt/?&">Gmail</a></div><br>

    <div><a style="font-size:30px; border:2px solid red; text-decoration: none; padding: 5px; margin: 50px" href="logout.php">Log out</a></div>


    <img style="width: 600px; opacity: 30%; position: relative; margin-left: 400px; margin-top: 50px;"  src="bckgrnd.png" alt="error">

    

</div>

</body>

</html>