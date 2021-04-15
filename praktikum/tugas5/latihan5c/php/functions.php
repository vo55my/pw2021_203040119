<?php 
// function untuk melakukan koneksi ke database
function koneksi() {
    $conn = mysqli_connect("localhost", "root", "");
    mysqli_select_db($conn, "pw_tubes_203040119");
    return $conn;
}

// function untuk melakukan query dan memasukkannya ke dalam array
function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

// fungsi untuk menambahkan data didalam database
function tambah($data) {
    $conn = koneksi();

    $nama = htmlspecialchars($data['nama']);
    $alamat = htmlspecialchars($data['alamat']);
    $berdiri = htmlspecialchars($data['berdiri']);
    $kota = htmlspecialchars($data['kota']);
    $situs = htmlspecialchars($data['situs']);
    $urutan = htmlspecialchars($data['urutan']);
    $logo = htmlspecialchars($data['logo']);

    $query = "INSERT INTO kampus VALUES ('', '$logo', '$nama', '$alamat', '$berdiri', '$kota', '$situs', '$urutan')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id) {
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM kampus WHERE id = $id");

    return mysqli_affected_rows($conn);
}
?>