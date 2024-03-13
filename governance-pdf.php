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
$type=$_REQUEST['type'];

 $data = $db->query("SELECT * FROM `manage-governance` WHERE `cs_type`='$type' ORDER BY id DESC");
 $value1 = $data->fetch_object()
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
        <div class="submenu"><span><a class="btn btn-fh p-3 active-fh " href="apexCommittee.php">Apex Committee </a></span>
          <span><a class="btn btn-fh p-3 " href="#">Working Committee </a></span>
          <span><a class="btn btn-fh p-3 " href="#">Vishakha Committee </a></span>
          <span><a class="btn btn-fh p-3 " href="#">Other Committees </a></span>

        </div>
      </div>
    </div>
    <div class="row"></div>
  </div>
</div>


<main class="container">
  <div class="row mt-4 steel_trends">

    <div class="col-md-12">
      <h2 style="margin-bottom:0px; padding-bottom: 10px;">View PDF</h2>
      <!-- <p style="margin-bottom:20px !important">The 2022 Annual General Meeting of Members 2022 was held in Brussels on 18 October 2022.</p> -->

      <div class="flex flex-column mb-5 mt-4 faq-section">
        <div class="row">
          <div class="col-md-12">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="heading-1">
                  <h5 class="mb-0">
                    
                    <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1"> <?php echo ($value1->cs_type) ? $value1->cs_type : ''; ?></a>
                  </h5>
                </div>
                <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
                  <div class="card-body">
                    <table width="100%" border="1" cellpadding="5" cellspacing="0">
                      <tbody>
                      <?php
      while($value = $data->fetch_object())
        {
         
        //  echo  $pdfLink=$value->pdf_file;
        ?>
                        <tr>
                          <div class="col-md-12">
                          <td><img src="assets/pdf1.png"></td>
                          <td><?php echo !empty($value->title) ? $value->title : ''; ?> </td>
                          <td>
                              <?php
                                if (!empty($value->pdf_file)) {
                               ?>
                          <a href="pdf_files/<?php echo $value->pdf_file; ?>" target="_blank">View PDF</a>
                          <br>
                          <?php
                          } else {
                          echo "No PDF available";
                          }
                        }
                          ?>
                          </td>
                        </tr>







                        <!-- <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Item 3 Safety overview </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Resolutions (for approval via online voting) APPROVED </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Agenda (revised version 19 September) </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Item 3 Safety overview </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Resolutions (for approval via online voting) APPROVED </td>
                          <td>53 KB</td>
                        </tr> -->

                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              <!-- <div class="card">
                <div class="card-header" id="heading-2">
                  <h5 class="mb-0">
                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
                      Subject : 02 Meeting Logistics
                    </a>
                  </h5>
                </div>
                <div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
                  <div class="card-body">
                    <table width="100%" border="1" cellpadding="5" cellspacing="0">
                      <tbody>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Agenda (revised version 19 September) </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Item 3 Safety overview </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Resolutions (for approval via online voting) APPROVED </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Agenda (revised version 19 September) </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Item 3 Safety overview </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Resolutions (for approval via online voting) APPROVED </td>
                          <td>53 KB</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div> -->

              <!-- <div class="card">
                <div class="card-header" id="heading-3">
                  <h5 class="mb-0">
                    <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-2">
                      Subject : 03 Minutes, Exhibits & Annexes
                    </a>
                  </h5>
                </div>
                <div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
                  <div class="card-body">
                    <table width="100%" border="1" cellpadding="5" cellspacing="0">
                      <tbody>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Agenda (revised version 19 September) </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Item 3 Safety overview </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Resolutions (for approval via online voting) APPROVED </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Agenda (revised version 19 September) </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Item 3 Safety overview </td>
                          <td>53 KB</td>
                        </tr>
                        <tr>
                          <td><img src="assets/pdf1.png"></td>
                          <td>2022 AGM Resolutions (for approval via online voting) APPROVED </td>
                          <td>53 KB</td>
                        </tr>

                      </tbody>
                    </table>
                  </div>
                </div>
              </div> -->
            </div>
          </div>

        </div>
      </div>



    </div>
  </div>
</main>

<style>
  .card-header {
    padding: 0.75rem 1.25rem;
    margin-bottom: 0;
    background-color: rgb(7 123 231);
    color: white;
    border-bottom: 1px solid rgba(0, 0, 0, .125);
  }

  .faq-section .mb-0>a {
    display: block;
    position: relative;
  }

  .faq-section .mb-0>a:after {
    content: "\f067";
    font-family: "Font Awesome 5 Free";
    position: absolute;
    right: 0;
    font-weight: 600;
  }

  .faq-section .mb-0>a[aria-expanded="true"]:after {
    content: "\f068";
    font-family: "Font Awesome 5 Free";
    font-weight: 600;
  }
</style>





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