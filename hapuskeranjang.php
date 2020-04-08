<?php 
	session_start();
	$id_produk=$_GET['barang'];
	unset($_SESSION['keranjang'][$id_produk]);

	echo "<script>alert('Berhasil Dihapus !');window.location='keranjang.php';</script>";
 ?>