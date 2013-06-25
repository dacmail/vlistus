<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playlists extends CI_Controller {
	public function index() {
		$data['main_content'] = 'home';
		$this->load->view('includes/template', $data);
	}
	public function view($slug, $token) {
		$playlist = Playlist::find_by_slug($slug);
		if (!empty($playlist)) :
			$data['playlist'] = $playlist;
			if (empty($token)) : //play url
				$data['main_content'] = 'playlist';
			elseif ($token == $playlist->collab) : //collaboration url
				$data['main_content'] = 'collaboration';
			elseif ($token == $playlist->admin) : //administration url
				$data['main_content'] = 'administration';
			endif;
			$this->load->view('includes/template', $data);
		else :
			show_404();
		endif;
	}
	public function create() {
		$slug = url_title(convert_accented_characters(strtolower($this->input->post('name'))));
		if (!empty($slug)) :
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
			if ($playlist->is_valid()) :
				redirect(site_url($playlist->slug . '/' . $playlist->admin));
			else :
				$this->session->set_flashdata('message', 'Sorry, the playlist cannot be created, try again.');
				redirect(site_url());
			endif;
		else :
			$this->session->set_flashdata('message', 'You have to enter a playlist name.');
			redirect(site_url());
		endif;
	}
}
