<?php
ob_start ();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//Load Composer's autoloader
require 'vendor/autoload.php';
include('include/connection/config.inc');
include('include/connection/functions.php');

if ($_POST['doInsert']=='Create')
{

	$page_type            		=       mysqli_real_escape_string($con, $_POST['page_type']);
	$user_code            		=       mysqli_real_escape_string($con, $_POST['user_code']);
	$page_name            		=       mysqli_real_escape_string($con, $_POST['page_name']);
	$page_short_description     =       mysqli_real_escape_string($con, $_POST['page_short_description']);
	$page_description     		=       mysqli_real_escape_string($con, $_POST['page_description']);
    $language                   =       mysqli_real_escape_string($con, $_POST['language']);

	$page_code = generateRandomString();

	$totalEmails = 1;

	$email_main = 'africancodex@africancode.rw';

	if ($totalEmails>0) {
		$valuesArr = array(sprintf('page_date =NOW()')
            ,sprintf('page_type="%s"', $page_type)
            ,sprintf('page_name="%s"', $page_name)
            ,sprintf('page_short_description="%s"', $page_short_description)
            ,sprintf('page_description="%s"', $page_description)
            ,sprintf('language_id="%s"', $language)
            ,sprintf('page_code="%s"', $page_code)
            ,sprintf('user_code="%s"', $user_code)
        );
        $enter_sql = sprintf('INSERT INTO `page` SET %s', implode(', ', $valuesArr));
        $result = mysqli_query($con, $enter_sql); 

        if($result) {
            header("Location: page.php?page_code=$page_code");
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