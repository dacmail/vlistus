<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Playlists extends CI_Controller {
	public function index() {
		$this->load->view('home');
	}
	public function view($slug, $token) {
		$playlist = Playlist::find_by_slug($slug);
		if (!empty($playlist)) :
			$data['playlist'] = $playlist;
			if (empty($token)) : //play url
				$data['class'] = "play";
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
				$this->session->set_flashdata('justcreated', true);
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
	public function update() {
		$config = array(
               array(
                     'field'   => 'name',
                     'label'   => 'Playlist name',
                     'rules'   => 'required'
                  ),
               array(
                     'field'   => 'email',
                     'label'   => 'Owner email',
                     'rules'   => 'valid_email'
                  )
            );
			$post_data = $this->input->post(NULL, TRUE);
			$playlist = Playlist::find($post_data['list']);
			if ((!empty($playlist)) && ($playlist->admin == $post_data['admin'])) :
				$this->form_validation->set_rules($config);
				if ($this->form_validation->run() == FALSE) :
					$this->session->set_flashdata('message', validation_errors());
					redirect(site_url($playlist->slug . '/' . $playlist->admin));
				else :
					$playlist->name = $post_data['name'];
					$playlist->description = $post_data['description'];
					$playlist->email = $post_data['email'];
					$playlist->private = isset($post_data['private']);
					$playlist->save();
					$this->session->set_flashdata('message', 'Playlist saved');
					redirect(site_url($playlist->slug . '/' . $playlist->admin));
				endif;
			else :
				$this->session->set_flashdata('message', 'The playlist doesn\'t exists or the admin token is not valid');
				redirect(site_url());
			endif;

	}
	public function xml($id) {
		$playlist = Playlist::find($id);
		if (!empty($playlist)) :
			$data['playlist'] = $playlist;
			$this->load->view('playlistxml', $data);
		else :
			show_404();
		endif;
	}
}
