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
  <?php require ($_SERVER['HH_AMP'].'css/detail.css')?>
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
		  
		  
		  
    <section aria-label="Artikel Info" class="section-container detail-info">
      <div class="breadcrumb">
		<a aria-label="Home" title="Home" class="breadcrumb-link" href="index.php">Home</a>
		<a aria-label="Game" title="Game" class="breadcrumb-link" href="kanal.php">Game</a>
	  </div>
	  <h1 class="detail-info-title">3 Trik Jitu Memenangkan Game The Last of Us Part II di PS</h1>
	  <div class="detail-info-misc">
		<div class="detail-info-author">
		  <div class="detail-info-label">Penulis :</div>
		  <a aria-label="Link_Title" title="Link_Title" class="detail-info-name" href="author/"><?php echo $random_author[array_rand($random_author)]; ?></a>
		</div>
		<div class="detail-info-author">
		  <div class="detail-info-label">Editor :</div>
		  <a aria-label="Link_Title" title="Link_Title" class="detail-info-name" href="author/"><?php echo $random_author[array_rand($random_author)]; ?></a>
		</div>
		<div class="detail-info-date">00 September 0000</div>
	  </div>
	  <?php require ($_SERVER['HH_AMP'].'module/detail-image.php')?>
    </section>
		  
		  
		  
    <?php $content_full='yes'; require ($_SERVER['HH_AMP'].'module/detail-default.php')?>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>