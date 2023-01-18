<?php
include 'templates/header.php';

?>      
  <h1 class="display-5">Laporan PU</h1>
  <div class="jumbotron-search">
    <form action="search.php" method="POST">
      <p class="lead" style="margin-bottom: -1px;">Cek Status Proyek</p>
    <input type="text" name="keyword" id="keyword" placeholder="Masukkan No. Kode Proyek">
    <button type="submit" class="btn btn-primary search-button" value="cari"><span class="fas fa-search mr-2"></span>Cek</button>
    </form>
  </div>
<?php
include 'templates/footer.php';
?>
