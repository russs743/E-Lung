<?php
include("configgabung.php");
if (isset($_POST['edit'])) {

    $id = $_POST['id'];
	$nb = $_POST['nama_barang'];
	$jb = $_POST['jenis_barang'];
	$desk = $_POST['deskripsi'];
	$sk = $_POST['status_kehilangan'];
	$tk = $_POST['tanggal_kehilangan'];
	$temk = $_POST['tempat_kehilangan'];
	$cp = $_POST['contact_person'];

    $targetdir = "img/";
    $img = $targetdir . basename($_FILES["img"]["name"]);
    move_uploaded_file($_FILES["img"]["tmp_name"], $img);
    $edit = "UPDATE barang SET nama_barang='$nb', jenis_barang='$jb', deskripsi='$desk', status_kehilangan='$sk', tanggal_kehilangan='$tk', tempat_kehilangan='$temk', contact_person='$cp', img='$img' WHERE id=$id";
    $query = pg_query($edit);
    if ($query==TRUE) {
        header('Location: daftarbarang.php?status=sukses');
    } else {
        echo $id;
    }

} else {
    die("akses dilarang...");
}
?>
