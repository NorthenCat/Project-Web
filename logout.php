<?php
	session_start();
	session_destroy();
	echo "<script>alert('Berhasil Logout !');window.location='telemedia_belumlogin.php';</script>";
?>