<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Media extends ActiveRecord\Model {
 	static $table_name = 'media';
	static $belongs_to = array(
		array('playlist')
	);
}