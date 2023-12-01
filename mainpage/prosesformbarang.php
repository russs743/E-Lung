<?php
include("configgabung.php");
error_reporting(E_ALL);
ini_set('display_errors', 1);
$connection = pg_connect("host=localhost dbname=akun user=postgres password=NamikZ743");
// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['daftar'])){

	// ambil data dari formulir
	$nb = $_POST['nama_barang'];
	$jb = $_POST['jenis_barang'];
	$desk = $_POST['deskripsi'];
	$sk = $_POST['status_kehilangan'];
	$tk = $_POST['tanggal_kehilangan'];
	$temk = $_POST['tempat_kehilangan'];
	$cp = $_POST['contact_person'];

	// buat query
$targetdir = "img/";
$img = $targetdir.basename($_FILES["img"]["name"]);
move_uploaded_file($_FILES["img"]["tmp_name"], $img);
$query = pg_query("INSERT INTO barang (nama_barang, jenis_barang, deskripsi, status_kehilangan, tanggal_kehilangan, tempat_kehilangan, contact_person, img) 
VALUEs ('$nb', '$jb', '$desk', '$sk', '$tk', '$temk', '$cp', '$img')");

	// apakah query simpan berhasil?
	if( $query==TRUE ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: daftarbarang.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: daftarbarang.php?status=gagal');
	}


} else {
	die("Akses dilarang...");
}

?>
