<?php

session_start();
require_once '../admin/config/config.php'; 
$action = $_REQUEST['submit'];

if ($action === 'Login') {
    // var_dump($_SESSION);
    // exit; 
    if(empty($_SESSION)){
    $email = $_POST['email'];
     //  echo "SELECT * FROM `new_user` WHERE email='$email'  AND nu_status ='1'";
     //  exit;
     $results = $db->query("SELECT * FROM `member` WHERE email='$email'  AND nu_status ='1'");
     if ($results->num_rows > 0) {
        $row = $results->fetch_object();
        $sid = session_id();
        $_SESSION['Oronero'] = $sid;
        $_SESSION['logintype'] = 'user'; // set user type
        $_SESSION['email'] = $row->email;
        // $db->close();
        // if (!empty($_POST["urlpage"])) {
        //     $return_url = base64_decode($_POST["urlpage"]); //return url
        //     header('Location:' . $return_url);
        $nu_date = date("Y-m-d H:i:s");
        $digits = 4;
        $otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
        $_SESSION['otp'] = $otp;
		    $_SESSION['errormsg'] = 'Login Successful.';
            $_SESSION['errorValue'] = 'warning';           
			header("Location: ../chek-otp.php?msg=" . md5('1') . "");
        }
     else {
        $_SESSION['errormsg'] = 'Invalid User Id or password.';
            $_SESSION['errorValue'] = 'warning'; 
        header("Location:../loginfail.php?msg=" . md5('2') . "");
    }
}
else{
    session_unset();
    session_destroy();
    session_start();
    $nu_number = $_POST['nu_number'];
    //  echo "SELECT * FROM `new_user` WHERE nu_number='$nu_number'  AND nu_status ='1'";
    //  exit;
       $results = $db->query("SELECT * FROM `new_user` WHERE nu_number='$nu_number'  AND nu_status ='1'");
       if ($results->num_rows > 0) {
            $row = $results->fetch_object();
            $sid = session_id();
            $_SESSION['Oronero'] = $sid;
            $_SESSION['logintype'] = 'user'; // set user type
          $_SESSION['nu_number'] = $row->nu_number;
            // $db->close();
            // if (!empty($_POST["urlpage"])) {
            //     $return_url = base64_decode($_POST["urlpage"]); //return url
            //     header('Location:' . $return_url);
            $nu_date = date("Y-m-d H:i:s");
            $digits = 4;
            $otp=rand(pow(10, $digits-1), pow(10, $digits)-1);
            $_SESSION['otp'] = $otp;
                $_SESSION['errormsg'] = 'Login Successful.';
                $_SESSION['errorValue'] = 'warning';           
                header("Location: ../chek-otp.php?msg=" . md5('1') . "");
            }
         else {
            $_SESSION['errormsg'] = 'Invalid User Id or password.';
                $_SESSION['errorValue'] = 'warning'; 
            header("Location:../loginfail.php?msg=" . md5('2') . "");
        }
}
}

if (md5($action) === md5('logout')) {
    unset($_SESSION['Oronero']);
    unset($_SESSION['logintype']); // set user type
    unset($_SESSION['nu_id']);
    unset($_SESSION['nu_email']);
    $_SESSION['msg'] = md5('1');
    header("Location:../login.php?msg=" . md5('logout') . "");
    exit();
}
