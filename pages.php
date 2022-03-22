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


//get all user resource search by user code
$mypages = "SELECT * FROM page WHERE user_code='$usr_code' ORDER BY page_id DESC ";
$mypages_query = mysqli_query($con, $mypages) or die (mysqli_error());
$rsmypages = mysqli_fetch_assoc($mypages_query);
$nummypages = mysqli_num_rows($mypages_query);

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


        <div class="row mt-5">

          <!-- drafted contents starts here  -->
          <div class="col-md-8 col-sm-12">
            <h1 class="g-font-size-24--md g-color--primary">My Pages (<?php echo $nummypages; ?>)</h1>

            <hr>

            <?php 

              if(empty($nummypages)) {
                echo "No new Pages Yet";
              }
              else {
                // show pages here 
            ?>

            <ul class="list-group list-group-flush">
              <?php do { ?>
              <?php 
                $page_code = $rsmypages['page_code'];
                $page_name = $rsmypages['page_name'];
                $page_date = $rsmypages['page_date'];
                $pagedate = strtotime( $page_date );
                $p_date = date( 'Y-m-d H:i:s', $pagedate );
                $page_short_description = $rsmypages['page_short_description'];
                $page_type = $rsmypages['page_type'];
                $language = $rsmypages['language_id'];
              ?>
              <li class="list-group-item pagesList">
                <div class="row">
                  <div class="col-8">
                    <span class="pageTitle"><strong>
                      <a href="page.php?page_code=<?php echo $page_code;?>">
                      <?php echo $page_name;?>
                      </a>
                    </strong></span><br>
                    <p><small>
                      <?php 
                        $length = '150';
                        truncate($page_short_description, $length, $dots = "...")
                      ?>
                      </small></p>
                    <span>
                      <span class="g-font-size-14--md g-padding-r-5--xs">
                          <i class="g-padding-r-2--xs ti-calendar"> </i> 
                          <?php echo get_time_ago(strtotime($p_date)); ?>
                        </span>

                        <span class="g-font-size-14--md g-padding-r-5--xs"><?php pageType($page_type); ?></span>

                        <span class="g-font-size-14--md g-padding-r-5--xs">
                          <i class="g-padding-r-2--xs ti-star"> </i> 
                          <i class="g-padding-r-2--xs ti-star"> </i> 
                          <i class="g-padding-r-2--xs ti-star"> </i> 
                          <i class="g-padding-r-2--xs ti-star"> </i> 
                        </span>

                        <span class="g-font-size-14--md g-padding-r-5--xs">
                          <a href="language.php?language_id=<?php echo $language;?>">
                            <span class="badge rounded-pill bg-success"><?php echo languageName($language);?></span>
                          </a>
                        </span>
                    </span>
                  </div>
                  <div class="col-4">
                    <div class="row g-font-size-13--md">
                      <div class="col-4">
                         <i class="g-padding-r-2--xs ti-notepad"></i> (32)
                      </div>
                      <div class="col-4">
                        <i class="g-padding-r-2--xs ti-archive"></i> (23)
                      </div>
                      <div class="col-4">
                       <i class="g-padding-r-2--xs ti-write"></i> (32)
                      </div>
                    </div>
                  </div>
                </div>
              </li>
            <?php } while($rsmypages = mysqli_fetch_assoc($mypages_query))?>

            </ul>

          <?php } ?>
            
          </div>
          <!-- drafted contents ends here  -->

          <!-- side note starts here -->
          <div class="col-md-4 col-sm-12">

            <div class="card mb-4">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
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
