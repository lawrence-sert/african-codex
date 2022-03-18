<?php 
$page = 'guessing-game';
require_once "include/connection/config.inc";
require_once "include/connection/functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>African Code : Pages</title>
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
  <script src="https://kit.fontawesome.com/e77271821d.js" crossorigin="anonymous"></script>
  <!-- prism theme starts here  -->
  <link href="css/prism.css" rel="stylesheet" />
  <!-- project required files -->

  <!-- Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&family=Quicksand&display=swap" rel="stylesheet">


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
            <h1 class="g-font-size-24--md g-color--primary">
              Guessing Game

            </h1>
            <p>Create a guessing game that gives users the chance to guess a number between 1 and 100.</p>
            <p>
              If the guess is too low show : <code>Your guess is too low</code> Or if too high show the message <code>Your guess is too high</code> If the correct number is guessed show this message: <code> Correct, the secret number is ${number}</code>.
            </p>
            <p>A new number should be generated 5 seconds after a successfull guess.</p>
            <p>Show a message stating: <code>New game started!</code> I should stay on the screen for 3 seconds.</p>
            <p>If the widget is refreshed a new secret number is created.</p>
            <p>Create a random secret number using <code>let randomNumber = Math.ceil((Math.random() * 100))</code></p>

            <div class="row mt-4">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    Guess Game Demo
                  </div>
                  <div class="card-body">
                    <div class="row">
                      <div class="col-9">
                        <div class="project-frame mt-3">
                          <!-- guessing game html code start here -->
                          <form id="frm1" name="frm1">
                            <div class="form-group">
                              <label for="formGroupExampleInput">Enter a number between 1 and 100</label>
                              <input type="text" class="form-control" id="guessNumber" name="guessNumber" placeholder="000" value="" required="">
                            </div>

                            <div class="row mt-4">
                              <div class="col-md-6">
                                <button type="button" id="guess" class="btn btn-primary float-start" onclick="myGuess()">Guess</button>
                              </div>

                              <div class="col-md-6">
                                <button type="button" class="btn btn-secondary float-end" onclick="refreshPage()">Reset Game</button>
                              </div>
                            </div>
                          </form>

                          <br>
                          <!-- show javascript results starts here -->
                          <div id="demo">
                          </div>

                          <div id="liveToastBtn">
                          </div>
                          <!-- show javascript results ends here -->
                          <!-- guessing game html code ends here -->
                        </div>
                      </div>

                      <!--  folder file structure here -->
                      <div class="col-3">
                        
                        <div class="list-group">
                          <a href="projects/guessing-game/index.html" target="_blank" class="list-group-item list-group-item-action">Run Project</a>
                          <a href="projects/guessing-game/test/index.html" target="_blank" class="list-group-item list-group-item-action">Test In Mocha & Chai</a>
                          <a href="#" class="list-group-item list-group-item-action">See File Structure</a>
                          <a href="projects/guessing-game/guessing-game.zip" target="_blank" class="list-group-item list-group-item-action active">Download Application</a>
                        </div>
                      </div>

                    </div>
                  </div>
                </div>
              </div>
            </div>


            <div class="row mt-4">
              <div class="col-12">
                <h4 class="g-font-size-16--md g-color--primary">Code Snippets</h4>

                <div class="card text-dark bg-light mb-3" style="max-width: 100%;">
                  <div class="card-body">
                    <?php 
                    $cod_id = 1;
                    pageCode($page,$cod_id);
                    ?>
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
                <h3 class="g-font-size-18--xs g-font-size-20--sm g-font-size-20--md g-color--primary float-end">The Chalk Board</h3>
                <br>
                <ul class="nav nav-tabs nav-justified mt-4" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                     <i class="g-padding-r-5--xs ti-write"></i> Notes
                   </button>
                 </li>
                 <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                   <i class="g-padding-r-5--xs ti-packages"></i> Rss & Links
                 </button>
               </li>
               <li class="nav-item" role="presentation">
                <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                  <i class="g-padding-r-5--xs ti-shortcode"></i> Code
                </button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">

              <!-- First tabs starts here  -->
              <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <div class="tabbie-content mt-3">
                  <div class="tabbie-content-top"></div>

                  <div class="tabbie-content-bottom">
                    <div class="row g-font-size-14--md">
                      <div class="col g-text-center--md">
                        <span class="float-end">
                          <a href="#" data-bs-toggle="modal" data-bs-target="#noteModal">
                            <i class="g-padding-r-5--xs ti-pencil-alt2 "></i> Add New Note
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
                          <i class="g-padding-r-5--xs ti-pencil-alt2 "></i> Code Snippet
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



</div>
</div>

<script src="js/jquery.min.js"></script>
<script src="js/jquery.timeago.js" type="text/javascript"></script>

<script type="text/javascript">
 jQuery(document).ready(function() {
   $("time.timeago").timeago();
 });
</script>

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
