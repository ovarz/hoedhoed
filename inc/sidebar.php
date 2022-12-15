<div class="column-right column-small">
  <div class="column-container column-sticky">
    <section aria-label="Wawancara" class="section-container content-list">
      <div class="section-title">
        <div class="section-title-name">Wawancara</div>
      </div>
      <div class="content-list-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <?php $image_size='default'; $show_author='no'; $show_channel='yes'; $show_time='no'; $show_comment='no'; $show_description='no'; $channel_link='news'; 
          require ($_SERVER['HH'].'module/content-list.php') ?>
        <?php } ?>
      </div>
    </section>
    
    
    
    <section aria-label="Isu Terkini" class="section-container topic-sidebar">
      <div class="section-title">
        <div class="section-title-name">Isu Terkini</div>
      </div>
      <div class="topic-sidebar-container">
        <?php for ($i=1; $i <= 5 ; $i++) { ?>
          <a aria-label="Link_Title" title="Link_Title" class="topic-sidebar-link" href="topik/">
            <div class="topic-sidebar-hashtag"><?php require ($_SERVER['HH'].'img/icon/hashtag.svg')?></div>
            <h2 class="topic-sidebar-title"><?php echo $random_topic[array_rand($random_topic)]; ?></h2>
            <div class="topic-sidebar-article">0000 Artikel</div>
          </a>
        <?php } ?>
      </div>
    </section>
  </div>
</div>