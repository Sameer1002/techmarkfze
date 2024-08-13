<?php
if($_POST)
{
require('constant.php');
    
    $user_name      = filter_var($_POST["full_name"], FILTER_SANITIZE_STRING);
    $user_email     = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $user_mobile_no     = filter_var($_POST["mobile_no"], FILTER_SANITIZE_STRING);
    $user_company_name     = filter_var($_POST["company_name"], FILTER_SANITIZE_STRING);
    $user_c_business_sector     = filter_var($_POST["c_business_sector"], FILTER_SANITIZE_STRING);
    $user_c_products   = filter_var($_POST["c_products"], FILTER_SANITIZE_STRING);
    $user_website   = filter_var($_POST["website"], FILTER_SANITIZE_STRING);
    $message   = filter_var($_POST["message"], FILTER_SANITIZE_STRING);
    
    if(empty($user_name)) {
		$empty[] = "<b>Name</b>";		
	}
	if(empty($user_email)) {
		$empty[] = "<b>Email</b>";
	}
	
	/*if(empty($user_reason)) {
		$empty[] = "<b>reason</b>";
	}*/
	
// 	if(empty($user_other)) {
// 		$empty[] = "<b>other</b>";
// 	}

	if(empty($message)) {
		$empty[] = "<b>Message</b>";
	}
	
	// if(empty($empty)) {
	// 	$output = json_encode(array('type'=>'error', 'text' => implode(", ",$empty) . ' Required!'));
    //     die($output);
	// }
	
	if(!filter_var($user_email, FILTER_VALIDATE_EMAIL)){ //email validation
	    $output = json_encode(array('type'=>'error', 'text' => '<b>'.$user_email.'</b> is an invalid Email, please correct it.'));
		die($output);
	}
	
	//reCAPTCHA validation

	$toEmail = "info@techmarkfze.com";
	$mailHeaders = "From: " . $user_name . "<" . $user_email . ">\r\n";
/*	$mailBody = "<!DOCTYPE html><html lang='en'><head><meta charset='UTF-8'><title>Express Mail</title></head><body>";
    $mailBody .= "<table style='width: 100%;'>";
	$mailBody .= "<table>";
	$mailBody .= "<thead>";
	$mailBody .= "<tr>";
	$mailBody .= "<th>User Name</th>";
    $mailBody .= "<th>User Email</th>";
    $mailBody .= "<th>Content</th>";
    $mailBody .= "</tr>";
    $mailBody .= "</thead>";
    $mailBody .= "<tbody>";
    $mailBody .= "<tr>";
    $mailBody .= "<td>" . $user_name . "</td>";
    $mailBody .= "<td>" . $user_email . "</td>";
    $mailBody .= "<td>" . $message . "</td>";
    $mailBody .= "</tr>";
    $mailBody .= "</tbody>";
    $mailBody .= "</table>";
    $mailBody .= "</body></html>";*/

	$mailBody = "User Name: " . $user_name . "\n";
	$mailBody .= "User Email: " . $user_email . "\n";
	$mailBody .= "Mobile No: " . $user_mobile_no . "\n";
	$mailBody .= "Company Name: " . $user_company_name . "\n";
	$mailBody .= "Company Business Sector: " . $user_c_business_sector . "\n";
	$mailBody .= "Company Products: " . $user_c_products . "\n";
	$mailBody .= "Company Products: " . $user_website . "\n";
	$mailBody .= "Content: " . $message . "\n";

	if (mail($toEmail, "Bsuiness Enquiry Mail From techmarkfze.com", $mailBody, $mailHeaders)) {
	    $output = json_encode(array('type'=>'message', 'text' => 'Hi '.$user_name .', Thank you. We will get back to you shortly.'));
	    die($output);
	} else {
	    $output = json_encode(array('type'=>'error', 'text' => 'Unable to send email, please contact'.SENDER_EMAIL));
	    die($output);
	}
}
?>