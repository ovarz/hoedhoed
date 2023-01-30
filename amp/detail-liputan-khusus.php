<?php 
  $page='detail';
  $channel='';
  $search_page='search'; 
  $carousel='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/meta.php')?>
<style amp-custom>
  <?php require ($_SERVER['HH_AMP'].'css/font.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/rancak.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/detail.css')?>
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
		  
		  
		  
    <section aria-label="Artikel Khusus" class="detail-khusus">
	  <?php $media_type='video'; require ($_SERVER['HH_AMP'].'module/detail-media.php')?>
    </section>
		  
		  
		  
    <section aria-label="Artikel Info" class="section-container detail-info">
      <?php require ($_SERVER['HH_AMP'].'module/detail-info.php')?>
	  <?php $media_type='infografik'; require ($_SERVER['HH_AMP'].'module/detail-media.php')?>
    </section>
		  
		  
		  
    <?php $content_full='no'; require ($_SERVER['HH_AMP'].'module/detail-default.php')?>



    <section aria-label="Artikel" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Artikel</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
		  
		  
		  
    <section aria-label="Liputan Khusus Lainnya" class="section-container stories-list stories-card">
      <div class="section-title">
        <div class="section-title-name">Liputan Khusus Lainnya</div>
      </div>
      <div class="stories-list-container">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <?php require ($_SERVER['HH_AMP'].'module/infographic-list.php') ?>
        <?php } ?>
      </div>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>