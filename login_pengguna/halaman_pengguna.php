<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <link rel="icon" href="images/favicon.png" type="image/gif" />
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Bostorek</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="../css/bootstrap.css" />
  <!-- font awesome style -->
  <link href="../css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="../css/style.css" rel="stylesheet" />
  <!-- responsive style -->
  <link href="../css/responsive.css" rel="stylesheet" />

</head>

<body>
<?php 
	session_start();

	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
		header("location:index.php?pesan=gagal");
	}

	?>

  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="halaman_pengguna.php">
            <span>
              Bostorek
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item active">
                <a class="nav-link pl-lg-0" href="halaman_pengguna.php">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="komentar.php">Comment</a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="read_peminjaman.php">Peminjaman</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->

    <!-- slider section -->
    <section class="slider_section ">
      <div id="customCarousel1" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h5>
                      Bostorek Bookstore
                    </h5>
                    <h1>
                      Apa yang anda butuhkan <br>
                      Ada disini
                    </h1>
                    <p>
                      Toko Lengkap, aman, dan terpercaya
                    </p>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="../images/slider-img.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>


  <!-- catagory section -->

  <section class="catagory_section layout_padding">
    <div class="catagory_container">
      <div class="container ">
        <div class="heading_container heading_center">
          <h2>
            Kategori Buku
          </h2>
          <p>
            Disini kami menyediakan kategori-kategori buku yang sedang banyak di beli.
          </p>
        </div>
        <div class="row">
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <a href="pendidikan.php"><img src="../images/cat1.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Pendidikan
                </h5>
                <p>
                Pendidikan sering terjadi di bawah bimbingan orang lain, tetapi juga memungkinkan secara otodidak.
                </p>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
               <a href="teknologi.php"><img src="../images/cat2.png" alt=""></a> 
              </div>
              <div class="detail-box">
                <h5>
                  Teknologi
                </h5>
                <p>
                Penggunaan teknologi oleh manusia dimulai dengan pengubahan sumber daya alam menjadi alat-alat sederhana.
                </p>
               </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <a href="sejarah.php"><img src="../images/cat3.png" alt=""></a> 
              </div>
              <div class="detail-box">
                <h5>
                  Sejarah
                </h5>
                <p>
                  Sejarah adalah kejadian-kejadian, peristiwa-peristiwa yang berhubungan dengan manusia, yaitu menyangkut perubahan yang nyata di dalam kehidupan manusia.
                </p>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <a href="biologi.php"><img src="../images/cat4.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Biologi
                </h5>
                <p>
                Biologi Umum mempelajari materi biologi secara umum yang mencakup ruang lingkup biologi, sel, jaringan pada Tumbuhan dan Hewan, Struktur dan Fungsi, Prinsip-prinsip genetika, dan Peranan Bioteknologi bagi kehidupan.
                </p>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <a href="inggris.php"><img src="../images/cat5.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Bahasa Inggris
                </h5>
                <p>
                ahasa Inggris adalah bahasa Jermanik yang pertama kali dituturkan di Inggris pada Abad Pertengahan Awal dan saat ini merupakan bahasa yang paling umum digunakan di seluruh dunia.
                </p>
                </div>
            </div>
          </div>
          <div class="col-sm-6 col-md-4 ">
            <div class="box ">
              <div class="img-box">
                <a href="kimia.php"><img src="../images/cat6.png" alt=""></a>
              </div>
              <div class="detail-box">
                <h5>
                  Kimia
                </h5>
                <p>
                Kimia adalah cabang dari ilmu fisik yang mempelajari tentang susunan, struktur, sifat, dan perubahan materi.
                </p>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end catagory section -->

  <!-- about section -->

  <section class="about_section layout_padding">
    <div class="container ">
      <div class="row">
        <div class="col-md-6">
          <div class="img-box">
            <img src="../images/about-img.png" alt="">
          </div>
        </div>
        <div class="col-md-6">
          <div class="detail-box">
            <div class="heading_container">
              <h2>
                Tentang Bostorek
              </h2>
            </div>
            <p>
                Bostorek adalah website penjualan buku yang lengkap, aman, dan terpercaya. Sudah banyak para pelanggan membeli buku di website kami. website ini merupakan website penjualan buku dengan metode sangat simple.  
            </p>
            <p>
              Jika Anda Ingin Menjual Buku Anda Bostorek Siap menerimanya <a href="penjualan.php">Klik Disini</a>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->

  <!-- footer section -->
  <footer class="footer_section">
    <div class="container">
      <p>
        &copy; <span id="displayYear"></span> All Rights Reserved By
        <a href="#">Bostorek</a>
      </p>
    </div>
  </footer>
  <!-- footer section -->

</body>

</html>