<?php 
$page = 'dashboard';
require_once "include/connection/config.inc";
require_once "include/connection/functions.php";

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
  <!-- Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Quicksand&display=swap" rel="stylesheet">

</head>
<body>
  <div class="d-flex" id="wrapper">
    <!-- Sidebar-->

    <!-- Page content wrapper-->
    <div id="page-content-wrapper">
      <!-- Top navigation-->

      <!-- Page content starts here -->
      <div class="container-fluid">


        <div class="row mt-2">
          <div class="col-md-12 script-font">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.php">Dashboard</a></li>
              </ol>
            </nav>
          </div>
        </div>

        <!-- page title start here -->
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <h1 class="g-font-size-24--md g-color--primary">Dashboard</h1>
          </div>
          <div class="col-md-4 col-sm-12">
        </div>


        <div class="row mt-3">

          <!-- drafted contents starts here  -->
          <div class="col-md-8 col-sm-12">

          </div>
          <!-- drafted contents ends here  -->

          <!-- side note starts here -->
          <div class="col-md-4 col-sm-12">

          </div>
          <!-- side note ends here -->
        </div>
      </div>
      <!-- Page content ends here -->


      <?php require_once'include/snippets/resource_modal.php'; ?>

    </div>
  </div>
<!-- Bootstrap core JS-->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
