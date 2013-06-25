<?= $playlist->name; ?>

<script type="text/javascript">
  $(function() {
    $("#osmplayer").osmplayer({
      playlist: "<?= base_url('playlist.xml') ?>",
      height: '500px'
    });
  });
</script>
<div id="osmplayer"></div>