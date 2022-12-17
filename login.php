<?php
    include("include/dbcon.php");
    if(isset($_POST['submit'])) {
        $username   = $_POST['user'];
        $password   = $_POST['pass'];

        $sql_login  = "SELECT * FROM pengguna WHERE username = '$username' AND password = $password LIMIT 1";
        $result     = mysqli_query($koneksi, $sql_login);
        $row        = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count      = mysqli_num_rows($result);
        if($count==1){
            echo '<Script>
                window.location.href = "login.php";
                alert("Login Berhasil!")
            </script>';
            header("location:admin.php");
        }
        else{
            echo '<Script>
                window.location.href = "login.php";
                alert("Login Gagal!")
            </script>';
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<div id="template-bg-1">
    <div class="d-flex flex-column min-vh-100 justify-content-center align-items-center">
        <div class="card p-4 text-light bg-dark mb-5">
            <div class="card-header">
                <h3 class="text-center">Login Form</h3>
            </div>
            <div class="card-body w-100">
                <form name="login" action="login.php" method="post">
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i
                                class="fas fa-user mt-2"></i></span>
                        </div>
                        <input type="text" class="form-control"
                            placeholder="username" name="user">
                    </div>
                    <div class="input-group form-group mt-3">
                        <div class="bg-secondary rounded-start">
                            <span class="m-3"><i class="fas fa-key mt-2"></i></span>
                        </div>
                        <input type="password" class="form-control"
                            placeholder="password" name="pass">
                    </div>

                    <div class="form-group mt-3">
                        <input type="submit" value="Login"
                            class="btn bg-secondary float-end text-white w-100" name="submit">
                    </div>
                    <div class="form-group mt-3">
                        <a class="btn bg-secondary float-end text-white w-100 mt-3" href="index.php" role="button-back">Go Back</a>
                    </div>
                </form>
			</div>
        </div>
    </div>
</div>

</body>
</html>