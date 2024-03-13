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
              <a href="../index.php"><span> Home &gt;Members </span></a><span class="italic py-4"> </span></div>
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
            <div class="banne_div_img"><img src="assets/ourmember.jpg" alt="home_banner"></div>
            <div id="left_container" class="left_container">
              <div class="vison_top_heading_container text-left">
                <div class="row flex-col mx-4 text-left color11 mt-16">
                  <div class="col-lg-12 col-sm-10 bg-light vison_heading1">
                    <h1 class="" id="heading_vision"> Associate </h1>
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
      <h1>Associate Members</h1>
    </div>
    <div class="row my-2 mx-1 description_box">
      <p>
      <div class="">
        <table class="table table-bordered">
          <thead>
          <th></th>
            <th></th>
            <th>Represented by</th>
            <th>Designation</th>
            </thead>
          <tbody>
                         <tr class="">
              <td scope="row"><a class="nav-link" href="#"><img src="assets/15.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="#"> Institute for Steel Development &amp; Growth (INSDAG)</a></h4></td>
              <td scope="row" class="link" data-toggle="modal" data-target="#exampleModal"><h4> Mr. P K Mishra</h4></td>
              <td scope="row"><h4>Director General</h4></td>
            </tr>
                        <tr class="">
              <td scope="row"><a class="nav-link" href="#"><img src="assets/16.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="#"> Karnataka Iron and Steel Manufacturer’s Association (KISMA)</a></h4></td>
              <td scope="row" class="link" data-toggle="modal" data-target="#exampleModal"><h4> Mr. P Murugan</h4></td>
              <td scope="row"><h4>President JSW and Representative of KISMA</h4></td>
            </tr>
                      </tbody>
        </table>
      </div>
      </p>
    </div>
    <div class="row member_types">
      <div class="col col-lg-4 col-md-12"><a class="nav-link" href="MemberExecutive.php">Executive Members</a></div>
      <div class="col col-lg-4 col-md-12"><a class="nav-link" href="MemberAffiliate.php">Affiliate Members</a></div>
      <div class="col col-lg-4 col-md-12"><a class="nav-link" href="MemberAssociate.php">Associate Members</a></div>
    </div>
  </div>
</main>



<?php include "footer.php" ?>
