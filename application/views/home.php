<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <title>VLISTUS.com | Create and share your collaborative video playlists</title>
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="robots" content="index, follow" />
	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script type='text/javascript' src="<?= base_url('js/default.js') ?>"></script>
	<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body class="home">
	<header id="header">
		<div class="wrap">
			<a class="logo" href="<?= site_url(); ?>" title="Vlistus, collaborative video playlists"><img src="<?= base_url('images/logo.png'); ?>"  alt="Vlistus, collaborative video playlists"></a>
			<h1>Collaborative video playlists</h1>
			<h2>vlistus lets you create, share and enjoy collaborative video playlists. Easy and beautiful</h2>
		</div>
	</header>

	<section id="create" class="clearfix">
		<form method="post" action="<?= site_url('playlists/create'); ?>">
			<label for="name">vlistus.com/</label>
			<input type="text" autocomplete="off" data-url="<?= site_url('services/get_name.json') ?>" id="name" placeholder="playlist name" name="name" />
			<input type="submit" id="submit" value="Create playlist" />
			<span id="available"></span>
		</form>
	</section>
	<section id="steps" class="clearfix">
		<aside class="step" id="step-1">
			<span class="number">1</span>
			<h2>Create</h2>
			<p>Lorem ipsum dolor sit amet consequectum dolorem huisquo malver</p>
		</aside>
		<aside class="step" id="step-2">
			<span class="number">2</span>
			<h2>Share</h2>
			<p>Lorem ipsum dolor sit amet consequectum dolorem huisquo malver</p>
		</aside>
		<aside class="step" id="step-3">
			<span class="number">3</span>
			<h2>Play</h2>
			<p>Lorem ipsum dolor sit amet consequectum dolorem huisquo malver</p>
		</aside>
	</section>
	<footer id="footer" class="clearfix">
		<div class="wrap">
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="vlistus">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<iframe src="//www.facebook.com/plugins/like.php?href=http%3A%2F%2Fvlistus.com&amp;send=false&amp;layout=button_count&amp;width=450&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=468142506573265" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:450px; height:21px;" allowTransparency="true"></iframe>
		<p class="copy">Powered by <a href="http://ungrynerd.com">UNGRYNERD</a></p>
		</div>
	</footer>
</body>
</html>
