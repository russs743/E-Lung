<?php
include("configgabung.php");
if( isset($_GET['id']) ) {
    $id = $_GET['id'];
    $query = pg_query("DELETE FROM barang WHERE id=$id");
    
    if( $query ) {
        header('Location: daftarbarang.php');
    } else {
        die("gagal menghapus...");
    }
} else {
    die("akses dilarang...");
}
?>