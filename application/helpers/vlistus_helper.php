<?php
function vlistus_check_domain($url) {
	$allowed_sites = array('www.youtube.com','m.youtube.com', 'youtube.com', 'youtu.be', 'vimeo.com', 'www.vimeo.com');
	$parse = parse_url($url, PHP_URL_HOST);
	return (in_array($parse, $allowed_sites));
}
function prepare_url($url) {
	$isyoutube = array('www.youtube.com','m.youtube.com', 'youtube.com', 'youtu.be');
	$parse = parse_url($url, PHP_URL_HOST);
	if (in_array($parse, $isyoutube)) : //is youtube url
		parse_str(parse_url($url, PHP_URL_QUERY), $youtube);
		$safe_url = 'http://www.youtube.com/watch?v=' . $youtube['v'];
		return $safe_url;
	endif;
	return $url;
}

?>