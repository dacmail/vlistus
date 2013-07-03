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

	<section id="create">
		<form method="post" action="<?= site_url('playlists/create'); ?>">
			<label for="name">vlistus.com/</label>
			<input type="text" id="name" placeholder="playlist name" name="name" />
			<input type="submit" id="submit" value="Create playlist" />
		</form>
	</section>

</body>
</html>
