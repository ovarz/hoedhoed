<?php 
  $page='home';
  $channel='home';
  $search_page='cari/'; 
  require ('inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH'].'inc/meta.php')?>
<?php $channel_link='news'; require ($_SERVER['HH'].'inc/top.php')?>
<?php require ($_SERVER['HH'].'inc/header.php')?>
<?php require ($_SERVER['HH'].'inc/nav.php')?>
<div class="iklan-topbanner mobile-only"><?php require ($_SERVER['HH'].'iklan/iklan-320x100.php')?></div>
<div class="rancak-container">
  <span class="width-max">
    <div class="main-container">
	
	
	
	
	
	  <div class="column-left column-big">
	    <div class="column-container">
		  <section aria-label="Terbaru" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Terbaru</div>
			</div>
		    <div class="content-list-container">
              <?php $image_size='default'; $show_author='yes'; $show_channel='no'; $show_time='yes'; $show_comment='yes'; $show_description='yes'; $channel_link='news';
              require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php for ($i=1; $i <= 9 ; $i++) { ?>
			    <?php $image_size='default'; $show_author='no'; $show_channel='yes'; $show_time='yes'; $show_comment='yes'; $show_description='yes'; $channel_link='news';
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