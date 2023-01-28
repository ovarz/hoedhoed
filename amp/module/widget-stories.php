<section aria-label="Stories" class="stories-list">
  <div class="stories-list-container">
	<?php for ($i=1; $i <= 5 ; $i++) { ?>
	  <a aria-label="Link_Title" title="Link_Title" class="stories-thumb flex_ori" href="infografik.php">
		<amp-img alt="Img_Title" width="90" height="160" layout="fill" src="../img/sample/sample-<?php echo rand(1,20); ?>.jpg"></amp-img>
	  </a>
	<?php } ?>
  </div>
</section>