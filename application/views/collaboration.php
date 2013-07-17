<section id="container">
	<section id="presentation">
		<h1 class="title"><?= $playlist->name; ?></h1>
		<p class="url"><?= auto_link(site_url($playlist->slug)) ?></p>
		<h2 class="subtitle desc"><?= $playlist->description ?></h2>
	</section>
	<section id="add_video">
		<form method="post" action="<?= site_url('multimedia/create'); ?>">
			<input type="hidden" name="list" value="<?= $playlist->id; ?>">
			<input type="hidden" name="collab" value="<?= $playlist->collab; ?>">
			<input type="text" id="video_urls" name="urls" placeholder="vimeo or youtube urls" />
			<input id="video_submit" type="submit" value="Add video" />
		</form>
	</section>
</section>
