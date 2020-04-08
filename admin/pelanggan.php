<h2>Data Customer</h2>

<table class="table table-bordered">
	<thead>
		<tr class="text-center">
			<th>No</th>
			<th>Name</th>
			<th>Username</th>
			<th>Email</th>
			<th>Password</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
		<?php 
			$ambil = mysqli_query($koneksi,"SELECT * FROM pengguna");
			while($pecah = $ambil -> fetch_assoc()){
		 ?>
		<tr>
			<td class="text-center"><?php echo $pecah ['id_pengguna']; ?></td>
			<td><?php echo $pecah['nama_lengkap']; ?></td>
			<td><?php echo $pecah['username']; ?></td>
			<td><?php echo $pecah['email']; ?></td>
			<td><?php echo $pecah['password']; ?></td>
			<td class="text-center"><a class="btn btn-danger form-control" href="#">Hapus</a></td>
		</tr>
		<?php } ?>
	</tbody>
</table>