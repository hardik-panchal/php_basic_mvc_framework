<?php

/**
 * Contact Name Class
 * 
 * 
 * @author Hardik Panchal <hardikpanchal469@gmail.com>
 * @version 1.0
 * @package Contacts
 * @since July 18, 2013
 * 
 */
class Contact {

    public function __construct() {
	
    }

    public static function get_all_contacts($id='') {
	if ($id != '') {
	    $where = " AND id = " . $id;
	} else {
	    $where = "";
	}
	return q(" select * from contacts where 1=1 " . $where . " order by id DESC ");
    }

    public static function delete($id) {
	$id = _escape($id);
	return qd("contacts", " id = '{$id}' ");
    }

    public static function get_contact_detail($id) {
	return qs(sprintf("select * from contacts where id = '%f'", $id));
    }

}

?>