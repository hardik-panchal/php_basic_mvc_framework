<?php

/**
 * Admin Edit Profile file
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package Contacts
 * @since July 18, 2013
 * 
 */
if (isset($_REQUEST['fields']['admin_email']) && $_REQUEST['fields']['admin_email'] != '') {
    $next_allow = 1;
    if ($_REQUEST['fields']['admin_password'] != '' || $_REQUEST['fields']['admin_conf_password'] != '') {
	if ($_REQUEST['fields']['admin_password'] != $_REQUEST['fields']['admin_conf_password']){
	    $next_allow = 0;
	    $error = "Password does not match the confirm password.";
	}
    }
    if ($next_allow == 1) {
	$update_admin_id = User::update($_REQUEST['fields'], $_SESSION['user']['id']);
	if ($update_admin_id) {
	    $greetings = "Your profile updated successfully";
	} else {
	    $error = "Unable to update profile";
	}
    }
}


$userDetail = User::getProfileDetail($_SESSION['user']['id']);
$admin_email = $userDetail['user_name'];
$bc[] = array('text' => 'Profile');
$jsInclude = "profiles.js.php";
_cg("page_title", "Profile");
?>
