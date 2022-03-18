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


//time ago 
$strTimeAgo = ""; 
	if(!empty($_POST["date-field"])) {
		$strTimeAgo = timeago($_POST["date-field"]);
	}
	function timeago($date) {
	   $timestamp = strtotime($date);	
	   
	   $strTime = array("second", "minute", "hour", "day", "month", "year");
	   $length = array("60","60","24","30","12","10");

	   $currentTime = time();
	   if($currentTime >= $timestamp) {
			$diff     = time()- $timestamp;
			for($i = 0; $diff >= $length[$i] && $i < count($length)-1; $i++) {
			$diff = $diff / $length[$i];
			}

			$diff = round($diff);
			return $diff . " " . $strTime[$i] . "(s) ago ";
	   }
	}
	

?>