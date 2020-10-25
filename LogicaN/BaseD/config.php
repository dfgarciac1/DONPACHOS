
<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';
require_once 'Google/Client.php';     
require_once 'Google/Service/Analytics.php';       


//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('989711307373-g3koib5cugukbraqdch50f1lttt8nu4n.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('8ggS-Dw-4zK95MbzF_yQdNRH');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('http://localhost:3000/a.html');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>