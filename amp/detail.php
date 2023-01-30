<?php 
  $page='home';
  $channel='home';
  $search_page='cari/'; 
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
		<a aria-label="Game" title="Game" class="breadcrumb-link" href="channel.php">Game</a>
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
      </main>
    </section>
	
	
	
	<?php require ($_SERVER['HH_AMP'].'module/related-tag.php')?>
		  
		  
		  
    <section aria-label="Berita Terkait" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Berita Terkait</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>