<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Multimedia extends CI_Controller {

	public function create() {
		$playlist = Playlist::find($this->input->post('list'));
		if ((!empty($playlist)) && ($playlist->collab == $this->input->post('collab'))) :
			$url = prep_url($this->input->post('urls'));
			if (vlistus_check_domain($url)) :
				$url = prepare_url($url);
				$media = Media::find('first',array('conditions' => array("url LIKE '" .  $url . "' AND playlist_id = ?", $playlist->id)));
				if (empty($media)) :
					$media = Media::create(array(
									'url' => $url,
									'playlist_id' => $playlist->id
						));
				else :
					$media->count++;
					$media->save();
				endif;
				$this->session->set_flashdata('message', 'Congrats!, you added a video to the playlist');
				redirect(site_url($playlist->slug . '/' . $playlist->collab));
			else :
				$this->session->set_flashdata('message', 'Sorry!, the site is not allowed, try youtube and vimeo URLs');
				redirect(site_url($playlist->slug . '/' . $playlist->collab));
			endif;
		else :
			$this->session->set_flashdata('message', 'The playlist doesn\'t exists or the collab token is not valid');
			redirect(site_url());
		endif;
	}
}
