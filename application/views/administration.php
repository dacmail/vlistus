<section id="container">
	<? if ($this->session->flashdata('justcreated')== true) : ?>
		<section id="presentation">
			<h1 class="title">Congratulations!</h1>
			<h2 class="subtitle">Your list has been created, this are your URLs:</h2>
		</section>
	<? else : ?>
		<section id="presentation">
			<h1 class="title"><?= $playlist->name; ?></h1>
			<h2 class="subtitle desc"><?= $playlist->description ?></h2>
		</section>
	<? endif; ?>
	<section id="urls">
		<p class="url"><span class="url-type">Admin</span> <a href="<?= site_url($playlist->slug . '/' . $playlist->admin); ?>" target="_blank"><?= ellipsize(site_url($playlist->slug . '/' . $playlist->admin),50, .5); ?></a> <a href="#" class="button">Copy</a></p>
		<p class="url"><span class="url-type">Collab</span> <a href="<?= site_url($playlist->slug . '/' . $playlist->collab); ?>" target="_blank"><?= ellipsize(site_url($playlist->slug . '/' . $playlist->collab),50, .5); ?> <a href="#" class="button">Copy</a></p>
		<p class="url"><span class="url-type">Play</span> <a href="<?= site_url($playlist->slug); ?>" target="_blank"><?= ellipsize(site_url($playlist->slug),50, .5); ?> <a href="#" class="button">Copy</a></p>
	</section>
	<section id="preferences">
		<form method="post" action="<?= site_url('playlists/update') ?>">
			<input type="hidden" name="list" value="<?= $playlist->id; ?>">
			<input type="hidden" name="admin" value="<?= $playlist->admin; ?>">
			<p><label for="name">Playlist name:</label><input value="<?= $playlist->name; ?>" type="text" name="name"></p>
			<p><label for="description">Playlist description:</label><textarea name="description" id=""><?= $playlist->description; ?></textarea></p>
			<p><label for="email">Playlist owner email:</label><input type="text" name="email" value="<?= $playlist->email; ?>"> <span class="hint">We only use this email address to recover your playlist in the future</span></p>
			<p><label for="email">Private playlist:</label><input <?= ($playlist->private ? 'checked' : ''); ?> type="checkbox" name="private"> Allow playlist to be shown in popular/latest lists</p>
			<p><input type="submit" value="Save changes"></p>
		</form>
	</section>

</section>
