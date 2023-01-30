<div class="detail-image">
  <?php if($media_type == 'default') { ?>
    <div class="detail-media-frame flex_ori">
      <amp-img alt="Img_Title" width="160" height="90" layout="fill" 
      src="https://cdn.hoedhoed.com/cdn-cgi/image/upload/bank_image/small/sinopsis-the-last-of-us-lengkap-dengan-daftar-pemain-dan-lin-nonton_thumb.JPG"></amp-img>
    </div>
  <?php } ?>
  
  <?php if($media_type == 'photo') { ?>
    <amp-carousel width="160" height="90" layout="responsive" type="slides" autoplay delay="5000" role="region" aria-label="Galeri">
      <?php for ($i=1; $i <= 5; $i++) { ?>
        <div class="detail-media-frame flex_ori">
		  <amp-img alt="Img_Title" width="160" height="90" layout="fill" src="../img/sample/sample-<?php echo rand(1,20); ?>.jpg"></amp-img>
		</div>
      <?php } ?>
    </amp-carousel>
  <?php } ?>
  
  <?php if($media_type == 'video') { ?>
    <div class="detail-media-frame flex_ori">
	  <amp-youtube data-videoid="xIx9wBI9il0" layout="responsive" width="480" height="270"></amp-youtube>
    </div>
  <?php } ?>
  
  <?php if($media_type == 'infografik') { ?>
    <div class="detail-infographic-frame">
      <amp-img alt="Img_Title" width="160" height="160" layout="responsive" src="../img/sample/sample-infographic.jpg"></amp-img>
    </div>
  <?php } ?>
  
  <div class="detail-image-caption">
    Game survival The Last of Us, bertahan hidup dari infeksi jamur - Tangkap layar HBO
  </div>
</div>