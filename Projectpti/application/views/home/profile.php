<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@600&display=swap" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <title>Profile Sekolah</title>
    <link href="<?= base_url(); ?>css/profile.css" rel="stylesheet">
</head>

<body>
    <div class="halaman-utama">
        <div class="navbar">
            <div class="brand">
                <img src="<?= base_url() ?>img/Group67.png" alt="">
            </div>
            <ul class="nav-link">
                <li> <a href="<?= base_url() ?>" class="navbar-link"> Home </a></li>
                <li> <a href="<?= base_url() ?>Welcome/ProfileCon" class="navbar-link" style="border-bottom: 3px solid blue;padding-bottom: 5px;margin-bottom: -10px;"> Profil </a></li>
                <li> <a href="<?= base_url() ?>Welcome/profilgurucon" class="navbar-link"> Guru </a></li>
                <li> <a href="<?= base_url('Welcome/InfoDaftarCon') ?>" class="navbar-link">Info Pendaftaran </a></li>
                <li> <a href="<?= base_url() ?>Welcome/LoginCon" class="butt" type="button">Login</a>
            </ul>
        </div>
        <div class="header">
            <img class="headergambar1" src="<?= base_url() ?>img/image21.svg" alt="gambarheader">
            <img class="headergambar2" src="<?= base_url() ?>img/Group135.svg" alt="gambarheader">

        </div>
        <h1 class="lokasi">INDENTITAS</h1>
        <h1 class="text-1 robotoslab-bold-white-24px">
            TK Melati Putih terletak di JL. Bilal Ujung, Gang Surya No. 168 B, Kec. Medan Timur, Kota Medan, Sumatera Utara.
            <br />Taman kanak-kanak ini sudah berdiri sejak tahun 1996.<br />TK Melati Putih dapat menerima sekitar 50 hingga 60
            peserta didik setiap tahunnya, ada 4 orang staf yang bekerja sebagai tenaga pendidik di TK ini.
        </h1>

        <div class="isi">
            <div class="kepsek">
                <div class="kepsekiri">
                    <h2 class="headersambutan">SAMBUTAN KEPALA SEKOLAH</h2>
                    <p class="isiheadersambutan">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
                <div class="kepsekkanan">
                    <img class="gambarkepsek" src="https://6.vikiplatform.com/image/a11230e2d98d4a73825a4c10c8c6feb0.jpg?x=b&a=0x0&s=780x436&q=h&e=t&f=t&cb=1" alt="gambarkepsek">
                </div>
            </div>
            <div class="visi">
                <div class="visikiri">
                    <img class="gambarvisi" src="https://cdn0-production-images-kly.akamaized.net/G5MxiE8n6qk3NKzxQHlu1zKItr4=/640x360/smart/filters:quality(75):strip_icc():format(webp)/kly-media-production/medias/2975416/original/005140100_1574444390-ANAK_TK-Ridlo.jpg" alt="gambarvisimisi">
                </div>
                <div class="visikanan">
                    <h2 class="visimisi">VISI DAN MISI TK MELATI PUTIH</h2>
                    <p class="isivisimisi">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>

        </div>
    </div>
    <section class="footer">
        <div class="backgroundfooter">
            <H2 class="hubungi">Hubungi Kami</H2>
            <img class="telephone" src="<?= base_url() ?>img/telephone.png" alt="">
            <h4 class="nohp1"> 08123456789</h4>
            <h4 class="nohp2"> 090880808</h4>
            <img class="whattsap" src="<?= base_url() ?>img/wa.png" alt="">
            <h4 class="nowaa">0909090</h4>
            <img class="facebook" src="<?= base_url() ?>img/fb.png" alt="">
            <h4 class="facebookteks"> TK Melati Putih </h4>
            <img class="igg" src="<?= base_url() ?>img/ig.png" alt="">
            <h4 class="igid">@tkmelatiputih</h4>
            <img class="location" src="<?= base_url() ?>img/lication.png" alt="">
            <h4 class="locationid">JL. Bilal Ujung, Gang Surya No. 168 B,
                Kec. Medan Timur, Kota Medan,
                Sumatera Utara</h4>
        </div>
    </section>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>

</html>