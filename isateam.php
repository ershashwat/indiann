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
                <a href="../index.html"><span> Home &gt;Committees </span></a><span class="italic py-4"> </span>
              </div>
            </div>
          </button>
        </div>
      </div>
      <!-- <div class="text-right col col-10">
        <div class="submenu"><span><a class="btn btn-fh p-3 active-fh " href="apexCommittee.html">Apex Committee </a></span>
          <span><a class="btn btn-fh p-3 " href="workingcommittee.php">Working Committee </a></span>
          <span><a class="btn btn-fh p-3 " href="procurement.html">Other Committees </a></span>
          <span><a class="btn btn-fh p-3 " href="vishakhaCommittee.html">Vishakha Committee </a></span>
          <span><a class="btn btn-fh p-3 " href="affiliateMembers.html">Affiliate Members </a></span>
        </div>
      </div> -->
    </div>
    <div class="row"></div>
  </div>
</div>
<main class="container-fluid" id="main_container">
  <div class="container text-left">
    <div class="row">
      <!-- <div class="col col-lg-3 col-12 col-md-3">
        <ul>
          <li class="left_menu" style="list-style-type: none;"><a id="left_menu_link" href="apexCommittee.html"><span> Apex Committee </span></a></li>
          <li class="left_menu" style="list-style-type: none;"><a id="left_menu_link" href="workingCommittee.html"><span> Working Committee </span></a></li>
          <li class="left_menu" style="list-style-type: none;">
            <details open="">
              <summary> Other Committees </summary>
              <ul id="submenu_ul" class="ml-4">
                <li class="left_menu"> <a id="left_menu_link" href="procurement.html"> Procurement</a> </li>
                <li class=" left_menu"> <a id="left_menu_link" href="communication.html"> Communication </a> </li>
                <li class="left_menu"> <a id="left_menu_link" href="rawMaterials.html"> Raw Materials</a> </li>
                <li class="left_menu"> <a id="left_menu_link" href="regulatory.html"> Trade & Regulatory </a> </li>
                <li class="left_menu"> <a id="left_menu_link" href="economics.html"> Economics</a> </li>
                <li class="left_menu"> <a id="left_menu_link" href="environment.html"> Environment </a> </li>
                <li class="left_menu"> <a id="left_menu_link" href="healthAndSafety.html"> Health &amp; Safety</a> </li>
                <li class="left_menu"> <a id="left_menu_link" href="secc.html"> Sustainability, Energy &amp; Climate Change</a> </li>
              </ul>
            </details>
          </li>
          <li class="left_menu" style="list-style-type: none;"><a id="left_menu_link" href="vishakhaCommittee.html"><span> Vishakha Committee </span></a></li>
          <li class="left_menu" style="list-style-type: none;"><a id="left_menu_link" href="affiliateMembers.html"><span> Affiliate Members </span></a></li>
        </ul>
      </div> -->
      <div class="col col-lg-12 col-12 col-md-12  pr-1">
        <div class="description_box">

                                  <?php
                                    $data1 = $db->query("SELECT * FROM `isa-team-about` ORDER BY id DESC");
                                      $value1 = $data1->fetch_object();
                                    ?>
          <!-- <h1 class="apex">Apex Committee </h1> -->
          <div>
            <p><?php echo !empty($value1->editor1) ? $value1->editor1 : ''; ?></p></br></br>


            <p>Mr. Dilip Oommen, CEO, AM/NS & Executive VP, ArcelorMittal, is currently the President of ISA and Chair of the Apex Committee.</p></br></br>

            <p>The composition of the Apex Committee/Governing Body of the Indian Steel Association is as follows</p>
          </div>
          <div class="row p-0 py-2 px-3">
            
          <!-- 1st modal -->
          
          <?php 
          $data21 = $db->query("SELECT * FROM `isa-team` WHERE `status`='1' ORDER BY id DESC ");
          $sl=0;
         while ($value2 = $data21->fetch_object()) {
             $sl++;
          
          ?>
          
            <div class="modal" id="myModal<?php echo $sl; ?>">
                
              <div class="modal-dialog">
                <div class="modal-content" style="background-color: var(--color14);">
                  <div class="modal-body">
                    <div class="container bg14 text-light">
                      <div class="row float-right cursor-pointer m-2 contact_details_close_btn">
                        <button type="button" class="close" data-dismiss="modal" style="border: solid 2px #fff; opacity: 1; padding: 0; width: 30px; height: 30px; border-radius: 50px; color: #fff; font-size: 19px; font-weight: 400;">&times;</button>
                      </div>
                      <!--start-->
                      
                       
                      <div class="row px-12 py-4 scrollbar_row_container">
                        <div class="row" id="content_div">
                            
                            <?php
                             if($sl==1){
                                 $data2 = $db->query("SELECT * FROM `isa-team` WHERE `status`='1' ORDER BY id DESC LIMIT 1 ");
                              
                          
                          }else{
                               $data2 = $db->query("SELECT * FROM `isa-team` WHERE `status`='1' ORDER BY id DESC LIMIT 1, 2");
                          }
                          
                            while ($value2 = $data2->fetch_object()) { ?>
                                
                          <div class="col-lg-4 col-md-6 col-sm-12 h-100 scrollbar_main_img_col">
                            <img class="" src="<?php echo 'images/' . $value2->image; ?>" alt="">
                            <!--<h3 class="text-left text-light">Mr. Dilip Oommen</h3>-->
                            <p class="text-left"><?php echo !empty($value2->editor1) ? $value2->editor1 : ''; ?></p>
                          </div>
                           
                          <div class="col-lg-8 col-md-6 col-sm-12">
                            <div class="scrollbar_container">
                              <p<p><?php echo !empty($value2->editor2) ? $value2->editor2 : ''; ?></p>
                                <p></p>
                              </p<p>
                            </div>
                          </div>
                           <?php
                            }
                            
                          ?>
                        </div>
                       
                        <hr class="w-100 my-2">
                        <div class="container">
                          <div class="row">

                            <div class="owl-carousel owl-theme owl-loaded owl-drag">
                              <div class="owl-stage-outer">
                                <div class="owl-stage">


                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="18">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/dilip.jpg" alt="ISA Member Contact"></div>
                                      Mr. Dilip Oommen
                                    </div>
                                  </div>

                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="17">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/sajjan.png" alt="ISA Member Contact"></div>
                                      Mr. Sajjan Jindal
                                    </div>
                                  </div>

                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="16">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/2.png" alt="ISA Member Contact"></div>
                                      Mr. T.V. Narendran
                                    </div>
                                  </div>
                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="15">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/23.png" alt="ISA Member Contact"></div>
                                      Mr. Amarendu Prakash
                                    </div>
                                  </div>

                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="14">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/24.png" alt="ISA Member Contact"></div>
                                      Mr Naveen Jindal
                                    </div>
                                  </div>

                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="13">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/25.png" alt="ISA Member Contact"></div>
                                      Mr. Atul Bhatt
                                    </div>
                                  </div>

                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="2">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/26.png" alt="ISA Member Contact"></div>
                                      Mr. Rajeev Singhal
                                    </div>
                                  </div>

                                  <div class="owl-item active memberclick" style="width: 126.069px;" data-id="1">
                                    <div class=" col-12 mx-1">


                                      <div class="contact_card_carousel_img"><img src="assets/27.png" alt="ISA Member Contact"></div>
                                      Mr. Anil Kumar Singh
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
                     
                      <!--end-->
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--Modal end-->
            <?php }  ?>


   <?php 
          $data213 = $db->query("SELECT * FROM `isa-team` WHERE `status`='1' ORDER BY id DESC ");
          $sl=0;
         while ($value21 = $data213->fetch_object()) {
             $sl++;
          
          ?>

            <div class="col-lg-6 col-md-6 col-12 contact_card_main_col">

              <span data-toggle="modal" data-target="#myModal<?php echo $sl; ?>" class="memberclick" data-id="18">
            
                <div class="contact_card_div">
                  <div class="contact_card ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                                <div class="row">
                          <?php
                          $cnt = 0;
                          if($sl==1){
                              
                          $data = $db->query("SELECT * FROM `isa-team` WHERE `status`='1' ORDER BY id DESC LIMIT 1");
                          }
                          else{
                              
                              $data = $db->query("SELECT * FROM `isa-team` WHERE `status`='1' ORDER BY id DESC LIMIT 1, 2");
                          }
                          if ($data->num_rows > 0) {
                            while ($value = $data->fetch_object()) {
                              $cnt++;
                              if ($cnt % 2 == 1) {
                                echo '</div><div class="row contact_card_inner_row">';
                              }
                                ?>
                                  <div class="col col-6 contact_card_left_div">
                                    <div class="img_div "><img src="<?php echo 'images/' . $value->image; ?>" alt="ISA Member Contact"></div>
                                  </div>
                                   
                                  <div class="col col-6 contact_card_right_div right_div"style="z-index: 1;">
                                      <div class="arrow_icon"></div> 
                                    <div style="z-index: 2;">
                                      <!-- <h1>Mr. Dilip Oommen</h1> -->
                                      <h2 class="italic contact_card_desig"> <td><?php echo !empty($value->editor1) ? $value->editor1 : ''; ?></td></h2>
                                    </div>
                                  </div>
<?php
                            }
                          }
                          ?>
                          </div>
                      </div>
                      
                    </div>


                  </div>
                </div>
             
              </span>
            </div>
            <?php }  ?>








            
            <!-- <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal2" class="memberclick" data-id="17">
                <div class="contact_card_div">
                  <div class="contact_card ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                        <div class="row contact_card_inner_row">
                          <div class="col col-6 contact_card_left_div">
                            <div class="img_div "><img src="assets/1.png" alt="ISA Member Contact"></div>
                          </div>
                          <div class="arrow_icon"></div>
                          <div class="col col-6 contact_card_right_div right_div">
                            <div class=" ">
                              <h1>Mr. Sajjan Jindal</h1>
                              <h2 class="italic contact_card_desig">Chairman, JSW Group</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </span> </div>

            <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="16">
                <div class="contact_card_div">
                  <div class="contact_card  md_h_flip ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                        <div class="row contact_card_inner_row">
                          <div class="col col-6 contact_card_left_div">
                            <div class="img_div  md_h_flip "><img src="assets/22.png" alt="ISA Member Contact"></div>
                          </div>
                          <div class="arrow_icon"></div>
                          <div class="col col-6 contact_card_right_div right_div">
                            <div class="  md_h_flip ">
                              <h1>Mr. T.V. Narendran</h1>
                              <h2 class="italic contact_card_desig">CEO and MD, Tata Steel</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </span> </div>

            <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="15">
                <div class="contact_card_div">
                  <div class="contact_card  md_h_flip ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                        <div class="row contact_card_inner_row">
                          <div class="col col-6 contact_card_left_div">
                            <div class="img_div  md_h_flip "><img src="assets/23.png" alt="ISA Member Contact"></div>
                          </div>
                          <div class="arrow_icon"></div>
                          <div class="col col-6 contact_card_right_div right_div">
                            <div class="  md_h_flip ">
                              <h1>Mr. Amarendu Prakash</h1>
                              <h2 class="italic contact_card_desig">Chairman, SAIL</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </span> </div>

            <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="14">
                <div class="contact_card_div">
                  <div class="contact_card ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                        <div class="row contact_card_inner_row">
                          <div class="col col-6 contact_card_left_div">
                            <div class="img_div "><img src="assets/24.png" alt="ISA Member Contact"></div>
                          </div>
                          <div class="arrow_icon"></div>
                          <div class="col col-6 contact_card_right_div right_div">
                            <div class=" ">
                              <h1>Mr Naveen Jindal</h1>
                              <h2 class="italic contact_card_desig">Chairman, Jindal steel &amp; Power (JSP)</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </span> </div>

            <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="13">
                <div class="contact_card_div">
                  <div class="contact_card ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                        <div class="row contact_card_inner_row">
                          <div class="col col-6 contact_card_left_div">
                            <div class="img_div "><img src="assets/25.png" alt="ISA Member Contact"></div>
                          </div>
                          <div class="arrow_icon"></div>
                          <div class="col col-6 contact_card_right_div right_div">
                            <div class=" ">
                              <h1>Mr. Atul Bhatt</h1>
                              <h2 class="italic contact_card_desig">CMD, RINL-VSP</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </span> </div>

            <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="2">
                <div class="contact_card_div">
                  <div class="contact_card  md_h_flip ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                        <div class="row contact_card_inner_row">
                          <div class="col col-6 contact_card_left_div">
                            <div class="img_div  md_h_flip "><img src="assets/26.png" alt="ISA Member Contact"></div>
                          </div>
                          <div class="arrow_icon"></div>
                          <div class="col col-6 contact_card_right_div right_div">
                            <div class="  md_h_flip ">
                              <h1>Mr. Rajeev Singhal</h1>
                              <h2 class="italic contact_card_desig"></h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </span> </div>

            <div class="col-lg-6 col-md-6 col-12 contact_card_main_col"><span data-toggle="modal" data-target="#myModal" class="memberclick" data-id="1">
                <div class="contact_card_div">
                  <div class="contact_card  md_h_flip ">
                    <div class="card">
                      <div class="card-body contact_card_body">
                        <div class="row contact_card_inner_row">
                          <div class="col col-6 contact_card_left_div">
                            <div class="img_div  md_h_flip "><img src="assets/27.png" alt="ISA Member Contact"></div>
                          </div>
                          <div class="arrow_icon"></div>
                          <div class="col col-6 contact_card_right_div right_div">
                            <div class="  md_h_flip ">
                              <h1>Mr. Anil Kumar Singh</h1>
                              <h2 class="italic contact_card_desig">Director &amp; Occupier, JSW Bhushan Power &amp; Steel Ltd.</h2>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </span> </div> -->

          </div>
        </div>
    </div>
  </div>
</main>
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



<?php include "footer.php"; ?>