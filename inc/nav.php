<nav id="popup-MenuMain" class="rancak-popup content_center">
  <span class="width-max">
    <div class="nav-left">
	  <menu>
        <?php 
          foreach($kanal_array as $kanal_list){
        ?>
          <a aria-label="<?php echo($kanal_list['kanal_name'])?>" title="<?php echo($kanal_list['kanal_name'])?>" 
          href="<?php echo($kanal_list['kanal_link'])?>"
          class="menu-link <?php if($channel == $kanal_list['kanal_id']) { ?>menu-curr<?php } ?> content_center <?php echo($kanal_list['custom_class'])?>">
            <span class="menu-label"><?php echo($kanal_list['kanal_name'])?></span>
          </a>
        <?php } ?>
	  </menu>
	</div>
    <div class="nav-right">
	  <a aria-label="Rodanesia" title="Rodanesia" class="menu-link content_center" href="">
	    <div class="menu-dummy-button content_center">
		  <img alt="img_title" class="lazyload" data-original="img/logo-rodanesia.png" />
		</div>
	  </a>
	  <a aria-label="Whatchis" title="Whatchis" class="menu-link content_center" href="">
	    <div class="menu-dummy-button content_center">
	      <span>Whatchis</span>
		</div>
	  </a>
	  <button title="Search" class="menu-link menu-search open-sticky content_center desktop-only">
        <?php require ($_SERVER['HH'].'img/icon/search.svg')?>
      </button>
	</div>
  </span>
</nav>



<link rel="stylesheet" type="text/css" href="css/tiny-slider.css?<?php echo $anticache; ?>"/>
<script src="js/tiny-slider.js"></script>
<script>
  var slider = tns({
    container:'menu',
	disable:true,
    responsive:{
      1024:{
        disable:false,
        speed:333,
        items:4,
        gutter:0, 
        edgePadding:0,
        controls:true,
        nav:false,
        mouseDrag:true,
        autoplay:false,
      }
    }
  });
</script>



<div id="popup-Search" class="rancak-popup popup-search content_center">
  <span class="width-max">
    <input class="popup-search-field" name="" type="text" autocomplete="off" placeholder="Masukkan kata kunci.....">
    <button class="popup-search-button content_center" onclick="location.href='<?php echo $search_page?>';">
      <span>Cari</span>
    </button>
  </span>
</div>