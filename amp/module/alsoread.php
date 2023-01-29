<div class="alsoread">
  <div class="alsoread-label">Baca Juga :</div>
  <?php for ($i=1; $i <= 3 ; $i++) { ?>
    <a aria-label="<?php echo $random_title[array_rand($random_title)]; ?>" title="<?php echo $random_title[array_rand($random_title)]; ?>" 
    class="alsoread-link" href="detail.php">
      <?php echo $random_title[array_rand($random_title)]; ?>
    </a>
  <?php } ?>
</div>