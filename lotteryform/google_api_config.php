<?php

//start session on web page
// session_start();
require("databaseConnection.php");

//==== config.php ====//
//====================//

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('23757456661-hn7jqtvfrb50chd3qqu8nre62r1jp77s.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/php/lotteryform/content.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

//====================//
//==== config.php ====//



// ==== getting user profile with login button ==== //
// ================================================ //
if(isset($_GET["code"])){

    // if(!isset($_SESSION['email'])){

    $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

    $google_client->setAccessToken($token['access_token']);

    $_SESSION['access_token'] = $token['access_token'];

    $google_service = new Google_Service_Oauth2($google_client);
    
    $data = $google_service->userinfo->get();

    $user_first_name = $data['given_name'];
    $user_last_name = $data['family_name'];
    $user_email = $data['email'];

    $insert_data = "INSERT INTO registerform(FirstName, LastName, Email) VALUES('$user_first_name','$user_last_name','$user_email')";
    $query = $connection->query($insert_data); 

    // $_SESSION['email'] = $user_email;
    // $_SESSION['code'] = $_GET["code"];

    // echo $_SESSION['email'];
    // }  
}
if (!isset($_SESSION['access_token'])){
// else { 
    echo "<a href='".$google_client->createAuthUrl()."'>Login With Google</a>";
}
// ==== getting user profile with login button ==== //
// ================================================ //
?>