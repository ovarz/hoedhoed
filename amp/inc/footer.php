<footer>
  <div class="footer-top">
    <span class="width-max">
	
	  <div class="footer-top-info">
	    <div class="fti-logo">
		  <div class="fti-logo-frame flex_ori">
		    <amp-img alt="Logo Hoedhoed" width="136.17" height="32" layout="fill" src="../img/logo.png"></amp-img>
		  </div>
		</div>
		<div class="fti-name">PT. Hseo Grha Tekno</div>
		<div class="fti-email">
		  <a aria-label="Email Redaksi" title="Email Redaksi" class="fti-email-link" href="mailto:redaksi@hoedhoed.com">
		    <div class="fti-email-icon content_center">
			  <?php require ($_SERVER['HH'].'img/icon/mail.svg')?>
			</div>
			<div class="fti-email-address">redaksi@hoedhoed.com</div>
		  </a>
		  <a aria-label="Email Karir" title="Email Karir" class="fti-email-link" href="mailto:karir@hoedhoed.com">
		    <div class="fti-email-icon content_center">
			  <?php require ($_SERVER['HH'].'img/icon/mail.svg')?>
			</div>
			<div class="fti-email-address">karir@hoedhoed.com</div>
		  </a>
		  <a aria-label="Email Marketing" title="Email Marketing" class="fti-email-link" href="mailto:marketing@hoedhoed.com">
		    <div class="fti-email-icon content_center">
			  <?php require ($_SERVER['HH'].'img/icon/mail.svg')?>
			</div>
			<div class="fti-email-address">marketing@hoedhoed.com</div>
		  </a>
		</div>
		<div class="fti-group">
		  <a aria-label="Rodanesia" title="Rodanesia" class="fti-group-link" href="">
            <div class="fti-rodanesia-frame flex_ori">
              <amp-img alt="Logo Rodanesia" width="125" height="34" layout="fill" src="../img/logo-rodanesia.png"></amp-img>
            </div>
		  </a>
		  <a aria-label="Watchis" title="Watchis" class="fti-group-link" href="">
            <div class="fti-watchis-frame flex_ori">
              <amp-img alt="Logo Watchis" width="147" height="30" layout="fill" src="../img/logo-watchis.png"></amp-img>
            </div>
		  </a>
		</div>
	  </div>
	  
	  
	  <div class="footer-top-menu">
		<div class="section-title">
		  <div class="section-title-name">Kategori</div>
		</div>
		<div class="ftm-box">
          <?php foreach($kanal_array as $kanal_list){ ?>
            <a aria-label="<?php echo($kanal_list['kanal_name'])?>" title="<?php echo($kanal_list['kanal_name'])?>" class="ftm-link content_center"
            href="<?php echo($kanal_list['kanal_link'])?>">
              <?php echo($kanal_list['kanal_name'])?>
            </a>
          <?php } ?>
		</div>
	  </div>
	  
	  <div class="footer-top-follow">
		<div class="section-title">
		  <div class="section-title-name">Ikuti Kami</div>
		</div>
		<div class="ftf-list">
          <?php 
            $follow_array = array();
            $follow_array[]=array('follow_id'=>'facebook','follow_name'=>'Facebook','follow_link'=>'');
            $follow_array[]=array('follow_id'=>'twitter','follow_name'=>'Twitter','follow_link'=>'');
            $follow_array[]=array('follow_id'=>'instagram','follow_name'=>'Instagram','follow_link'=>'');
            $follow_array[]=array('follow_id'=>'youtube','follow_name'=>'Youtube','follow_link'=>'');
            foreach($follow_array as $follow_list){
          ?>
            <a aria-label="<?php echo($follow_list['follow_name'])?>" title="<?php echo($follow_list['follow_name'])?>" class="ftf-link content_center"
            href="<?php echo($follow_list['follow_link'])?>">
			  <amp-img alt="<?php echo($follow_list['follow_id']); ?>" width="55" height="55" layout="fill" 
			  src="../img/icon/footer-<?php echo($follow_list['follow_id']); ?>.png"></amp-img>
            </a>
          <?php } ?>
		</div>
		<div class="ftf-mail">
		  <div class="ftf-mail-label">Ingin menerima berita terkini setiap hari?</div>
		  <div class="ftf-mail-box">
		    <input class="ftf-mail-field" name="" type="text" autocomplete="off" placeholder="Masukkan alamat email.....">
			<button class="ftf-mail-button content_center">
			  <span>Daftar</span>
			</button>
		  </div>
		</div>
	  </div>
    </span>
  </div>



  <div class="footer-bottom">
    <span class="width-max">
      <div class="footer-copyright">
        <div class="">Hoedhoed &copy;2022 - All Right Reserved</div>
      </div>
      <div class="footer-bottom-info">
        <?php 
          $fbi_array = array();
          $fbi_array[]=array('fbi_name'=>'Pedoman Media Siber','fbi_link'=>'informasi/pedoman-media-siber.php');
          $fbi_array[]=array('fbi_name'=>'Disclaimer','fbi_link'=>'informasi/disclaimer.php');
          $fbi_array[]=array('fbi_name'=>'Tentang Kami','fbi_link'=>'informasi/tentang-kami.php');
          $fbi_array[]=array('fbi_name'=>'Redaksional','fbi_link'=>'informasi/redaksional.php');
          $fbi_array[]=array('fbi_name'=>'Hubungi Kami','fbi_link'=>'informasi/hubungi-kami.php');
          foreach($fbi_array as $fbi_list){
        ?>
          <a aria-label="<?php echo($fbi_list['fbi_name']) ?>" title="<?php echo($fbi_list['fbi_name']) ?>" class="footer-bottom-link" href="<?php echo($fbi_list['fbi_link']) ?>">
            <?php echo($fbi_list['fbi_name']) ?>
          </a>
        <?php } ?>
      </div>
    </span>
  </div>
</footer>