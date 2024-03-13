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
      <div class="col col-4">
        <div class="submenu">
          <div class="btn btn-nobg p-3">
            <div class="container">
              <div class="page_heading"> <a href="https://starwebmaker.us/"><span> Annual General Meeting 2022</span></a><span class="italic py-4"> </span></div>
            </div>
          </div>
        </div>
      </div>

    </div>
    <div class="row"></div>
  </div>
</div>
<main class="container">
  <div class="row mt-4 steel_trends">

    <div class="col-md-12">
      <h2 style="margin-bottom:0px; padding-bottom: 10px;">Annual General Meeting 2022</h2>
      <p style="margin-bottom:20px !important">The 2022 Annual General Meeting of Members 2022 was held in Brussels on 18 October 2022.</p>

      <div class="flex flex-column mb-5 mt-4 faq-section">
        <div class="row">
          <div class="col-md-12">
            <div id="accordion">
              <div class="card">
                <div class="card-header" id="heading-1">
                  <h5 class="mb-0">
                    <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
                      Subject : 01 Agenda & Agenda Items
                    </a>
                  </h5>
                </div>
                <div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
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
              </div>
              <div class="card">
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
              </div>

              <div class="card">
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
              </div>
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

<?php include "footer.php" ?>