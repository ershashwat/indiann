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
            <span><a class="   btn btn-fh p-3" href="globalpartnerships.php">Global Partnerships </a></span>
            <span><a class=" active-fh  btn btn-fh p-3" href="contactUs.php">Contact us </a></span></div>
      </div>
    </div>
    <div class="row"></div>
  </div>
</div>

 
<main class="container-fluid" id="main_container">
  <div class="container-contact container py-8 my-4 px-28">
    <h1 class="">Contact Us</h1>
    <p class="py-2"> <b> Have some queries? </b> <br>
      Feel free to call or email us. We shall be happy to help.</p>
    <div class="row pt-8 container_contact_row">
      <div class="col-lg-5 col-md-4 col-sm-10 text-left contact_us_social">
        <li class="py-2"> <a href="tel:011 – 42668800"><i class="fa-solid fa-phone"></i> &nbsp;011–42668800</a> </li>
        <li class="py-2"> <a href="mailto:media.isa@indsteel.org"><i class="fa-solid fa-envelope"></i> &nbsp;media.isa@indsteel.org</a> </li>
        <li class="py-2"> <a href="mailto:media.isa@indsteel.org"><i class="fa-solid fa-envelope"></i> &nbsp;secretary.general@indsteel.org</a> </li>
        <li class="py-2"> <a href="tell:011 – 42668805"><i class="fa-solid fa-fax"></i> &nbsp;011–42668805</a> </li>
      </div>
      <div class="col-lg-5 col-md-4 col-sm-10 text-left w-100 about_contact_map">
        <iframe title="office_adress" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3501.9891599994653!2d77.2233140150363!3d28.63008698241872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cfd33c9f50295%3A0x7f74864d855f5a61!2sIndian%20Steel%20Association!5e0!3m2!1sen!2sin!4v1658485150160!5m2!1sen!2sin" width="600" height="450" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </div>
  </div>
</main>



<?php include "footer.php" ?>
