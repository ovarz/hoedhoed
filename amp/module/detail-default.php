<section aria-label="Isi Artikel" class="section-container detail-content">
  <div class="detail-share">
	<div class="detail-share-label">Share</div>
	<div class="share-list content_center">
	  <amp-social-share class="custom-style share-tw" width="24" height="24" type="twitter"></amp-social-share>
	  <amp-social-share class="custom-style share-fb" width="24" height="24" type="facebook" data-param-app_id="254325784911610"></amp-social-share>
	  <amp-social-share class="custom-style share-wa" width="24" height="24" type="whatsapp"></amp-social-share>
	</div>
  </div>

  <main class="detail-content-read">
	<h2 class="content-summary"><?php echo $random_desc[array_rand($random_desc)]; ?></h2>

	<p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
	<p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
    
	<?php if($content_full == 'yes') { ?>
      <h3><?php echo $random_desc[array_rand($random_desc)]; ?></h3>
      <ul>
        <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
        <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
        <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
      </ul>

      <?php require ($_SERVER['HH_AMP'].'module/alsoread.php')?>

      <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
      <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>

      <h4><?php echo $random_desc[array_rand($random_desc)]; ?></h4>
      <ol>
        <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
        <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
        <li><?php echo $random_desc[array_rand($random_desc)]; ?></li>
      </ol>

      <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>
      <p><?php echo $random_desc[array_rand($random_desc)]; ?></p>

      <?php require ($_SERVER['HH_AMP'].'module/alsoread.php')?>
	<?php } ?>
  </main>
</section>



<?php require ($_SERVER['HH_AMP'].'module/related-tag.php')?>