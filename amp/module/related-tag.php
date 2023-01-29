<section aria-label="Related Tag" class="section-container related-tag">
  <?php for ($i=1; $i <= 5 ; $i++) { ?>
    <a aria-label="Link_Title" title="Link_Title" class="related-tag-link" href="tag.php">
      <?php echo $random_topic[array_rand($random_topic)]; ?>
    </a>
  <?php } ?>
</section>