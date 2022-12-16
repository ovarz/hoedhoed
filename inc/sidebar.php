<div class="column-right column-small">
  <div class="column-container column-sticky">
    <?php require ($_SERVER['HH'].'iklan/iklan-300x250.php')?>
	
	
  
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
	
	
  
    <section aria-label="Wawancara" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Wawancara</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $show_author='yes'; $show_channel='no'; $show_date='yes'; $show_time='no'; $show_comment='no'; $show_description='no'; 
		  $image_size='default'; $channel_link='news'; 
          require ($_SERVER['HH'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
	
	
	
    <?php require ($_SERVER['HH'].'iklan/iklan-300x250.php')?>
    
    
    
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
	
	
	
    <?php require ($_SERVER['HH'].'iklan/iklan-300x250.php')?>
  </div>
</div>