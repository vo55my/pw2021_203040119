<?php 
// Menghubungkan dengan file PHP lainnya
require 'functions.php';

$id = $_GET["id"];
$k = query("SELECT * FROM kampus WHERE id = $id")[0];

if (isset($_POST['ubah'])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil Diubah');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo "<script>
                    alert('Data Gagal Diubah');
                    document.location.href = 'admin.php';
              </script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../uikit/css/uikit-rtl.css">
    <link rel="stylesheet" href="../uikit/css/uikit.css">
    <title>Form Update Data Universitas</title>
</head>
<body>
<div class="uk-card uk-card-large uk-card-hover uk-card-default uk-card-body uk-position-center">
    <h3>Form Update Data Universitas</h3>
    <form action="" method="post" class="uk-form-horizontal">
    <input type="hidden" name="id" id="id" value="<?= $k['id']; ?>">
    <fieldset class="uk-fieldset">
        <label class="uk-form-label" for="form-horizontal-text">Nama Universitas :</label>
            <div class="uk-form-controls">
                <input placeholder="Nama Univeristas" name="nama" id="nama" type="text" required value="<?= $k['nama']; ?>" class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>

        <label class="uk-form-label" for="form-horizontal-text">Alamat :</label>
            <div class="uk-form-controls">
                <input placeholder="Alamat" name="alamat" id="alamat" type="text" required value="<?= $k['alamat']; ?>" class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>

        <label class="uk-form-label" for="form-horizontal-text">Didirikan :</label>
            <div class="uk-form-controls">
                <input placeholder="(Contoh : 11 Januari 2000)" name="berdiri" id="berdiri" type="text" required value="<?= $k['berdiri']; ?>" class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>

        <label class="uk-form-label" for="form-horizontal-text">Asal Kota/Kabupaten :</label>
            <div class="uk-form-controls">
                <input placeholder="Asal Kabupaten/Kota" name="kota" id="kota" type="text" required value="<?= $k['kota']; ?>" class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>

        <label class="uk-form-label" for="form-horizontal-text">Situs Web :</label>
            <div class="uk-form-controls">
                <input placeholder="Situs Web" name="situs" id="situs" type="text" required value="<?= $k['situs']; ?>" class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>

        <label class="uk-form-label" for="form-horizontal-text">Ranking :</label>
            <div class="uk-form-controls">
                <input placeholder="Urutan Ranking" name="urutan" id="urutan" type="text" required value="<?= $k['urutan']; ?>" class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>

        <label class="uk-form-label" for="form-horizontal-text">Logo Universitas :</label>
            <div class="uk-form-controls">
                <div uk-form-custom="target: true">
                    <input name="logo" id="logo" type="file" required value="<?= $k['logo']; ?>">
                    <input class="uk-input uk-form-width-medium uk-form-small" type="text" placeholder="Pilih File" disabled>
                </div>
                    <button class="uk-button uk-button-primary uk-button-small">Upload</button>
            </div>
            <br>
    </fieldset>
        <button type="submit" name="ubah" class="uk-button uk-button-primary">Selesai</button>
        <button type="submit" class="uk-button uk-button-danger uk-link-reset">
            <a href="admin.php">Kembali</a>
        </button>
</form>
</div>
<script src="../uikit/js/uikit.min.js"></script>
<script src="../uikit/js/uikit.js">
    UIkit.formCustom(element, options);
</script>
</body>
</html>