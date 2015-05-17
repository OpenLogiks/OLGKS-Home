<?php
if(!defined('ROOT')) exit('No direct script access allowed');

$mailto =getConfig("WEBMASTER_EMAIL");

$user_details_template=array(
			'name' => $_REQUEST['name'],
			'email'=> $_REQUEST['email'],
			'phone'=> $_REQUEST['phone'],
			'comment'=> $_REQUEST['message'],
			'time'=>date("Y-m-d H:i:s"),
		);

$template  = _template("contact_user",$user_details_template);
loadHelpers('email');
$subject="New User Enquiry";

sendMail($mailto,$subject,$template);
?>