<?php
require '../fungsi.php';
$id = $_GET['id'];
    if (deletepengajuan($id) > 0) {
        echo "<script>alert('Data dengan nomor pengajuan $id berhasil dihapus.'); document.location.href='data-pengajuan.php';</script>";
    } else {
        echo "<script>alert('Data gagal dihapus.'); document.location.href='data-pengajuan.php';</script>";
    }

?>