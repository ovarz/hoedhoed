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
		  <section aria-label="Headline" class="headline">
		    <style><?php require ($_SERVER['HH'].'css/headline.css')?></style>
		    <div class="headline-container">
              <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='no'; 
			  $image_size='big'; $channel_link='news';
              require ($_SERVER['HH'].'module/content-list.php') ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Stories" class="section-container stories">
		    <style><?php require ($_SERVER['HH'].'css/stories.css')?></style>
		    <div class="stories-container">
			  <?php for ($i=1; $i <= 4 ; $i++) { ?>
			    <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='no'; 
				$image_size='big'; $channel_link='video';
				require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Terkini" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Terkini</div>
			</div>
		    <div class="content-list-container">
              <?php $show_thumbnail='yes'; $show_author='yes'; $show_channel='no'; $show_date='yes'; $show_time='yes'; $show_comment='yes'; $show_description='yes'; 
			  $image_size='default'; $channel_link='news';
              require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php for ($i=1; $i <= 4 ; $i++) { ?>
			    <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='yes'; $show_date='yes'; $show_time='yes'; $show_comment='yes'; $show_description='yes'; 
				$image_size='default'; $channel_link='news';
				require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Foto" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Foto</div>
			</div>
		    <div class="media-list-container">
              <?php for ($i=1; $i <= 6 ; $i++) { ?>
			    <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='yes'; 
				$image_size='default'; $channel_link='foto';
				require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <section aria-label="Jangan Lewatkan" class="section-container content-list">
		    <div class="section-title">
			  <div class="section-title-name">Jangan Lewatkan</div>
			</div>
		    <div class="content-list-container">
              <?php $show_thumbnail='yes'; $show_author='yes'; $show_channel='no'; $show_date='yes'; $show_time='yes'; $show_comment='yes'; $show_description='yes'; 
			  $image_size='default'; $channel_link='news';
              require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php for ($i=1; $i <= 4 ; $i++) { ?>
			    <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='yes'; $show_date='yes'; $show_time='yes'; $show_comment='yes'; $show_description='yes'; 
				$image_size='default'; $channel_link='news';
				require ($_SERVER['HH'].'module/content-list.php') ?>
			  <?php } ?>
			</div>
		  </section>
		  
		  
		  
		  <div class="column-big-split column-big-split-2">
		    <?php 
			  $boxkanal_array = array();
  			  $boxkanal_array[]=array('boxkanal_id'=>'news');
  			  $boxkanal_array[]=array('boxkanal_id'=>'ekonomi');
  			  $boxkanal_array[]=array('boxkanal_id'=>'budaya');
  			  $boxkanal_array[]=array('boxkanal_id'=>'entertainment');
			  foreach($boxkanal_array as $boxkanal_list){ 
			?>
              <section aria-label="<?php echo($boxkanal_list['boxkanal_id'])?>" class="section-container content-list">
                <div class="section-title">
                  <div class="section-title-name"><?php echo($boxkanal_list['boxkanal_id'])?></div>
                </div>
                <div class="content-list-container">
                  <?php $show_thumbnail='yes'; $show_author='yes'; $show_channel='no'; $show_date='yes'; $show_time='no'; $show_comment='no'; $show_description='no'; 
                  $image_size='default'; $channel_link='news';
                  require ($_SERVER['HH'].'module/content-list.php') ?>
                  <?php for ($i=1; $i <= 2 ; $i++) { ?>
                    <?php $show_thumbnail='no'; $show_author='yes'; $show_channel='no'; $show_date='yes'; $show_time='no'; $show_comment='no'; $show_description='no'; 
                    $image_size='default'; $channel_link='news';
                    require ($_SERVER['HH'].'module/content-list.php') ?>
                  <?php } ?>
                </div>
              </section>
		    <?php } ?>
		  </div>
		</div>
	  </div>
	
	
	
	
	
	  <?php require ($_SERVER['HH'].'inc/sidebar.php')?>
	  
	  
	  
	  
	  
    </div>
  </span>
</div>
<?php require ($_SERVER['HH'].'inc/footer.php')?>
<?php require ($_SERVER['HH'].'inc/base-bottom.php')?>