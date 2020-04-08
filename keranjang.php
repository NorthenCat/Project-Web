<?php 
	include 'koneksi.php'; 
	session_start();

	if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"])) {
		echo "<script>alert('Keranjang Kosong ! Mengalihkan Ke Menu Utama ');window.location='telemedia_sudahlogin.php';</script>";
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>

	<title>Telemedia | Keranjang</title>
    <meta charset="utf-8">

    <link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <title>Telemedia | Keranjang</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
</head>
<body>
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<div style="margin-top: 50px;" class="container">
	<table id="cart" class="table table-hover table-bordered">
    				<thead>
						<tr>
							<th style="width:50%">Produk</th>
							<th style="width:10%">Harga</th>
							<th style="width:13%">Jumlah</th>
							<th style="width:10%"></th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1; ?>
						<?php foreach ($_SESSION["keranjang"] as $id_produk => $jumlah): ?>
						<?php 
							$ambil = $koneksi -> query("SELECT * FROM produk WHERE id_produk='$id_produk'");
							while($pecah = $ambil -> fetch_assoc()){
								if($jumlah != 0){
									$subtotal = $pecah ['harga_produk']*$jumlah;
								}

							
						 ?>
						<tr>
							<td data-th="Product">
								<div class="row">
									<div class="col-sm-2 hidden-xs"><img src="img/<?php echo $pecah ["gambar_produk"]; ?>" alt="..." class="img-responsive"/></div>
									<div class="col-sm-10">
										<h4 class="nomargin"><?php echo $pecah ["nama_produk"]; ?></h4>
										<p><?php echo $pecah  ["deskripsi_produk"] ?></p>
									</div>
								</div>
							</td>
							<td data-th="Price">Rp <?php echo number_format($pecah ["harga_produk"]); ?></td>
							<td data-th="Quantity"><input type="number" min="0" name="jumlah" class="number-format form-control" value="<?php echo $jumlah; ?>">
							</td>
							<td class="actions text-center" data-th="">
								<button class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></button>
								<a href="hapuskeranjang.php?barang=<?php echo $id_produk ?>"><button class="btn btn-danger btn-sm"><i class="fa fa-trash-o text-white"></i></button></a>								
							</td>
						</tr>
						<?php } ?>
						<?php $nomor++; ?>
						<?php endforeach ?>
					</tbody>
				</table>
				<a href="telemedia_sudahlogin.php" class="btn btn-warning"><i class="fa fa-angle-left"></i> Continue Shopping</a>
				<a href="checkout.php" style="float: right;"class="btn btn-success">Checkout <i class="fa fa-angle-right"></i></a>
</div>












<script type="text/javascript">

</script>
</body>
</html>
