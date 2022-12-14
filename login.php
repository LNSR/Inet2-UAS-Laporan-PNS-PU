<?php
    include("include/koneksi.php");
    if(isset($_POST['submit'])) {
        $username   = $_POST['user'];
        $password   = $_POST['pass'];

        $sql_login  = "SELECT * FROM pengguna WHERE username = '$username' AND password = MD5('$password') LIMIT 1";
        $result     = mysqli_query($koneksi, $sql_login);
        $row        = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count      = mysqli_num_rows($result);
        if($count==1){
            echo '<Script>
                window.location.href = "index.php";
                alert("Login Berhasil!")
            </script>';
            header("location:welcome.php");
        }
        else{
            echo '<Script>
                window.location.href = "index.php";
                alert("Login Gagal!")
            </script>';
        }
    }
?>