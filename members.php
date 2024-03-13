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
              <a href="index.html"><span> Home &gt;Members </span></a><span class="italic py-4"> </span></div>
          </div>
          </button>
        </div>
      </div>
      <div class="text-right col col-10">
        <div class="submenu"><span>
            
               
      
      
            <a class="active-fh btn btn-fh p-3" href="MemberExecutive.php">Executive Members </a></span>
            <span><a class="btn btn-fh p-3" href="MemberAffiliate.php">Affiliate Members </a></span>
            <span><a class="btn btn-fh p-3" href="MemberAssociate.php">Associate Members</a></span>
         </div>
      </div>
    </div>
    <div class="row"></div>
  </div>
</div>
  <main class="container-fluid" id="main_container">
  <section>
    <div class="container-fluid">
      <div class="container ">
        <div class="row">
          <div class="col col-12 px-0 banner_image_div">
            <div class="banne_div_img"><img src="assets/ourmembers.jpg" alt="home_banner"></div>
            <div id="left_container" class="left_container">
              <div class="vison_top_heading_container text-left">
                <div class="row flex-col mx-4 text-left color11 mt-16">
                  <div class="col-lg-12 col-sm-10 bg-light vison_heading1">
                    <h1 class="" id="heading_vision"> Our </h1>
                  </div>
                  <div class="col-12 bg-light my-2 vison_heading1">
                    <h2>Members</h2>
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
  <div class="container">
    <div class="row my-4 mx-1">
      <h1> Our Members</h1>
    </div>
    <div class="row my-2 mx-1 description_box">
      <div>
        <p>
        <p>Indian Steel Association brings together the who's who of the Indian steel industry on a common platform and drives the growth of the sector through innovation and a collective approach. Being an industry body, the Association comprises Executive members, Affiliate members, and Associate members.</p><p>&nbsp;</p><p>The Indian Steel Association, which represents about 65 percent of crude steel production in the country, has 16 members: 7 Executives (all major steel players of India are executive members of ISA), 7 Affiliates, and 2 Associates.</p><p>&nbsp;</p><p>However, affiliate membership is open to:</p><ul><li>&gt; Producers of crude steel of less than 2,00,000 MTPA capacity</li><li>&gt; Industrial Associations</li><li>&gt; Association of Steel Manufacturers</li><li>&gt; Business Chambers</li><li>&gt; Research Bodies</li></ul><p>&nbsp;</p><p>&nbsp;</p>
        
        </p>
      </div>
    </div>
    <div class="row member_types">
      <div class="col col-lg-4 col-md-12"><a class="nav-link" href="members/MemberExecutive.html">Executive Members</a></div>
      <div class="col col-lg-4 col-md-12"><a class="nav-link" href="%7burl(%27members/MemberAffiliate%27)%7d%7d.html">Affiliate Members</a></div>
      <div class="col col-lg-4 col-md-12"><a class="nav-link" href="members/MemberAssociate.html">Associate Members</a></div>
    </div>
  </div>
</main>



<?php include "footer.php" ?>
