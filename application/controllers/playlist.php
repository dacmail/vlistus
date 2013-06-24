<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playlist extends CI_Controller {
	public function index() {
		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);
	}
	public function view($slug) {
		$data['main_content'] = 'playlist';
		$this->load->view('includes/template', $data);
	}
}
