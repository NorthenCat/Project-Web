<?php

include 'koneksi.php';

$username = $_POST['username'];
$nama_lengkap = $_POST['nama_lengkap'];
$password = $_POST['password'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];



$query = "INSERT INTO pengguna (username, nama_lengkap, password, email, telephone) VALUES ('$username','$nama_lengkap', '$password','$email','$telephone')";
$result = mysqli_query($koneksi, $query);

if (!$result){
	die ("Tidak dapat diakses").mysqli_errno($koneksi).'-'.mysqli_error($koneksi);
}else{
	echo "<script>alert('Berhasil Terdaftar ! Silahkan Login Untuk Masuk Website');window.location='Login.php';</script>";
}