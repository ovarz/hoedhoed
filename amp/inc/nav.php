<nav>
  <span class="width-max">
	<?php foreach($kanal_array as $kanal_list){ ?>
	  <a aria-label="<?php echo($kanal_list['kanal_name'])?>" title="<?php echo($kanal_list['kanal_name'])?>"
	  class="nav-link <?php if($channel == $kanal_list['kanal_id']) { ?>nav-curr<?php } ?> content_center <?php echo($kanal_list['custom_class'])?>" 
	  href="kanal.php">
		<span class="nav-label"><?php echo($kanal_list['kanal_name'])?></span>
	  </a>
	<?php } ?>
  </span>
</nav>