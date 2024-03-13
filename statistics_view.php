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


$title=$_REQUEST['title'];

?>

<div class="sub_heading_menu container-fluid">
  <div class="container">
    <div class="row">
      <div class="col col-2">
        <div class="submenu">
          <button class="btn btn-nobg p-3">
            <div class="container">
              <div class="page_heading">
                <a href="../index.html"><span> Home &gt;Statistics </span></a><span class="italic py-4"> </span>
              </div>
            </div>
          </button>
        </div>
      </div>
      <div class="text-right col col-10">
        <div class="submenu"><span>
            <a class="btn btn-fh p-3 active-fh " href="steel-trends.php">Steel Data Viewer </a>
          </span><span><a class="btn btn-fh p-3 " href="#">Strategic Initiatives & Achievements </a></span>
          <!-- <span><a class="btn btn-fh p-3 " href="podcast.html">Podcast </a></span>
          <span><a class=" btn btn-fh p-3 " href="insights.html">ISA Insights </a>
          </span> -->
        </div>
      </div>
    </div>
    <div class="row"></div>
  </div>
</div>


<main class="container-fluid" id="main_container">
  <div class="row mt-4 steel_trends">
  <div class="col-md-3 px-4">
      <input type="hidden" id="name" value="13">
      <h4>Statistics</h4>
      <ul id="accordion">

        <li>

        <?php
        

        $data11 = $db->query("SELECT * FROM `manage-steel-category` ORDER BY cat_id ASC");
      while($value11 = $data11->fetch_object()) {

        ?>
        
          <p class="menu btn   active " id="menu4" data-toggle="collapse" data-target="#Economic Indicators_collapse_0" aria-expanded="true" aria-controls="Economic Indicators_collapse_0">
            
          <?php echo !empty($value11->cat_name) ? $value11->cat_name : ''; ?></p>
          <ul class="collapse multi-collapse" id="Economic Indicators_collapse_0">


          <?php
        

        $data13 = $db->query("SELECT * FROM `steel-category` WHERE `sc_catid`='".$value11->cat_id."' ORDER BY sc_id DESC");
      while($value13 = $data13->fetch_object()) {

        ?>
            <li class="show sub_menu  active  titleBlock" id="title" data-value="13" data-menuid="menu4">
              <i class="fa-solid fa-dot-circle mr-1 "></i><a href="statistics_view.php?sc_id=<?php echo $value13->sc_id; ?>"><?php echo !empty($value13->sc_title) ? $value13->sc_title : ''; ?></a>
            </li>
            <?php
        }
       
        ?>

    
          </ul>
          <?php
        }
        
        ?>
        </li>


      </ul>
    </div>
    <div class="col-md-9 filter_data"> 
        <!--<div href="#pdfone">-->
        <!--    <div class="trend-table-head">-->
        <!--        <a class="btn btn-secondary" href="https://admin.indsteel.org/storage/documents/steel_data/30092381500AMQuartely Economic Indicators (1).pdf">View PDF</a>-->
        <!--    </div>-->
        <!--    <div class="steel_trend_table">-->
        <!--      <p><strong>Monthly Economic Indicators</strong> - <strong>Click</strong> on the <strong>‘View PDF’</strong> for a detailed view.</p>-->
        <!--    </div>-->
        <!--</div>-->
        
        <!--<div href="#pdftwo">-->
        <!--    <div class="trend-table-head">-->
        <!--        <a class="btn btn-secondary" href="https://admin.indsteel.org/storage/documents/steel_data/30092381500AMQuartely Economic Indicators (1).pdf">View PDF</a>-->
        <!--    </div>-->
        <!--    <div class="steel_trend_table">-->
        <!--      <p><strong>Monthly Economic Indicators</strong> - <strong>Click</strong> on the <strong>‘View PDF’</strong> for a detailed view.</p>-->
        <!--    </div>-->
        <!--</div>-->

        <?php
				if (!empty($_REQUEST['sc_id'])) {
					$sc_id = $_REQUEST['sc_id'];
					$results = $db->query("SELECT * FROM `steel-category-details` WHERE scd_scid='$sc_id' AND `scd_status`='1'");
          if (!empty($results) && $results->num_rows > 0) {
					$value = $results->fetch_object();
          }
				}
        ?>
        <b><?php echo  $csname=$value->cs_name; ?></b>
      
                      <tr>
                  <td><?php echo !empty($value->title) ? $value->title : ''; ?></td>
                  <td>
                      <?php
                      if (!empty($value->pdf_file)) {
                      ?>
                      <iframe src="pdf_files/<?php echo $value->pdf_file; ?>" title="PDF" width="100%" style="height: 500px;"></iframe>
                      <?php
                      } else if (!empty($value->editor1)) {
                          echo $value->editor1;
                      } else {
                        ?>
                          <h2><?php echo "No Data Found"; ?></h2>
                          <?php
                      }
                      ?>
                  </td>
              </tr>



    </div>
  </div>
</main>
<script src="../../code.jquery.com/jquery-3.6.0.min.js"></script>

<input type="hidden" name="_token" value="obYqyxxmuhzfq1JbBnkTFjoOV3dW7bQdcKQeaEm9">


<script>
  $(document).ready(function() {
    filter_data();

    function filter_data() {
      $('.filter_data').html('<div id="loading"></div>');

      var name = $("#name").val();


      var token = $("input[name='_token']").val();
      var action = 'fetch_data';

      fetch("../fetch_data_steel_trends.html", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
            "X-CSRF-TOKEN": token, // You may need to adjust the header name
          },
          body: JSON.stringify({
            _token: token,
            action: action,
            name: name,

          }),
        })
        .then((response) => response.json())
        .then((data) => {
          $('.filter_data').html(data.product_list);
        })
        .catch((error) => {
          console.error("Fetch Error:", error);
        });
    }

    $(".titleBlock").click(function() {


      // Remove the "filter_active" class from all elements with the class "monthBlock"
      $(".titleBlock").removeClass("active");
      $(".menu").removeClass("active");

      const titleBlock = $(this).data("value");
      const menuid = $(this).data("menuid");

      // Add the "filter_active" class to the clicked element
      $(this).addClass("active");

      $("#" + menuid).addClass("active");

      $("#name").val(titleBlock);

      // Call the filter_data function here
      filter_data();
    });






  });
</script>
</main>




<?php include "footer.php" ?>