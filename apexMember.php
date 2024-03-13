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





<div class="sub_heading_menu container-fluid">
  <div class="container">
    <div class="row">
      <div class="col col-2">
        <div class="submenu">
          <button class="btn btn-nobg p-3">
            <div class="container">
              <div class="page_heading">
                <a href="index.php"><span> Home &gt;About </span></a><span class="italic py-4"> </span>
              </div>
            </div>
          </button>
        </div>
      </div>
      <div class="text-right col col-10">
        <div class="submenu"><span>

        <a class=" active-fh  btn btn-fh p-3" href="vision.php">Vision &amp; Mission </a></span>
            <span><a class="  btn btn-fh p-3" href="isateam.php">ISA Team </a></span>
            <span><a class="  btn btn-fh p-3" href="apexMember.php">MOU & Partnerships </a></span>

<!--             
            <a class="  btn btn-fh p-3" href="vision.php">Vision &amp; Mission </a></span>
          <span><a class="  btn btn-fh p-3" href="leadership.php">Leadership </a></span>
          <span><a class=" active-fh  btn btn-fh p-3" href="apexMember.php">Apex Members </a></span>
          <span><a href="https://admin.indsteel.org/storage/documents/Indian-Steell-Association-Brochure-2021.pdf" target="_blank" rel="noreferrer" class="btn btn-fh p-3">Brochure </a></span> -->
          <!-- <span><a class="   btn btn-fh p-3" href="globalpartnerships.php">Global Partnerships </a></span> -->
          <!-- <span><a class="  btn btn-fh p-3" href="contactUs.php">Contact us </a></span> -->
        </div>
      </div>
    </div>
    <div class="row">

    </div>
  </div>
</div>




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

<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: var(--color14);">

      <div class="modal-body">
        <div class="container bg14 text-light">
          <div class="row float-right cursor-pointer m-2 contact_details_close_btn">

            <button type="button" class="close" data-dismiss="modal" style="border: solid 2px #fff; opacity: 1; padding: 0; width: 30px; height: 30px; border-radius: 50px; color: #fff; font-size: 19px; font-weight: 400;">&times;</button>
          </div>
          <div class="row px-12 py-4 scrollbar_row_container">
            <div class="row" id="content_div">
            </div>
            <hr class="w-100 my-2">
            <div class="container">
              <div class="row">







                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                    <div class="owl-stage">


                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="18">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62b413cec7f37.jpg" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>

                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="17">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da86334c71f.png" alt="ISA Member Contact"></div>
                          Mr. Sajjan Jindal
                        </div>
                      </div>

                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="16">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da86656f456.png" alt="ISA Member Contact"></div>
                          Mr. T.V. Narendran
                        </div>
                      </div>

                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="15">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da86942b364.png" alt="ISA Member Contact"></div>
                          Mr. Amarendu Prakash
                        </div>
                      </div>

                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="14">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da868418c7a.png" alt="ISA Member Contact"></div>
                          Mr Naveen Jindal
                        </div>
                      </div>

                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="13">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da8673e029d.png" alt="ISA Member Contact"></div>
                          Mr. Atul Bhatt
                        </div>
                      </div>

                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="2">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/dummy.png" alt="ISA Member Contact"></div>
                          Mr. Rajeev Singhal
                        </div>
                      </div>

                      <div class="owl-item active memberclick" style="width: 126.069px;" data-id="1">
                        <div class=" col-12 mx-1">


                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62b2c40f0ad19.png" alt="ISA Member Contact"></div>
                          Mr. Anil Kumar Singh
                        </div>
                      </div>


                    </div>
                  </div>
                  <div class="owl-nav">
                    <button type="button" role="presentation" class="d_none_important disabled">&lt;</button>
                    <button type="button" role="presentation" class="d_none_important">&gt;</button>
                  </div>
                  <div class="owl-dots">
                    <button role="button" class="owl-dot active"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Modal footer -->

    </div>
  </div>
</div>






<main class="container-fluid" id="main_container">
  <section>
  <section>
      <div class="container-fluid">
        <div class="container ">
          <div class="row">
            <div class="col col-12 px-0 banner_image_div">
              <div class="banne_div_img"><img src="assets/vision.jpg" alt="home_banner"></div>
              <div id="left_container" class="left_container">
                <div class="vison_top_heading_container text-left">
                  <div class="row flex-col mx-4 text-left color11 mt-16">
                    <div class="col-lg-12 col-sm-10 bg-light vison_heading1">
                      <h1 class="" id="heading_vision"> Vision</h1>
                    </div>
                    <div class="col-12 bg-light my-2 vison_heading1">
                      <h2>and Mission</h2>
                    </div>
                    <p class="text-light py-4 text-xl vison_top_para">
                  
                      Working towards transforming the Indian Steel Industry into a Global Leader</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container our-team-container">
      <div class="row pt-3 pb-8">

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="18">
            <div class="contact_card_div">
              <div class="contact_card ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div "><img src="assets/isa1.jpg" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class=" ">
                          <h1>Mr. Dilip Oommen</h1>
                          <h2 class="italic contact_card_desig">CEO, AM/NS India, Exec. VP ArcelorMittal &amp; President ISA</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="17">
            <div class="contact_card_div">
              <div class="contact_card ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div "><img src="assets/1.png" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class=" ">
                          <h1>Mr. Sajjan Jindal</h1>
                          <h2 class="italic contact_card_desig">Chairman, JSW Group</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="16">
            <div class="contact_card_div">
              <div class="contact_card  md_h_flip ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div  md_h_flip "><img src="assets/2.png" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class="  md_h_flip ">
                          <h1>Mr. T.V. Narendran</h1>
                          <h2 class="italic contact_card_desig">CEO and MD, Tata Steel</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="15">
            <div class="contact_card_div">
              <div class="contact_card  md_h_flip ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div  md_h_flip "><img src="assets/3.png" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class="  md_h_flip ">
                          <h1>Mr. Amarendu Prakash</h1>
                          <h2 class="italic contact_card_desig">Chairman, SAIL</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="14">
            <div class="contact_card_div">
              <div class="contact_card ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div "><img src="assets/4.png" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class=" ">
                          <h1>Mr Naveen Jindal</h1>
                          <h2 class="italic contact_card_desig">Chairman, Jindal steel &amp; Power (JSP)</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="13">
            <div class="contact_card_div">
              <div class="contact_card ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div "><img src="assets/5.png" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class=" ">
                          <h1>Mr. Atul Bhatt</h1>
                          <h2 class="italic contact_card_desig">CMD, RINL-VSP</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="2">
            <div class="contact_card_div">
              <div class="contact_card  md_h_flip ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div  md_h_flip "><img src="assets/6.png" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class="  md_h_flip ">
                          <h1>Mr. Rajeev Singhal</h1>
                          <h2 class="italic contact_card_desig"></h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>

        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="1">
            <div class="contact_card_div">
              <div class="contact_card  md_h_flip ">
                <div class="card">
                  <div class="card-body contact_card_body">
                    <div class="row contact_card_inner_row">
                      <div class="col col-6 contact_card_left_div">
                        <div class="img_div  md_h_flip "><img src="assets/7.png" alt="ISA Member Contact"></div>
                      </div>
                      <div class="arrow_icon"></div>
                      <div class="col col-6 contact_card_right_div right_div">
                        <div class="  md_h_flip ">
                          <h1>Mr. Anil Kumar Singh</h1>
                          <h2 class="italic contact_card_desig">Director &amp; Occupier, JSW Bhushan Power &amp; Steel Ltd.</h2>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </span> </div>






        <div id="contact_detail" class="container bg14 text-light py-4 d-none">
          <div class="row float-right cursor-pointer m-2 contact_details_close_btn">
            <button class="btn btn-outline-light rounded-circle">x</button>
          </div>
          <div class="row px-12 py-4 scrollbar_row_container">
            <div class="col-lg-4 col-md-6 col-sm-12 h-100 scrollbar_main_img_col"><img class="" src="../../admin.indsteel.org/storage/images/uploads/62b413cec7f37.jpg" alt="ISA Member Contact">
              <h3 class="text-left text-light">Mr. Dilip Oommen</h3>
              <p class="text-left">CEO, AM/NS India, Exec. VP ArcelorMittal &amp; President ISA</p>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
              <div class="scrollbar_container">
                <p>Mr. Dilip Oommen is CEO of ArcelorMittal Nippon Steel India (formerly Essar Steel) and is a member of the Management Committee of ArcelorMittal. He has worked in the steel industry for over 37 years. He joined Essar Steel in 2003 as COO and has a deep understanding of the company and its operations across India. He progressed through senior leadership positions across the company, and was appointed Managing Director and Chief Executive Officer in 2019. Mr. Oommen’s international steel industry experience includes senior operational roles at Hadeed, the leading steel manufacturer in the Gulf, owned by SABIC.</p>
                <p>Under his leadership, the company has achieved a turnaround including the profitability. It has also become a benchmark for safety, recognised multiple times by WSA.</p>
                <p>In the past, Mr. Oommen has served on many Committees such as Co-Chair, and Steel Committee of FICCI. He is a metallurgical engineer from the Indian Institute of Technology, Kharagpur. He has many certifications in business management and is adept at leading multinational teams.</p>
              </div>
            </div>
            <hr class="w-100 my-2">
            <div class="container">
              <div class="row">
                <div class="owl-carousel owl-theme owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s;">


                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62b413cec7f37.jpg" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da86334c71f.png" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da86656f456.png" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da86942b364.png" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da868418c7a.png" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62da8673e029d.png" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/dummy.png" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>
                      <div class="owl-item">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62b2c40f0ad19.png" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen
                        </div>
                      </div>





                    </div>
                  </div>
                  <div class="owl-nav">
                    <button type="button" role="presentation" class="d_none_important disabled">&lt;</button>
                    <button type="button" role="presentation" class="d_none_important">&gt;</button>
                  </div>
                  <div class="owl-dots">
                    <button role="button" class="owl-dot active"><span></span></button>
                    <button role="button" class="owl-dot"><span></span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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