<?php 
	include 'proses_checkout.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <script src="https://kit.fontawesome.com/10e6f0c3f8.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="cool.css">

    <script src="assets/js/jquery.js"></script>

    <title>Telemedia | Checkout </title>

  </head>

  <body id="page-top">

    <!--Navbar-->
    <nav class="navbar navbar-expand-lg navbar-light bg-black" id="mainNav">
  <a class="navbar-brand text-monospace text-white" href="#page-top">Telemedia</a>
  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">

        <li class="text-monospace bg-dark" style="font-size: 16px">
    <a class="nav-link text-white" href="#">Checkout</a>
  </li>
    </ul>
    <a class="nav-link text-white" href="logout.php"><i class="fas fa-sign-out-alt" action="logout.php"> Logout</i></a>
  </div>
</nav>

<section class="konten">
	<div class="countainer">
		<h1>Keranjang Belanja</h1>
		<hr>
		<table class="table table-bordered">
			<thead>
				<tr>
					<th>No</th>
					<th>Produk</th>
					<th>Harga</th>
					<th>Jumlah</th>
					<th>Total</th>
				</tr>
			</thead>
			<tbody>
				<?php $nomor = 1; ?>
				<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
				<?php 
					$ambil = $koneksi -> query("SELECT * FROM produk WHERE id_produk='$id_produk'");
					while($pecah = $ambil -> fetch_assoc()){
				 ?>

				<tr>
					<th><?php echo $nomor; ?></th>
					<th><?php echo $pecah ['name']; ?></th>
					<th><input type="text" name="harga" id="harga" class="form-control" readonly value="<?php echo 'Rp '.number_format($pecah ['price']);?>"></th>
					<th><input type="number" step="any" min = "0" name="jumlah" id="jumlah" class="form-control" value="1"></th>
					<th><input type="text" name="total" id="total" class="form-control" readonly value="0"></th>
				</tr>
				<?php } ?>
				<?php $nomor++; ?>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</section>

























 <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>

<script type="text/javascript">
 $("#jumlah").keyup(function(){   
   var a = parseFloat($("#jumlah").val());
   var b = parseFloat($("#harga").val());
   var c = a+b;
   $("#total").val(c);
 });

</script>