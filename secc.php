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
                                <a href="index.php"><span> Home &gt;Committees </span></a><span class="italic py-4"> </span>
                            </div>
                        </div>
                    </button>
                </div>
            </div>
            <div class="text-right col col-10">
            <div class="submenu"><span><a class="btn btn-fh p-3 active-fh " href="apex-committee.php">Apex Committee </a></span>
                    <span><a class="btn btn-fh p-3 " href="working-committee.php">Working Committee </a></span>
                    <span><a class="btn btn-fh p-3 " href="vishakha-committee.php">Vishakha Committee </a></span>
                    <span><a class="btn btn-fh p-3 " href="other-committees.php">Other Committee </a></span>

                </div>
            </div>
        </div>
        <div class="row"></div>
    </div>
</div>
<main class="container-fluid" id="main_container">
    <div class="container text-left">
        <div class="row">
            <div class="col col-lg-3 col-12 col-md-3">
                <ul>
                    <li class="left_menu" style="list-style-type: none;">
                        <details open="">
                            <summary> Other Committees </summary>
                            <ul id="submenu_ul" class="ml-4">
                                <li class="left_menu"> <a id="left_menu_link" href="procurement.php"> Procurement</a> </li>
                                <li class=" left_menu"> <a id="left_menu_link" href="communication.php"> Communication </a> </li>
                                <li class="left_menu"> <a id="left_menu_link" href="rawMaterials.php"> Raw Materials</a> </li>
                                <li class="left_menu"> <a id="left_menu_link" href="regulatory.php"> Trade & Regulatory </a> </li>
                                <li class="left_menu"> <a id="left_menu_link" href="economics.php"> Economics</a> </li>
                                <li class="left_menu"> <a id="left_menu_link" href="environment.php"> Environment </a> </li>
                                <li class="left_menu"> <a id="left_menu_link" href="healthAndSafety.php"> Health &amp; Safety</a> </li>
                                <li class="left_menu"> <a id="left_menu_link" href="secc.php"> Sustainability, Energy &amp; Climate Change</a> </li>
                            </ul>
                        </details>
                    </li>
                    <!-- <li class="left_menu" style="list-style-type: none;"><a id="left_menu_link" href="affiliateMembers.html"><span> Affiliate Members </span></a></li> -->
                </ul>
            </div>
            <div class="col col-lg-9 col-12 col-md-9 border-left pr-1">
                <div class="description_box">
                    <h1>Sustainability, Energy and Climate Change </h1>
                    <div>
                        <p>The Committee for Sustainability, Energy and Climate Change (SECC) is one of ISA&rsquo;s newly formed committees that focuses on policies and issues related to low carbon emission steel, decarbonization, and the transition to Green Steel in line with India&rsquo;s target for Net Zero by 2070.</p></br></br>

                        <p><strong>The members of the Committee are as below:</strong></p></br>
                        <ul>
                            <li>Mr&nbsp;Prabodha Acharya, JSW Steel Limited (Chairman)</li>
                            <li>Mr. Vaibhav Pokharna, ArcelorMittal Nippon Steel India (Co-Chairman)</li>
                            <li>Mr. Lokendraraj Singh, JSW Steel Limited</li>
                            <li>Ms. Aparjita Agarwal, Tata Steel Limited</li>
                            <li>Mr. Hemant Harsh Dhagamwar, Tata Steel Limited</li>
                            <li>Mr. Somesh Biswas, Tata Steel Limited</li>
                            <li>Mr. Sandip Kotecha, ArcelorMittal Nippon Steel India</li>
                            <li>Mr. Rajneesh Kumar Gupta, SAIL</li>
                            <li>Mr. S K Das, SAIL</li>
                            <li>Mr. Jaydeep Jadhav, SAIL</li>
                            <li>Mr. Yogesh Sindhu, Jindal Steel & Power</li>
                            <li>Dr. Chenna Kishore, Rashtriya Ispat Nigam Limited</li>
                            <li>Mr. J Christopher, Arjas Steel Pvt Ltd</li>
                            <li>Mr. Sajal Ghorai , INSDAG</li>
                            <li>Mr. Ashish Dash, ESL Steel Limited</li>
                        </ul>


                    </div>
                    <div class="row p-0 py-2 px-3">









                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
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