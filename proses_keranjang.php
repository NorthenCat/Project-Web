<?php 
	session_start();
	$id_produk = $_GET['barang'];
	
	if(isset($_SESSION['keranjang'][$id_produk]))
	{
		$_SESSION['keranjang'][$id_produk]+=1;
	}
	else
	{
		$_SESSION['keranjang'][$id_produk]=1;
	}

	echo "<script>alert('Berhasil Ditambahkan Ke Keranjang !');window.location='telemedia_sudahlogin.php';</script>";
?>