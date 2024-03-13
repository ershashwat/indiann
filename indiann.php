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

<main class="container-fluid" id="main_container">

<div class="in_the_news_div row p-5">
        <div class="container">
            <h2 class="">Recent Update and Notification</h2>
            <div class="row">
                <div class="container">
                    <div class="owl-carousel owl-example owl-loaded owl-drag">

                        <?php
                        $sl = 0;

                        $data = $db->query("SELECT * FROM `about-index` ORDER BY id ASC");
                        if (!empty($data) && $data->num_rows > 0) {
                            while ($value = $data->fetch_object()) {
                                $sl++;
                        ?>

                                <div>
                                    <div class="card in_the_news_card">
                                        <img src="<?php echo 'images/' . $value->image; ?>" alt="Card cap" style="height:250px">
                                        <div class="card-body">
                                            <button class="float-right fw-bold in_the_news_date">02 June, 2023</button>
                                            <h4 class="card-title text-left pt-2"><?php echo !empty($value->editor1) ? $value->editor1 : ''; ?></h4>
                                            <div class="text-right">
                                                <a href="https://www.thehindubusinessline.com/markets/commodities/steel-mills-call-for-rationalisation-of-gst-rates-on-raw-materials-by-products/article66920510.ece" target="_blank" rel="noreferrer" class="btn btn-primary in_the_news_btn">
                                                    Read More &nbsp;
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
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




  <div class="section">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="home-carosal-wrap">
            <div id="sync1" class="owl-carousel owl-theme">
              <div class="item">
                <section>
                  <div class="container-fluid">
                    <div class="containe home_banner_container px-0">
                      <div class="row">

                        <div class="col col-12 px-0 banner_image_div">
                          <div class="banne_div_img"><img class="h-100" src="assets/ban1.jpg" alt="home_banner"></div>
                          <div class="bans">
                                <h3>
                                    <span>CII Webinar on whats next in steel</span>
                                </h3>
                                <p>Steel industry raises concerns over EU's carbon border tax with govt Steel industry raises concerns over EU's carbon border tax with govt</p>
                                <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                                    Read More
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="item">
                <section>
                  <div class="container-fluid">
                    <div class="containe home_banner_container px-0">
                      <div class="row">
                        <div class="col col-12 px-0 banner_image_div">
                          <div class="banne_div_img"><img class="h-100" src="assets/ban2.jpg" alt="home_banner"></div>
                           <div class="bans">
                                <h3>
                                    <span>CII Webinar on whats next in steel</span>
                                </h3>
                                <p>Steel industry raises concerns over EU's carbon border tax with govt Steel industry raises concerns over EU's carbon border tax with govt</p>
                                <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                                    Read More
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="item">
                <section>
                  <div class="container-fluid">
                    <div class="containe home_banner_container px-0">
                      <div class="row">
                        <div class="col col-12 px-0 banner_image_div">
                          <div class="banne_div_img"><img class="h-100" src="assets/ban1.jpg" alt="home_banner"></div>
                          <div class="bans">
                                <h3>
                                    <span>CII Webinar on whats next in steel</span>
                                </h3>
                                <p>Steel industry raises concerns over EU's carbon border tax with govt Steel industry raises concerns over EU's carbon border tax with govt</p>
                                <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                                    Read More
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="item">
                <section>
                  <div class="container-fluid">
                    <div class="containe home_banner_container px-0">
                      <div class="row">
                        <div class="col col-12 px-0 banner_image_div">
                          <div class="banne_div_img"><img class="h-100" src="assets/ban1.jpg" alt="home_banner"></div>
                           <div class="bans">
                                <h3>
                                    <span>CII Webinar on whats next in steel</span>
                                </h3>
                                <p>Steel industry raises concerns over EU's carbon border tax with govt Steel industry raises concerns over EU's carbon border tax with govt</p>
                                <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                                    Read More
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="item">
                <section>
                  <div class="container-fluid">
                    <div class="containe home_banner_container px-0">
                      <div class="row">
                        <div class="col col-12 px-0 banner_image_div">
                          <div class="banne_div_img"><img class="h-100" src="assets/ban1.jpg" alt="home_banner"></div>
                          <div class="bans">
                                <h3>
                                    <span>CII Webinar on whats next in steel</span>
                                </h3>
                                <p>Steel industry raises concerns over EU's carbon border tax with govt Steel industry raises concerns over EU's carbon border tax with govt</p>
                                <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                                    Read More
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
              <div class="item">
                <section>
                  <div class="container-fluid">
                    <div class="containe home_banner_container px-0">
                      <div class="row">
                        <div class="col col-12 px-0 banner_image_div">
                          <div class="banne_div_img"><img class="h-100" src="assets/ban1.jpg" alt="home_banner"></div>
                           <div class="bans">
                                <h3>
                                    <span>CII Webinar on whats next in steel</span>
                                </h3>
                                <p>Steel industry raises concerns over EU's carbon border tax with govt Steel industry raises concerns over EU's carbon border tax with govt</p>
                                <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                                    Read More
                                    <i class="fa-solid fa-angle-right"></i>
                                </button>
                            </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4">

          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
              <li data-target="#demo" data-slide-to="0" class="active"></li>
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            </ul>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <div style="background: #e9782f; height:358px">
                  <div class="bans">
                    <h3>
                      <span>CII Webinar on whats next in steel</span>
                    </h3>
                    <p>Steel industry raises concerns over EU's carbon border tax with govt.</p>
                    <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                      Read More
                      <i class="fa-solid fa-angle-right"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div style="background: #e9782f; height:358px">
                  <div class="bans">
                    <h3>
                      <span>CII Webinar on whats next in steel</span>
                    </h3>
                    <p>Steel industry raises concerns over EU's carbon border tax with govt.</p>
                    <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                      Read More
                      <i class="fa-solid fa-angle-right"></i>
                    </button>
                  </div>
                </div>
              </div>
              <div class="carousel-item">
                <div style="background: #e9782f; height:358px">
                  <div class="bans">
                    <h3>
                      <span>CII Webinar on whats next in steel</span>
                    </h3>
                    <p>Steel industry raises concerns over EU's carbon border tax with govt.</p>
                    <button class="float-left btn btn-light mt-2" id="home_banner_btn">
                      Read More
                      <i class="fa-solid fa-angle-right"></i>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>


        </div>
      </div>




      <div class="in_the_news_div row p-5">
        <div class="container">
            <h2 class="">Recent Updates</h2>
            <div class="row">
                <div class="container">
                    <div class="owl-carousel owl-example">

                        <?php
                        $sl = 0;

                        $data = $db->query("SELECT * FROM `about-index` ORDER BY id ASC");
                        if (!empty($data) && $data->num_rows > 0) {
                            while ($value = $data->fetch_object()) {
                                $sl++;
                        ?>
                                <div>
                                    <div class="card in_the_news_card">
                                        <img src="<?php echo 'images/' . $value->image; ?>" alt="Card cap" style="height:250px">
                                        <div class="card-body">
                                            <button class="float-right fw-bold in_the_news_date">02 June, 2023</button>
                                            <h4 class="card-title text-left pt-2"><?php echo !empty($value->editor1) ? $value->editor1 : ''; ?></h4>
                                            <div class="text-right">
                                                <a href="#" target="_blank" rel="noreferrer" class="btn btn-primary in_the_news_btn">
                                                    Read More &nbsp;
                                                    <i class="fa-solid fa-angle-right"></i>
                                                </a>
                                            </div>
                                        </div>
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




      <div class="insight_div row p-5">
        <div class="container">
          <h2 class="insight_h2"> Insights</h2>
          <div class="row">

          <?php
                $data = $db->query("SELECT * FROM `insights` WHERE `status`='1' ORDER BY id ASC");
                if (!empty($data) && $data->num_rows > 0) {
                    while ($value = $data->fetch_object()) {
                ?>


<div class="col-lg-4 col-md-6 col-sm-12">
                            <div class="card insight_card my-2">
                                <img class="card-img-top" src="<?php echo 'images/' . $value->image; ?>" alt="Card_image_cap"  style="height: <?php echo !empty($value->editor1) ? 'auto': '449px'; ?>;width:100%;object-fit:cover">
                                <div class="card-body text-left" style="display: <?php echo !empty($value->editor1) ? 'block': 'none'; ?>">
                                    <!-- <h4 class="card-title">Life cycle thinking</h4> -->
                                    <p class="card-text">
                                        <?php echo !empty($value->editor1) ? $value->editor1 : ''; ?>
                                    </p>
                                    <a href="#" class="btn btn-primary in_the_news_btn float-right mt-2">Read More</a>
                                </div>
                            </div>
                        </div>
            <!-- <div class="col-lg-4 col-md-6 col-sm-12 pl-8 pr-0 insight_twitter_container">
              <div class="twitter_timeline my-2 twitter_loading_box">
                <div></div>
              </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12"><a href="knowledgeBank/podcast.html" target="_blank">
                <div class="card insight_card my-2" id="podcast_container"><img src="assets/insigtht1.jpg" class="img-fluid rounded-top" alt="" style="height: 450px;"></div>
              </a></div> -->

              <?php
                    }
                }
                ?>

          </div>
        </div>
      </div>
      <!-- <div class="container py-5">
    <h2 class="pb-4"> What We Do?</h2>
    <div class="what_we_do row justify-content-center">
      <div class="col col-12">
        <div class="row">
          <div class="bg11 we_do_box col-lg-3 col-md-6 col-sm-12">
            <h4 class=""> Promoting Steel </h4>
            <p> Steel has many advantages as a construction material. Not only is it strong, durable, and flexible, but also aesthetical. </p>
            <p></p>
            <p class="mt-4"><img src="assets/setting.png" alt="icons"></p>
            <a class="btn btn-primary m-3 d-none" href="ourWork/aa.html">Read More </a>
          </div>
          <div class="bg12 we_do_box col-lg-3 col-md-6 col-sm-12">
            <h4 class=""> Working With Government </h4>
            <p> ISA is in close touch with the Government on matters affecting the steel industry. </p>
            <p></p>
            <p class="mt-4"><img src="assets/work.png" alt="icons"></p>
            <a class="btn btn-primary m-3 d-none" href="ourWork/aa.html">Read More </a>
          </div>
          <div class="bg13 we_do_box col-lg-3 col-md-6 col-sm-12">
            <h4 class=""> Spreading The Word </h4>
            <p> In addition to its workshops, seminars and other events, the ISA plays a critical role in disseminating information. </p>
            <p></p>
            <p class="mt-4"><img src="assets/voice.png" alt="icons"></p>
            <a class="btn btn-primary m-3 d-none" href="ourWork/aa.html">Read More </a>
          </div>
          <div class="bg14 we_do_box col-lg-3 col-md-6 col-sm-12">
            <h4 class=""> Acting Globally </h4>
            <p> As well as being an active member of the WSA, ISA also works with sister organizations in Asia such as China. </p>
            <p></p>
            <p class="mt-4"><img src="assets/map.png" alt="icons"></p>
            <a class="btn btn-primary m-3 d-none" href="ourWork/aa.html">Read More </a>
          </div>
        </div>
      </div>
    </div>
  </div> -->
</main>


<style>
  .home-carosal-wrap {
    width: 100% !important;
  }

  .banner_image_div {
    overflow: hidden;
    padding-top: 50% !important;
  }
  
  .bans {
    position: absolute;
    top: 33px;
    left: 50px;
    width: 70%;
}
.bans h3 span {
    background: #fff;
    padding: 12px;
    display: inline-block;
    font-size: 25px;
}
.bans p {
    color: #fff;
    font-size: 16px;
}
.btn-light {
    color: #212529;
    background-color: #f8f9fa;
    border-color: #f8f9fa;
}
.btn {
    display: inline-block;
    font-weight: 400;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    border: 1px solid transparent;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    border-radius: 0.25rem;
    transition: color .15s ease-in-out,background-color .15s ease-in-out,border-color .15s ease-in-out,box-shadow .15s ease-in-out;
}
</style>

<?php include "footer.php" ?>