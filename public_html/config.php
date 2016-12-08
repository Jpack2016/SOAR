<?php
session_start();
include_once("src/Google_Client.php");
include_once("src/contrib/Google_Oauth2Service.php");
######### edit details ##########
$clientId = '164072217971-qov1vkar7dokud07fgl6ph83cuno7v7r.apps.googleusercontent.com'; //Google CLIENT ID
$clientSecret = 'vgkp6cULlai3Qbc0Wny4dmR5'; //Google CLIENT SECRET
$redirectUrl = 'http://lamp.cse.fau.edu/~fsoares2014/main_menu.php';  //return url (url to script)
$homeUrl = 'http://lamp.cse.fau.edu/~fsoares2014/';  //return to home

##################################

$gClient = new Google_Client();
$gClient->setApplicationName('Login to SOAR');
$gClient->setClientId($clientId);
$gClient->setClientSecret($clientSecret);
$gClient->setRedirectUri($redirectUrl);

$google_oauthV2 = new Google_Oauth2Service($gClient);
?>
