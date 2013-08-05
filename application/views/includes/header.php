<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title><?= isset($playlist) ? $playlist->name . ' | ' : ''; ?> VLISTUS.com | Create and share your collaborative video playlists</title>
    <meta name="description" content="VLISTUS lets you create collaborative video playlists. Create and share videos you like with your friends." />
    <meta name="keywords" content="playlists, video, collaboration, crowd, lists, media, tool, create, music videos" />
    <meta name="robots" content="index, follow" />
	<script type='text/javascript' src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.2/jquery-ui.min.js"></script>
	<link rel="stylesheet" href="<?= base_url('osmplayer/jquery-ui/dark-hive/jquery-ui.css') ?>">
	<script type="text/javascript" src="<?= base_url('osmplayer/bin/osmplayer.compressed.js') ?>"></script>
	<link rel="stylesheet" href="<?= base_url('osmplayer/templates/default/css/osmplayer_default.css') ?>">
	<script type="text/javascript" src="<?= base_url('osmplayer/templates/default/osmplayer.default.js') ?>"></script>
	<script type='text/javascript' src="<?= base_url('js/default.js') ?>"></script>
	<link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
	<link rel="icon" type="image/png" href="<?= base_url('favicon.png'); ?>">
	<meta property="og:image" content="<?= base_url('avatar.jpg'); ?>" />
</head>
<body class="<?= isset($class) ? $class : ''; ?>">
	<header id="header" class="clearfix">
		<div class="wrap">
			<a href="<?= base_url(); ?>"><img class="logo" src="<?= base_url('images/logo-min.jpg') ?>" alt="VLISTUS.com | Create and share your collaborative video playlists"></a>
		</div>
	</header>

