<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playlist extends ActiveRecord\Model {
	static $has_many = array(array('media', 'class_name' => 'media'));
}