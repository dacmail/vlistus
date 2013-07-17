<section id="container">
	<section id="presentation">
		<h1 class="title"><?= $playlist->name; ?></h1>
	</section>
	<section id="sharer">
		<a href="https://twitter.com/share" class="twitter-share-button" data-via="vlistus">Tweet</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
		<div class="g-plusone" data-href="<?= site_url($playlist->slug) ?>" data-size="medium"></div>
		<script type="text/javascript">
		  (function() {
		    var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
		    po.src = 'https://apis.google.com/js/plusone.js';
		    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
		  })();
		</script>
		<iframe src="//www.facebook.com/plugins/like.php?href=<?= site_url($playlist->slug); ?>&amp;send=false&amp;layout=button_count&amp;width=110&amp;show_faces=true&amp;font&amp;colorscheme=light&amp;action=like&amp;height=21&amp;appId=468142506573265" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:110px; height:21px;" allowTransparency="true"></iframe>
	</section>
	<script type="text/javascript">
	  $(function() {
	    $("#osmplayer").osmplayer({
	      playlist: "<?= site_url('playlists/xml/' . $playlist->id . '.xml') ?>",
	      height: '500px'
	    });
	  });
	</script>
	<div id="osmplayer"></div>
	<section id="description">
		<?= $playlist->description ?>
	</section>
</section>
