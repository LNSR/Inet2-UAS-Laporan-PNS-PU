<?php
    include("include/koneksi.php");
    if(isset($_GET['id'])){
        $id         = $_GET['id'];
        $sql_delete = "DELETE from `tb_jembatan` where id=$id";
        $koneksi->query($sql_delete);
    }
    header('location:welcome.php');
    exit;
?>