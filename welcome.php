<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <!--   <h1>Hello, world!</h1> -->
  </head>
  <!-- Navbar BS5(Header) -->
  <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Catatan PU</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="welcome.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="bikin.php">Bikin Tabel</a>
              </li>
            </ul>
            <span class="navbar-text">
              Lorem Ipsum
            </span>
          </div>
        </div>
      </nav>
<!-- Tables -->
      <div class="container my-4">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Jembatan</th>
            <th scope="col">Catatan</th>
            <th scope="col">Gambar</th>
            <th scope="col">Aksi</th>
<!--             <th scope="col">Catatan</th>
            <th scope="col">Gambar</th> -->
          </tr>
        </thead>
        <tbody>
          <?php
          include "include/koneksi.php";
          $sql = "SELECT * FROM tb_jembatan";
          $result = $koneksi->query($sql);
          if(!$result){
            die("Tidak Ada Query!");
          }
          while($row=$result->fetch_assoc()){
            echo "
          <tr>
            <th>$row[id]</th>
            <td>$row[jembatan]</td>
            <td>$row[catatan]</td>
            <td>$row[gambar]</td>
            <td>
                <a class='btn btn-success' href='edit.php?id=$row[id]'>Edit</a>
                <a class='btn btn-danger' href='hapus.php?id=$row[id]'>Hapus</a>
            </td>
          </tr>
          ";
            }
            ?>
        </tbody>
      </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>