<?php
/*
Dhaifullah Hilmy
203040119
https://github.com/vo55my/pw2021_203040119.git
Pertemuan 11 - 30 April 2021
Mempelajari Delete, Update, Searching Data
*/
?>

<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'index.php';
        </script>";
} else {
  echo "<script>
          alert('data gagal dihapus');
          document.location.href = 'index.php';
        </script>";
}
?>
<!-- selesai -->