<!DOCTYPE html>
<html>
<head>
	<title>Info Barang Hilang</title>
</head>

<body>
	<header>
		<h3>Situs Info Barang Hilang</h3>
		<h1>Elung</h1>
	</header>

	<nav>
		<ul>
			<li><a href="formbarang.php">Daftarkan Barang Hilang</a></li>
			<li><a href="daftarbarang.php">Daftar Barang Hilang</a></li>
		</ul>
	</nav>


	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "Pendaftaran barang hilang berhasil!";
			} else {
				echo "Pendaftaran gagal!";
			}
		?>
	</p>
	<?php endif; ?>

	</body>
</html>
