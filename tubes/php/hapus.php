<?php
session_start();
if (!isset($_SESSION['login'])) {
  header("Location: ../index.php");
  exit;
}

require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: admin.php");
  exit;
}

// mengambil id dari url
$id = $_GET['id'];

if (hapus($id) > 0) {
  echo "<script>
          alert('Katalog berhasil dihapus');
          document.location.href = 'admin.php';
        </script>";
} else {
  echo "<script>
          alert('Katalog gagal dihapus');
          document.location.href = 'admin.php';
        </script>";
}
