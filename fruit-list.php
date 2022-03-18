<?php 
$page = 'Fruits List';
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
    <title>Fruits List</title>
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
                  Fruits List

                </h1>
                <p>Given arrays of Fruit names and emoji create a web page that show a list of fruits with their emojis.</p>

                <p>Find the flag emoji's here: <a href="https://emojipedia.org/food-drink/" target="_blank">https://emojipedia.org/food-drink/</a> </p>

                <p>
                  Next steps:
                  <ul>
                    <li>
                      add the ability to add more fruits
                      <ol>
                        <li>
                          <small>
                            validate input including the fruits - <a href="https://stackoverflow.com/questions/18862256/how-to-detect-emoji-using-javascript" target="_blank">https://stackoverflow.com/questions/18862256/how-to-detect-emoji-using-javascript</a> 
                          </small>
                        </li>
                      </ol>
                    </li>
                    <li>sort by fruits alphabetically by name,</li>
                    <li>store the data in localStorage,</li>
                    <li>add search support.</li>
                  </ul>
                </p>

                <p><strong>Possible approaches:</strong>
                    <ul>
                      <li><code>innerHTML</code> with a Template String and the <code>.map</code> function.</li>
                      <li><code>createElement</code> with <code>appendChild</code>.</li>
                      <li><code>innerHTML</code> with <code>HandlebarsJS</code>.</li>
                    </ul>
                </p>

                <p>
                  Deploy your app to GitHub. Once deployed and you shared your URL with the mentors look at the next steps below.
                </p>

                <div class="row mt-4">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        Fruits List Demo
                      </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-9">
                            <div class="project-frame mt-3">
                              <!-- Fruit List html code start here -->
                              <div class="row">
                                <div class="col-md-8">

                                  <!-- search button starts here -->
                                  <div class="row">
                                    <div class="col-md-12">

                                      <form id="frm1" name="frm1">
                                        <div class="input-group mb-3">
                                          <input type="text" class="form-control" placeholder="Search For Fruit" id="searchTerm" value="">
                                          <div class="input-group-append">
                                            <button class="btn btn-outline-secondary" type="button" onclick="searchFruit()">Search</button>
                                          </div>
                                        </div>
                                      </form>

                                    </div>
                                  </div>

                                  <!-- Fruits List starts here -->
                                  <div class="row">
                                    <div class="col-md-12">
                                      <h5>Here Is A List Of Fruits</h5>
                                      <ul class="list-group" id="fruit-joined">

                                      </ul>
                                    </div>
                                  </div>

                                </div>

                                <div class="col-md-4">
                                  <!-- Add Fruits starts here -->
                                  <div class="row">
                                    <div class="col-md-12">

                                      <div class="card">
                                        <div class="card-header">
                                          Add New Fruits
                                        </div>
                                        <div class="card-body">


                                          <form id="frm1" name="frm1">

                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="form-group">
                                                  <input type="text" class="form-control" id="fruitName" placeholder="Fruit Name" value="">
                                                </div>
                                              </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                              <div class="col-md-12">
                                                <select class="form-control" id="fruitEmoji" value="">
                                                  <option value="">Select Fruit Emoji</option>
                                                  <option value="🥥">Coconut 🥥</option>
                                                  <option value="🥑">Avocado 🥑</option>
                                                  <option value="🍒">Cherries 🍒</option>
                                                  <option value="🍏">Green Apple 🍏</option>
                                                  <option value="🍑">Peach 🍑</option>
                                                </select>
                                              </div>
                                            </div>

                                            <br>

                                            <div class="row">
                                              <div class="col-md-12">
                                                <button type="button" id="fruit" class="btn btn-primary btn-block" onclick="addFruit()">Add Fruit</button>
                                              </div>
                                            </div>

                                          </form>
                                        </div>
                                      </div>

                                    </div>
                                  </div>
                                </div>


                              </div>
                              <!-- Fruit List  html code ends here -->
                            </div>
                          </div>

                          <!--  folder file structure here -->
                          <div class="col-3">

                            <div class="list-group">
                              <a href="projects/fruits-list/index.html" target="_blank" class="list-group-item list-group-item-action">Run Project</a>
                              <a href="projects/fruits-list/test/index.html" target="_blank" class="list-group-item list-group-item-action">Test In Mocha & Chai</a>
                              <a href="#" class="list-group-item list-group-item-action">See File Structure</a>
                              <a href="projects/fruits-list/test/fruits-list.zip" target="_blank" class="list-group-item list-group-item-action active">Download Application</a>
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
                        <strong>index.php</strong>
                        <hr>
                        <div class="row">
                          <div class="col-12">

                          </div>
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
                                        <i class="g-padding-r-5--xs ti-pencil-alt2 "></i> New Note
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
                                        <i class="g-padding-r-5--xs ti-pencil-alt2 "></i> New Note
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
<?php require_once'include/snippets/resource_modal.php'; ?>




</div>
</div>
<!-- Project Required JS Files-->
<script src="projects/fruits-list/js/fruits.js"></script>
<!-- Bootstrap core JS-->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
</html>
