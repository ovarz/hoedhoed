<div class="column-right column-small">
  <div class="column-container column-sticky">
    <?php require ($_SERVER['HH'].'iklan/iklan-300x250.php')?>
	
	
    
	<?php if($sidebar_standing == 'show') { ?>
    <section aria-label="Terpopuler" class="section-container content-list widget-standing">
      <div class="section-title">
        <div class="section-title-name">Terpopuler</div>
      </div>
      <div class="standing-container">
	    <div class="standing-row standing-head">
		  <div class="standing-number">Position</div>
		  <div class="standing-record">Match Record</div>
		</div>
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
	    <div class="standing-row">
		  <div class="standing-number">0</div>
		  <div class="standing-info">
		    <div class="standing-name"><?php echo $random_author[array_rand($random_author)]; ?></div>
		    <div class="standing-origin"><?php echo $random_origin[array_rand($random_origin)]; ?></div>
		  </div>
		  <div class="standing-record">00-00</div>
		</div>
        <?php } ?>
      </div>
    </section>
	<?php } ?>
	
	
  
	<?php if($sidebar_rodanesia == 'show') { ?>
    <section aria-label="Rodanesia" class="section-container content-list widget-rodanesia">
      <div class="section-title-image flex_ori">
	    <img alt="Logo Rodanesia" class="lazyload" data-original="img/logo-rodanesia.png" width="125" height="34">
      </div>
      <div class="content-list-container box-container">
        <?php for ($i=1; $i <= 3 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='yes'; $show_date='yes'; $show_time='no'; $show_comment='no'; $show_description='no'; 
		  $image_size='default'; $channel_link='news'; 
          require ($_SERVER['HH'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	<?php } ?>
	
	
  
	<?php if($sidebar_hoednews == 'show') { ?>
    <section aria-label="HoedNews" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">HoedNews</div>
      </div>
      <div class="media-list-container video-list-container">
        <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='no'; 
        $image_size='default'; $channel_link='video'; 
        require ($_SERVER['HH'].'module/content-list.php') ?>
      </div>
    </section>
	<?php } ?>
	
	
  
	<?php if($sidebar_indohoed == 'show') { ?>
    <section aria-label="Indonesia Hoed" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Indonesia Hoed</div>
      </div>
      <div class="media-list-container video-list-container">
        <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='no'; 
        $image_size='default'; $channel_link='video'; 
        require ($_SERVER['HH'].'module/content-list.php') ?>
      </div>
    </section>
	<?php } ?>
	
	
  
	<?php if($sidebar_hoedball == 'show') { ?>
    <section aria-label="HoedBall" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">HoedBall</div>
      </div>
      <div class="media-list-container video-list-container">
        <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='no'; 
        $image_size='default'; $channel_link='video'; 
        require ($_SERVER['HH'].'module/content-list.php') ?>
      </div>
    </section>
	<?php } ?>
	
	
	
    <?php require ($_SERVER['HH'].'iklan/iklan-300x250.php')?>
    
    
    
	<?php if($sidebar_topic == 'show') { ?>
    <section aria-label="Tren HoedHoed" class="section-container topic-sidebar">
      <div class="section-title">
        <div class="section-title-name">Tren HoedHoed</div>
      </div>
      <div class="topic-sidebar-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <a aria-label="Link_Title" title="Link_Title" class="topic-sidebar-link" href="topik/">
            <div class="topic-sidebar-place content_center">
			  <?php require ($_SERVER['HH'].'img/icon/topic-number.svg')?>
			  <b class="topic-sidebar-number">0</b>
			</div>
            <h2 class="topic-sidebar-title"><?php echo $random_topic[array_rand($random_topic)]; ?></h2>
          </a>
        <?php } ?>
      </div>
    </section>
	<?php } ?>
	
	
  
	<?php if($sidebar_editorial == 'show') { ?>
    <section aria-label="Wawancara" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Pilihan Editor</div>
      </div>
      <div class="content-list-container sidebar-editorial">
	      <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='yes'; $show_time='no'; $show_comment='yes'; $show_description='no'; 
		  $image_size='big'; $channel_link='news'; 
          require ($_SERVER['HH'].'module/content-list.php') ?>
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='yes'; $show_time='no'; $show_comment='yes'; $show_description='no'; 
		  $image_size='default'; $channel_link='news'; 
          require ($_SERVER['HH'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	<?php } ?>
	
	
  
	<?php if($sidebar_infografis == 'show') { ?>
    <section aria-label="Infografis" class="section-container content-list infographic">
      <div class="section-title">
        <div class="section-title-name">Infografis</div>
      </div>
      <div class="content-list-container infographic-container">
        <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='yes'; $show_time='no'; $show_comment='yes'; $show_description='yes'; 
        $image_size='default'; $channel_link='news'; 
        require ($_SERVER['HH'].'module/content-list.php') ?>
      </div>
      <div class="infographic-split">
        <?php for ($i=1; $i <= 2 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='no'; 
		  $image_size='default'; $channel_link='news'; 
          require ($_SERVER['HH'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	<?php } ?>
	
	
  
	<?php if($sidebar_popular == 'show') { ?>
    <section aria-label="Popular Post" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Popular Post</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $show_author='yes'; $show_channel='no'; $show_date='yes'; $show_time='no'; $show_comment='no'; $show_description='no'; 
		  $image_size='default'; $channel_link='news'; 
          require ($_SERVER['HH'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	<?php } ?>
	
	
	
	<?php if($sidebar_promo == 'show') { ?>
    <section aria-label="Internal Promo" class="section-container">
      <a aria-label="Link_Title" title="Link_Title" class="internal-promo-link" href="">
	    <img alt="img_title" class="lazyload" data-original="img/hoed-pemilu.png" width="279" height="178" />
	  </a>
    </section>
	<?php } ?>
	
	
	
	<?php if($sidebar_featured_video == 'show') { ?>
    <section aria-label="Featured Video" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Featured Video</div>
      </div>
      <div class="media-list-container video-list-container">
        <?php $show_thumbnail='yes'; $show_author='no'; $show_channel='no'; $show_date='no'; $show_time='no'; $show_comment='no'; $show_description='no'; 
        $image_size='default'; $channel_link='video'; 
        require ($_SERVER['HH'].'module/content-list.php') ?>
      </div>
    </section>
	<?php } ?>
	
	
	
    <?php require ($_SERVER['HH'].'iklan/iklan-300x250.php')?>
  </div>
</div>