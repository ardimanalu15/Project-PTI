<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TambahDataGuru</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
</head>
<style>
    .a:hover {
        color: black;
        text-decoration: none;
    }
</style>

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

                <div class="sidebar-brand-text mx-3" style="font-family:Roboto Slab;">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item " style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DashAdminCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item " style="font-family:Roboto Slab;background-color: #3278a0;">
                <a class="nav-link" href="<?= base_url('Welcome/DataGuruCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Data Guru</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item" style="font-family:Roboto Slab;">
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
            <li class="nav-item" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DataAkunCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Data Akun</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item " style="font-family:Roboto Slab;">
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
                            <a class="btn btn-light" href="<?= base_url('Welcome/DataGuruCon'); ?>"> Back</a>
                        </div>
                        <div class="container-fluid">


                            <div class="py-3">
                                <div style="text-align:left; font-size:24px; color:black;">
                                    <p>Tambah Data Guru</p>

                                </div>
                            </div>
                            <hr style="border-width: 1px; border-color:black">
                            <!-- forms -->
                            <form style=" font-size:18px; color:black" action="<?= base_url('Welcome/TambahDataGuruCon'); ?>" method="post">
                                <!-- <div class="form-group">
                                    <label for="unggahFoto">Unggah Foto</label>
                                    <input style="width: 250px; height: 40px;" type="file" class="form-control" id="inputFoto">
                                </div> -->

                                <p>Nama Guru</p>

                                <div class="form-group ">

                                    <input type="text" style="width: 500px; height: 40px;" class="form-control" id="nama" name="nama" value="<?= set_value('nama'); ?>" required>
                                </div>


                                <div class=" form-group">
                                    <label for="inputjeniskelamin">Jenis Kelamin</label>
                                    <div class="dropdown show">

                                        <select name="jeniskelamin" id="jenisKelamin" class="form-control" id="inputAddress" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; color:black; width: 200px; height: 40px;" required>
                                            <option class="dropdown-item" href="#" disabled selected>Pilih Jenis Kelamin</option>
                                            <option class="dropdown-item" href="#" value="Laki-Laki" <?php if (set_value('jeniskelamin') == 'Laki-Laki') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Laki-Laki</option>
                                            <option class="dropdown-item" href="#" value="Perempuan" <?php if (set_value('jeniskelamin') == 'Perempuan') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Perempuan</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for=" ttl">Tanggal Lahir</label>
                                    <input type="date" class="form-control" id="inputttl" name="ttl" style="width: 500px; height: 40px;" value="<?= set_value('ttl'); ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="alamatguru">Alamat tempat tinggal</label>
                                    <input type="text" class="form-control" id="inputalamatguru" name="alamatguru" style="width: 500px; height: 40px;" value="<?= set_value('alamatguru'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="NIK">NIK</label>
                                    <input type="text" class="form-control" id="inputNIK" name="NIK" style="width: 500px; height: 40px;" value="<?= set_value('NIK'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="NIP">NIP</label>
                                    <input type="text" class="form-control" id="inputNIP" name="NIP" style="width: 500px; height: 40px;" value="<?= set_value('NIP'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="NUPTK">NUPTK</label>
                                    <input type="text" class="form-control" id="inputNUPTK" name="NUPTK" style="width: 500px; height: 40px;" value="<?= set_value('NUPTK'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="jenisPTK">Jenis PTK</label>
                                    <div class="dropdown show">

                                        <select name="jenisPTK" id="inputJenisPTK" class="form-control" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; color:black;width: 200px; height: 40px;" required>
                                            <option class="dropdown-item" href="#" disabled selected>Pilih Jenis PTK</option>
                                            <option class="dropdown-item" href="#" value="Kepala Sekolah" <?php if (set_value('jenisPTK') == 'Kepala Sekolah') {
                                                                                                                echo "selected";
                                                                                                            } ?>>Kepala Sekolah</option>
                                            <option class="dropdown-item" href="#" value="Guru" <?php if (set_value('jenisPTK') == 'Guru') {
                                                                                                    echo "selected";
                                                                                                } ?>>Guru</option>
                                            <option class="dropdown-item" href="#" value="Administrasi" <?php if (set_value('jenisPTK') == 'Administrasi') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Administrasi</option>
                                            <option class="dropdown-item" href="#" value="Operator" <?php if (set_value('jenisPTK') == 'Operator') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Operator</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="NPSN">NPSN</label>
                                    <input type="text" class="form-control" id="inputNPSN" name="NPSN" style="width: 500px; height: 40px;" value="<?= set_value('NPSN'); ?>" required>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn-info col-sm-2 float-right" style="margin-right: 0px;">Tambahkan</button>
                                </div>

                                <div class="form-group">
                                    <br>
                                    <br>
                                </div>
                            </form>
                        </div>

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
                <div class="modal-body">Pilih "Loguot" untuk keluar dari laman ini.</div>
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
                    <a class="btn btn-primary" href="<?= base_url('Welcome/DataGuruCon'); ?>">Hapus</a>
                    <!-- <a class="btn btn-primary" onclick="Swal('Data Berhasil Dihapus', 'Data telah dihapus', 'success')">Hapus</a> -->
                </div>
            </div>
        </div>
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
                <div class="modal-body">Sukses Menambah Data</div>
                <div class="modal-footer">
                    <a class="btn btn-primary" href="<?= base_url('Welcome/DataGuruCon'); ?>">Oke</a>
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