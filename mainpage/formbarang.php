<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <link rel="icon" href="/favicon.ico" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="theme-color" content="#000000" />
  <title>Upload Page</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500"/>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A500"/>
  <link rel="stylesheet" href="./styles/upload-page.css"/>
</head>
<body>
<div class="upload-page-5Kf">
  <p class="upload-items-yvq">UPLOAD ITEMS</p>
  <div class="rectangle-24-6Em">
  </div>
<form action="prosesformbarang.php" method="POST" enctype="multipart/form-data">
  <div class="rectangle-13-n17">
    <input type="text" name="nama_barang" placeholder="Nama Barang" required class="namabarang">
	<p class="nama-Qq7">Nama</p>
  </div>
  <div class="rectangle-31-w4M">
    <select id="jenis_barang" name="jenis_barang" class="jenisbarang">
      <option value="dompet">Dompet</option>
      <option value="tas">Tas</option>
      <option value="ktm">KTM</option>
      <option value="kendaraan">Kendaraan</option>
      <option value="Laptop">Laptop</option>
      <option value="Handphone">Handphone</option>
      <option value="lainnya">lainnya</option>
    </select>
	<p class="jenis-4uf">Jenis </p>
  </div>
  <div class="rectangle-29-qBf">
    <textarea id="deskripsi" name="deskripsi" rows="4" cols="50" placeholder="Deskripsi" class="deskripsi"></textarea>
	<p class="deskripsi-NBb">Deskripsi</p>
  </div>
  <div class="rectangle-24-rFs">
    <input id="lostitem" type="radio" name="status_kehilangan" value="lost item" checked class="lostcheck">
	<p class="lost-item-xXs">Lost Item</p>
  </div>
  <div class="rectangle-30-Kv9">
    <input id="itemfound" type="radio" name="status_kehilangan" value="item found" checked class="foundcheck">
	<p class="item-found-suj">Item Found</p>
  </div>
  <div class="rectangle-27-k1o">
    <input type="date" id="tanggal_kehilangan" name="tanggal_kehilangan" class="tanggal">
	<p class="tanggal-UiV">Tanggal</p>
  </div>
  <div class="rectangle-28-Nos">
    <textarea id="tempat_kehilangan" name="tempat_kehilangan" rows="4" cols="50" placeholder="Tempat" class="tempat"></textarea>
	<p class="tempat-kehilangan-iMw">Tempat Kehilangan</p>
  </div>
  <div class="rectangle-32-tfj">
    <textarea id="contact_person" name="contact_person" rows="4" cols="50" placeholder="Contact Person" class="contactperson"></textarea>
	<p class="contact-person-ba9">Contact Person</p>
  </div>
  <div class="rectangle-12-WSu" id="bingkai">
  <!-- Tombol Kustom -->
  <div id="customButton" onclick="openFileInput()">
    +
  </div>

  <!-- Input File Tersembunyi -->
  <input type="file" id="fileInput" name="img" accept="image/*" onchange="tampilkanGambar(this)">

  <!-- Gambar Tampilan -->
  <div id="bingkai" style="width: 530px; height: 610px; overflow: hidden;">
    <img id="previewGambar" src="#" alt="Preview Gambar" style="width: 100%; height: 100%; object-fit: cover;">
  </div>

  <script>
    function openFileInput() {
      document.getElementById('fileInput').click();
    }

    function tampilkanGambar(input) {
      var previewGambar = document.getElementById('previewGambar');
      var file = input.files[0];
      var reader = new FileReader();

      reader.onload = function(e) {
        previewGambar.src = e.target.result;
        hideUploadElements();
      };

      reader.readAsDataURL(file);
    }

    function hideUploadElements() {
      document.getElementById('customButton').style.display = 'none';
      document.getElementById('fileInput').style.display = 'none';
      document.getElementById('submitDiv').style.display = 'none';
    }

    function submitForm() {
      alert('Formulir telah disubmit!');
    }
  </script>
  </div>
  <img class="download2-removebg-preview-1-Km3" src="./assets/download2-removebg-preview-1.png"/>
  <a class="rectangle-29-rky" href="daftarbarang.php">
    <button type="submit" name="daftar" class="uploadbutton">Upload!</button>
  </a>
</form>
  <p class="upload-yah"></p>
</div>
</body>