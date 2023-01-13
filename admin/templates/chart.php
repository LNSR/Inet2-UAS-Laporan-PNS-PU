<!-- Chart -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<?php
      $labeldate = ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember"];

      for($bulan = 1;$bulan < 13;$bulan++)
      {
        $query_date       = mysqli_query($conn, "SELECT count(*) as status from pengajuan where MONTH(tgl_lapor)='$bulan' AND status='Selesai dikerjakan'");
        $row_date         = $query_date->fetch_array();
        $jumlah_proyek[]  = $row_date['status'];
      }
?>