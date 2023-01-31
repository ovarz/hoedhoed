<?php 
  $page='indeks';
  $channel='';
  $search_page='search'; 
  $carousel='no';
  require ('inc/base.php')
?>
<?php require ($_SERVER['HH'].'inc/sample.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/meta.php')?>
<script async custom-element="amp-date-picker" src="https://cdn.ampproject.org/v0/amp-date-picker-0.1.js"></script>
<style amp-custom>
  <?php require ($_SERVER['HH_AMP'].'css/font.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/rancak.css')?>
  <?php require ($_SERVER['HH_AMP'].'css/indeks.css')?>
</style>
<?php require ($_SERVER['HH_AMP'].'inc/head-end.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/topbox.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/header.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/nav.php')?>
<div class="rancak-container">
  <span class="width-max">
		  
		  
		  
    <section aria-label="Filter Indeks" class="section-container indeks-box">
	  <div class="indeks-row">
        <select class="indeks-field">
          <option value="1">- SEMUA KANAL -</option>
          <option value="2">Lokal</option>
          <option value="3">Korea</option>
          <option value="4">Barat</option>
          <option value="5">Asia</option>
        </select>
        <div class="indeks-icon content_center"><?php require ($_SERVER['HH'].'img/icon/sortdown.svg')?></div>
	  </div>
	  <div class="indeks-row">
        <amp-date-picker id="simple-date-picker" type="single" mode="overlay" layout="container" on="select:AMP.setState({date1: event.date, dateType1: event.id})" format="DD MMMM YYYY" open-after-select input-selector="[name=date1]" class="example-picker space-between">
          <div class="ampstart-input">
            <input class="border-none p0 indeks-field" name="date1" placeholder="Masukan Tanggal">
            <div class="indeks-icon content_center"><?php require ($_SERVER['HH'].'img/icon/calendar.svg')?></div>
          </div>
        </amp-date-picker>
	  </div>
	  <button class="btn indeks-button">Tampilkan</button>
	</section>
		  
		  
		  
    <section aria-label="Daftar Indeks" class="section-container content-list">
      <div class="content-list-container">
        <?php for ($i=1; $i <= 10 ; $i++) { ?>
          <?php $show_thumbnail='yes'; $thumbnail_sizes='default'; $show_channel='default'; $show_date='yes'; $show_time='yes'; $show_description='no';
          require ($_SERVER['HH_AMP'].'module/content-list.php') ?>
        <?php } ?>
      </div>
	  <?php $more_label='Muat Berikutnya'; require ($_SERVER['HH_AMP'].'module/button-more.php')?>
    </section>
	
	

  </span>
</div>
<?php require ($_SERVER['HH_AMP'].'inc/footer.php')?>
<?php require ($_SERVER['HH_AMP'].'inc/bottom.php')?>