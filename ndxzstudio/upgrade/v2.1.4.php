<?php

class upgrade_214
{
	var $error;
	var $messages;
	var $version = '2.1.4';
	var $charset = 'utf8';
	var $collate = 'utf8_unicode_ci';

	function upgrade()
	{
		$OBJ =& get_instance();
		
		// forcing a change to the users table for user ID = 1 - just in case
		$OBJ->db->updateArray(PX.'users', array('user_admin' => '1'), "ID = '1'");
		$OBJ->db->updateArray(PX.'settings', array('version' => '2.1.4'), "adm_id = '1'");
	}
}
