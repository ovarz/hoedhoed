<?php 
  $page='channel';
  $channel='infografik';
  $search_page='search'; 
  $carousel='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/meta.php')?>
<style amp-custom>
  <?php require ($_SERVER['HH_AMP'].'css/font.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/rancak.css')?>
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
		  
		  
		  
    <section aria-label="Infografik" class="section-container stories-list stories-card">
      <div class="section-title">
        <div class="section-title-name">Infografik</div>
      </div>
      <div class="stories-list-container">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <?php require ($_SERVER['HH_AMP'].'module/infographic-list.php') ?>
        <?php } ?>
      </div>
	  <?php $more_label='Indeks'; require ($_SERVER['HH_AMP'].'module/button-more.php')?>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>