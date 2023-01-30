<?php 
  $page='channel';
  $channel='video';
  $search_page='search'; 
  $carousel='yes';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/meta.php')?>
<style amp-custom>
  <?php require ($_SERVER['HH_AMP'].'css/font.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/rancak.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/headline.css')?>
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
		  
		  
		  
    <?php $headline_total='1'; $thumbnail_sizes='video'; require ($_SERVER['HH_AMP'].'module/headline.php') ?>
		  
		  
		  
    <section aria-label="Video" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Video</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='video'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
		  
		  
		  
    <section aria-label="Terpopuler" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Terpopuler</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 2 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
		  
		  
		  
    <section aria-label="Video Lainnya" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Video Lainnya</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='video'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
	  <?php $more_label='Indeks'; require ($_SERVER['HH_AMP'].'module/button-more.php')?>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>