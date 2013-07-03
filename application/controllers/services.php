<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Services extends CI_Controller {
	public function get_name() {
		$slug = url_title(convert_accented_characters(strtolower($this->input->post('name'))));
		if (!empty($slug)) :
			$i=1;
			$playlist = Playlist::find_by_slug($slug);
			$data['return']['slug'] = $slug;
			while (!empty($playlist)) :
					$i++;
					$data['return']['slug'] = $slug . '-' . $i;
					$playlist = Playlist::find_by_slug($data['return']['slug']);
			endwhile;
		else :
			$data['return']['error'] = 'No name given';
		endif;
		$this->load->view('services/get_name', $data );
	}
}
