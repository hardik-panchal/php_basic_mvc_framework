<?php

/**
 * User Class
 * 
 * User login, signup, normal activity
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package Contacts
 * @since July 18, 2013
 * 
 */
class User {
    # constructor

    public static $user_data = array();

    public function __construct() {
	
    }
    
    public static function update($fields, $id) {
	// Escape array for sql hijacking prevention
	$data = _escapeArray($fields);
	$map = array();
	$map['admin_email'] = 'user_name';	
	
	if($fields['admin_password'] != ''){
	   $data['admin_password'] = md5($data['admin_password']);
	   $map['admin_password'] = 'password';
	}
	
	$ds = _bindArray($data, $map);
	$condition = " id = " . $id;
	return qu('admin_users', $ds, $condition);
    }
    
    public static function doLogin($user_name, $password) {
	self::$user_data = qs(sprintf("select * from admin_users where user_name = '%s' and password = '%s'", $user_name, md5($password)));
	if (!empty(self::$user_data)) {
	    self::$user_data['user_type'] = 'admin';
	}
	return empty(self::$user_data) ? false : true;
    }
    
    public static function getProfileDetail($login_id) {
	return qs(sprintf("select * from admin_users where id = '%s'", $login_id)); 
    }
    
    public static function setSession($user_name) {
	$_SESSION['user'] = self::$user_data;
    }

    public static function killSession() {
	session_destroy();
	unset($_SESSION);
    }
}
?>