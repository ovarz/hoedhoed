<section aria-label="Top" class="topbox content_center">
  <span class="width-max">
    <div class="topbox-left">
	  <div class="topbox-trending">
	    <div class="topbox-trending-label">
		  <span>Trending&nbsp;Now&nbsp;:</span>
		</div>
		<a aria-label="Link_Title" title="Link_Title" class="topbox-trending-title" href="<?php echo $channel_link; ?>/detail.php">
		  <?php echo $random_title[array_rand($random_title)]; ?>
		</a>
	  </div>
	</div>
	
    <div class="topbox-right">
	  <div class="topbox-share">
		<a aria-label="Share Facebook" title="Link_Title" class="topbox-share-link topbox-share-facebook desktop-only" href="">
		  <?php require ($_SERVER['HH'].'img/icon/share-facebook.svg')?>
		</a>
		<a aria-label="Share Twitter" title="Link_Title" class="topbox-share-link topbox-share-twitter desktop-only" href="">
		  <?php require ($_SERVER['HH'].'img/icon/share-twitter.svg')?>
		</a>
		<a aria-label="Share Whatsapp" title="Link_Title" class="topbox-share-link topbox-share-whatsapp desktop-only" href="">
		  <?php require ($_SERVER['HH'].'img/icon/share-whatsapp.svg')?>
		</a>
		<a aria-label="Share RSS" title="Link_Title" class="topbox-share-link topbox-share-rss desktop-only" href="">
		  <?php require ($_SERVER['HH'].'img/icon/share-rss.svg')?>
		</a>
		<button title="Share" class="topbox-share-link topbox-share-toggle open-sticky mobile-only">
		  <?php require ($_SERVER['HH'].'img/icon/share.svg')?>
		</button>
	  </div>
	</div>
  </span>
</section>