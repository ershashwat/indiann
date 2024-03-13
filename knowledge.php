<?php
require_once 'admin/config/config.php';
require_once 'admin/config/helper.php';
?>
<?php 
session_start();
//session_start();

if(empty($_SESSION)) {
    header('Location: index.php');
    exit;
} else {
    // print_r($_SESSION);
    // echo "<br>";
    // echo "Session exists here";
    include 'header.php'; 
}

// $s_email=!empty($_SESSION['email'])?$_SESSION['email']:'';
// include 'header.php'; 

?>




<style>
    @media (min-width: 576px) {
        .modal-dialog {
            max-width: 810px;
            margin: 5rem auto;
        }
    }

    .owl-theme .owl-nav.disabled+.owl-dots {
        margin-top: 10px;
        display: block;
    }

    .owl-theme .owl-dots {
        text-align: center;
        -webkit-tap-highlight-color: transparent;
        display: none;
    }
</style>


<div class="sub_heading_menu container-fluid">
    <div class="container">
        <div class="row">
            <div class="col col-2">
                <div class="submenu">
                    <button class="btn btn-nobg p-3">
                        <div class="container">
                            <div class="page_heading">
                                <a href="index.php"><span> Home &gt;
                                        Knowledge Bank
                                         </span></a><span class="italic py-4"> </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="text-right col col-10">
                <div class="submenu"><span><a class="btn btn-fh p-3 active-fh " href="apexCommittee.php">ISA Annual Reports </a></span>
                    <span><a class="btn btn-fh p-3 " href="#">Representations </a></span>
                    <span><a class="btn btn-fh p-3 " href="#">
                            Resources
                        </a></span>
                    <span><a class="btn btn-fh p-3 " href="#">Archives </a></span>

                </div>
            </div>
        </div>
        <div class="row"></div>
    </div>
</div>

<main class="container-fluid" id="main_container">
    <div class="row mt-4 steel_trends">
        <div class="col-md-3 px-4">
            <h4>Governance</h4>
            <ul id="accordion">
                <li><a href="#" class="menu btn ">Antitrust Guidelines</a></li>
                <li><a href="#" class="menu btn ">Annual General Meeting</a></li>
                <li><a href="#" class="menu btn ">Charter & Regulations</a></li>

            </ul>
        </div>
        <div class="col-md-9">

            <div class="row">

                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
                <div class="col-md-3" style="margin-bottom:30px;">
                    <a href="annual.php">
                        <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">
                            <p style="margin-bottom: 10px !important;"><strong>Monthly Economic Indicators</strong></p>
                            <button class="btn btn-secondary">View PDF</button>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    .card-header {
        padding: 0.75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgb(7 123 231);
        color: white;
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }

    .faq-section .mb-0>a {
        display: block;
        position: relative;
    }

    .faq-section .mb-0>a:after {
        content: "\f067";
        font-family: "Font Awesome 5 Free";
        position: absolute;
        right: 0;
        font-weight: 600;
    }

    .faq-section .mb-0>a[aria-expanded="true"]:after {
        content: "\f068";
        font-family: "Font Awesome 5 Free";
        font-weight: 600;
    }
</style>





<script src="../../code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('.memberclick').on('click', function() {

            id = $(this).data('id');

            type = 2;
            $.ajax({
                type: 'POST',
                url: 'https://indsteel.org/userdata',

                data: {
                    type: type,
                    id: id,


                },
                success: function(data) {


                    $('#content_div').html(data);

                }
            });
        });
    });
</script>



<?php include "footer.php" ?>