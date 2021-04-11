<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Info Pendaftaran</title>
    <link rel="stylesheet" href="<?= base_url() ?>css/halamanpendaftaran.css">
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
            <dir class="isikanan">
                <form action="" method="">
                    <table>
                        <tr>
                            <td class="isitabelnya">Nama Calon Siswa</td>
                            <td style="color: red;">*</td>
                            <td><input type="text" name="Nama_Calon_Siswa" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tanggal Lahir Siswa</td>
                            <td>*</td>
                            <td><input type="date" name="ttl" placeholder="" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Alamat</td>
                            <td>*</td>
                            <td><textarea name="alamat" id="" cols="30" rows="2" class="input"></textarea></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Umur </td>
                            <td>*</td>
                            <td><input type="number" max="10" min="3" name="umur" class="input"> Tahun</td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Nomor Akte Kelahiran</td>
                            <td>*</td>
                            <td><input type="text" name="noakte" placeholder="Angka" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">No Kartu Keluarga</td>
                            <td>*</td>
                            <td><input type="text" name="nokk" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tinggi/Berat Badan</td>
                            <td>*</td>
                            <td><input type="number" max="300" min="50" name="tinggi" class="input"> cm</td>
                            <td>/</td>
                            <td><input type="number" max="150" min="10" name="berat" class="input"> kg</td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Jenis kelamin</td>
                            <td>*</td>
                            <td><select name="jeniskelamin" id="jenis_kelamin" class="select" class="input">
                                    <option class="input" value="Laki-Laki" selected>Laki-Laki</option>
                                    <option class="input" value="Perempuan" selected>Perempuan</option>
                                    <option class="input" value="" selected>-Pilih</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Nama Lengkap Ayah</td>
                            <td>*</td>
                            <td><input type="text" name="nama_ayah" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Nama Lengkap Ibu</td>
                            <td>*</td>
                            <td><input type="text" name="nama_ibu" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pendidikan Terakhir Ayah</td>
                            <td>*</td>
                            <td><input type="text" name="pendidikan_ayah" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pendidikan Terakhir Ibu</td>
                            <td>*</td>
                            <td><input type="text" name="pendidikan_ibu" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pekerjaan Ayah</td>
                            <td>*</td>
                            <td><input type="text" name="pekerjaan_ayah" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pekerjaan Ibu</td>
                            <td>*</td>
                            <td><input type="text" name="pekerjaan_ibu" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Penghasilan Ayah</td>
                            <td>*</td>
                            <td><input type="text" name="penghasilan_ayah" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Pernghasilan Ibu</td>
                            <td>*</td>
                            <td><input type="text" name="penghasilan_ibu" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tanggal Lahir Ayah </td>
                            <td>*</td>
                            <td><input type="date" name="ttl_ayah" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">Tanggal Lahir Ibu</td>
                            <td>*</td>
                            <td><input type="date" name="ttl_ibu" class="input"></td>
                        </tr>
                        <tr>
                            <td class="isitabelnya">No. Telep. Ayah/ibu</td>
                            <td>*</td>
                            <td><input type="text" name="notelpon" placeholder="+62" class="input"></td>
                        </tr>
                        <tr>
                            <td><Button type="submit" name="kirim" class="kirim">Kirim</Button></td>
                        </tr>
                    </table>
                </form>
            </dir>
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
</body>

</html>