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

	$page_code            =       mysqli_real_escape_string($con, $_POST['page_code']);
	$note_name            =       mysqli_real_escape_string($con, $_POST['note_name']);
	$note_main            =       mysqli_real_escape_string($con, $_POST['note_main']);


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
	$note_code = generateRandomString();

	$totalEmails = 1;

	$email_main = 'learncodex@sert.rw';

	if ($totalEmails>0) {
		$valuesArr = array(sprintf('note_date =NOW()')
            ,sprintf('page_code="%s"', $page_code)
            ,sprintf('note_name="%s"', $note_name)
            ,sprintf('note_main="%s"', $note_main)
            ,sprintf('note_code="%s"', $note_code)
        );
        $enter_sql = sprintf('INSERT INTO `notes` SET %s', implode(', ', $valuesArr));
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