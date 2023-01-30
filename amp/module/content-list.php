<div class="content-box">
  <?php if($show_thumbnail == 'yes') { ?>
    <div class="content-thumb">
	  <a aria-label="<?php echo $random_title[array_rand($random_title)]; ?>" title="<?php echo $random_title[array_rand($random_title)]; ?>" class="content-thumb-frame flex_ori" 
	  href="detail.php">
		<amp-img alt="Img_Title" width="24" height="24" layout="fill" src="../img/sample/sample-<?php echo rand(1,20); ?>.jpg"></amp-img>
		<?php if($thumbnail_sizes == 'photo') { ?>
          <div class="content-icon content_center">
			<?php require ($_SERVER['HH'].'img/icon/camera.svg')?>
          </div>
		<?php } ?>
	  </a>
	</div>
  <?php } ?>
  
  <div class="content-info">
    <a aria-label="<?php echo $random_title[array_rand($random_title)]; ?>" title="<?php echo $random_title[array_rand($random_title)]; ?>" class="content-info-title" 
	href="detail.php">
      <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
    </a>
	<div class="content-info-misc">
      <?php if($show_channel != 'no') { ?>
        <a aria-label="<?php echo $random_channel[array_rand($random_channel)]; ?>" title="<?php echo $random_channel[array_rand($random_channel)]; ?>" class="content-info-channel" 
		href="channel.php">
		  <?php if($show_channel == 'default') { ?>
            <?php echo $random_channel[array_rand($random_channel)]; ?>
		  <?php } ?>
		  <?php if($show_channel == 'author') { ?>
            <?php echo $random_author[array_rand($random_author)]; ?>
		  <?php } ?>
        </a>
      <?php } ?>
      <?php if($show_date == 'yes') { ?>
        <div class="content-info-date">00-00-2023</div>
      <?php } ?>
      <?php if($show_time == 'yes') { ?>
        <div class="content-info-time desktop-only">00:00 WIB</div>
      <?php } ?>
	</div>
    <?php if($show_description == 'yes') { ?>
      <div class="content-info-desc"><?php echo $random_desc[array_rand($random_desc)]; ?></div>
    <?php } ?>
  </div>
</div>