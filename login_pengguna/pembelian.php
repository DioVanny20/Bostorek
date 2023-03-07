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
<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
<body>
	<!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html">
            <span>
              Bostorek
            </span>
          </a>

          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class=""> </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">Logout</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </header>
    <!-- end header section -->
	<div class="container col-md-6 mt-4">
		<div class="card">
			<div class="card-header bg-success text-white">
				Silahkan Isi Untuk Membeli Buku <a href="halaman_pengguna.php" class="btn btn-sm btn-primary float-right">Back</a>
			</div>
			<div class="card-body">
				<form action="" method="post" role="form">
					<div class="form-group">
						<label>Nama Buku</label>
						<input type="text" name="namabuku" required="" class="form-control">
					</div>
					<div class="form-group">
						<label>Kategori Buku</label>
						<select name="kategori" class="form-control">
							<option value="Teknologi">Teknologi</option>
							<option value="Pendidikan">Pendidikan</option>
							<option value="Sejarah">Sejarah</option>
							<option value="Kimia">Kimia</option>
							<option value="Bahasa inggris">Bahasa inggris</option>
							<option value="Biologi">Biologi</option>
						</select>
					</div>
					<div class="form-group">
						<label>Harga</label>
						<input type="text" name="harga" class="form-control">
					</div>

					<div class="form-group">
						<label>Deskripsi</label>
						<textarea class="form-control" name="deskripsi"></textarea>
					</div>

					<div class="form-group">
						<label>Kode Buku</label>
						<input type="text" name="kode_buku" class="form-control">
					</div>

					<button type="submit" class="btn btn-primary" name="submit" value="simpan">Beli Buku</button>
                    <button type="submit" class="btn btn-primary" name="submit" value="reset">Reset</button>
				</form>

				<?php
				include('../koneksi.php');
				
				//melakukan pengecekan jika button submit diklik maka akan menjalankan perintah simpan dibawah ini
				if (isset($_POST['submit'])) {
					//menampung data dari inputan
					$namabuku = $_POST['namabuku'];
					$kategori = $_POST['kategori'];
					$harga = $_POST['harga'];
					$deskripsi = $_POST['deskripsi'];
					$kode_buku = $_POST['kode_buku'];

					//query untuk menambahkan barang ke database, pastikan urutan nya sama dengan di database
					$datas = mysqli_query($koneksi, "insert into tb_kategori (namabuku,kategori,harga,deskripsi,kode_buku)values('$namabuku', '$kategori' ,'$harga', '$deskripsi','$kode_buku')") or die(mysqli_error($koneksi));
					//id barang tidak dimasukkan, karena sudah menggunakan AUTO_INCREMENT, id akan otomatis

					//ini untuk menampilkan alert berhasil dan redirect ke halaman index
					echo "<script>alert('data berhasil disimpan.');window.location='read_pembelian.php';</script>";
				}
				?>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="assets/js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>

</html>