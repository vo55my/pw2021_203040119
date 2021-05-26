<?php
function koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'db_mycloth');
}

function query($query)
{
  $conn = koneksi();

  $result = mysqli_query($conn, $query);

  // jika hasilnya hanya satu data
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function daftar($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars($data['nama']);
  $status = htmlspecialchars($data['status']);
  $username = htmlspecialchars(strtolower($data['username']));
  $password = mysqli_real_escape_string($conn, $data['password']);
  $confirm = mysqli_real_escape_string($conn, $data['confirm']);

  // form tidak boleh kosong
  if (empty($nama) || empty($status) || empty($username) || empty($password) || empty($confirm)) {
    echo "<script>
            alert('Username/Password tidak boleh kosong');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  // jika username sudah ada
  if (query("SELECT * FROM account WHERE username = '$username'")) {
    echo "<script>
            alert('Username sudah terdaftar');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  // jika konfirmasi password tidak sesuai
  if ($password !== $confirm) {
    echo "<script>
            alert('Konfirmasi Password tidak sesuai');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  // jika username lebih kecil dari 5 digit
  if (strlen($username) < 5) {
    echo "<script>
              alert('Username terlalu pendek');
              document.location.href = 'daftar.php';
            </script>";
    return false;
  }

  // jika password lebih kecil dari 5 digit
  if (strlen($password) < 5) {
    echo "<script>
            alert('Password terlalu pendek');
            document.location.href = 'daftar.php';
          </script>";
    return false;
  }

  // jika username dan password sesuai
  // enkripsi password
  $password_baru = password_hash($password, PASSWORD_DEFAULT);
  // insert ke tabel user
  $query = "INSERT INTO account VALUES (null, '$nama', '$status', '$username', '$password_baru')";
  mysqli_query($conn, $query) or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}

function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars($data['username']);
  $password = htmlspecialchars($data['password']);

  // cek dulu username
  if ($account = query("SELECT * FROM account WHERE username = '$username'")) {
    // cek password
    if (password_verify($password, $account['password'])) {
      // set session
      $_SESSION['login'] = true;
      header("Location: admin.php");
      exit;
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username/Password salah'
  ];
}

function cari($keyword)
{
  $conn = koneksi();

  $query = "SELECT * FROM katalog WHERE
            kode LIKE '%$keyword%' OR
            edisi LIKE '%$keyword%' ";

  $result = mysqli_query($conn, $query);

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}

function upload()
{
  $nama_file = $_FILES['img']['name'];
  $tipe_file = $_FILES['img']['type'];
  $ukuran_file = $_FILES['img']['size'];
  $error = $_FILES['img']['error'];
  $tmp_file = $_FILES['img']['tmp_name'];

  if ($error == 4) {
    echo "<script>
            alert('Upload gambar terlebih dahulu');
          </script>";
    return false;
  }

  $daftar_gambar = ['png'];
  $ekstensi_file = explode('.', $nama_file);
  $ekstensi_file = strtolower(end($ekstensi_file));
  if (!in_array($ekstensi_file, $daftar_gambar)) {
    echo "<script>
            alert('Yang anda upload bukan gambar');
          </script>";
    return false;
  }

  if ($tipe_file != 'image/png') {
    echo "<script>
            alert('Yang anda upload bukan gambar');
          </script>";
    return false;
  }

  if ($ukuran_file > 10000000) {
    echo "<script>
            alert('Ukuran gambar terlalu besar');
          </script>";
    return false;
  }

  move_uploaded_file($tmp_file, '/Katalog' . $nama_file);

  return $nama_file;
}

function tambah($data)
{
  $conn = koneksi();

  $kode = htmlspecialchars($data['kode']);
  $edisi = htmlspecialchars($data['edisi']);
  $harga = htmlspecialchars($data['harga']);
  $img = upload();

  if (!$img) {
    return false;
  }

  $query = "INSERT INTO katalog VALUES (null, '$img', '$kode', '$edisi', '$harga');";
  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function update($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $kode = htmlspecialchars($data['kode']);
  $edisi = htmlspecialchars($data['edisi']);
  $harga = htmlspecialchars($data['harga']);
  $img_lama = htmlspecialchars($data['img_lama']);

  $img = upload();
  if (!$img) {
  }

  $query = "UPDATE katalog SET
            img = '$img',
            kode = '$kode',
            edisi = '$edisi',
            harga = '$harga' 
            WHERE id = $id";

  mysqli_query($conn, $query) or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}

function hapus($id)
{
  $conn = koneksi();

  mysqli_query($conn, "DELETE FROM katalog WHERE id = $id") or die(mysqli_error($conn));

  return mysqli_affected_rows($conn);
}
