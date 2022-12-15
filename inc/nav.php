<nav id="popup-MainMenu" class="content_center">
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
		<div class="menu-more">
          <button title="More" class="menu-link content_center desktop-only">
            <span class="menu-label">More</span>
          </button>
		  <div class="menu-sub">
		    <div class="menu-sub-box">
              <?php 
                foreach($subkanal_array as $subkanal_list){
              ?>
                <a aria-label="<?php echo($subkanal_list['kanal_name'])?>" title="<?php echo($subkanal_list['kanal_name'])?>" 
                href="<?php echo($subkanal_list['kanal_link'])?>"
                class="menu-link <?php if($channel == $subkanal_list['kanal_id']) { ?>menu-curr<?php } ?> content_center <?php echo($subkanal_list['custom_class'])?>">
                  <span class="menu-label"><?php echo($subkanal_list['kanal_name'])?></span>
                </a>
              <?php } ?>
			</div>
		  </div>
		</div>
	  </menu>
	</div>
    <div class="nav-right">
	  right
	</div>
  </span>
</nav>