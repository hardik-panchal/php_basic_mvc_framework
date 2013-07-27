<?php

/**
 * Admin side Import Contact List file
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package Contacts
 * @since July 26, 2013
 * 
 */

if ($_REQUEST['deleteContent']) {
    $affected_rows = Importcontact::delete($_REQUEST['deleteContent']);
    json_die($affected_rows ? true : false);
}

//$contacts = Importcontact::get_all_contacts();
$bc[] = array('text' => 'Import Contacts');
$jsInclude = "importcontacts.js.php";
_cg("page_title", "Import Contacts");
?>
