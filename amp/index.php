<?php 
  $page='home';
  $channel='home';
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
  <?php require ($_SERVER['HH_AMP'].'css/stories.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/widget-rodanesia.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/widget-infografik.css')?>
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
		  
		  
		  
    <?php $headline_total='5'; $thumbnail_sizes='default'; require ($_SERVER['HH_AMP'].'module/headline.php') ?>
	
	
	
    <section aria-label="Stories" class="stories-list stories-carousel">
      <div class="stories-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php require ($_SERVER['HH_AMP'].'module/infographic-list.php') ?>
        <?php } ?>
      </div>
    </section>
		  
		  
		  
    <section aria-label="Terkini" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Terkini</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
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
		  
		  
		  
    <?php require ($_SERVER['HH_AMP'].'module/widget-rodanesia.php') ?>
		  
		  
		  
    <section aria-label="Hoednews" class="section-container content-list content-card-list">
      <div class="section-title">
        <div class="section-title-name">Hoednews</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 3 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
		  
		  
		  
    <section aria-label="Hoedsehat" class="section-container content-list content-card-list">
      <div class="section-title">
        <div class="section-title-name">Hoedsehat</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 3 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
		  
		  
		  
    <?php require ($_SERVER['HH_AMP'].'module/widget-detail-infografik.php') ?>
		  
		  
		  
    <section aria-label="Hoedball" class="section-container content-list content-card-list">
      <div class="section-title">
        <div class="section-title-name">Hoedball</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 3 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
		  
		  
		  
    <section aria-label="Terkini Lainnya" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Terkini Lainnya</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
	  <?php $more_label='Indeks'; require ($_SERVER['HH_AMP'].'module/button-more.php')?>
    </section>
		  
		  
		  
    <section aria-label="Foto" class="section-container content-list content-card-list">
      <div class="section-title">
        <div class="section-title-name">Foto</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 3 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='photo'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>