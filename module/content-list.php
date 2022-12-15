<div class="content-box">
  <div class="content-thumb">
    <a aria-label="Link_Title" title="Link_Title" class="content-thumb-frame flex_ori thumb-loading" href="<?php echo $channel_link; ?>/detail.php">
	  <?php if($image_size == 'big') { ?>
        <img alt="img_title" class="lazyload" data-original="img/sample/sample-<?php echo rand(1,20); ?>.jpg" />
	  <?php } ?>
	  <?php if($image_size == 'default') { ?>
        <img alt="img_title" class="lazyload" data-original="img/sample/minisample-<?php echo rand(1,20); ?>.jpg"
        data-srcset="img/sample/minisample-<?php echo rand(1,20); ?>.jpg 640w, img/sample/sample-<?php echo rand(1,20); ?>.jpg 1920w" />
	  <?php } ?>
    </a>
  </div>
  
  <div class="content-info">
    <a aria-label="Link_Title" title="Link_Title" class="content-info-title" href="<?php echo $channel_link; ?>/detail.php">
      <h2><?php echo $random_title[array_rand($random_title)]; ?></h2>
    </a>
    <div class="content-info-misc">
      <?php if($show_author == 'yes') { ?>
        <a aria-label="Link_Title" title="Link_Title" class="content-info-author" href="author/">
          <?php echo $random_author[array_rand($random_author)]; ?>
        </a>
      <?php } ?>
      <?php if($show_channel == 'yes') { ?>
        <a aria-label="Link_Title" title="Link_Title" class="content-info-channel" href="<?php echo $channel_link; ?>/">
          <?php echo $random_channel[array_rand($random_channel)]; ?>
        </a>
      <?php } ?>
      <div class="content-info-date">20 Sep 2022</div>
      <?php if($show_time == 'yes') { ?>
        <div class="content-info-date desktop-only">00:00 WIB</div>
      <?php } ?>
      <?php if($show_comment == 'yes') { ?>
        <div class="content-info-comment desktop-only">00</div>
      <?php } ?>
    </div>
    <?php if($show_description == 'yes') { ?>
      <h4 class="content-info-desc desktop-only"><?php echo $random_desc[array_rand($random_desc)]; ?></h4>
    <?php } ?>
  </div>
</div>