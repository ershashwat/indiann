<?php
// Define generateOTP function
function generateOTP() {
    // Generate a random 6-digit OTP
    return rand(100000, 999999);
}

// Rest of your code
require_once 'admin/config/config.php';
require_once 'admin/config/helper.php';
session_start();

// Check if form is submitted
if (isset($_POST['submt']) && $_POST['submt'] == 'Submit') {
  //echo "YES";exit;
  $email = $_POST['eml'];
  $otp = generateOTP();
  
  // $password = $_POST['passwd'];
  $sql = $db->query("SELECT * FROM member WHERE `email`='$email' ");
  
  if ($sql->num_rows > 0) {
    //echo "num";exit;
    $row = $sql->fetch_object();
    $_SESSION['id'] = session_id();
    $_SESSION['email'] = $row->email;
    $_SESSION['otp'] = $otp;
    $_SESSION['role'] = $row->role;
    $_SESSION['dbid'] = $row->id;

    header("location:otp_verification.php");
    exit; // Add exit after header to stop further execution
  } else {
    //echo "no num";exit;
    echo ("<script language='javascript'>window.alert('Incorrect Email ID');
         window.location.href='index.php'</script>");
    exit; // Add exit after echo to stop further execution
  }
} elseif (isset($_POST['submit']) && $_POST['submit'] != 'Login') {
  echo "no";exit;
} else {
  echo "fsfsf";exit;
}
?>
