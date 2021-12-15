<?php

include './koneksi.php';
session_start();
error_reporting(0);
// Deklarasikan Query 
$id_mahasiswa	= $_POST['id_mahasiswa'];
$nama					= $_POST['nama'];
$nim					= $_POST['nim'];
$prodi				= $_POST['prodi'];

//! --------------------------- Tambah Mahasiswa --------------------------------
// Untuk Tambah Data Mahasiswa
if (isset($_POST['tambah-mahasiswa'])) {
	$queryTambah = mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES('', '$nama', '$nim', '$prodi')");

	$_SESSION["sukses-tambah"] = 'Data Berhasil Disimpan';

	if ($queryTambah) {
		//  ? Menggunakan script dibawah karena tidak bissa jalan di versi php lama
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?p=tb-mahasiswa">';
		// header("location: index.php?p=tb-mahasiswa");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}

//! --------------------------- Update Mahasiswa --------------------------------
if (isset($_POST['edit-mahasiswa'])) {
	$id_mahasiswa = $_POST['id_mahasiswa'];
	$nama					= $_POST['nama'];
	$nim					= $_POST['nim'];
	$prodi				= $_POST['prodi'];
	$queryEdit = mysqli_query($koneksi, "UPDATE mahasiswa SET nama='$nama', nim='$nim', prodi='$prodi' WHERE id_mahasiswa = '$id_mahasiswa' ");

	$_SESSION["sukses-edit"] = 'Data Berhasil Diedit';

	if ($queryEdit) {
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?p=tb-mahasiswa">';
exit;
	} else {
		echo "ERROR, Tidak Berhasil Edit Data " . mysqli_error($koneksi);
	}
}

// !--------------------------- Delete Mahasiswa --------------------------------
if (isset($_GET['id'])) {
	$id_mahasiswa = $_GET['id'];

	$queryHapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id_mahasiswa = '$id_mahasiswa'");

	$_SESSION["sukses-hapus"] = 'Data Berhasil Dihapus';

	if ($queryHapus == true) {
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?p=tb-mahasiswa">';
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}
}


//! --------------------------- Tambah Admin --------------------------------
// Untuk Tambah Data Admin
$id_login					= $_POST['id_login'];
$username					= $_POST['username'];
$password					= $_POST['password'];
if (isset($_POST['tambah-admin'])) {
	$queryTambah = mysqli_query($koneksi, "INSERT INTO login VALUES('', '$username', '$password')");

	$_SESSION["sukses-tambah"] = 'Data Berhasil Disimpan';

	if ($queryTambah) {
		//  ? Menggunakan script dibawah karena tidak bissa jalan di versi php lama
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?p=tb-admin">';
		// header("location: index.php?p=tb-login");
	} else {
		echo "ERROR, Tidak Berhasil Tambah Data " . mysqli_error($koneksi);
	}
}

// !--------------------------- Delete Admin --------------------------------
if (isset($_GET['id'])) {
	$id_admin= $_GET['id'];

	$queryHapus = mysqli_query($koneksi, "DELETE FROM login WHERE id_login = '$id_mahasiswa'");

	$_SESSION["sukses-hapus"] = 'Data Berhasil Dihapus';

	if ($queryHapus == true) {
		echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.php?p=tb-mahasiswa">';
	} else {
		echo "ERROR, Tidak Berhasil Hapus Data " . mysqli_error($koneksi);
	}
}
?>