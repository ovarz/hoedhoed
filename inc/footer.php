<footer>
  <div class="footer-top">
    <span class="width-max">
	  coming soon
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