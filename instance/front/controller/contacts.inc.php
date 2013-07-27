<?php

/**
 * Admin side Contact List file
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package Contacts
 * @since July 18, 2013
 * 
 */

if ($_REQUEST['deleteContent']) {
    $affected_rows = Contact::delete($_REQUEST['deleteContent']);
    json_die($affected_rows ? true : false);
}

$contacts = Contact::get_all_contacts();
$bc[] = array('text' => 'Contacts');
$jsInclude = "contacts.js.php";
_cg("page_title", "Contacts");
?>
