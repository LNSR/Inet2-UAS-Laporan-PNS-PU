<?php
include 'templates/header2.php';
require 'fungsi.php';
if (isset($_POST['submit'])) {
    if (insertPengajuan($_POST) > 0) {
        echo "<script>alert('Data Proyek berhasil terkirim.'); window.location='index.php';</script>";
    } else {
        echo "<script>alert('Data Proyek gagal terkirim.'); window.location='form-pengajuan.php';</script>";
    }
}

$query = mysqli_query($conn, "SELECT max(id) as kodeTerbesar FROM pengajuan");
$r = mysqli_fetch_array($query);
$kodeProyek = $r['kodeTerbesar'];

// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = (int) substr($kodeProyek, 4, 4);

// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;

// membentuk kode barang baru
// perintah sprintf("%03s", $urutan); berguna untuk membuat string menjadi 3 karakter
// misalnya perintah sprintf("%03s", 15); maka akan menghasilkan '015'
// angka yang diambil tadi digabungkan dengan kode huruf yang kita inginkan, misalnya BRG 
$huruf = "NP";
$kodeProyek = $huruf . sprintf("%04s", $urutan);
?>      
      <h1 style="margin-top: -40px;">Form Pengajuan Proyek</h1>
      <form action="" method="POST">
        <div class="form-row p-3">
          <div class="form-group">
              <label for="id">Nomor Pengajuan</label>
              <input type="text" name="id" id="id" class="form-control" value="<?= $kodeProyek; ?>" style="cursor: default;" readonly>
              <p class="text-sm"><span style="color: red;">*</span>Harap catat kode ini untuk melakukan pengecekan sendiri melalui kolom pencarian.</p>
          <div>
          <div class="form-group">
              <label for="nama">Pilih Tim</label>
              <select class="form-control" name="nama" id="nama" required>
              <?php
              $team = "SELECT username as tim FROM user WHERE NOT username='admin'";
              $result_team = $conn->query($team);
              while($column_team = $result_team->fetch_assoc()) {
                echo "<option value='" . htmlspecialchars($column_team['tim'], ENT_QUOTES) . "'>" . htmlspecialchars($column_team['tim'], ENT_QUOTES) . "</option>";
              }
              ?>
              </select>
          <div>
          <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <select class="form-control" name="jabatan" id="jabatan" required>
                <option>Fungsional</option>
                <option>Perencana</option>
                <option>Administrator</option>
                <option>Pelaksana</option>
                <option>Penunjang</option>
                <option>Pengawas</option>
              </select>
          <div>
          <div class="form-group">
              <label for="dept">Departemen</label>
              <select class="form-control" name="dept" id="dept" required>
                <option>Bina Marga</option>
                <option>Perumahan</option>
                <option>Tata Ruang dan Kebersihan</option>
                <option>Pertamanan</option>
                <option>Pengairan</option>
              </select>
          <div>
          <div class="form-group">
              <label for="nama_barang">Proyek</label>
              <input type="text" name="nama_proyek" id="nama_proyek" class="form-control" required>
          <div>
          <div class="form-group">
              <label for="ket">Deskripsi</label>
              <textarea name="ket" id="ket" class="form-control" required></textarea>
          <div>
          <button class="btn btn-outline-success mt-3 mr-3" type="submit" name="submit" style="width: 100px;"><span class="fas fa-paper-plane mr-2"></span>Kirim</button>
          <button class="btn btn-outline-danger mt-3" type="reset" name="reset" style="width: 130px;"><span class="fas fa-undo mr-2"></span>Reset Form</button>
        </div>
      </form>
      
<?php
include 'templates/footer.php';
?>
