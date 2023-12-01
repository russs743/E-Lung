<?php include("configgabung.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <link rel="icon" href="/favicon.ico" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />
    <title>Home Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter%3A400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro%3A400%2C500" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins%3A400" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato%3A500" />
    <link rel="stylesheet" href="./styles/home-page.css" />
  </head>
  <body>
    <div class="home-page-SWV">
      <div class="auto-group-shbx-AxH">
        <p class="lost-item-tdP">Lost Item</p>
        <div class="auto-group-aw7f-BvZ">
          <div class="auto-group-x7db-Whw">
            <img class="fea7f09369b259ce57450f8cc74d-removebg-preview-1-EP3" src="./assets/fea7f09369b259ce57450f8cc74d-removebg-preview-1.png" />
            <p class="item-found-Xsw">Item Found</p>
          </div>
          <div class="auto-group-mznm-U2V data-container"> <?php
  $query = pg_query("SELECT * FROM barang");
  while ($barang = pg_fetch_array($query)) {
  ?> <div class="auto-group-bktf-nYy data-item">
              <div class="rectangle-29-KJ1">
                <img src="
									<?php echo $barang['img']; ?>" alt="img" class="img">
              </div>
              <table>
                <tr>
                  <td>Nama Barang:</td>
                  <td> <?php echo $barang['nama_barang']; ?> </td>
                </tr>
                <tr>
                  <td>Jenis Barang:</td>
                  <td> <?php echo $barang['jenis_barang']; ?> </td>
                </tr>
                <tr>
                  <td>Status:</td>
                  <td> <?php echo $barang['status_kehilangan']; ?> </td>
                </tr>
                <tr>
                  <td>Tanggal:</td>
                  <td> <?php echo $barang['tanggal_kehilangan']; ?> </td>
                </tr>
                <tr>
                  <td>Contact Person:</td>
                  <td> <?php echo $barang['contact_person']; ?> </td>
                </tr>
                <tr>
                  <td>Deskripsi:</td>
                  <td> <?php echo $barang['deskripsi']; ?> </td>
                </tr>
              </table>
              <div class="actions">
                <a class="hapus"href='formbaranghapus.php?id=
										<?php echo $barang['id']; ?>'>
                    <button type="submit" class="buttonhapus">Hapus</button> 
                  </a>
                <a class="edit"href='formbarangedit.php?id=
										<?php echo $barang['id']; ?>'>
                    <button type="submit" class="buttonedit">Edit </button>
                    </a>
              </div>
            </div> <?php
  }
  ?> </div>
          <div class="rectangle-17-EuX"></div>
          <div class="group-2-bEH">
            <img class="ellipse-1-ukm" src="./assets/ellipse-1.png" />
            <img class="box-removebg-preview-1-36H" src="./assets/box-removebg-preview-1-6XB.png" />
            <img class="e-removebg-preview-1-nJm" src="./assets/e-removebg-preview-1.png" />
          </div>
          <p class="welcome-username-7bw">Welcome to E-Lung!</p>
          <div class="rectangle-24-1xD"></div>
          <p class="here-you-can-see-lost-items-and-found-items-uGu">Here you can see lost items and found items</p>
          <p class="even-you-can-upload-lost-items-to-help-people-get-their-stuff-back-DHb">Even you can upload lost items to help people get their stuff back!</p>
          <img class="pple-removebg-preview-1-ted" src="./assets/pple-removebg-preview-1.png" />
          <a class="rectangle-23-dMK" href="formbarang.php">
            <button type="submit" class="SubmitButton">Upload items</button>
          </a>
          <p class="upload-items-Ac9"></p>
          <img class="koper-removebg-preview-1-sFf" src="./assets/koper-removebg-preview-1.png" />
          <img class="d0debe69f1c053109855649c60d4b73f-removebg-preview-1-aA5" src="./assets/d0debe69f1c053109855649c60d4b73f-removebg-preview-1.png" />
          <img class="e0f816a1caef58fd842139c3c7d41665-removebg-preview-1-fxD" src="./assets/e0f816a1caef58fd842139c3c7d41665-removebg-preview-1.png" />
        </div> <?php if (isset($_GET['status'])): ?> <p> <?php
            if ($_GET['status'] == 'sukses') {
                echo "Pendaftaran barang hilang berhasil!";
            } else {
                echo "Pendaftaran gagal!";
            }
            ?> </p> <?php endif; ?>
      </div>
    </div>
    </div>
    <div class="auto-group-acfs-fgd">
      <p class="all-rights-reserve-d7f">©all rights reserve</p>
      <div class="copyright-notice-and-the-use-of-the-copyright-symbol-1-JUh"></div>
    </div>
    </div>
  </body>