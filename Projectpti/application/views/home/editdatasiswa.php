<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DataSiswa</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color: #569BB1; font-family:Roboto Slab;">
            <div class="brand">
                <img class="img-fluid" style="height: 23pt; margin-top:11px;margin-left:14px;" src="<?= base_url() ?>img/Group67.png" alt="">
            </div>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">

                <div class="sidebar-brand-text mx-3" style="font-family:Roboto Slab;">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item " style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DashAdminCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item " style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DataGuruCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Data Guru</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item " style="font-family:Roboto Slab;background-color: #3278a0;">
                <a class="nav-link" href="<?= base_url('Welcome/DataSiswaCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Data Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/StatusSppCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Status SPP Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/LapKeuCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Laporan Keuangan</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" style="font-family:Roboto Slab;">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-fw "></i>
                    <span>Logout</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->

            <div id="content" style="margin-top:50px; font-family:Roboto Slab;">

                <div class="container-fluid">

                    <div class="card shadow mb-4">
                        <div style="text-align: right;margin-right:15px; margin-top:15px;">
                            <a class="btn btn-light" href="<?= base_url('Welcome/DataSiswaCon'); ?>"> Back</a>
                        </div>
                        <div class="container-fluid">


                            <div class="py-3">
                                <div style="text-align:left; font-size:24px; color:black;">
                                    <p>Ubah Data Siswa</p>

                                </div>
                            </div>
                            <hr style="border-width: 1px; border-color:black">
                            <!-- forms -->

                            <form style=" font-size:18px; color:black;" action="<?= base_url('Welcome/UpdateDataSiswaCon') ?>" method="post" enctype='multipart/form-data'>

                                <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
                                <div class="form-group ">
                                    <label for="inputnamasiswa" style="color:black;">Nama Siswa</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputnamasiswa" name="Nama_Calon_Siswa" value="<?= $siswa['nama']; ?>">
                                    <?= form_error('Nama_Calon_Siswa', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputttlsiswa" style="color:black;">Tanggal lahir</label>
                                    <input style="width: 500px; height: 40px;" type="date" class="form-control" id="inputttlsiswa" name="ttl" value="<?= $siswa['ttl']; ?>">
                                    <?= form_error('ttl', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputalamat">Alamat tempat tinggal</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputalamat" name="alamat" value="<?= $siswa['alamat']; ?>">
                                    <?= form_error('alamat', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputumur">Umur</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputumur" name="umur" value="<?= $siswa['umur']; ?>">
                                    <?= form_error('umur', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputakte">Nomor Akte Kelahiran</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputakte" name="noakte" value="<?= $siswa['akte']; ?>">
                                    <?= form_error('noakte', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputkk">Nomor Kartu Keluarga</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputkk" name="nokk" value="<?= $siswa['kk']; ?>">
                                    <?= form_error('nokk', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-row">
                                    <div class="form-group col-md-6">
                                        <label for="tinggi">Tinggi Badan (cm)</label>
                                        <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputtb" name="tinggi" value="<?= $siswa['tinggi']; ?>">
                                        <?= form_error('tinggi', '<small style="color:red;">', '</small>'); ?>
                                    </div>

                                    <div class="form-group col-md-6">
                                        <label for="berat">Berat Badan (Kg)</label>
                                        <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputbb" name="berat" value="<?= $siswa['berat'];; ?>">
                                        <?= form_error('berat', '<small style="color:red;">', '</small>'); ?>
                                    </div>

                                </div>

                                <div class="form-group">
                                    <label for="inputjk">Jenis Kelamin</label>
                                    <div class="dropdown show" style="width: 500px; height: 40px;">

                                        <select name="jeniskelamin" id="inputjk" class="form-control" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; color:black; width:200px;">
                                            <option class="dropdown-item" href="#" disabled selected>Pilih Jenis Kelamin</option>
                                            <option class="dropdown-item" href="#" value="Laki-Laki" <?php if ($siswa['jk'] == 'Laki-Laki') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Laki-Laki</option>
                                            <option class="dropdown-item" href="#" value="Perempuan" <?php if ($siswa['jk'] == 'Perempuan') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Perempuan</option>

                                        </select>

                                    </div>
                                    <?= form_error('jeniskelamin', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputnamaayah" style="color:black;">Nama Ayah</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputnamaayah" name="nama_ayah" value="<?= $siswa['namaayah']; ?>">
                                    <?= form_error('nama_ayah', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputnamaibu" style="color:black;">Nama Ibu</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputnamaibu" name="nama_ibu" value="<?= $siswa['namaibu']; ?>">
                                    <?= form_error('nama_ibu', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputpendidikanayah" style="color:black;">Pendidikan Terakhir Ayah</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputpendidikanayah" name="pendidikan_ayah" value="<?= $siswa['pendidikanayah']; ?>">
                                    <?= form_error('pendidikan_ayah', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputpendidikanibu" style="color:black;">Pendidikan Terakhir Ibu</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputpendidikanibu" name="pendidikan_ibu" value="<?= $siswa['pendidikanibu']; ?>">
                                    <?= form_error('pendidikan_ibu', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputpekerjaanayah" style="color:black;">Pekerjaan Ayah</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputpekerjaanayah" name="pekerjaan_ayah" value="<?= $siswa['pekerjaanayah']; ?>">
                                    <?= form_error('pekerjaan_ayah', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputpekerjaanibu" style="color:black;">Pekerjaan Ibu</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputpekerjaanibu" name="pekerjaan_ibu" value="<?= $siswa['pekerjaanibu']; ?>">

                                </div>
                                <div class=" form-group">
                                    <label for="inputpenghasilanayah" style="color:black;">Penghasilan Ayah</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputpenghasilanayah" name="penghasilan_ayah" value="<?= $siswa['penghasilanayah']; ?>">
                                    <?= form_error('penghasilan_ayah', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputpenghasilanibu" style="color:black;">Penghasilan Ibu</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputpenghasilanibu" name="penghasilan_ibu" value="<?= $siswa['penghasilanibu']; ?>">
                                    <?= form_error('penghasilan_ibu', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputttlayah" style="color:black;">Tanggal Lahir Ayah</label>
                                    <input style="width: 500px; height: 40px;" type="date" class="form-control" id="inputttlayah" name="ttl_ayah" value="<?= $siswa['ttlayah']; ?>">
                                    <?= form_error('ttl_ayah', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group">
                                    <label for="inputttlibu" style="color:black;">Tanggal Lahir Ibu</label>
                                    <input style="width: 500px; height: 40px;" type="date" class="form-control" id="inputttlibu" name="ttl_ibu" value="<?= $siswa['ttlibu']; ?>">
                                    <?= form_error('ttl_ibu', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <div class="form-group ">
                                    <label for="inputnotelponwali" style="color:black;">Nomor Telpon Wali</label>
                                    <input style="width: 500px; height: 40px;" type="tel" class="form-control" id="inputnotelponwali" name="notelpon" value="<?= $siswa['telpon']; ?>">
                                    <?= form_error('notelpon', '<small style="color:red;">', '</small>'); ?>
                                </div>
                                <!-- <div class="form-group ">
                                    <label for="inputFoto">Unggah Foto</label>
                                    <div class="row">
                                        <div class="col-sm-2">
                                            <img src="<?= base_url('assets/fotosiswa/') . $siswa['foto'] ?>" class="img-thumbnail">
                                        </div>
                                        <div class="col-sm-3" style="margin-left:45px;">
                                            <div class="custom-file">
                                                <input style="width: 250px; height: 40px;" type="file" class="custom-file-input" id="image" name="image" />
                                                <label class="custom-file-label" for="image">Pilih File</label>
                                                <?= form_error('foto', '<small style="color:red;">', '</small>'); ?>
                                            </div>
                                        </div>

                                    </div>
                                </div> -->
                                <div class="form-group">
                                    <br>
                                    <button onclick="javascript:return confirm('Anda yakin ingin mengubah data?')" type="submit" class="btn btn-info col-sm-2 float-right" style="margin-right: 0px;" value="upload">Ubah</button>
                                </div>


                                <div class="form-group">
                                    <br>
                                    <br>
                                </div>
                            </form>

                            <!-- End Forms -->


                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->
                <footer class="sticky-footer bg-white " style="font-family:Roboto Slab;">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; TK MElLATI PUTIH MEDAN</span>
                        </div>
                    </div>
                </footer>
            </div>


            <!-- Footer -->

            <!-- End of Footer -->


            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Keluar?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Pilih "Logut" untuk keluar dari laman ini.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('Welcome/LoginCon'); ?>">Logout</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" style="margin-top:150px;" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apakah Anda Yakin Ingin Menghapus Data?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin-left:200px;"><img src="<?= base_url('assets/'); ?>/img/warningIcon.svg"></div>
                    <div class="modal-body">Pilih "Hapus" untuk menghapus data.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="<?= base_url('Welcome/DataSiswaCon'); ?>">Hapus</a>
                        <!-- <a class="btn btn-primary" onclick="Swal('Data Berhasil Dihapus', 'Data telah dihapus', 'success')">Hapus</a> -->
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" style="margin-top:150px;" id="ubahModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">

                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" style="margin-left:200px;"><img src="<?= base_url('assets/'); ?>/img/successIcon.svg"></div>
                    <div class="modal-body">Sukses Mengubah Data</div>
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

        <script>
            $('.custom-file-input').on('change', function() {
                let fileName = $(this).val().split('\\').pop();
                $(this).next('.custom-file-label').addClass("selected").html(fileName);
            });
        </script>

</body>

</html>