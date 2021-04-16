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
            <div class="mt-3" style="color:white; font-size: 20px; font-family:Roboto Slab;">
                <p>
                    <img style=" height:25pt" src='<?= base_url('assets/'); ?>/img/tkMelati.svg'>

                </p>
            </div>
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center">

                <div class="sidebar-brand-text mx-3" style="font-family:Roboto Slab;">Kepala Sekolah</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DashKepsekCon'); ?>">

                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DataGuruKepsekCon'); ?>">

                    <span>Data Guru</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="#">

                    <span>Data Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/StatusSppKepsekCon'); ?>">

                    <span>Status SPP Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/LapKeuKepsekCon'); ?>">

                    <span>Laporan Keuangan</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">

                    <span>Logout</span></a>
            </li>
        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center mb-4" style="font-family:Roboto Slab; justify-content: center; ">
                    <p class="mb-0 text-gray-800" style="font-size: 50px;">Data Siswa</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
                <div style="font-family:Roboto Slab; justify-content: center;">
                    <p>Total Siswa : </p>
                    <p>Jumlah Siswa Laki-Laki : </p>
                    <p>Jumlah Siswa Perempuan : </p>
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Content Row -->

            <!-- Main Content -->

            <div id="content">

                <!-- Topbar -->

                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->

                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <nav class="navbar navbar-light bg-light justify-content-end">

                                <form class="form-inline">

                                    <input class="form-control mr-sm-2 " type="search" placeholder="Cari..." aria-label="Search">
                                    <button class="btn btn-info  my-2 my-sm-0" type="submit"><i class="fas fa-search fa-fw"></i></button>
                                </form>
                            </nav>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Siswa</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Alamat Tinggal</th>

                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>No</th>
                                            <th>Foto</th>
                                            <th>Nama Siswa</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Nama Ayah</th>
                                            <th>Nama Ibu</th>
                                            <th>Alamat Tinggal</th>

                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <tr>
                                            <td>1.</td>
                                            <td>
                                                <img class="justify-content-center" style="height: 95px; width:71px" src="<?= base_url('assets/'); ?>/img/pace.JPG">
                                            </td>
                                            <td>Ardi Gaya Manalu</td>
                                            <td>Laki-Laki</td>
                                            <td>Pace</td>
                                            <td>Mace</td>
                                            <td>Jayapura</td>

                                        </tr>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>


            <!-- Footer -->
            <footer class="sticky-footer bg-white " style="font-family:Roboto Slab;">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; TK MElLATI PUTIH MEDAN</span>
                    </div>
                </div>
            </footer>
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