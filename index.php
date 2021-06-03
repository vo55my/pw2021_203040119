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
          <ul class="collapsible popout">
            <li>
              <div class="collapsible-header hoverable">Pertemuan 2</div>
              <div class="collapsible-body hoverable">Index<a href="kuliah/pertemuan2/index.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 3</div>
              <div class="collapsible-body hoverable">Latihan<a href="kuliah/pertemuan3/latihan.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 1<a href="kuliah/pertemuan3/latihan1.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2<a href="kuliah/pertemuan3/latihan2.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 4</div>
              <div class="collapsible-body hoverable">Date<a href="kuliah/pertemuan4/date.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Function<a href="kuliah/pertemuan4/function.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 5</div>
              <div class="collapsible-body hoverable">Latihan 1<a href="kuliah/pertemuan5/latihan1.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2<a href="kuliah/pertemuan5/latihan2.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 3<a href="kuliah/pertemuan5/latihan3.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 6</div>
              <div class="collapsible-body hoverable">Latihan 1<a href="kuliah/pertemuan6/latihan1.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2<a href="kuliah/pertemuan6/latihan2.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 7</div>
              <div class="collapsible-body hoverable">Latihan Login<a href="kuliah/pertemuan7/login/login.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 1<a href="kuliah/pertemuan7/latihan1.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2<a href="kuliah/pertemuan5/latihan2.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 3<a href="kuliah/pertemuan5/latihan3.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 4<a href="kuliah/pertemuan5/latihan4.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
          </ul>
        </div>
        <div class="col s12 m6">
          <ul class="collapsible popout">
            <li>
              <div class="collapsible-header hoverable">Pertemuan 9</div>
              <div class="collapsible-body hoverable">Index 1<a href="kuliah/pertemuan9/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Index 2<a href="kuliah/pertemuan9/index2.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 10</div>
              <div class="collapsible-body hoverable">Latihan 1<a href="kuliah/pertemuan10/latihan1.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2<a href="kuliah/pertemuan10/latihan2.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 3<a href="kuliah/pertemuan10/latihan3.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 11</div>
              <div class="collapsible-body hoverable">Index<a href="kuliah/pertemuan11/index.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 12</div>
              <div class="collapsible-body hoverable">Index<a href="kuliah/pertemuan12/index.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pertemuan 13</div>
              <div class="collapsible-body hoverable">Index<a href="kuliah/pertemuan13/index.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Pagination</div>
              <div class="collapsible-body hoverable">Index<a href="kuliah/pagination/index.php"><i class="material-icons right red-text">send</i></a></div>
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
          <ul class="collapsible popout">
            <li>
              <div class="collapsible-header hoverable">Tugas 1</div>
              <div class="collapsible-body hoverable">Latihan 1a<a href="praktikum/tugas1/Latihan1a.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 1b<a href="praktikum/tugas1/Latihan1b.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 1c<a href="praktikum/tugas1/Latihan1c.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Tugas 1<a href="praktikum/tugas1/Tugas1.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Tugas 2</div>
              <div class="collapsible-body hoverable">Latihan 2a<a href="praktikum/tugas2/latihan2a.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2b<a href="praktikum/tugas2/latihan2b.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2c<a href="praktikum/tugas2/latihan2c.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 2d<a href="praktikum/tugas2/latihan2d.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Tugas 3</div>
              <div class="collapsible-body hoverable">Latihan 3a<a href="praktikum/tugas3/latihan3a.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 3b<a href="praktikum/tugas3/latihan3b.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 3c<a href="praktikum/tugas3/latihan3c.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 3d<a href="praktikum/tugas3/latihan3d.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 3e<a href="praktikum/tugas3/latihan3e/index.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
          </ul>
        </div>
        <div class="col s12 m6">
          <ul class="collapsible">
            <li>
              <div class="collapsible-header hoverable">Tugas 4</div>
              <div class="collapsible-body hoverable">Latihan 4a<a href="praktikum/tugas4/latihan4a/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 4b<a href="praktikum/tugas4/latihan4b/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 4c<a href="praktikum/tugas4/latihan4c/index.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Tugas 5</div>
              <div class="collapsible-body hoverable">Latihan 5a<a href="praktikum/tugas5/latihan5a/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 5b<a href="praktikum/tugas5/latihan5b/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 5c<a href="praktikum/tugas5/latihan5c/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 5d<a href="praktikum/tugas5/latihan5d/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 5e<a href="praktikum/tugas5/latihan5e/index.php"><i class="material-icons right red-text">send</i></a></div>
            </li>
            <li>
              <div class="collapsible-header hoverable">Tugas 6</div>
              <div class="collapsible-body hoverable">Latihan 6a<a href="praktikum/tugas6/latihan6a/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 6b<a href="praktikum/tugas6/latihan6b/index.php"><i class="material-icons right red-text">send</i></a></div>
              <div class="collapsible-body hoverable">Latihan 6c<a href="praktikum/tugas6/latihan6c/index.php"><i class="material-icons right red-text">send</i></a></div>
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
        <p class="center">Klik untuk melihat akun yang terdaftar</p>
        <ul class="collapsible">
          <li>
            <div class="collapsible-header">Tugas Besar</div>
            <div class="collapsible-body hoverable">MyCloth Indonesia<a href="tubes/index.php"><i class="material-icons right red-text">send</i></a></div>
            <div class="collapsible-body">
              <p>Admin</p>
              <p>Username : hilmy</p>
              <p>Password : admin</p>
              <br>
              <p>Member</p>
              <p>Username : dinda</p>
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