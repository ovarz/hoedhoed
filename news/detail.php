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
		  <section aria-label="Hero Image" class="hero-image">
		    <?php $media_type='image'; require ($_SERVER['HH'].'module/media-frame.php')?>
		  </section>
		  
		  
		  
		  <?php require ($_SERVER['HH'].'module/content-head.php')?>
		  
		  
		  
		  <section aria-label="Iklan">
		    <?php require ($_SERVER['HH'].'iklan/iklan-468x60.php')?>
		    <?php require ($_SERVER['HH'].'iklan/iklan-320x100.php')?>
		  </section>
		  
		  
		  
		  <?php require ($_SERVER['HH'].'module/content-detail.php')?>
		  <?php require ($_SERVER['HH'].'module/topic-list.php')?>
		  
		  
		  
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
        
        
        
          <section aria-label="Comments" class="section-container comment-box" id="comments">
            <div class="section-title">
              <div class="section-title-name">Comments</div>
            </div>
            <div class="fb-comments" data-width="100%" data-numposts="10" order_by="reverse_time" data-href="https://developers.facebook.com/docs/plugins/comments#configurator"></div>
          </section>
		</div>
	  </div>
	
	
	
	
	
	  <?php $sidebar_standing='show'; $sidebar_rodanesia='hide'; $sidebar_hoednews='show'; $sidebar_indohoed='show'; $sidebar_hoedball='show'; $sidebar_topic='show'; $sidebar_editorial='show'; $sidebar_infografis='show'; $sidebar_popular='show'; $sidebar_promo='hide'; $sidebar_featured_video='show';
	  require ($_SERVER['HH'].'inc/sidebar.php')?>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['HH'].'inc/footer.php')?>
<?php require ($_SERVER['HH'].'inc/base-bottom.php')?>