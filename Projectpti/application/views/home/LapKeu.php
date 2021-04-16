<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>LaporanKeuangan</title>

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

                <div class="sidebar-brand-text mx-3" style="font-family:Roboto Slab;">ADMIN</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DashAdminCon'); ?>">

                    <span>Dashboard</span></a>
            </li>
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DataGuruCon'); ?>">

                    <span>Data Guru</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DataSiswaCon'); ?>">

                    <span>Data Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/StatusSppCon'); ?>">

                    <span>Status SPP Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active" style="font-family:Roboto Slab;">
                <a class="nav-link" href="#">

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
                <div class="d-sm-flex align-items-center  mb-4" style="font-family:Roboto Slab; justify-content: center;">
                    <p class="mb-0 text-gray-800" style="font-size: 50px;">Laporan Keuangan</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
                <div style="font-family:Roboto Slab; font-size:20px">
                    <p>Filter Laporan</p>
                    <p></p>
                    <p></p>
                </div>
                <div class="container" style="font-family:Roboto Slab; font-size:18px"">
                    <div class=" row">
                    <div class="col">

                        <p>Pertanggal</p>
                        <form>
                            <div class="form-row align-items-center">
                                <div class="col-sm-6 my-1 ">
                                    <label class="sr-only" for="inlineFormInputDate">Date</label>
                                    <input type="date" name="begin" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">

                                </div>
                                <p class="my-1" style="font-size: 18px;">s/d</p>
                                <div class="col-sm-5 my-1">
                                    <label class="sr-only" for="inlineFormInputDate">Date</label>
                                    <input type="date" name="begin" placeholder="dd-mm-yyyy" value="" min="1997-01-01" max="2030-12-31">
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col">

                        <p>Kategori</p>
                        <form>
                            <div class="form-row align-items-center">
                                <div class="dropdown show">
                                    <a class="border-0 btn  dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white;">
                                        -semua jenis kategori-
                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                    </div>
                                </div>
                                <button type="button" class="btn btn-primary col-sm-3 float-right" style="margin-right: 0px;">Tampilkan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        <!-- End of Main Content -->
        <!-- Content Row -->

        <!-- Main Content -->

        <div id="content" style="font-family:Roboto Slab;">

            <!-- Topbar -->

            <!-- End of Topbar -->

            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->

                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 ">Pertanggal : </h6>
                        <h6 class="m-0 ">Kategori : </h6>
                        <button type="button" class="float-right" style="margin-right: 0px; background-color:#569BB1">Print Laporan</button>
                        <button type="button" class="float-right" style="margin-right: 0px; background-color:#C32A2A">Cetak PDF</button>

                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Kategori</th>
                                        <th>Kas Masuk</th>
                                        <th>Kas Keluar</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1.</td>
                                        <td>10-10-2020</td>
                                        <td>Pembelian Spidol</td>
                                        <td>Beli</td>
                                        <td>None</td>
                                        <td>Rp. 10.000</td>
                                        <td>
                                            <button type="submit" style="height: 30px; width:35px; margin-top:3px;" data-toggle="modal" data-target="#deleteModal">
                                                <img src="<?= base_url('assets/'); ?>/img/delete.svg">
                                            </button>
                                            <a href="<?= base_url('Welcome/EditDataSiswaCon'); ?>" type="submit" style="height: 25px;width:27px; margin-top:2px;">
                                                <img src="<?= base_url('assets/'); ?>/img/edit.svg">
                                            </a>
                                        </td>
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
        <footer class="sticky-footer bg-white font-family:Roboto Slab;">
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

</body>

</html>