<?php
// Initialize the session
session_start();

$page = 'dashboard';
require_once "include/connection/config.inc";
require_once "include/connection/functions.php";

 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
else {
  $usrId = $_SESSION["id"];
  //get all projects for display
  $user = "SELECT * FROM users WHERE id='$usrId'";
  $user_query = mysqli_query($con, $user) or die (mysqli_error());
  $rsuser = mysqli_fetch_assoc($user_query);
  $usr_code = usrCode($usrId);
}

$page_code =  $_GET['page_code'];
$pge = "SELECT * FROM page WHERE page_code='$page_code'";
$pge_query = mysqli_query($con, $pge) or die (mysql_error());
$rspge = mysqli_fetch_assoc($pge_query);


//get all projects for display
$meta = "SELECT * FROM meta WHERE title='$page'";
$meta_query = mysqli_query($con, $meta) or die (mysqli_error());
$rsmeta = mysqli_fetch_assoc($meta_query);
?>

<!DOCTYPE html>
<html lang="en">
<?php do { ?>
<head>
    <?php do { ?>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>African Codex : <?php echo $page;?></title>

  <meta name="keywords" content="<?php echo $rsmeta['keywords']; ?>" />
  <meta name="description" content="<?php echo $rsmeta['description']; ?>">
  <link rel="canonical" href="https://www.africancode.rw/" />
  <link rel="author" href="https://github.com/lawrence-sert" />
  <link rel="profile" href="https://github.com/lawrence-sert" />
  <meta name="author" content="https://www.africancode.rw/">


  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="SERT" />
  <meta property="og:description" content="SERT is a full on-line service company that provides our clients with web and mobile application development,
  IT consulting and outsourcing, Interface design and Handling existing IT projects. Based in Kigali Rwanda" />
  <meta property="og:url" content="https://www.africancode.rw/" />
  <meta property="og:site_name" content="SERT" />
  <meta property="og:image" content="https://www.africancode.rw/assets/seo/sert-logo-300x300.png" />
  <meta property="og:image:width" content="300" />
  <meta property="og:image:height" content="300" />

  <meta name="twitter:card" content="summary" />
  <meta name="twitter:description" content="<?php echo $rsmeta['twitter_description']; ?>" />
  <meta name="twitter:creator" content="@sertrw1" />
  <meta name="twitter:url" content="https://www.africancode.rw/" />
  <meta name="twitter:image" content="https://www.africancode.rw/assets/images/seo/twitter_image.png" />
  <?php } while($rsmeta = mysqli_fetch_assoc($meta_query)) ?>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="css/styles.css" rel="stylesheet" />
    <!-- global css file -->
    <link href="css/global/global.css" rel="stylesheet" type="text/css"/>
   <!-- my custom css  -->
    <link href="css/mine.css" rel="stylesheet" type="text/css"/>
    <!-- icon fonts style starts here  -->
    <link href="assets/themify/themify.css" rel="stylesheet" type="text/css"/>
    
    <!-- prism theme starts here  -->
  <link href="css/prism.css" rel="stylesheet" />

    <!-- project required files -->

    <!-- Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Quicksand&family=Ubuntu:wght@300&display=swap" rel="stylesheet">

</head>
<body>
  <?php 


$page_id = $rspge['page_id'];
$page_date = $rspge['page_date'];
$pagedate = strtotime( $page_date );
$p_date = date( 'Y-m-d H:i:s', $pagedate );
$page_type = $rspge['page_type'];
$page_name = $rspge['page_name'];
$page_short_description = $rspge['page_short_description'];
$page_description = $rspge['page_description'];
$language_id = $rspge['language_id'];
$page_code = $rspge['page_code'];
$user_code = $rspge['user_code'];


  ?>
    <div class="d-flex" id="wrapper">
        <!-- Sidebar-->
        <?php require_once'include/elements/sidebar.php';?>
        <!-- Page content wrapper-->
        <div id="page-content-wrapper">
            <!-- Top navigation-->
            <?php require_once'include/elements/navbar.php'; ?>


        <!-- Page content starts here -->
        <div class="container-fluid">
            

            <div class="row mt-5">

              <!-- drafted contents starts here  -->
              <div class="col-md-8 col-sm-12">

                <div class="row">
                  <div class="col-7">
                    <h1 class="g-font-size-20--md g-color--primary"><?php echo $page_name; ?></h1>
                  </div>

                  <div class="col-5">
                    <div class="row">
                      <div class="col-4">
                        <div class="d-grid gap-2">
                          <button class="btn btn-outline-secondary" type="button">
                            <span class="g-font-size-14--md">
                              <i class="g-padding-r-5--xs ti-notepad"></i> Add
                            </span>
                          </button>
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="d-grid gap-2">
                          <button class="btn btn-outline-secondary" type="button">
                            <span class="g-font-size-14--md">
                              <i class="g-padding-r-5--xs ti-notepad"></i> Files
                            </span>
                          </button>
                        </div>
                      </div>

                      <div class="col-4">
                        <div class="d-grid gap-2">
                          <button class="btn btn-outline-secondary" type="button">
                            <span class="g-font-size-14--md">
                              <i class="g-padding-r-5--xs ti-notepad"></i> Clone
                            </span>
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                
                <div class="scrollStyle mt-5">
                  <div class="row">
                    <div class="col-9 g-font-size-14--md">
                      <?php echo $rspge['page_description']; ?>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia,
                      molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum
                      numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium
                      optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis
                      obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam
                      nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit,
                      tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit,
                      quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos 
                      sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam
                      recusandae alias error harum maxime adipisci amet laborum. Perspiciatis 
                      minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit 

                    </div>


                    <div class="col-3">
                      <h6 class="g-font-size-14--md">
                        About
                        <span>
                          <a href="#" data-bs-toggle="modal" data-bs-target="#editPageModal">
                            <i class="g-padding-r-10--xs float-end g-font-size-14--md ti-settings"></i> 
                          </a>
                          
                        </span>
                      </h6>

                      <div class="row">
                        <div class="col-12">

                          <span class="g-font-size-12--md g-padding-r-5--xs">
                            <i class="g-padding-r-10--xs ti-calendar"> </i> 
                            <?php echo get_time_ago(strtotime($p_date)); ?> 
                          </span>
                          <br>

                          <span class="g-font-size-12--md g-padding-r-5--xs">
                            <i class="g-padding-r-10--xs ti-calendar"> </i> 
                            <?php pageType($page_type); ?>
                          </span>
                          <br>

                          <span class="g-font-size-12--md g-padding-r-5--xs">
                            <i class="g-padding-r-10--xs ti-calendar"> </i> 
                            <?php echo languageName($language_id); ?>
                          </span>
                          <br>

                          <span class="g-font-size-12--md g-padding-r-5--xs">
                            <i class="g-padding-r-10--xs ti-star"> </i> 
                            0 stars
                          </span>
                          <br>
                          <hr>

                        </div>
                      </div>

                    </div>


                  </div>
                
                </div>
              </div>
              <!-- drafted contents ends here  -->

                <!-- side note starts here -->
                <div class="col-md-4 col-sm-12">
                    <div class="card chalkboard" style="width: 100%;">
                      <div class="card-body">
                        <h3 class="g-font-size-18--xs g-font-size-20--sm g-font-size-20--md g-color--primary float-end">Chalk Board</h3>
                        <br>
                        <ul class="nav nav-tabs nav-justified mt-4" id="myTab" role="tablist">
                          <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                              <i class="g-padding-r-5--xs g-font-size-14--md ti-notepad"></i> 
                              <span class="g-font-size-14--md code-font">Notes </span> 
                         </button>
                     </li>
                     <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                           <i class="g-padding-r-5--xs g-font-size-14--md ti-archive"></i> 
                           <span class="g-font-size-14--md code-font">Resources </span> 
                        </button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                            <i class="g-padding-r-5--xs g-font-size-14--md ti-shortcode"></i> 
                             <span class="g-font-size-14--md code-font">Code </span> 
                        </button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">

                    <!-- First tabs starts here  -->
                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                      <div class="tabbie-content mt-3">
                        <div class="tabbie-content-top">
                          <!-- to add a scroll bar here -->
                          <div class="">
                            <!-- query all relavant notes for this page -->
                            <?php pageNotes($page_code);?>
                            </div>
                        </div>

                          <div class="tabbie-content-bottom">
                            <div class="row g-font-size-14--md">
                              <div class="col g-text-center--md">
                                <span class="float-end">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#noteModal">
                                    <i class="g-padding-r-5--xs ti-pencil-alt2 "></i> New Note
                                  </a>
                                </span>   
                              </div>
                            </div>
                          </div>
                      </div>
                  </div>
                  <!-- First tab ends here -->

                  <!-- Second tab starts here-->
                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                      <div class="tabbie-content mt-3">
                        <div class="tabbie-content-top">
                          <ul class="list-group list-group-flush">
                              <?php pageResource($page); ?>
                          </ul>
                        </div>

                          <div class="tabbie-content-bottom">
                              <div class="row g-font-size-14--md">
                                  <div class="col g-text-center--md">
                                    <span class="float-end">
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#resourceModal">
                                            <i class="g-padding-r-5--xs ti-pencil-alt2 "></i> Add New Resource
                                        </a>
                                    </span>   
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- Second tab ends here  -->

                  <!-- Third tab starts here  -->
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                     <div class="tabbie-content mt-3">
                          <div class="tabbie-content-top"></div>
                          <div class="tabbie-content-bottom">
                            <div class="row g-font-size-14--md">
                              <div class="col g-text-center--md">
                                <span class="float-end">
                                  <a href="#" data-bs-toggle="modal" data-bs-target="#codeModal">
                                    <i class="fa-solid fa-terminal"></i>  <i class="fa-solid fa-angle-left"></i>Code Snippet
                                  </a>
                                </span>   
                              </div>
                            </div>
                          </div>
                      </div> 
                  </div>
                  <!-- Third tab ends here  -->

              </div>
          </div>
      </div>
  </div>
  <!-- side note ends here -->
</div>
</div>
<!-- Page content ends here -->


<!-- Add Resource Links -->
<?php require_once'include/snippets/note_modal.php'; ?>
<?php require_once'include/snippets/resource_modal.php'; ?>
<?php require_once'include/snippets/code_modal.php'; ?>
<?php require_once'include/snippets/edit_page_modal.php'; ?>




</div>
</div>
<!-- prism theme file here  -->
<script src="js/prism.js"></script>
<!-- Project Required JS Files-->
<script src="projects/fruits-list/js/fruits.js"></script>
<!-- Bootstrap core JS-->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
<?php } while ($rspge = mysqli_fetch_assoc($pge_query))?>
</html>
