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




$data = $db->query("SELECT * FROM `manage-governance` ORDER BY id DESC");

// echo"SELECT * FROM `manage-governance` WHERE `cs_type`='$id' ORDER BY id DESC"

?>

<div class="sub_heading_menu container-fluid">
      <div class="container">
        <div class="row">
          <div class="col col-4">
            <div class="submenu">
              <div class="btn btn-nobg p-3">
                <div class="container">
                  <div class="page_heading"> <a href="https://starwebmaker.us/"><span> Home &gt; Governance </span></a><span class="italic py-4"> </span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="text-right col col-8">
            <div class="submenu"> <span><a class="btn btn-fh p-3" href="Antitrust-guidelines.php">Antitrust Guidelines </a></span> <span><a class="active-fh btn btn-fh p-3" href="annual-general-meeting.php">Annual General Meeting </a></span> <span><a class="btn btn-fh p-3" href="charter&regulation.php">Charter & Regulations </a></span>  </div>
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
            <li><a href="Antitrust-guidelines.php" class="menu btn " >Antitrust Guidelines</a></li>
            <li><a href="annual-general-meeting.php" class="menu btn " >Annual General Meeting</a></li>
            <li><a href="charter&regulation.php" class="menu btn " >Charter & Regulations</a></li>
        
          </ul>
        </div>
        <div class="col-md-9">
          
        <div class="row">
       
       
       <?php
      while($value = $data->fetch_object())
        {
           $cstype=$value->cs_type;
           $pdfLink=$value->pdf_file;
        ?>
        <div class="col-md-3" style="margin-bottom:30px;">
          <!-- <a href="annual.php"> -->
            <div class="steel_trend_table" style="padding: 16px; box-shadow: 0px 0px 5px #ccc; border-radius: 10px;"> <img src="assets/pdf.png" style="width: 55px; border-radius: 10px; margin: auto; margin-bottom: 11px;">

            
              <p style="margin-bottom: 10px !important;"><strong><?php echo !empty($value->cs_name) ? $value->cs_name : ''; ?></strong></p>
              <!-- <button class="btn btn-secondary"><?php echo $cstype?></button> -->
              <!-- Assuming $pdfLink is the variable containing the link to your PDF file -->
              <button class="btn btn-secondary">
                  <a href="governance-pdf.php?type=<?php echo $cstype; ?>" target="_blank">View PDF</a>
              </button>

            </div>
          <!-- </a> -->
        </div>
        <?php
        }
        ?>
       
      </div>


        </div>
      </div>
    </main>
    <?php include "footer.php" ?>
