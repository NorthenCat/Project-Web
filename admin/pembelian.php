<h2>Data Pembelian</h2>

<table class="table table-bordered">
	<thead>
		<tr class="text-center">
			<th>No</th>
			<th>Name</th>
			<th>Date</th>
			<th>Price</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$nomor=1;
			$ambil = mysqli_query($koneksi,"SELECT * FROM pembelian JOIN pengguna ON pembelian.id_pengguna=pengguna.id_pengguna");
			while($pecah = $ambil -> fetch_assoc()){
		 ?>
		<tr>
			<td class="text-center"><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_lengkap']; ?></td>
			<td class="text-center"><?php echo $pecah['tanggal_pembelian']; ?></td>
			<td class="text-center">Rp <?php echo number_format($pecah['total_pembelian']); ?></td>
			<td class="text-center"><a class="btn btn-primary form-control" href="admin.php?halaman=detail&id=<?php echo $pecah['id_pembelian']; ?>">Detail</a></td>
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>