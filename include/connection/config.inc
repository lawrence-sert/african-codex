<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'learncodex');

$year = date("Y");
$zero = '0';
$one = '1';
$two = '2';

/* Attempt to connect to MySQL database */
$mysqli = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($mysqli === false){
	die("ERROR: Could not connect. " . $mysqli->connect_error);
}

$con = mysqli_connect("localhost","root","","learncodex");
if (mysqli_connect_errno()) {
	echo "Failed to connect to MySQL: " . mysqli_connect_error();
	exit();
}

$pages = "SELECT * FROM page ORDER BY page_id DESC ";
$pages_query = mysqli_query($con, $pages) or die (mysqli_error());
$rspages = mysqli_fetch_assoc($pages_query);
$numpages= mysqli_num_rows($pages_query);

$resources = "SELECT * FROM resources ORDER BY rss_id DESC ";
$resources_query = mysqli_query($con, $resources) or die (mysqli_error());
$rsresources = mysqli_fetch_assoc($resources_query);
$numresources= mysqli_num_rows($resources_query);

$cntry = "SELECT * FROM country ORDER BY nicename ASC ";
$cntry_query = mysqli_query($con, $cntry) or die (mysqli_error());
$rscntry = mysqli_fetch_assoc($cntry_query);
$numcntry = mysqli_num_rows($cntry_query);

