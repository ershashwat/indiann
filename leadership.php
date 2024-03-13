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
              <a href="../index.html"><span> Home &gt;About </span></a><span class="italic py-4"> </span></div>
          </div>
          </button>
        </div>
      </div>
      <div class="text-right col col-10">
        <div class="submenu"><span>
            <a class="  btn btn-fh p-3" href="vision.php">Vision &amp; Mission </a></span>
            <span><a class=" active-fh  btn btn-fh p-3" href="leadership.php">Leadership </a></span>
            <span><a class="  btn btn-fh p-3" href="apexMember.php">Apex Members </a></span>
            <span><a href="https://admin.indsteel.org/storage/documents/Indian-Steell-Association-Brochure-2021.pdf" target="_blank" rel="noreferrer" class="btn btn-fh p-3">Brochure </a></span>
            <span><a class="   btn btn-fh p-3" href="globalpartnerships.php">Global Partnerships </a></span>
            <span><a class="  btn btn-fh p-3" href="contactUs.php">Contact us </a></span></div>
      </div>
    </div>
    <div class="row"></div>
  </div>
</div>
 
 
 
 
 
 <style>
@media (min-width: 576px){
	.modal-dialog {
    max-width: 810px;
    margin: 5rem auto;
	}}
	
	.owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: 10px;
    display: block;
}.owl-theme .owl-dots {
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
                      <div class="owl-item active memberclick" style="width: 126.069px;"  data-id="672">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/62b413cec7f37.jpg" alt="ISA Member Contact"></div>
                          Mr. Dilip Oommen</div>
                      </div>
                      
                      <div class="owl-item active memberclick" style="width: 126.069px;"   data-id="673">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/photo_Mr.%20Alok%20Sahay.jpg" alt="ISA Member Contact"></div>
                          Mr. Alok Sahay
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
              <div class="banne_div_img"><img src="assets/leadership.jpg" alt="home_banner"></div>
              <div id="left_container" class="left_container">
                <div class="vison_top_heading_container text-left">
                  <div class="row flex-col mx-4 text-left color11 mt-16">
                    <div class="col-lg-12 col-sm-10 bg-light vison_heading1">
                      <h1 class="" id="heading_vision"> ISA</h1>
                    </div>
                    <div class="col-12 bg-light my-2 vison_heading1">
                      <h2>Leadership</h2>
                    </div>
                    <p class="text-light py-4 text-xl vison_top_para"></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
                <div class="container py-8 mission_container">
      <h1 class="text-3xl py-2 color11">ISA Leadership</h1>
      <div class="row p-0 py-2 px-3">
        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span  data-toggle="modal" data-target="#myModal" class="memberclick" data-id="672">
          <div class="contact_card_div">
            <div class="contact_card md_h_flip">
              <div class="card">
                <div class="card-body contact_card_body">
                  <div class="row contact_card_inner_row">
                    <div class="col col-6 contact_card_left_div">
                      <div class="img_div md_h_flip"><img src="assets/isa1.jpg" alt="ISA Member Contact"></div>
                    </div>
                    <div class="arrow_icon"></div>
                    <div class="col col-6 contact_card_right_div right_div">
                      <div class="md_h_flip">
                        <h1> Mr. Dilip Oommen</h1>
                        <h2 class="italic contact_card_desig">President, Indian Steel Association and CEO, AM/NS India &amp; Executive VP, ArcelorMittal</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </span></div>
        <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span  data-toggle="modal" data-target="#myModal" class="memberclick" data-id="673">
          <div class="contact_card_div">
            <div class="contact_card md_h_flip">
              <div class="card">
                <div class="card-body contact_card_body">
                  <div class="row contact_card_inner_row">
                    <div class="col col-6 contact_card_left_div">
                      <div class="img_div md_h_flip"><img src="assets/isa2.jpg" alt="ISA Member Contact"></div>
                    </div>
                    <div class="arrow_icon"></div>
                    <div class="col col-6 contact_card_right_div right_div">
                      <div class="md_h_flip">
                        <h1> Mr. Alok Sahay
 </h1>
                        <h2 class="italic contact_card_desig">Secretary General &amp; Executive Head</h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
         </span></div>
        <div id="contact_detail" class="container bg14 text-light py-4 d-none">
          <div class="row float-right cursor-pointer m-2 contact_details_close_btn">
            <button class="btn btn-outline-light rounded-circle">x</button>
          </div>
          <div class="row px-12 py-4 scrollbar_row_container">
            <div class="col-lg-4 col-md-6 col-sm-12 h-100 scrollbar_main_img_col"><img class="" src="../../admin.indsteel.org/storage/images/uploads/photo_Mr.%20Alok%20Sahay.jpg" alt="ISA Member Contact">
              <h3 class="text-left text-light">Mr. Alok Sahay
 </h3>
              <p class="text-left">Secretary General &amp; Executive Head</p>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-12">
              <div class="scrollbar_container">
                <p>&lt;p&gt;Mr. Sahay has been at the forefront in ensuring trade remedial measures are put in place especially when the Indian steel industry went through a rough patch in 2015-2016. He has worked closely with the steel industry and the Government as one of the core industry representatives to advocate on trade-related matters at national and international forums. Mr. Sahay has all through championed the cause of the Steel industry. He also represented India in the first meeting of the Global Forum on Steel Excess Capacity (GFSEC) held in Paris.&lt;/br&gt;&lt;/br&gt;


In his previous stint at the Steel Authority of India (SAIL), he was instrumental in bringing together R&amp;D establishments of SAIL, the Defence Ministry and other Governmental units to ensure critical import substitution of products within defence manufacturing. These efforts led to the successful launching of fully indigenous warships and warranted that India moves towards Aatmanirbharta in steel requirement for the defence sector.&lt;/p&gt;</p>
              </div>
            </div>
            <hr class="w-100 my-2">
            <div class="container">
              <div class="row">
                <div class="owl-carousel owl-theme owl-hidden owl-loaded owl-drag">
                  <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 362px;">
                      <div class="owl-item active" style="width: 180.569px;">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads62b413cec7f37.html" alt="ISA Member Contact"></div>
                         Mr. Dilip Oommen</div>
                      </div>
                      <div class="owl-item active" style="width: 180.569px;">
                        <div class=" col-12 mx-1">
                          <div class="contact_card_carousel_img"><img src="../../admin.indsteel.org/storage/images/uploads/photo_Mr.%20Alok%20Sahay.jpg" alt="ISA Member Contact"></div>
                          Mr. Alok Sahay
 </div>
                      </div>
                    </div>
                  </div>
                  <div class="owl-nav disabled">
                    <button type="button" role="presentation" class="d_none_important disabled">&lt;</button>
                    <button type="button" role="presentation" class="d_none_important disabled">&gt;</button>
                  </div>
                  <div class="owl-dots disabled">
                    <button role="button" class="owl-dot active"><span></span></button>
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
        type = 1;
        id = $(this).data('id');
           $.ajax({
       type:'POST',
       url:'https://indsteel.org/userdata',
    
      data: {
      type : type,
        id : id,
        
         
     },
       success:function(data){

        
        $('#content_div').html(data); 
     
       }
   });
    });
});
</script>



<?php include "footer.php"?>
