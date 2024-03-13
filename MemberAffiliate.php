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
              <a href="index.php"><span> Home &gt;Members </span></a><span class="italic py-4"> </span></div>
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
  
   <style>
@media (min-width: 576px){
	.modal-dialog {
    max-width: 810px;
    margin: 5rem auto;
	}}
	
	.owl-theme .owl-nav.disabled+.owl-dots {
    margin-top: 10px;
    display: block;
}.owl-theme .owl-dots {
    text-align: center;
    -webkit-tap-highlight-color: transparent;
    display: none;
}
</style>
 
  <div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content" style="background-color: var(--color14);"> 
     
      <div class="modal-body">
        <div class="container bg14 text-light">
          <div class="row float-right cursor-pointer m-2 contact_details_close_btn">
          
			  <button type="button" class="close" data-dismiss="modal" style="border: solid 2px #fff; opacity: 1; padding: 0; width: 30px; height: 30px; border-radius: 50px; color: #fff; font-size: 19px; font-weight: 400;">&times;</button>
          </div>
          <div class="row px-12 py-4 scrollbar_row_container">
            <div class="row" id="content_div">
            </div>
          
   
          </div>
        </div>
      </div>
      
      <!-- Modal footer --> 
      
    </div>
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
                    <h1 class="" id="heading_vision"> Affiliate </h1>
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
      <h1>Affiliate Members</h1>
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
              <td scope="row"><a class="nav-link" href="#"><img src="assets/photo_JSW-ISPAT-Special.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="#"> JSW Ispat Special Products Limited</a></h4></td>
              <td scope="row" class="link memberclick"  data-toggle="modal" data-target="#myModal"  data-id="Mr. Paresh Shah"><h4> Mr. Paresh Shah</h4></td>
              <td scope="row"><h4>Head of the Unit</h4></td>
            </tr>
                        <tr class="">
              <td scope="row"><a class="nav-link" href="#"><img src="assets/8.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="#"> Tata Steel Long Products Limited</a></h4></td>
              <td scope="row" class="link memberclick"  data-toggle="modal" data-target="#myModal"  data-id="Mr. Asish Anupam"><h4> Mr. Asish Anupam</h4></td>
              <td scope="row"><h4>Managing Director</h4></td>
            </tr>
                        <tr class="">
              <td scope="row"><a class="nav-link" href="executive/JSW-Steel-Ltd.html"><img src="assets/9.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="executive/JSW-Steel-Ltd.html"> Jindal Stainless Limited</a></h4></td>
              <td scope="row" class="link memberclick"  data-toggle="modal" data-target="#myModal"  data-id="Mr. Abhyuday Jindal"><h4> Mr. Abhyuday Jindal</h4></td>
              <td scope="row"><h4>Manging Director</h4></td>
            </tr>
                        <tr class="">
              <td scope="row"><a class="nav-link" href="executive/JSW-Steel-Ltd.html"><img src="assets/10.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="executive/JSW-Steel-Ltd.html"> Arjas Steel Private Limited</a></h4></td>
              <td scope="row" class="link memberclick"  data-toggle="modal" data-target="#myModal"  data-id="Mr. Sridhar Krishnamoorthy"><h4> Mr. Sridhar Krishnamoorthy</h4></td>
              <td scope="row"><h4>Whole Time Director and CEO</h4></td>
            </tr>
                        <tr class="">
              <td scope="row"><a class="nav-link" href="executive/JSW-Steel-Ltd.html"><img src="assets/11.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="executive/JSW-Steel-Ltd.html"> ESL Steel Limited</a></h4></td>
              <td scope="row" class="link memberclick"  data-toggle="modal" data-target="#myModal"  data-id="Mr. Ashish Gupta"><h4> Mr. Ashish Gupta</h4></td>
              <td scope="row"><h4>CEO</h4></td>
            </tr>
                        <tr class="">
              <td scope="row"><a class="nav-link" href="executive/JSW-Steel-Ltd.html"><img src="assets/12.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="executive/JSW-Steel-Ltd.html"> Orissa Metaliks Private Limited</a></h4></td>
              <td scope="row" class="link memberclick"  data-toggle="modal" data-target="#myModal"  data-id="Mr. Sanjib Patwari"><h4> Mr. Sanjib Patwari</h4></td>
              <td scope="row"><h4>Promoter</h4></td>
            </tr>
                        <tr class="">
              <td scope="row"><a class="nav-link" href="executive/JSW-Steel-Ltd.html"><img src="assets/14.jpg" width="40px"></a></td>
              <td scope="row"><h4><a class="nav-link" href="executive/JSW-Steel-Ltd.html"> Rungta Mines Limited</a></h4></td>
              <td scope="row" class="link memberclick"  data-toggle="modal" data-target="#myModal"  data-id="Mr. Siddharth Rungta"><h4> Mr. Siddharth Rungta</h4></td>
              <td scope="row"><h4>Chairman</h4></td>
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
<script src="../../code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function() {
    $('.memberclick').on('click', function() {
        
        id = $(this).data('id');
        
        type = 3;
           $.ajax({
       type:'POST',
       url:'https://indsteel.org/userdata',
    
      data: {
       type : type,
        id : id,
        
         
     },
       success:function(data){

        
        $('#content_div').html(data); 
     
       }
   });
    });
});
</script>


<?php include "footer.php" ?>




