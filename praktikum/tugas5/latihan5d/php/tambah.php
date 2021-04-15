<?php 
require 'functions.php';

if (isset($_POST["tambah"])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'admin.php';
              </script>";
    } else {
        echo "<script>
                alert('Data Gagal Ditambahkan');
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
    <title>Form Tambah Data Universitas</title>
</head>
<body>
<div class="uk-card uk-card-default uk-card-body uk-width-1-1">
    <h3>Form Tambah Data Universitas</h3>
    <form action="" method="post" class="uk-form-horizontal">
    <fieldset class="uk-fieldset">
        <label class="uk-form-label" for="form-horizontal-text">Nama Universitas :</label>
            <div class="uk-form-controls">
                <input placeholder="Nama Univeristas" name="nama" id="nama" type="text" required class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>
        <label class="uk-form-label" for="form-horizontal-text">Alamat :</label>
            <div class="uk-form-controls">
                <input placeholder="Alamat" name="alamat" id="alamat" type="text" required class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>
        <label class="uk-form-label" for="form-horizontal-text">Didirikan :</label>
            <div class="uk-form-controls">
                <input placeholder="(Contoh : 11 Januari 2000)" name="berdiri" id="berdiri" type="text" required class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>
        <label class="uk-form-label" for="form-horizontal-text">Asal Kota/Kabupaten :</label>
            <div class="uk-form-controls">
                <input placeholder="Asal Kabupaten/Kota" name="kota" id="kota" type="text" required class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>
        <label class="uk-form-label" for="form-horizontal-text">Situs Web :</label>
            <div class="uk-form-controls">
                <input placeholder="Situs Web" name="situs" id="situs" type="text" required class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>
        <label class="uk-form-label" for="form-horizontal-text">Ranking :</label>
            <div class="uk-form-controls">
                <input placeholder="Urutan Ranking" name="urutan" id="urutan" type="text" required class="uk-input uk-form-width-large uk-form-small validate">
            </div>
            <br>

        <label class="uk-form-label" for="form-horizontal-text">Logo Universitas :</label>
            <div class="uk-form-controls">
                <input placeholder="Logo" name="logo" id="logo" type="file" required value="<?= $k['logo']; ?>" class="uk-input uk-form-width-medium uk-form-small validate">
            </div>
            <br>
    </fieldset>
        <button type="submit" name="tambah" class="uk-button uk-button-primary">Selesai</button>
        <button type="submit" class="uk-button uk-button-danger uk-link-reset">
            <a href="index.php">Kembali</a>
        </button>
</form>
</div>
</body>
</html>