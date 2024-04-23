<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'vendor/autoload.php';
use PragmaRX\Google2FA\Google2FA;

$_g2fa = new Google2FA();

$user = $_SESSION['g2fa_user'];

$otp = $_GET['otp'];

// Verify provided OTP
$valid = $_g2fa->verifyKey($user->google2fa_secret, $otp);

$response = new stdClass();
$response->provided_otp = $otp;
$response->result = $valid;
$response = json_encode($response);
echo $response;

?>