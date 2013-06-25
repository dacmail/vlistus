Collaboration
Add media to <?= $playlist->name; ?>
<form method="post" action="<?= site_url('multimedia/create'); ?>">
	<input type="hidden" name="list" value="<?= $playlist->id; ?>">
	<input type="hidden" name="collab" value="<?= $playlist->collab; ?>">
	<input type="text" id="urls" name="urls" />
	<input type="submit" value="Add media" />
</form>