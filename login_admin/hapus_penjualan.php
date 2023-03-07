<?php				
			include '../koneksi.php'; //menghubungkan ke file koneksi untuk ke database
			$id = $_GET['id_penjualan']; //menampung id

			//query hapus
			$datas = mysqli_query($koneksi, "DELETE FROM `penjualan` where id_penjualan ='$id_penjualan'") or die(mysqli_error($koneksi));

			//alert dan redirect ke index.php
			echo "<script>alert('data berhasil dihapus.');window.location='read_penjualan.php';</script>";
	?>