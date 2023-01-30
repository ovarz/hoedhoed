<section aria-label="Headline" class="headline">
  <amp-carousel width="160" height="90" layout="responsive" type="slides" autoplay delay="5000" role="region" aria-label="Headline">
	<?php for ($i=1; $i <= $headline_total ; $i++) { ?>
	  <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_description='no';
	  require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
	<?php } ?>
  </amp-carousel>
</section>