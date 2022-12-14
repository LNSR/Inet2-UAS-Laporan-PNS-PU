<?php
    
    $host       = "localhost";                                      // url database
    $user       = "root";                                           // user database
    $pass       = "";                                               // password database
    $dbname     = "pns";                                            // nama databasenya

    $koneksi    = new mysqli($host, $user, $pass, $dbname); // perintah untuk membuat koneksi ke DB XAMPP
if ($koneksi->connect_error) {
    die("Koneksi gagal". $koneksi->connect_error);
}
/* echo ("Koneksi Berhasil"); */
?>