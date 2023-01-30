<?php 
  $page='home';
  $channel='home';
  $search_page='search'; 
  $carousel='yes';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/meta.php')?>
<style amp-custom>
  <?php require ($_SERVER['HH_AMP'].'css/font.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/rancak.css')?>
  
  .pagelist-container, .pagelist-container ul{padding-left:var(--size-4);}
  .pagelist-container{list-style:disc;}
  .pagelist-container ul{list-style:circle;}
  .pagelist-container li{padding:var(--size-1) 0}
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
		  
		  
		  
    <section aria-label="Daftar Halaman" class="section-container">
      <div class="section-title">
        <div class="section-title-name">Daftar Halaman</div>
      </div>
      <ul class="pagelist-container">
	    <li>
          <a aria-label="Link_Title" title="Link_Title" class="pagelink" href="index.php">Halaman Utama</a>
		</li>
	    <li>
          <a aria-label="Link_Title" title="Link_Title" class="pagelink" href="channel.php">Halaman Kanal</a>
		</li>
	    <li>
          <a aria-label="Link_Title" title="Link_Title" class="pagelink" href="detail.php">Halaman Detail</a>
		</li>
	    <li>
          <div class="pagelink">Halaman Pencarian</div>
		  <ul>
			<li>
			  <a aria-label="Link_Title" title="Link_Title" class="pagelink" href="search.php">Halaman Pencarian Default</a>
			</li>
			<li>
			  <a aria-label="Link_Title" title="Link_Title" class="pagelink" href="search-result.php">Halaman Hasil Pencarian</a>
			</li>
			<li>
			  <a aria-label="Link_Title" title="Link_Title" class="pagelink" href="search-empty.php">Halaman Pencarian Tidak Ditemukan</a>
			</li>
		  </ul>
		</li>
      </ul>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>