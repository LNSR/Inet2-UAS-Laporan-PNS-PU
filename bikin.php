<?php
include("include/dbcon.php");
if(isset($_POST['submit'])) {

  $username         = $_POST['username'];
  $password         = $_POST['password'];

    $bikin          = "INSERT INTO `pengguna` (`username`, `password`) VALUES ('$username', '$password' )";
    $query          = mysqli_query($koneksi, $bikin);
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initials-scale=1">
    <title>Bikin Akun</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
  </head>
  <!-- Navbar BS5(Header) -->
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CRUD Admin</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                  <a class="nav-link" href="admin.php">Home</a>
            </li>
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="bikin.php">Bikin Akun</a>
              </li>
            </ul>
            <ul class="navbar-nav">
            <li class="nav-item">
                  <a class="nav-link" href="index.php">Logout</a>
            </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Form BS5 -->
    <div class="col-lg-6 m-auto">
        <form method="post"><br><br>
        <div class="card">
          <div class="card-header bg-primary">
          <h1 class="text-white text-center">Akun Baru</h1>
        </div> <br>

    <label> Username </label>
    <input type="text" name="username" class="form-control"> <br>

    <label> Password </label>
    <input type="text" name="password" class="form-control"> <br>

    <button class="btn btn-success" type="submit" name="submit">Submit</button><br>
    <a class="btn btn-info" type="submit" name="cancel" href="admin.php">Cancel</a><br>
    </div>
    </form>
    </div>
    </body>
</html>