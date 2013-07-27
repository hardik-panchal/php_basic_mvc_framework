<?php

/**
 * Main Index File.
 * 
 * App is single point entry
 * 
 * Assigns constant vars
 * Loads the loader
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package Contacts
 * @since July 18, 2013
 * 
 */
session_start();
error_reporting(0);

# DB informaitons
define('DB_HOST', 'localhost');
define('DB_PASSWORD', 'tq-TM+L%Mm[p');
define('DB_UNAME', 'jonboiz_rc1');
define('DB_NAME', 'jonboiz_realtime_contacts');

// No other urls at the moment, only home-page is opened :)


include "loader.php";
?>
