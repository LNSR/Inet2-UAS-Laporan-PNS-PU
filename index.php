<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Landing Page</title>
    <!-- CSS Style -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- Fav Icon -->
    <link rel="shortcut icon" href="assets/icon/logo.svg" type="image/x-icon" />

    <!-- Font Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />

    <!-- Font Awesome CDN -->
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
    crossorigin="anonymous"
    referrerpolicy="no-referrer"
    />

    <!-- Animate Style -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<body id="home">
  <!-- Navbar BS5(Header) -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark animate__animated animate__fadeInDown">
      <div class="container">
        <a class="navbar-brand fw-bold fs-4" href="index.php">
        <img src="/pns/assets/icon/logo.svg" alt="Nothing" width="300" height="62">
          </a>
      </div>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
            </ul>
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link mx-1 fw-bolder fs-5" href="login.php">Login<a/>
              </li>
            </ul>
          </div>
        </div>
      </nav>
 
      <!-- Hero : Oversized Image Banner on Top of a Website -->

      <div class="hero d-flex align-items-center">
        <div class="container">
          <div class"row">
            <div class="col text-center">
              <h1 class="text-white fw-bold mb-4">Selamat Datang</h1>
            </div>
          </div>
        </div>
      </div>
  
    <!-- About -->
    <div class="about" id="about">
      <div class="container-fluid">
        <div class="row row-cols-lg-2 row-cols-1">
          <div class="col text-center py-5 bg-secondary text-white">
            <h2>5</h2>
            <h2 class="fw-bold mb-2">Projects Selesai</h2>
          </div>
          <div class="col text-center py-5 bg-success text-white">
            <h2>250+</h2>
            <h2 class="fw-bold mb-2">PNS Bekerja Sama</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- About -->

    <!-- Projects -->
    <div class="projects" id="projects">
      <div class="container">
        <div class="row mb-4">
          <div class="col">
            <h2 class="border-bottom pb-2 fw-semibold" data-aos="fade-right" data-aos-duration="1000">
            Laporan Proyek
            </h2>
          </div>
        </div>
        <div class="row row-cols-lg-3 row-cols-md-2 row-cols-1 g-4">
          <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="assets/img/proyek/Rumah-rusun.jpg" class="w-100 mb-3" alt="Pekapuran" />
            <h4 class="fw-semibold">Rumah</h4>
            <p>Pembangunan rumah susun(rusun) telah diselesaikan di Provinsi Kalimantan Selatan senilai Rp. 71,2M</p>
          </div>
          <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
            <img src="assets/img/proyek/Jalan-Raya.jpg" class="w-100 mb-3" alt="A. Yano" />
            <h4 class="fw-semibold">Jalan Raya</h4>
            <p>Perbaikan aspal pada Jalan Ahmad Yani telah selesai</p>
          </div>
          <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="700">
            <img src="assets/img/proyek/Gedung.jpg" class="w-100 mb-3" alt="" />
            <h4 class="fw-semibold">Gedung</h4>
            <p>Kantor Gubernur pada Banjarbaru yang telah resmi menjadi Ibu Kota Provinsi Kalimantan Selatan</p>
          </div>
          <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
            <img src="assets/img/proyek/Sekolah.jpg" class="w-100 mb-3" alt="" />
            <h4 class="fw-semibold">Sekolah</h4>
            <p>Sekolah yang direncanankan dibangun pada Kelayan nanti</p>
          </div>
          <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
            <img src="assets/img/proyek/jembatan.jpg" class="w-100 mb-3" alt="" />
            <h4 class="fw-semibold">Jembatan Sei Alalak</h4>
            <p>Jembatan Sei Alalak Menghubungkan Kota Banjarmasin-Kabupaten Barito Kuala dibangun senilai Rp. 278,4M</p>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <div class="footer pt-5">
      <div class="container">
        <div class="row row-cols-lg-3 row-cols-1 justify-content-between">
          <div class="col col-lg-6 mb-lg-0 mb-4">
            <h2 class="fw-bold text-white mb-2">Laporan Pekerjaan</h2>
            <p class="text-white-50">Laporan Kementerian Pekerjaan Umum</p>
          </div>
          <div class="col col-lg-3 d-flex flex-column">
            <h5 class="fw-bold text-white mb-3">Contact</h5>
            <a href="#" class="text-decoration-none text-white-50 mt-2">lanasyahrilramadhan@gmail.com</a>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <!-- <p class="text-white text-center copyright">Copyright 2022</p> -->
          </div>
        </div>
      </div>
    </div>

    <!-- JS -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="assets/js/script.js"></script>

    <!-- AOS -->
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
     
  </body>
</html>