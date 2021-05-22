<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Utama - TK Melati Putih</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/landingpage.css">
</head>


<body>
    <div class="halaman-utama">
        <nav class="navbar">
            <div class="brand">
                <img src="<?= base_url() ?>img/Group67.png" alt="">
            </div>
            <ul>
                <li> <a class="active" href="<?= base_url() ?>"> Home </a></li>
                <li> <a href="<?= base_url() ?>Welcome/ProfileCon"> Profil </a></li>
                <li> <a href="<?= base_url() ?>Welcome/profilgurucon"> Guru </a></li>
                <li> <a href="<?= base_url() ?>Welcome/InfoDaftarCon">Info Pendaftaran </a></li>
                <li> <a href="<?= base_url() ?>Welcome/LoginCon" class="butt" type="button">Login</a>
            </ul>
            <!-- <div class="menu-toggle">
                <input type="checkbox" />
                <span> </span>
                <span> </span>
                <span> </span>
            </div>
            -->
        </nav>
        <!--Header -->
        <section id="main">
            <div class="container">
                <div class="main-content">
                    <div class="text">
                        <h1> Selamat Datang Di Website, <br /></h1>
                        <img src="img/TK.png" alt="gambar tk">
                    </div>
                </div>
                <div class="banner">
                    <img src="img/landingpage2.png" alt="gambar2">
                </div>
                <div class="sosmet">
                    <div class="wa">
                        <a href="#"><img src="img/wa.png" alt="whatshap"></a>
                    </div>
                    <div class="fb">
                        <a href="#"><img src="img/fb.png" alt="facebook"></a>
                    </div>
                    <div class="ig">
                        <a href="#"><img src="img/ig.png" alt="instagram"></a>
                    </div>

                </div>
            </div>
        </section>
        <!-- akhir Header -->



        <!-- akhir isi -->
        <section id="content">
            <div class="contain">
                <div class="batang"></div>
                <div class="batang2"></div>
                <div class="batang3"></div>
                <div class="retangle">
                </div>
                <div class="title">
                    <dir class="text">
                        <h1 class="profile">Profile</h1>
                        <h3 class="intro">Taman kanak-kanak ini sudah berdiri sejak
                            tahun 1996.
                            TK Melati Putih dapat menerima
                            sekitar 50 hingga 60 peserta didik setiap tahunnya,
                            ada 4 orang staf yang bekerja sebagai tenaga
                            pendidik di TK ini.
                        </h3>
                    </dir>
                </div>
                <div class="lanjutprofile">
                    <a href="<?= base_url('Welcome/ProfileCon') ?>"><img src="img/Group131.png" alt="tombol"></a>
                </div>
            </div>
        </section>
        <!-- akhir isi -->

        <!-- profile guru -->
        <section id="guru">
            <div class="contenguru">
                <div class="batang4"></div>
                <div class="batang5"></div>
                <div class="batang6"></div>
                <div class="isiguru">
                    <h1 class="gurup"> GURU</h1>
                    <div class="isigurukiri">
                        <div class="contenguruu1">
                            <div class="satu">
                                <tr id="ip">
                                    <th>Nama <span class="nama">:</span></th><br />
                                    <th>Tempat Tanggal Lahir :</span></th><br />
                                    <th>Alamat <span class="alamat">:</span></th><br />
                                    <th>Pendidikan <span class="pendidikan">:</span></th><br />
                                    <th>Jabatan <span class="jabatan">:</span></th>
                                </tr>
                            </div>

                        </div>
                        <div class="contenguruu2">
                            <div class="dua">
                                <tr>
                                    <th>Nama <span class="nama">:</span> </th><br />
                                    <th>Tempat Tanggal Lahir :</th><br />
                                    <th>Alamat <span class="alamat">:</span></th><br />
                                    <th>Pendidikan <span class="pendidikan">:</span></th><br />
                                    <th>Jabatan <span class="jabatan">:</span> </th>
                                </tr>

                            </div>
                        </div>
                    </div>
                    <div class="isigurukanan">
                        <div class="pengumuman-">
                            <div class="overlap-group">
                                <div class="rectangle-1"></div>
                                <div class="rectangle-108"></div>
                                <div class="text-1 robotoslab-normal-blue-dianne-22px">Mulai tanggal 31 mei pembayaran SPP dapat Dilakukan</div>
                                <div class="text-2 robotoslab-normal-blue-dianne-22px">
                                    Berhubung dengan pengumuman dinas pendidikan mengenai COVID-19, maka sekolah meliburkan seluruh siswa selama 2
                                    minggu
                                </div>
                                <div class="group-115">
                                    <div class="overlap-group1">
                                        <img class="pengumuman-1" src="img/PENGUMUMAN.png" />
                                        <img class="loudspeaker-128x128-2" src="img/loudspeaker-128x128.png" />
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="lanjutguru">
                    <a href="<?= base_url('Welcome/GuruCon') ?>"><img src="img/Group132.png" alt="tombol"></a>
                </div>
            </div>
        </section>

        <!-- akhir guru -->
        <section id="info">
            <div class="isi-info">
                <div class="batang7"></div>
                <div class="batang8"></div>
                <div class="batang9"></div>
                <div class="infopendaftaran">
                    <h1 class="inpendaftaran">INFO PENDAFTARAN</h1>
                </div>
                <div class="back">
                    <div class="isigan">
                        <h2 class="isiganheader">INFORMASI PENDAFTARAN</h2>
                        <h3 class="teksheaderisi"> Pendaftaran Siswa Baru di TK Melati Putih terdapat 2 jalur yakni ONLINE dan OFFLINE dengan ketentuan sebagai berikut: <br /><br />

                            1. Pendaftaran ONLINE, orangtua dapat mengaksesnya melalui official website kami di https://www.<br /><br />

                            2. Pendaftaran OFFLINE, orangtua dapat langung ke TK Melati Putih di Alamat: JL. Bilal Ujung, Gang Surya No. 168 B, Kec. Medan Tembung, Kota Medan, Sumatera Utara.<br /><br />

                            3. Pendaftaran di buka pada tanggal 26 November 2018 s.d Kuota Terpenuhi.<br /><br />

                            4.Pendaftaran ONLINE maupun OFFLINE akan di tutup jika kuota pendaftar terpenuhi. <br /><br />
                        </h3>
                    </div>
                </div>
                <div class="gambarinfo">
                    <a href="<?= base_url('Welcome/InfoDaftarCon') ?>"> <img src="img/Group133.png" alt="gambarinfolengkapnya"></a>
                </div>
            </div>
        </section>

        <!-- footer -->
        <section class="footer">
            <div class="backgroundfooter">
                <H2 class="hubungi">Hubungi Kami</H2>
                <img class="telephone" src="img/telephone.png" alt="">
                <h4 class="nohp1"> 08123456789</h4>
                <h4 class="nohp2"> 090880808</h4>
                <img class="whattsap" src="img/wa.png" alt="">
                <h4 class="nowaa">0909090</h4>
                <img class="facebook" src="img/fb.png" alt="">
                <h4 class="facebookteks"> TK Melati Putih </h4>
                <img class="igg" src="img/ig.png" alt="">
                <h4 class="igid">@tkmelatiputih</h4>
                <img class="location" src="img/lication.png" alt="">
                <h4 class="locationid">JL. Bilal Ujung, Gang Surya No. 168 B,
                    Kec. Medan Timur, Kota Medan,
                    Sumatera Utara</h4>
            </div>
        </section>
    </div>
    <script src="script/script.js"></script>
    <script src="script/nav.js"></script>
</body>

</html>