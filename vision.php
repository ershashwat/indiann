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
              <a href="../index.php"><span> Home &gt;About </span></a><span class="italic py-4"> </span></div>
          </div>
          </button>
        </div>
      </div>
      <div class="text-right col col-10">
        <div class="submenu"><span>
            <a class=" active-fh  btn btn-fh p-3" href="vision.php">Vision &amp; Mission </a></span>
            <span><a class="  btn btn-fh p-3" href="isateam.php">ISA Team </a></span>
            <span><a class="  btn btn-fh p-3" href="apexMember.php">MOU & Partnerships </a></span>
            <!-- <span><a href="https://admin.indsteel.org/storage/documents/Indian-Steell-Association-Brochure-2021.pdf" target="_blank" rel="noreferrer" class="btn btn-fh p-3">Brochure </a></span>
            <span><a class="   btn btn-fh p-3" href="globalpartnerships.php">Global Partnerships </a></span>
            <span><a class="  btn btn-fh p-3" href="contactUs.php">Contact us </a></span></div> -->
      </div>
    </div>
    <div class="row">
      
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

                                    <?php
                                    $data = $db->query("SELECT * FROM `vision-mission` ORDER BY id DESC");
                                      $value = $data->fetch_object();
                                    ?>
    <div class="container py-4 vision_container">
      <h1 class="text-center text-3xl color11">  Mission </h1>
      <p class="py-4 text-xl text-left vision_para">  <?php echo !empty($value->editor1) ? $value->editor1 : ''; ?> </p>
      <div class="row px-8 d-flex justify-content-between">
        <div class="col-lg-3 col-md-6 col-sm-12" id="mission"><img src="assets/Mission3.png" alt="vision"></div>
        <div class="col-lg-3 col-md-6 col-sm-12" id="mission"><img src="assets/Mission2.png" alt="vision"></div>
        <div class="col-lg-3 col-md-6 col-sm-12 rounded-circle" id="mission"><img src="assets/Mission1.png" alt="vision"></div>
      </div>
    </div>
    <div class="container py-8 mission_container">
      <h1 class="text-3xl py-2 color11">Vision</h1>
      <p class="text-xl text-left mission_para"><?php echo !empty($value->editor2) ? $value->editor2 : ''; ?></p>
    </div>
  </section>
</main>

</div>
<?php include "footer.php";?>