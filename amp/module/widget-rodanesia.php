<section aria-label="Rodanesia" class="section-container content-list widget-rodanesia">
  <div class="section-title">
	<div class="section-title-image flex_ori">
	  <amp-img alt="Logo Rodanesia" width="125" height="34" layout="fill" src="../img/logo-rodanesia.png"></amp-img>
	</div>
  </div>
  <div class="content-list-container">
	<?php for ($i=1; $i <= 5 ; $i++) { ?>
	  <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='no'; $show_description='no';
	  require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
	<?php } ?>
  </div>
</section>