<?php 
  $page='detail';
  $channel='news';
  $search_page='cari/'; 
  require ('../inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH'].'inc/meta.php')?>
<?php $channel_link='news'; require ($_SERVER['HH'].'inc/top.php')?>
<?php require ($_SERVER['HH'].'inc/header.php')?>
<?php require ($_SERVER['HH'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
    <div class="main-container">
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		  <section aria-label="Headline" class="hero-image">
		    <div class="image-frame">
			  <div class="image-frame-box flex_ori thumb-loading">
                <img alt="img_title" data-sizes="auto" class="lazyload" 
                  data-original="img/sample/minisample-1.jpg"
                  data-srcset="img/sample/minisample-1.jpg 300w, img/sample/sample-1.jpg 640w"
                />
			  </div>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Iklan">
		    <?php require ($_SERVER['HH'].'iklan/iklan-468x60.php')?>
		    <?php require ($_SERVER['HH'].'iklan/iklan-320x100.php')?>
		  </section>
		  
		  
		  
		  <section aria-label="Berita Terkait" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Berita Terkait</div>
			</div>
		    <div class="content-list-container">
			  <?php for ($i=1; $i <= 5 ; $i++) { ?>
			    <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='yes'; $show_date='yes'; $show_time='yes'; $show_comment='yes'; $show_description='yes'; 
				$image_size='default'; $channel_link='news';
				require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		</div>
	  </div>
	
	
	
	
	
	  <?php require ($_SERVER['HH'].'inc/sidebar.php')?>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['HH'].'inc/footer.php')?>
<?php require ($_SERVER['HH'].'inc/base-bottom.php')?>