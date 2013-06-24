<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playlists extends CI_Controller {
	public function index() {
		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);
	}
	public function view($slug) {
		$data['main_content'] = 'playlist';
		$this->load->view('includes/template', $data);
	}
	public function create() {
		$slug = url_title(convert_accented_characters($this->input->post('name')));
		$i=1;
		$playlist = Playlist::find_by_slug($slug);
		$gen_slug = $slug;
		while (!empty($playlist)) :
				$i++;
				$gen_slug = $slug . '-' . $i;
				$playlist = Playlist::find_by_slug($gen_slug);

		endwhile;
		$playlist = Playlist::create(array(
					'name' => $this->input->post('name'),
					'slug' => $gen_slug,
					'collab' => substr(md5(rand()),0,5),
					'admin' => substr(md5(rand()),0,15)
			));
	}
}
