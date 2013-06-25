<?php
function vlistus_check_domain($url) {
	$allowed_sites = array('www.youtube.com','m.youtube.com', 'youtube.com', 'vimeo.com', 'www.vimeo.com');
	$parse = parse_url($url, PHP_URL_HOST);
	return (in_array($parse, $allowed_sites));
}

?>