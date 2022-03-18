<?php
ob_start ();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
include('include/connection/config.inc');
include('include/connection/functions.php');


if ($_POST['doInsert']=='Submit')
{

	$rss_page            =       mysqli_real_escape_string($con, $_POST['rss_page']);
	$rss_type            =       mysqli_real_escape_string($con, $_POST['rss_type']);
	$rss_name            =       mysqli_real_escape_string($con, $_POST['rss_name']);
	$rss_main            =       mysqli_real_escape_string($con, $_POST['rss_main']);
	$rss_file            =       mysqli_real_escape_string($con, $_POST['rss_file']);
	$rss_notes           =       mysqli_real_escape_string($con, $_POST['rss_notes']);

    //check if file is empty
//get file 
        if(isset($_FILES['rss_file'])){
              $errors= array();
              $file_name = $_FILES['rss_file']['name'];
              $file_size =$_FILES['rss_file']['size'];
              $file_tmp =$_FILES['rss_file']['tmp_name'];
              $file_type=$_FILES['rss_file']['type'];
              $file_ext=strtolower(end(explode('.',$_FILES['rss_file']['name'])));
              
              $extensions= array("jpeg","jpg","png","zip","rar","pdf");
              
              if(in_array($file_ext,$extensions)=== false){
                 $errors[]="extension not allowed, please choose a JPEG or PNG file.";
              }
              
              if($file_size > 2097152){
                 $errors[]='File size must be excately 2 MB';
              }
              
              if(empty($errors)==true){
                 move_uploaded_file($file_tmp,"rss_files/".$file_name);
                 echo "Success";
                 $file_location = 'resources/files'.$file_name;
              }else{
                 print_r($errors);
              }
           }
           //get file ends here

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
	$rss_code = generateRandomString();

	$totalEmails = 1;

	$email_main = 'learncodex@sert.rw';

	if ($totalEmails>0) {
		$valuesArr = array(sprintf('rss_date =NOW()')
            ,sprintf('rss_name="%s"', $rss_name)
            ,sprintf('rss_type="%s"', $rss_type)
            ,sprintf('rss_main="%s"', $rss_main)
            ,sprintf('rss_notes="%s"', $rss_notes)
            ,sprintf('rss_file="%s"', $file_location)
            ,sprintf('rss_code="%s"', $rss_code)
            ,sprintf('rss_page="%s"', $rss_page)
        );
        $enter_sql = sprintf('INSERT INTO `resources` SET %s', implode(', ', $valuesArr));
        $result = mysqli_query($con, $enter_sql); 

        if($result) {
            header("Location: $rss_page.php?rss_code=$rss_code");
            exit();
        }
        else {
            echo "ma1";
        }
    }
    else {

    }
}
else {
	echo "maBig";
}