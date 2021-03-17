<?php
$kampus = [
    [
        "nama" => "Universitas Gadjah Mada",
        "alamat" => "Bulaksumur, Caturtunggal, Kec. Depok, 55281",
        "berdiri" => "11 September 1957",
        "kota" => "Kab. Sleman",
        "situs" => "www.ugm.ac.id",
        "logo" => "UGM.png",
        "urutan" => "810"
    ], 
    [
        "nama" => "Institut Pertanian Bogor",
        "alamat" => "Jl. Raya Dramaga, Babakan, Kec. Dramaga, 16680",
        "berdiri" => "1 September 1963",
        "kota" => "Kota Bogor",
        "situs" => "www.ipb.ac.id",
        "logo" => "IPB.png",
        "urutan" => "1088"
    ], 
    [
        "nama" => "Institut Teknologi Sepuluh Nopember",
        "alamat" => "Jl. Teknik Kimia, Keputih, Kec. Sukolilo, 60111",
        "berdiri" => "10 November 1957",
        "kota" => "Kota Surabaya",
        "situs" => "www.its.ac.id",
        "logo" => "ITS.png",
        "urutan" => "1089"
    ], 
    [
        "nama" => "Universitas Indonesia",
        "alamat" => "Jl. Margonda Raya, Pondok Cina, Kec. Beji, 16424",
        "berdiri" => "2 Februari 1950",
        "kota" => "Kota Depok",
        "situs" => "www.ui.ac.id",
        "logo" => "UI.png",
        "urutan" => "1315"
    ], 
    [
        "nama" => "Universitas Airlangga",
        "alamat" => "Jl. Airlangga No. 4 - 6, Airlangga, Kec. Gubeng, 60115",
        "berdiri" => "10 November 1954",
        "kota" => "Kota Surabaya",
        "situs" => "www.unair.ac.id",
        "logo" => "UNAIR.png",
        "urutan" => "1322"
    ], 
    [
        "nama" => "Institut Teknologi Bandung",
        "alamat" => "Jl. Ganesa No. 10, Lb. Siliwangi, Kec. Coblong, 40132",
        "berdiri" => "2 Maret 1959",
        "kota" => "Kota Bandung",
        "situs" => "www.itb.ac.id",
        "logo" => "ITB.png",
        "urutan" => "1647"
    ], 
    [
        "nama" => "Universitas Bina Nusantara",
        "alamat" => "Jl. K H. Syahdan No. 9, Kel. Kemanggisan, Kec. Palmerah, 11480",
        "berdiri" => "1 Juli 1981",
        "kota" => "Kota Jakarta Barat",
        "situs" => "www.binus.ac.id",
        "logo" => "BINUS.png",
        "urutan" => "1902"
    ], 
    [
        "nama" => "Universitas Sebelas Maret",
        "alamat" => "Jl. Ir. Sutami No. 36, Kentingan, Kec. Jebres, 57126",
        "berdiri" => "11 Maret 1976",
        "kota" => "Kota Surakarta",
        "situs" => "www.uns.ac.id",
        "logo" => "UNS.png",
        "urutan" => "1990"
    ],
    [
        "nama" => "Universitas Diponegoro",
        "alamat" => "Jl. Prof. Sudarto No. 13, Tembalang, Kec. Tembalang, 50275",
        "berdiri" => "9 Januari 1957",
        "kota" => "Kota Semarang",
        "situs" => "www.undip.ac.id",
        "logo" => "UNDIP.png",
        "urutan" => "1994"
    ],
    [
        "nama" => "Universitas Jember",
        "alamat" => "Jl. Kalimantan No. 37, Krajan Timur, Sumbersari, Kec. Sumbersari, 68121",
        "berdiri" => "10 November 1957",
        "kota" => "Kab. Jember",
        "situs" => "www.unej.ac.id",
        "logo" => "UNEJ.png",
        "urutan" => "2053"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection">
    <title>Latihan3e</title>
    <style>
        img {
            width: 60px;
            height: 60px;
        }

        table {
            margin-bottom: 60px;
        }
        
        .container {
            width: 1000px;
            height: 1000px;
            margin: auto;
            display: flex;
        }

        h4 {
            margin: 40px;
            text-align: center;
        }

        td {
            padding: 4px 6px;
        }

        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<h4>Daftar PTN Terbaik 2021 Versi Webometrics</h4>
<div class="container">
    <table class="bordered highlight centered">
        <thead class="grey">
          <tr>
              <th>No.</th>
              <th>Logo</th>
              <th>Kampus</th>
              <th>Alamat</th>
              <th>Didirikan</th>
              <th>Kota</th>
              <th>Situs</th>
              <th>Urutan</th>
          </tr>
        </thead>
        <?php $i = 1; ?>
        <?php foreach ( $kampus as $k ) : ?>
        <tbody align="center">
          <tr>
            <td class="grey lighten-2"><strong><?= $i ?></strong></td>
            <td>
                <img src="image/<?= $k["logo"]; ?>">
            </td>
            <td><?= $k["nama"]; ?></td>
            <td><?= $k["alamat"]; ?></td>
            <td><?= $k["berdiri"]; ?></td>
            <td><?= $k["kota"]; ?></td>
            <td><?= $k["situs"]; ?></td>
            <td class="grey lighten-2"><strong><?= $k["urutan"]; ?></strong></td>
          </tr>
        </tbody>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</div>
<div class="clear"></div>
</body>
</html>