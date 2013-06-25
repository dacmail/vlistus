<?= $playlist->name; ?>

<script type="text/javascript">
  $(function() {
    $("#osmplayer").osmplayer({
      playlist: "<?= site_url('playlists/xml/' . $playlist->id . '.xml') ?>",
      height: '500px'
    });
  });
</script>
<div id="osmplayer"></div>