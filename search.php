<?php
include 'templates/header.php';
require 'fungsi.php';
?>      
  <h1 class="display-4" style="margin-top: -50px;">Status Pekerjaan</h1>

  <div class="row">
    <div class="col">
        <?php
          $keyword = $_POST['keyword'];
          $data = query("SELECT * FROM Pengajuan WHERE id = '$keyword'");
          if ($data) {
          foreach ($data as $d) :
        ?>
          <p>Kode Pengajuan : <?= $d['id']; ?></p>
          <p>Tanggal Pengajuan : <?= $d['tgl_lapor']; ?></p>
          <p>Nama Pegawai : <?= $d['n_pegawai']; ?></p>
          <p>Jabatan : <?= $d['j_pegawai']; ?></p>
          <p>Departemen : <?= $d['d_pegawai']; ?></p>
          <p>Proyek : <?= $d['n_proyek']; ?></p>
          <p>Keterangan : <?= $d['ket']; ?></p>
          <p><b><u>Status : <?= $d['status']; ?> </u></b></p>
          <p><b><u>Catatan dari petugas</u></b> <br><?= $d['ket_petugas']; ?></p>
          <br>
          <a href="index.php" class="btn btn-sm btn-primary" style="width: 80px;"><span class="fas fa-arrow-left mr-2"></span>Back</a>
        <?php
        endforeach;
        } else {
            echo"<p>Data Proyek tidak ditemukan.</p>";
        }
        ?>
    </div>
    
  </div>
<?php
include 'templates/footer.php';
?>
