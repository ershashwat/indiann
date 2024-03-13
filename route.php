<?php
$request = $_SERVER['REQUEST_URI'];
$r = str_replace('/ommsatyam/', '', $request);
//echo $r;exit;
// include('jradmin/config/config.php');
$arr = explode('/', $r);
if ($r == '' || $r == 'index' || $r == 'index.php') {
	include('index.php');
} elseif ($r == 'about') {
	include('about.php');
} elseif ($r == 'appointment') {
	include('appointment.php');
} elseif ($r == 'careers') {
	include('careers.php');
} elseif ($r == 'contact') {
	include('contact.php');
} elseif ($r == 'thankyou') {
	include('thankyou.php');
} elseif ($r == '404') {
	include('404.php');
} elseif ($r == 'jradmin/' || $r == 'jradmin/index' || $r == 'jradmin') {
	include('jradmin/index.php');
} else {
	$mqry = "SELECT * FROM `menu` WHERE m_url='$r'";
	$mres = $db->query($mqry);
	if ($mres->num_rows > 0) {
		include('services.php');
	} else {
		include('404.php');
	}
}