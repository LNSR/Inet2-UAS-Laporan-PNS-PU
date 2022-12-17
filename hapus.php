<?php
    include("include/dbcon.php");
    if(isset($_GET['id'])){
        $id         = $_GET['id'];
        $sql_delete = "DELETE from `pengguna` where id=$id";
        $koneksi->query($sql_delete);
    }
    header('location:admin.php');
    exit;
?>