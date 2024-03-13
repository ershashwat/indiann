<?php

error_reporting(E_ALL | E_DEPRECATED | E_STRICT);
/*
 * set default time-zone to confirm the timezone
 * else it will show an error that system time is not reliable
 * Change it as per your timezone
 */
date_default_timezone_set('Asia/Kolkata');

/*
 * set maximum script execution time to overcome
 * timeout situations
 * I have set it for 5 minutes, i.e. 5 mins * 60 seconds,
 * But dont use unlimited or too much time as it may cause
 * too much server load and even breakdown
 */
set_time_limit(10 * 60);
define('HOST', $_SERVER['SERVER_NAME']);

//$keyId = 'rzp_live_ZY4uQvfvfGad2G';
//$keySecret = 'Fn2v1WXHFfoYWfwjkczXJMBg';

$displayCurrency = 'INR';


$base = "indian-steel";
$server = "localhost";
$user = "root";
$pass = "";
//Open a new connection to the MySQL server
$db = new mysqli($server, $user, $pass, $base);
if ($db->connect_error) {
  // die('Error : (' . $db->connect_errno . ') ' . $db->connect_error);
  // die('Error : (' . header("Location: 404?msg=" . md5('5') . "") . ') ' . $db->connect_error);
}
define('BASE_URL','indian-steel/login');
// define('API_KEY','rzp_test_yHWQUITmwp21Rb');
// define('API_SECRET','yNSgTyIvQp7pDTjuQqODEUo3');
define('API_KEY','rzp_live_idWF1fiijxXy5K');
define('API_SECRET','1xCLQRXgx28fELj5LzooohE2');
define('COMPANY_NAME','login');
define('COMPANY_LOGO_URL','indian-steel/login');
