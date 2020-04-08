<h2>List Produk</h2>

<table class="table table-bordered">
	<thead>
		<tr class="text-center">
			<th width="1%">No</th>
			<th width="5%">Name</th>
			<th width="5%">Description</th>
			<th width="5%">Price</th>
			<th width="5%">Image</th>
			<th width="8%"></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$ambil = mysqli_query($koneksi,"SELECT * FROM produk");
			while($pecah = $ambil -> fetch_assoc()){
		 ?>
		<tr>
			<td class="text-center"><?php echo $pecah['id_produk']; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['deskripsi_produk']; ?></td>
			<td class="text-center">Rp <?php echo number_format($pecah['harga_produk']); ?></td>
			<td><?php echo $pecah['gambar_produk']; ?></td>
			<td>
				<a class="btn btn-primary" href="#">Change</a>
				<a class="btn btn-danger" href="#">Delete</a>
			</td>
		</tr>
		<?php } ?>
	</tbody>
</table>