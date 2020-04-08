<h2>Detail Pembelian</h2>
<hr>
<?php 
	$ambil = mysqli_query($koneksi,"SELECT * FROM pembelian JOIN pengguna ON pembelian.id_pengguna=pengguna.id_pengguna WHERE pembelian.id_pembelian='$_GET[id]'");
	$detail = $ambil -> fetch_assoc();
 ?>

<h4>Nama Lengkap : <?php echo $detail['nama_lengkap']; ?></h4>
<p>Email : <?php echo $detail ['email']; ?><br>
No Telephone : <?php echo $detail ['telephone']; ?> <br>
Tanggal Pembelian : <?php echo $detail ['tanggal_pembelian']; ?></p>

<table class="table table-bordered">
	<thead>
		<tr class="text-center">
			<th>No</th>
			<th>Nama Produk</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$nomor=1;
			$ambil = mysqli_query($koneksi,"SELECT * FROM pembelian_produk JOIN produk ON pembelian_produk.id_produk=produk.id_produk WHERE pembelian_produk.id_pembelian='$_GET[id]'");
			while($pecah = $ambil -> fetch_assoc()){
		 ?>
		<tr>
			<td class="text-center"><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td class="text-center">Rp <?php echo number_format($pecah['harga_produk']); ?></td>
			<td class="text-center"><?php echo $pecah['jumlah']; ?></td>
			<td class="text-center">Rp <?php echo number_format($pecah['harga_produk']*$pecah['jumlah']); ?></td>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>