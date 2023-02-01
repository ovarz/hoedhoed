<?php 
  $page='profile';
  $channel='';
  $search_page=''; 
  $carousel='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/meta.php')?>
<style amp-custom>
  <?php require ($_SERVER['HH_AMP'].'css/font.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/rancak.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/profile.css')?>
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
	
	
	
	<section aria-label="Profil <?php echo $random_author[array_rand($random_author)]; ?>" class="section-container profile-box">
	  <div class="profile-photo content_center">
	    <div class="profile-thumb flex_ori">
		  <amp-img alt="Img_Title" width="100" height="100" layout="fill" src="../img/sample/icon-profile-<?php echo rand(1,5); ?>.jpg"></amp-img>></amp-img>
		</div>
	  </div>
	  <div class="profile-info">
	    <div class="profile-name"><?php echo $random_author[array_rand($random_author)]; ?></div>
		<div class="profile-title">Reporter - <b><?php echo rand(1,1000); ?> Post</b></div>
		<div class="profile-join">Join Date : <b>September 2022</b></div>
	  </div>
	</section>
	
	
	
	<section aria-label="Artikel" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Artikel</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
	  <?php $more_label='Berikutnya'; require ($_SERVER['HH_AMP'].'module/button-more.php')?>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>