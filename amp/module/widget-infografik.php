<section aria-label="Infografik" class="section-container content-list content-card-list widget-infografik">
  <div class="section-title">
	<div class="section-title-name">Infografik</div>
  </div>
  <div class="content-list-container">
	<?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='author'; $show_date='yes'; $show_time='no'; $show_description='yes';
	require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
  </div>
  <div class="infografik-more">
	<?php for ($i=1; $i <= 2 ; $i++) { ?>
	  <a aria-label="Link_Title" title="Link_Title" class="content-thumb-frame infografik-more-thumb flex_ori" href="detail.php">
		<amp-img alt="Img_Title" width="24" height="24" layout="fill" src="../img/sample/sample-<?php echo rand(1,20); ?>.jpg"></amp-img>
	  </a>
	<?php } ?>
  </div>
</section>