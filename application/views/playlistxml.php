<?php header('Content-type: text/xml');  ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>'; ?>
<playlist version="1" xmlns="http://xspf.org/ns/0/">
   <trackList>
      <?php $i=0; foreach ($playlist->media as $media) : ?>
      <track>
         <title>Video <?= $i ?></title>
         <location><?= $media->url ?></location>
      </track>
      <?php $i++; endforeach; ?>
   </trackList>
</playlist>