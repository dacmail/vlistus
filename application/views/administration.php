<section id="container">
	<? if ($this->session->flashdata('justcreated') == true) : ?>
		<section id="presentation">
			<i class="icon-heart"></i>
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
		<p class="url"><span class="icon-admin url-type">Admin</span> <a href="<?= site_url($playlist->slug . '/' . $playlist->admin); ?>" target="_blank"><?= ellipsize(site_url($playlist->slug . '/' . $playlist->admin),49, .5); ?></a> <a href="#" class="admin-share button">Share</a></p>
		<p class="url"><span class="icon-collab url-type">Collab</span> <a href="<?= site_url($playlist->slug . '/' . $playlist->collab); ?>" target="_blank"><?= ellipsize(site_url($playlist->slug . '/' . $playlist->collab),49, .5); ?> <a href="#" class="collab-share button">Share</a></p>
		<p class="url"><span class="icon-play url-type">Play</span> <a href="<?= site_url($playlist->slug); ?>" target="_blank"><?= ellipsize(site_url($playlist->slug),49, .5); ?> <a href="#" class="play-share button">Share</a></p>
	</section>
	<section id="preferences">
		<form method="post" action="<?= site_url('playlists/update') ?>">
			<input type="hidden" name="list" value="<?= $playlist->id; ?>">
			<input type="hidden" name="admin" value="<?= $playlist->admin; ?>">
			<p><label for="name">Playlist name</label><input value="<?= $playlist->name; ?>" type="text" name="name"></p>
			<p><label for="description">Playlist description</label><textarea name="description" id=""><?= $playlist->description; ?></textarea></p>
			<p><label for="email">Playlist owner email</label><input type="text" name="email" value="<?= $playlist->email; ?>"> <span class="hint">We only use this email address to recover your playlist in the future</span></p>
			<p><label for="email">Private playlist</label><input <?= ($playlist->private ? 'checked' : ''); ?> type="checkbox" name="private"> Allow playlist to be shown in popular/latest lists</p>
			<p class="topb"><input type="submit" value="Save changes"></p>
		</form>
	</section>
	<section class="popup" id="admin-share">
		<h2>Share your ADMIN URL</h2>
		<input type="text" value="<?= site_url($playlist->slug . '/' . $playlist->admin) ?>">
		<ul>
			<li><a href="#" onclick="
						    window.open(
						      'http://twitter.com/share?url='+encodeURIComponent(' <?= site_url($playlist->slug . '/' . $playlist->admin) ?>') + '&text=Playlist \'<?= $playlist->name; ?>\' admin page on @vlistus. <?= site_url($playlist->slug . '/' . $playlist->admin) ?>',
						      'twitter-share-dialog',
						      'width=450,height=550');
						    return false;">Twitter</a></li>
			<li><a href="#" onclick="
						    window.open(
						      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(' <?= site_url($playlist->slug . '/' . $playlist->admin) ?>'),
						      'facebook-share-dialog',
						      'width=626,height=436');
						    return false;">Facebook</a></li>
			<li><a href="#" onclick="
						    window.open(
						      'https://plus.google.com/share?url='+encodeURIComponent(' <?= site_url($playlist->slug . '/' . $playlist->admin) ?>'),
						      'gplus-share-dialog',
						      'width=480,height=436');
						    return false;">Google +</a></li>
			<li><a target="_blank" href="mailto:?subject=Playlist '<?= $playlist->name; ?>' admin page on vlistus&body=<?= site_url($playlist->slug . '/' . $playlist->admin) ?>" >Email</a></li>
		</ul>
	</section>
	<section class="popup" id="collab-share">
		<h2>Share your COLLAB URL</h2>
		<input type="text" value="<?= site_url($playlist->slug . '/' . $playlist->collab) ?>">
		<ul>
			<li><a href="#" onclick="
						    window.open(
						      'http://twitter.com/share?url='+encodeURIComponent(' <?= site_url($playlist->slug . '/' . $playlist->collab) ?>') + '&text=Playlist \'<?= $playlist->name; ?>\' collab page on @vlistus. <?= site_url($playlist->slug . '/' . $playlist->collab) ?>',
						      'twitter-share-dialog',
						      'width=450,height=550');
						    return false;">Twitter</a></li>
			<li><a href="#" onclick="
						    window.open(
						      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(' <?= site_url($playlist->slug . '/' . $playlist->collab) ?>'),
						      'facebook-share-dialog',
						      'width=626,height=436');
						    return false;">Facebook</a></li>
			<li><a href="#" onclick="
						    window.open(
						      'https://plus.google.com/share?url='+encodeURIComponent(' <?= site_url($playlist->slug . '/' . $playlist->collab) ?>'),
						      'gplus-share-dialog',
						      'width=480,height=436');
						    return false;">Google +</a></li>
			<li><a target="_blank" href="mailto:?subject=Playlist '<?= $playlist->name; ?>' collab page on vlistus&body=<?= site_url($playlist->slug . '/' . $playlist->collab) ?>" >Email</a></li>
		</ul>
	</section>
	<section class="popup" id="play-share">
		<h2>Share your PLAY URL</h2>
		<input type="text" value="<?= site_url($playlist->slug) ?>">
		<ul>
			<li><a href="#" onclick="
						    window.open(
						      'http://twitter.com/share?url='+encodeURIComponent(' <?= site_url($playlist->slug) ?>') + '&text=Check playlist \'<?= $playlist->name; ?>\' on @vlistus. <?= site_url($playlist->slug) ?>',
						      'twitter-share-dialog',
						      'width=450,height=550');
						    return false;">Twitter</a></li>
			<li><a href="#" onclick="
						    window.open(
						      'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(' <?= site_url($playlist->slug) ?>'),
						      'facebook-share-dialog',
						      'width=626,height=436');
						    return false;">Facebook</a></li>
			<li><a href="#" onclick="
						    window.open(
						      'https://plus.google.com/share?url='+encodeURIComponent(' <?= site_url($playlist->slug) ?>'),
						      'gplus-share-dialog',
						      'width=480,height=436');
						    return false;">Google +</a></li>
			<li><a target="_blank" href="mailto:?subject=Playlist '<?= $playlist->name; ?>' on vlistus&body=<?= site_url($playlist->slug) ?>" >Email</a></li>
		</ul>
	</section>
	<div class="overlay"></div>
</section>
