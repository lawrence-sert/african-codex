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
}

//get all projects for display
$meta = "SELECT * FROM meta WHERE title='$page'";
$meta_query = mysqli_query($con, $meta) or die (mysqli_error());
$rsmeta = mysqli_fetch_assoc($meta_query);
?>
<!DOCTYPE html>
<html lang="en">
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
  <meta name="author" content="https://sert.rw">


  <meta property="og:locale" content="en_US" />
  <meta property="og:type" content="website" />
  <meta property="og:title" content="SERT" />
  <meta property="og:description" content="SERT is a full on-line service company that provides our clients with web and mobile application development,
  IT consulting and outsourcing, Interface design and Handling existing IT projects. Based in Kigali Rwanda" />
  <meta property="og:url" content="https://www.africancode.rw/" />
  <meta property="og:site_name" content="SERT" />
  <meta property="og:image" content="https://www.africancode.rw/assets/images/seo/sert-logo-300x300.png" />
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
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->
    <?php require_once'include/elements/sidebar.php';?>
    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->
      <?php require_once'include/elements/navbar.php'; ?>


      <!-- Page content starts here -->
      <div class="container-fluid">

        <div class="row mt-2">
          <div class="col-md-12">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item code-font text-muted"><a href="index.php">Dashboard</a></li>
                <li class="breadcrumb-item code-font active" aria-current="page">Resources</li>
              </ol>
            </nav>
          </div>
        </div>

        <!-- page title start here -->
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <h1 class="g-font-size-24--md g-color--primary"> <i class="g-padding-r-5--xs ti-package g-font-size-20--md"></i> Resources <i class="fa-solid fa-angle-left"></i> 
            </h1>
          </div>
          <div class="col-md-4 col-sm-12">
            <span class="float-end">
                <a href="#" data-bs-toggle="modal" data-bs-target="#resourceModal">
                  <i class="g-padding-r-5--xs ti-pencil-alt2 "></i> Add New Resource
                </a>
              </span>
          </div>


        <div class="row mt-3">
          <!-- side note starts here -->
          <div class="col-md-2 col-sm-12">
              Add A search filter like on 
          </div>
          <!-- side note ends here -->

          <!-- drafted contents starts here  -->
          <div class="col-md-10 col-sm-12">

            <!-- search bar starts here  -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <form id="frm2" name="frm2">
                  <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search For Fruit" id="searchTerm" value="">
                    <div class="input-group-append">
                      <button class="btn btn-outline-secondary" type="button" onclick="searchFruit()">Search</button>
                    </div>
                  </div>
                </form>
              </div>
            </div>
            <!-- search bar Ends here  -->

            <!-- resource page starts here -->
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                  <?php do { ?>
                    <?php 
                    $rss_id = $rsresources['rss_id'];
                    $rss_name = $rsresources['rss_name'];

                    $rss_date = $rsresources['rss_date'];
                    $resourcedate = strtotime( $rss_date );
                    $rssdate = date( 'Y-m-d H:i:s', $resourcedate );

                    $rss_notes = $rsresources['rss_notes'];
                    $rss_code = $rsresources['rss_code'];
                    $rss_type = $rsresources['rss_type'];
                    $rss_language = $rsresources['rss_language'];
                    $length_title = '35';
                    $length = '90';

                    //if resource empty
                    if(empty($rss_notes)) {

                    }
                    else {

                    ?>
                    <div class="col-md-4">
                      <div class="card mb-4">
                        <div class="card-body">
                          <h5 class="card-title g-font-size-14--md">
                            <a href="resource.php?rss_code=<?php echo $rss_code; ?>">
                             <!--  get resource icon -->
                              <?php rssLanguage($rss_language);?>
                              <?php truncate($rss_name, $length_title, $dots = "...");?>
                              </a>
                          </h5>
                          <p class="card-text"><small>
                            <?php truncate($rss_notes, $length, $dots = "...");?>
                          </small></p>
                          <hr>
                          <div class="row g-font-size-13--md text-center">
                            <div class="col-4">
                             <i class="g-padding-r-2--xs ti-calendar"></i> 
                             <span class="dotted"><small><?php echo get_time_ago(strtotime($rssdate)); ?></small></span>
                           </div>
                           <div class="col-4">
                            <i class="g-padding-r-2--xs ti-packages"></i> PHP
                          </div>
                          <div class="col-4">
                            <!-- check what kind of resource it is -->
                            <?php rssTypeIcon($rss_type);?>
                         </div>
                       </div>
                     </div>
                   </div>
                 </div>
               <?php } ?>
               <?php } while($rsresources = mysqli_fetch_assoc($resources_query)) ?>
             </div>
           </div>
         </div>

            
          </div>
          <!-- drafted contents ends here  -->

          
        </div>
      </div>
      <!-- Page content ends here -->


<!-- Add Resource Links -->
<?php require_once'include/snippets/note_modal.php'; ?>
<?php require_once'include/snippets/resource_modal.php'; ?>
<?php require_once'include/snippets/code_modal.php'; ?>




</div>
</div>
<!-- prism theme file here  -->
<script src="js/prism.js"></script>
<!-- Project Required JS Files-->
<script src="projects/guessing-game/js/guessing.js"></script>
<!-- Bootstrap core JS-->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
