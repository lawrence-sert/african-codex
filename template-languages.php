<?php
// Initialize the session
session_start();
$page = 'change me';
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
  <!-- toast styling -->
  <link href="css/toastify.css" rel="stylesheet" type="text/css"/>
  <!-- icon fonts style starts here  -->
  <link href="assets/themify/themify.css" rel="stylesheet" type="text/css"/>
  
  <!-- Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Quicksand&family=Ubuntu:wght@300&display=swap" rel="stylesheet">


</head>
<body>
  <div class="d-flex" id="wrapper">

    <div id="page-content-wrapper">



      <!-- Page content starts here -->
      <div class="container-fluid">


        <div class="row mt-2">
          <div class="col-md-12 script-font">
            <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
              <ol class="breadcrumb">
                <li class="breadcrumb-item code-font text-muted"><a href="dashboard.php">Dashboard</a></li>
                <li class="breadcrumb-item code-font active" aria-current="page">Template</li>
              </ol>
            </nav>
          </div>
        </div>

        <!-- page title start here -->
        <div class="row">
          <div class="col-md-8 col-sm-12">
            <h1 class="g-font-size-24--md g-color--primary">Template</h1>
          </div>
          <div class="col-md-4 col-sm-12">
        </div>
      </div>

      <div class="row mt-3">

          <!-- drafted contents starts here  -->
          <div class="col-md-8 col-sm-12">
            <p>
              PHP is another easy-to-learn coding language that is both free and open source. Much like JavaScript, it’s mainly used for coding on websites. 
            </p>

           <h6> What is PHP? </h6>
           <p>
           PHP: Hypertext Preprocessor is a high-level, object-oriented programming language. Although similar to JavaScript in some ways, PHP is a server-side rather than client-side scripting language that is embedded in HTML. As such, it is often used together with JavaScript. As one analogy puts it, if PHP is the paintbrush, JavaScript is the paint.  </p>

           <h6>What is PHP used for? </h6>
           <p>There are many uses for PHP, although mostly for website development. You can use it to manage dynamic content and databases on a website, for example. The latter is particularly relevant, as it integrates well with database languages such as MySQL. </p>

           <h6>How to learn PHP</h6>
           <p>As with many coding languages, the best way to learn is to get as much practice as you can with the language. There are many resources available that will take you through the basics, such as how the language works and what the basic syntax looks like.  </p>

          </div>
          <!-- drafted contents ends here  -->

          <!-- side note starts here -->
          <div class="col-md-4 col-sm-12">

          </div>
          <!-- side note ends here -->
        </div>
      <!-- Page content ends here -->


      <?php require_once'include/snippets/note_modal.php'; ?>
      <?php require_once'include/snippets/resource_modal.php'; ?>
      <?php require_once'include/snippets/code_modal.php'; ?>

    </div>
  </div>
<!-- Bootstrap core JS-->
<script src="js/checknet.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
