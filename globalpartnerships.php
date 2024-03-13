
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
              <a href="index.php"><span> Home &gt;About </span></a><span class="italic py-4"> </span></div>
          </div>
          </button>
        </div>
      </div>
      <div class="text-right col col-10">
        <div class="submenu"><span>
            <a class="  btn btn-fh p-3" href="vision.php">Vision &amp; Mission </a></span>
            <span><a class="  btn btn-fh p-3" href="leadership.php">Leadership </a></span>
            <span><a class="  btn btn-fh p-3" href="apexMember.php">Apex Members </a></span>
            <span><a href="https://admin.indsteel.org/storage/documents/Indian-Steell-Association-Brochure-2021.pdf" target="_blank" rel="noreferrer" class="btn btn-fh p-3">Brochure </a></span>
            <span><a class="  active-fh  btn btn-fh p-3" href="globalpartnerships.php">Global Partnerships </a></span>
            <span><a class="  btn btn-fh p-3" href="contactUs.php">Contact us </a></span></div>
      </div>
    </div>
    <div class="row"></div>
  </div>
</div>
   <main class="container-fluid" id="main_container">
  <section>
    <section>
      <div class="container-fluid">
        <div class="container ">
          <div class="row">
            <div class="col col-12 px-0 banner_image_div">
              <div class="banne_div_img"><img src="assets/global.jpg" alt="home_banner"></div>
              <div id="left_container" class="left_container">
                <div class="vison_top_heading_container text-left">
                  <div class="row flex-col mx-4 text-left color11 mt-16">
                    <div class="col-lg-12 col-sm-10 bg-light vison_heading1">
                      <h1 class="" id="heading_vision"> Global</h1>
                    </div>
                    <div class="col-12 bg-light my-2 vison_heading1">
                      <h2>Partnerships</h2>
                    </div>
                    <p class="text-light py-4 text-xl vison_top_para">Committed to Indian Steel Industry. Stewards for safety and sustainability.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="container py-4 vision_container">
      <h1 class="text-center text-3xl color11">Global Partnerships</h1>
      <p class="py-4 text-xl text-left vision_para">
      <p><p>The Indian Steel Association (ISA) believes in thinking local and going fully global. The Association has forged global partnerships to help ensure India remains at the forefront of world steel production and supply. ISA’s global outreach extends to being an active member of the World Steel Association (WSA) and further to collaborating with sister organizations in Asia. ISA works with China Iron and Steel Association (CISA), Korean Iron and Steel Association (KOSA), Japan Iron &amp; Steel Federation (JISF), ASEAN Iron and Steel Council (AISC), Vietnam Steel Association (VSA), National Committee for Steel Industry Saudi Arabia (NSCI) and the World Coal Association (WCA). ISA has signed MoUs and pledged cooperation in trade and technology exchange with these associations.</p><p>&nbsp;</p><p>ISA also has networking meetings with bodies such as the Port of Antwerp, Belgium to map out areas of mutual interest and build the road for future action. Going ahead, ISA raises the concerns of the Indian steel industry at all global forums, speaking out on matters impacting India’s concerns.</p></p>
      </p>
      <div class="row px-8 d-flex justify-content-between">
        <div class="col-12 description_box" id="mission"></div>
      </div>
    </div>
  </section>
</main>




<?php include "footer.php" ?>
