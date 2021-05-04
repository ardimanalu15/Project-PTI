<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Info Pendaftaran</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/halamanpendaftaran.css">
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>

<body>
    <div class="halaman">
        <div class="header">
            <h1 class="text-1 robotoslab-regular-normal-spectra-48px">
                Penerimaan Peserta Didik Baru<br />Tahun Pelajaran 2021/2022
            </h1>
        </div>
        <div class="isi">
            <div class="isikiri">
                <table class="tabel" border="1" cellspacing="0" cellpading="0">
                    <tr>
                        <td> <a href="<?= base_url() ?>" class="tabelisi"> home </a></td>
                    </tr>
                    <tr>
                        <td> <a href="<?= base_url() ?>Welcome/InfoDaftarCon" class="tabelisi"> Info Pendaftaran </a></td>
                    </tr>
                    <tr>
                        <td class="tabelisiwarna"> <a href="<?= base_url() ?>Welcome/halamanpendaf" class="tabelisi"> Formulir pendaftaran</a></td>
                    </tr>
                    <tr>
                        <td> <a href="<?= base_url() ?>Welcome/hubungikami" class="tabelisi"> Hubungi Kami</a></td>
                    </tr>
                </table>
            </div>
            <div class="garis"></div>
            <div class="isikanan">

                <form action="<?= base_url('Welcome/halamanpendaf'); ?>" method="post">
                    <table>
                        <tr style="border-spacing: 15px;">
                            <td class="isitabelnya">Nama Calon Siswa <span style="color:red">*</span></td>
                            <td></td>
                            <td>
                                <input type="text" name="Nama_Calon_Siswa" class="input" value="<?= set_value('Nama_Calon_Siswa'); ?>">
                            </td>
                            <td><?= form_error('Nama_Calon_Siswa', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tanggal Lahir Siswa <span style="color:red">*</span> </td>
                            <td></td>
                            <td><input type="date" name="ttl" placeholder="" class="input" value="<?= set_value('ttl'); ?>"></td>
                            <td><?= form_error('ttl', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Alamat <span style="color:red">*</span></td>
                            <td></td>
                            <td><input name="alamat" id="alamat" cols="30" rows="2" class="input" value="<?= set_value('alamat'); ?>"></input></td>
                            <td><?= form_error('alamat', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Umur <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="umur" id="umur" class="inputt" value="<?= set_value('umur'); ?>"> Tahun</td>
                            <td><?= form_error('umur', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Nomor Akte Kelahiran <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="noakte" placeholder="Angka" class="input" value="<?= set_value('noakte'); ?>"></td>
                            <td><?= form_error('noakte', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">No Kartu Keluarga <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="nokk" class="input" value="<?= set_value('nokk'); ?>"></td>
                            <td><?= form_error('nokk', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tinggi/Berat Badan <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="number" max="300" min="50" name="tinggi" class="inputt" value="<?= set_value('tinggi'); ?>"> cm</td>
                            <td><?= form_error('tinggi', '<small style="color:red;">', '</small>'); ?></td>
                            <td style="color:rgba(147, 147, 147, 1); font-size: 24px;">/</td>
                            <td><input type="number" max="150" min="10" name="berat" class="inputt" value="<?= set_value('berat'); ?>"> kg
                            <td><?= form_error('berat', '<small style="color:red;">', '</small>'); ?></td>
                            </td>

                        </tr>
                        <tr>
                            <td class="isitabelnya">Jenis kelamin <span style="color:red">*</span></td>
                            <td></td>
                            <td><select name="jeniskelamin" id="jenis_kelamin" class="select" style="margin-bottom: 20px;background-color: whitesmoke;border-radius: 10px;box-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);height: 40px;width: 149px;" value="<?= set_select('jeniskelamin'); ?>">
                                    <option class="input" value="Laki-Laki" selected>Laki-Laki</option>
                                    <option class="input" value="Perempuan" selected>Perempuan</option>
                                    <option class="input" value="" disabled selected>-Pilih</option>
                                </select>
                            </td>
                            <td><?= form_error('jeniskelamin', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Nama Lengkap Ayah <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="nama_ayah" class="input" value="<?= set_value('nama_ayah'); ?>"></td>
                            <td><?= form_error('nama_ayah', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Nama Lengkap Ibu <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="nama_ibu" class="input" value="<?= set_value('nama_ibu'); ?>"></td>
                            <td><?= form_error('nama_ibu', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pendidikan Terakhir Ayah <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="pendidikan_ayah" class="input" value="<?= set_value('pendidikan_ayah'); ?>"></td>
                            <td><?= form_error('pendidikan_ayah', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pendidikan Terakhir Ibu <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="pendidikan_ibu" class="input" value="<?= set_value('pendidikan_ibu'); ?>"></td>
                            <td><?= form_error('pendidikan_ibu', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pekerjaan Ayah <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="pekerjaan_ayah" class="input" value="<?= set_value('pekerjaan_ayah'); ?>"></td>
                            <td><?= form_error('pekerjaan_ayah', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pekerjaan Ibu <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="pekerjaan_ibu" class="input" value="<?= set_value('pekerjaan_ibu'); ?>"></td>
                            <td><?= form_error('pekerjaan_ibu', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Penghasilan Ayah <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="penghasilan_ayah" class="input" value="<?= set_value('penghasilan_ayah'); ?>"></td>
                            <td><?= form_error('penghasilan_ayah', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pernghasilan Ibu <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="penghasilan_ibu" class="input" value="<?= set_value('penghasilan_ibu'); ?>"></td>
                            <td><?= form_error('penghasilan_ibu', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tanggal Lahir Ayah <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="date" name="ttl_ayah" class="input" value="<?= set_value('ttl_ayah'); ?>"></td>
                            <td><?= form_error('ttl_ayah', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tanggal Lahir Ibu <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="date" name="ttl_ibu" class="input" value="<?= set_value('ttl_ibu'); ?>"></td>
                            <td><?= form_error('ttl_ibu', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">No. Telep. Ayah/ibu <span style="color:red">*</span></td>
                            <td></td>
                            <td><input type="text" name="notelpon" placeholder="+62" class="input" value="<?= set_value('notelpon'); ?>"></td>
                            <td><?= form_error('notelpon', '<small style="color:red;">', '</small>'); ?></td>
                        </tr>
                        <!-- <tr>
                            <td class="isitabelnya">Foto</td>
                            <td>*</td>
                            <td><input type="file" name="foto" class="input" "></td>
                            
                        </tr> -->
                        <tr>
                            <td><Button type=" submit" name="kirim" class="kirim" data-toggle="modal" data-target="#tambahModal" <?= base_url() ?>">Kirim</Button></td>
                        </tr>
                    </table>
                </form>
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
    </div>

    <div class="modal fade" style="margin-top:150px;" id="tambahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">

                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body" style="margin-left:200px;"><img src="<?= base_url('assets/'); ?>/img/successIcon.svg"></div>
                <div class="modal-body">Selamat Pendaftaran Anda Berhasil, Silahkan Menunggu Konfirmasi Dari Kami</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= base_url('Welcome/DataSiswaCon'); ?>">Oke</a>
                    <!-- <a class="btn btn-primary" onclick="Swal('Data Berhasil Dihapus', 'Data telah dihapus', 'success')">Hapus</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="<?= base_url('assets/'); ?>vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('assets/'); ?>js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="<?= base_url('assets/'); ?>vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="<?= base_url('assets/'); ?>js/demo/chart-area-demo.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/chart-pie-demo.js"></script>

    <script src="<?= base_url('assets'); ?> alert/sweetalert2.all.min.js"></script>
</body>

</html>