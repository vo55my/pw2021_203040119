<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" rel="stylesheet" href="tubes/css/materialize.min.css" media="screen,projection">
  <link rel="shortcut icon" type="image/x-icon" href="tubes/assets/img/Slide/Logo.png">
  <title>PW2021_203040119</title>
  <style>
    body {
      display: flex;
      min-height: 100vh;
      flex-direction: column;
    }

    main {
      flex: 1 0 auto;
    }

    .home {
      margin: 130px auto;
    }

    .profil {
      margin: 180px auto;
    }

    .kuliah,
    .praktikum,
    .tubes {
      margin: 60px 150px;
    }

    .home p,
    .profil p {
      font-size: 20px;
    }

    .profil img {
      margin: auto 20px;
    }

    .brand-logo {
      max-width: 48px;
      max-height: 48px;
      margin: 5px auto;
    }

    h2 {
      font-weight: 600;
    }
  </style>
</head>

<body id="home" class="scrollspy">
  <!-- navbar -->
  <div class="navbar-fixed">
    <nav class="black">
      <div class="container">
        <div class="nav-wrapper">
          <img class="brand-logo" src="tubes/assets/img/Slide/Logo.png">
          <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons large">menu</i></a>
          <ul class="red-text text-darken-2 right hide-on-med-and-down">
            <li><a href="#home" class="hoverable">Home</a></li>
            <li><a href="#profil" class="hoverable">Profil</a></li>
            <li><a href="#kuliah" class="hoverable">Kuliah</a></li>
            <li><a href="#praktikum" class="hoverable">Praktikum</a></li>
            <li><a href="#tubes" class="hoverable">Tugas Besar</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>

  <!-- sidenav -->
  <ul class="sidenav" id="mobile-nav">
    <li><a href="#home">Home</a></li>
    <li><a href="#profil">Profil</a></li>
    <li><a href="#kuliah">Kuliah</a></li>
    <li><a href="#praktikum">Praktikum</a></li>
    <li><a href="#tubes">Tugas Besar</a></li>
  </ul>

  <!-- home -->
  <div class="container home">
    <div class="row">
      <h2 class="red-text text-darken-2">Selamat Datang di Tugas Hilmy</h2>
      <blockquote>
        <p>Selamat datang di Halaman Tugas Dhaifullah Hilmy, ini adalah halaman untuk melihat progress saya selama perkuliahan semester 2 pada mata kuliah Pemrograman Web.</p>
      </blockquote>
    </div>
  </div>

  <!-- profil -->
  <section id="profil" class="profil scrollspy">
    <div class="container">
      <div class="row">
        <div class="col s12 m6">
          <img width="270" src="img/Profil.png" class="circle responsive-img">
        </div>
        <div class="col s12 m6">
          <h2 class="red-text text-darken-2">Hello......</h2>
          <blockquote>
            <p>Perkenalkan, Nama saya Dhaifullah Hilmy dengan NPM 203040119. Saya merupakan Mahasiswa Teknik Informatika Universitas Pasundan.</p>
          </blockquote>
        </div>
      </div>
    </div>
  </section>

  <!-- kuliah -->
  <section id="kuliah" class="kuliah scrollspy">
    <div class="container">
      <div class="row">
        <h2 class="center red-text text-darken-2">Tugas Kuliah</h2>
        <div class="col s12 m6">
          <ul class="collapsible">
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan2">Pertemuan 2</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan3">Pertemuan 3</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan4">Pertemuan 4</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan5">Pertemuan 5</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan6">Pertemuan 6</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan7">Pertemuan 7</a></div>
            </li>
          </ul>
        </div>
        <div class="col s12 m6">
          <ul class="collapsible">
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan9">Pertemuan 9</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan10">Pertemuan 10</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan11">Pertemuan 11</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan12">Pertemuan 12</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pertemuan13">Pertemuan 13</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="phpdasar/pagination">Pagination</a></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- praktikum -->
  <section id="praktikum" class="praktikum scrollspy">
    <div class="container">
      <div class="row">
        <h2 class="center red-text text-darken-2">Tugas Praktikum</h2>
        <div class="col s12 m6">
          <ul class="collapsible">
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="praktikum/tugas1">Tugas 1</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="praktikum/tugas2">Tugas 2</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="praktikum/tugas3">Tugas 3</a></div>
            </li>
          </ul>
        </div>
        <div class="col s12 m6">
          <ul class="collapsible">
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="praktikum/tugas4">Tugas 4</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="praktikum/tugas5">Tugas 5</a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable"><a class="black-text" href="praktikum/tugas6">Tugas 6</a></div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <!-- tubes -->
  <section id="tubes" class="tubes scrollspy">
    <div class="container">
      <div class="row">
        <h2 class="center red-text text-darken-2">Tugas Besar</h2>
        <p class="center">Klik Tab untuk melihat akun yang terdaftar</p>
        <ul class="collapsible">
          <li>
            <div class="collapsible-header"><a class="black-text" href="tubes">Tugas Besar</a></div>
            <div class="collapsible-body">
              <p>Admin</p>
              <p>Username : admin</p>
              <p>Password : admin</p>
              <br>
              <p>Member</p>
              <p>Username : member</p>
              <p>Password : member</p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </section>

  <!-- footer -->
  <footer class="page-footer red darken-2 white-text center-align">
    <div class="container">
      <div class="col l4 offset-l2 s12">
        <h5 class="white-text">Links :</h5>
        <ul>
          <li><a class="white-text" href="#home">Home</a></li>
          <li><a class="white-text" href="#profil">Profil</a></li>
          <li><a class="white-text" href="#kuliah">Kuliah</a></li>
          <li><a class="white-text" href="#praktikum">Praktikum</a></li>
          <li><a class="white-text" href="#tubes">Tugas Besar</a></li>
        </ul>
      </div>
    </div>
    </div>
    <div class="footer-copyright red darken-2">
      <div class="container">Copyright © 2020 MyCloth Indonesia</div>
    </div>
  </footer>

  <!-- javascript -->
  <script type="text/javascript" src="tubes/js/materialize.min.js"></script>
  <script>
    const sideNav = document.querySelectorAll('.sidenav');
    M.Sidenav.init(sideNav);

    const collapsible = document.querySelectorAll('.collapsible');
    M.Collapsible.init(collapsible);

    const scroll = document.querySelectorAll('.scrollspy');
    M.ScrollSpy.init(scroll, {
      scrollOffset: 80
    });
  </script>
</body>

</html>