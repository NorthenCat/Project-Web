<?php 
include('koneksi.php');

$nama_lengkap = $_POST['nama_lengkap'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$email = $_POST['email'];
$password = $_POST['password'];

$query = "INSERT INTO daftar (nama_lengkap, jenis_kelamin, email, password) VALUES ('$nama_lengkap', '$jenis_kelamin', '$email', '$password')";

$result = mysqli_query($koneksi, $query);
if (!$result){
	die("Tidak dapat diakses.").
	mysqli_errno($koneksi).'-'.mysqli_error($koneksi);
}else{
	echo "<script>alert('Berhasil Terdaftar !');window.location='fixed.php';</script>";
}