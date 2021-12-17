<?php

//start session on web page
session_start();

//==== config.php ====//
//====================//

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('923867663071-er34ismhcq2np6vlvj2dd1ic554idb7h.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('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');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost/php/login_with_google/content1.php');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');

//====================//
//==== config.php ====//
