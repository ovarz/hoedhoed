<section aria-label="Search Box" class="section-container search-box">
  <input type="text" class="search-field" placeholder="Masukkan kata kunci....."/>
  <button class="btn search-button content_center"><span>Cari</span></button>
</section>



<?php if($search_page == 'search') { ?>
  <section aria-label="Search Alert" class="section-container search-alert">
    Kata yang dicari tidak ditemukan. <br> Silakan cari kata yang lain atau cek rekomendasi dibawah ini
  </section>
<?php } ?>