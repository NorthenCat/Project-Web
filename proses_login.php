<?php 
session_start();

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$data = mysqli_query($koneksi,"SELECT * from pengguna where username='$username' and password='$password'");

$cek = mysqli_num_rows($data);

if($cek > 0){
 
	$data = mysqli_fetch_assoc($data);
	
	if($data['tipeuser']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['tipeuser'] = "admin";
		echo "<script>alert('Anda Login Sebagai Admin !');window.location='admin/admin.php?halaman=home';</script>"; 
	}elseif($data['tipeuser']=="pengguna"){
		$_SESSION['username'] = $username;
		$_SESSION['tipeuser'] = "pengguna";
		echo "<script>alert('Berhasil Login !');window.location='Telemedia_SudahLogin.php';</script>"; 
	}

}else{
	echo "<script>alert('Username / Password Salah ! Silahkan Cek Kembali');window.location='login.php';</script>"; 
}
?>