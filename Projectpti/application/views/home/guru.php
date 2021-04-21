<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Guru</title>
    <link rel="stylesheet" href="css/landingpage.css">
</head>

<body>
    <div class="halaman-utama">

        <div class="navbar">
            <div class="brand"> </div>
            <ul class="nav-link">
                <li> <a href="<?= base_url('Welcome'); ?>" class="navbar-link"> Home </a></li>
                <li> <a href="<?= base_url('Welcome'); ?>#profilePage" class="navbar-link"> Profil </a></li>
                <li> <a href="#" class="navbar-link"> Guru </a></li>
                <li> <a href="<?= base_url('Welcome'); ?>" class="navbar-link">Info Pendaftaran </a></li>
                <li> <a href="<?= base_url('Welcome/LoginCon'); ?>" class="butt" type="button">Login</a>
            </ul>
        </div>
        <!-- profile guru -->
        <section class="guru" id="guruPage">
            <div class="contenguru">
                <div class="batang4"></div>
                <div class="batang5"></div>
                <div class="batang6"></div>
                <div class="isiguru">
                    <h1 class="gurup"> INFORMASI GURU</h1>
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
                    <a href="#Welcome/guruCon"><img src="img/Group132.png" alt="tombol"></a>
                </div>
            </div>
        </section>

        <!-- akhir guru -->

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
                    Kec. Medan Tembung, Kota Medan,
                    Sumatera Utara</h4>
            </div>
        </section>
    </div>
</body>

</html>