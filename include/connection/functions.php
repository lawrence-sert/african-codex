<?php 

function truncate($string, $length, $dots = "...") {
    echo (strlen($string) > $length) ? substr($string, 0, $length - strlen($dots)) . $dots : $string;
}

function pageType($page_type) {
	switch ($page_type) {
		case "1":
		echo 'Tutorial';
		break;
		case "2":
		echo 'Project';
		break;
	}

}

function rssTypeIcon($rss_type_icon) {
	switch ($rss_type_icon) {
		case "1":
		echo "<i class='g-padding-r-5--xs ti-share'></i>";
        echo "32";
		break;
		case "2":
		echo "<i class='g-padding-r-5--xs ti-download'></i>";
        echo "33";
		break;
	}

}

function rssLanguage($rss_language) {
	switch ($rss_language) {
		case "1":
		echo "<i class='g-padding-r-5--xs ti-share'></i>";
		break;
		case "2":
		echo "<i class='g-padding-r-5--xs ti-download'></i>";
		break;
	}

}


function pageResource($page) {

	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}


	$resources = "SELECT * FROM resources WHERE rss_page='$page' ";
	$rsresources = mysqli_query($con, $resources);

	while($rwresources = mysqli_fetch_array($rsresources))
	{

		$rss_name = $rwresources['rss_name'];
		$rss_id = $rwresources['rss_id'];
		$rss_type = $rwresources['rss_type'];
		$rss_main = $rwresources['rss_main'];

		echo "<li class='list-group-item'>";
			echo "<a href='$rss_main' target='_blank'>";
			echo $rss_name;
			echo "</a>";
		echo"</li>";
	}

}

function pageNotes($page_code) {

	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}


	$pNote = "SELECT * FROM notes WHERE page_code='$page_code' ORDER BY note_id DESC";
	$rspNote = mysqli_query($con, $pNote);

	while($rwpNote = mysqli_fetch_array($rspNote))
	{

		$note_id 	= $rwpNote['note_id'];
		$note_date = $rwpNote['note_date'];
		$page_code = $rwpNote['page_code'];
		$note_name = $rwpNote['note_name'];
		$note_main = $rwpNote['note_main'];
		$note_code = $rwpNote['note_code'];

		echo  "<div class='card mb-4'>";
			echo  "<div class='card-body'>";
				echo "<h5>$note_name</h5>";
			echo  "</div>";
		echo  "</div>";
	}

}

function pageCode($page,$code_id) {

	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}


	$snippet = "SELECT * FROM code_snippet WHERE code_page='$page' AND code_id=$code_id";
	$rssnippet = mysqli_query($con, $snippet);




	while($rwsnippet = mysqli_fetch_array($rssnippet))
	{

		echo "<strong>guessing-game.js</strong>";
			echo "<div class='row'>";
					echo "<div class='col-12'>";

					$code_language 	= $rwsnippet['code_language'];
					$code_main 		= $rwsnippet['code_main'];

					//check if snippet is empty
					if(empty($code_main)) {

					}
					else {
						echo "<pre><code class='language-$code_language match-braces'>";
						echo $code_main;           
						echo "</code></pre>";
					}

					echo "</div>";
			echo "</div>";
	}

}

function countryName($countryID) {
	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$country = "SELECT nicename FROM country WHERE id='$countryID'";
	$rscountry = mysqli_query($con, $country);
	while($rwcountry = mysqli_fetch_array($rscountry))
	{
		$nicename = $rwcountry['nicename'];
		echo $nicename;
	}

}


//time ago 
function get_time_ago($time){
        $time_difference=time()-$time;
        if ($time_difference < 1) { return 'less than 1 second ago';}
        $condition=array(12*30*24*60*60 => 'year',
                        30*24*60*60     => 'month',
                        24*60*60        => 'day',
                        60*60           => 'hour',
                        60              => 'minute',
                        1               => 'second'
        );
        foreach($condition as $sec => $str)
        {
            $d=$time_difference /$sec;
            if ($d >= 1) {
                $t=round($d);
                return $t.' '.$str. ($t > 1 ? 's' :'').' ago';
            }
            
        }
 }

  //generate random string
    function generateRandomString($length = 10) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }
    

  function userPageCount($usrId) {
  	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$usrPages = "SELECT * FROM page WHERE user_code='123456'";
	$rsusrPages = mysqli_query($con, $usrPages);
	$numusrPages= mysqli_num_rows($rsusrPages);
	echo $numusrPages;
  }

  function userResourcesCount($usrId) {
  	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$usrResources = "SELECT * FROM resources WHERE user_code='123456'";
	$rsusrResources = mysqli_query($con, $usrResources);
	$numusrResources= mysqli_num_rows($rsusrResources);
	echo $numusrResources;
  }

  function userNotesCount($usrId) {
  	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$usrNotes = "SELECT * FROM notes WHERE user_code='123456'";
	$rsusrNotes = mysqli_query($con, $usrNotes);
	$numusrNotes= mysqli_num_rows($rsusrNotes);
	echo $numusrNotes;
  }

  function userToolsCount($usrId) {
  	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$usrTools = "SELECT * FROM tools WHERE user_code='123456'";
	$rsusrTools = mysqli_query($con, $usrTools);
	$numusrTools= mysqli_num_rows($rsusrTools);
	echo $numusrTools;
  }

  function userVideosCount($usrId) {
  	$con = mysqli_connect("localhost","root","","learncodex");
	if (mysqli_connect_errno()) {
	  echo "Failed to connect to MySQL: " . mysqli_connect_error();
	  exit();
	}
	$usrVideos = "SELECT * FROM videos WHERE user_code='123456'";
	$rsusrVideos = mysqli_query($con, $usrVideos);
	$numusrVideos= mysqli_num_rows($rsusrVideos);
	echo $numusrVideos;
  }


?>