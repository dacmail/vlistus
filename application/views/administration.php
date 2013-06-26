Administrator

<p>Collaboration url: <?= auto_link(site_url($playlist->slug . '/' . $playlist->collab)); ?></p>
<p>Playlist public url: <?= auto_link(site_url($playlist->slug)); ?></p>

<?php foreach ($playlist->media as $media) : ?>
	<li><?= auto_link($media->url, 'url', true); ?> -  <a href="#">Delete</a></li>
<?php endforeach; ?>

<form method="post" action="<?= site_url('playlists/update') ?>">
	<input type="hidden" name="list" value="<?= $playlist->id; ?>">
	<input type="hidden" name="admin" value="<?= $playlist->admin; ?>">
	<p><label for="name">Playlist name:</label><input value="<?= $playlist->name; ?>" type="text" name="name"></p>
	<p><label for="description">Playlist description:</label><textarea name="description" id=""><?= $playlist->description; ?></textarea></p>
	<p><label for="email">Playlist owner email:</label><input type="text" name="email" value="<?= $playlist->email; ?>"></p>
	<p><label for="email">Private playlist:</label><input <?= ($playlist->private ? 'checked' : ''); ?> type="checkbox" name="private"></p>
	<p><input type="submit" value="Save changes"></p>
</form>