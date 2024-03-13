<?php
session_start();

// Function to generate a random OTP
function generateOTP($length = 6) {
    return rand(pow(10, $length-1), pow(10, $length)-1);
}
$stored_otp = $_SESSION['otp'];

echo"$stored_otp";

if(isset($_POST['submit'])) {
    $otp_entered = $_POST['otp'];
    $stored_otp = $_SESSION['otp'];
    if($otp_entered == $stored_otp) {
        // OTP verification successful, proceed with login
        // You can also unset the OTP from session if you want to allow only single-use OTPs
        unset($_SESSION['otp']);
        
        // Redirect to the desired page after successful login
        header("location: indiann.php");
        exit;
    } else {
        // Incorrect OTP, display error message
        echo "<script>alert('Incorrect OTP');</script>";
    }
}

// Resend OTP functionality
if(isset($_POST['resend'])) {
    // Generate a new OTP
    $new_otp = generateOTP();
    
    // Store the new OTP in session
    $_SESSION['otp'] = $new_otp;
    
    // Optionally, you can send the OTP to the user via email or SMS here
    
    // Inform the user that the OTP has been resent
    echo "<script>alert('New OTP has been sent to your registered email/mobile.');</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OTP Verification</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-3"></div>
                <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                    <div class="frm">
                        <div class="card frm_data">
                            <div class="card-body">
                                <form method="post" action="">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="marrsd">
                                                <img src="images/logo.png" width="50%" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <h2>Enter OTP</h2>
                                    <input class="form-control" type="text" name="otp" placeholder="Enter OTP" required>
                                    <button type="submit" name="submit" class="btn sub">Verify OTP</button>
                                </form>
                                <!-- Resend OTP button -->
                                <form method="post" action="">
                                    <button type="submit" name="resend" class="btn sub">Resend OTP</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3"></div>
            </div>
        </div>
    </section>
    <style>
        .frm_data {
            box-shadow: 1px 2px 7px gray !important;
            border-left: 2px solid #ff9400 !important;
        }
        .frm {
            padding: 50px 0px;
        }
        .sub {
            background: orange !important;
            width: 100% !important;
            border-radius: 10px;
            color: white;
        }
        .sub:hover {
            background: orange;
            width: 100%;
            border-radius: 10px;
        }
        .marrsd {
            display: flex;
            justify-content: center;
        }
    </style>
</body>
</html>
