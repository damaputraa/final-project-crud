<!-- Animasi Sweet Alert -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
<?php include './koneksi.php'; ?>

<!-- Tabel Mahasiswa -->
<table class="table table-striped table-hover mt-3">
	<thead class="mt-3">
		<h5 class="warna-text-tabel float-left mt-3"> <b> # Tabel Admin</b></h5>
		<div class="float-right"><a class="btn btn-primary" href="index.php?p=register"> <i class="fa fa-plus"></i> Tambah Data</a></div>
		<tr>
			<th scope="col">No</th>
			<!-- <th scope="col">id_mhs</th> -->
			<th scope="col">Username</th>
			<th scope="col">Aksi</th>
		</tr>
	</thead>


	<tbody>
		<!-- Menampilkan Data dari Database -->
		<?php
		$no = 1;
		$ambilQuery = mysqli_query($koneksi, "SELECT * FROM login ORDER BY id_login ASC");
		while ($row = mysqli_fetch_assoc($ambilQuery)) {
		?>

			<tr>
				<th scope="row"><?= $no++; ?></th>
				<td><?= $row['username']; ?></td>
				<td>

					<a class="hapus fa fa-trash btn btn-danger" name="hapus-admin" href="index.php?p=fungsi&id=<?php echo $row['id_login']; ?>" onclick="return confirm('Apakah ingin di hapus ?');" ></a>
				</td>
			</tr>
		<?php	} ?>
	</tbody>
</table>

<!-- jika ada session sukses maka tampilkan sweet alert dengan pesan yang telah di set
    di dalam session sukses  -->
<?php if (@$_SESSION['sukses-tambah']) { ?>
	<script>
		swal("Tambah Data Berhasil", "<?php echo $_SESSION['sukses-tambah']; ?>", "success");
	</script>
	<!-- jangan lupa untuk menambahkan unset agar sweet alert tidak muncul lagi saat di refresh -->
<?php unset($_SESSION['sukses-tambah']);
} ?>

<?php if (@$_SESSION['sukses-edit']) { ?>
	<script>
		swal("Edit Data Berhasil", "<?php echo $_SESSION['sukses-edit']; ?>", "info");
	</script>

<?php unset($_SESSION['sukses-edit']);
} ?>

<?php if (@$_SESSION['sukses-hapus']) { ?>
	<script>
		swal("Hapus Data Berhasil", "<?php echo $_SESSION['sukses-hapus']; ?>", "error");
	</script>

<?php unset($_SESSION['sukses-hapus']);
} ?>

 <!-- Start datatable js -->
 <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>