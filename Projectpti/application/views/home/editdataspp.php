<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>TambahDataSpp</title>

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
            <li class="nav-item" style="font-family:Roboto Slab;">
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
            <li class="nav-item " style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/DataSiswaCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Data Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item " style="font-family:Roboto Slab;background-color: #3278a0;">
                <a class="nav-link" href="<?= base_url('Welcome/StatusSppCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Status SPP Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item " style="font-family:Roboto Slab;">
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
                            <a class="btn btn-light" href="<?= base_url('Welcome/StatusSppCon'); ?>"> Back</a>
                        </div>
                        <div class="container-fluid">


                            <div class="py-3">
                                <div style="text-align:left; font-size:24px; color:black;">
                                    <p>Edit Data Spp</p>

                                </div>
                            </div>
                            <hr style="border-width: 1px; border-color:black">
                            <!-- forms -->
                            <form style=" font-size:18px; color:black" action="<?= base_url('Welcome/UpdateDataSppCon'); ?>" method="post" enctype='multipart/form-data'>
                                <input type="hidden" name="id" value="<?= $status['id']; ?>">
                                <div class="form-group">
                                    <label for="jenisTransaksi">Nama</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputJenisTransaksi" name="nama" placeholder="Cth: adi    " value="<?= $status['nama']; ?>" required>
                                </div>

                                <div class="form-group">
                                    <label for="banyak">NIK</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="banyak" name="nik" placeholder="Cth: 12341225" value="<?= $status['nik']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="bulan">Pembayaran (Bulan)</label>
                                    <div class="dropdown show" style="width: 500px; height: 40px;">

                                        <select name="bulan" id="bulan" class="form-control" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; width:250px;">
                                            <option class="dropdown-item" href="#" disabled selected>-Pilih Bulan-</option>
                                            <option class="dropdown-item" href="#" value="Januari" <?php if ($status['bulan'] == 'Januari') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Januari</option>
                                            <option class="dropdown-item" href="#" value="Februari" <?php if ($status['bulan'] == 'Februari') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Februari</option>
                                            <option class="dropdown-item" href="#" value="Maret" <?php if ($status['bulan'] == 'Maret') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Maret</option>
                                            <option class="dropdown-item" href="#" value="April" <?php if ($status['bulan'] == 'April') {
                                                                                                        echo "selected";
                                                                                                    } ?>>April</option>
                                            <option class="dropdown-item" href="#" value="Mei" <?php if ($status['bulan'] == 'Mei') {
                                                                                                    echo "selected";
                                                                                                } ?>>Mei</option>
                                            <option class="dropdown-item" href="#" value="Juni" <?php if ($status['bulan'] == 'Juni') {
                                                                                                    echo "selected";
                                                                                                } ?>>Juni</option>
                                            <option class="dropdown-item" href="#" value="Juli" <?php if ($status['bulan'] == 'Juli') {
                                                                                                    echo "selected";
                                                                                                } ?>>Juli</option>
                                            <option class="dropdown-item" href="#" value="Agustus" <?php if ($status['bulan'] == 'Agustus') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Agustus</option>
                                            <option class="dropdown-item" href="#" value="September" <?php if ($status['bulan'] == 'September') {
                                                                                                            echo "selected";
                                                                                                        } ?>>September</option>
                                            <option class="dropdown-item" href="#" value="Oktober" <?php if ($status['bulan'] == 'Oktober') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Oktober</option>
                                            <option class="dropdown-item" href="#" value="November" <?php if ($status['bulan'] == 'November') {
                                                                                                        echo "selected";
                                                                                                    } ?>>November</option>
                                            <option class="dropdown-item" href="#" value="Desember" <?php if ($status['bulan'] == 'Desember') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Desember</option>

                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="satuan">Nominal</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="satuan" name="nominal" placeholder="Cth: 100000" value="<?= $status['nominal']; ?>" required>
                                </div>
                                <div class="form-group">
                                    <label for="tanggalbayar">Jatuh Tempo</label>
                                    <input style="width: 500px; height: 40px;" type="date" class="form-control" id="tempo" name="tempo" placeholder="dd/mm/yyyy" value="<?= $status['tempo']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="tanggalbayar">Tanggal Bayar</label>
                                    <input style="width: 500px; height: 40px;" type="date" class="form-control" id="tanggalbayar" name="tanggalbayar" placeholder="dd/mm/yyyy" value="<?= $status['tglbayar']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="kategori">Status</label>
                                    <div class="dropdown show" style="width: 500px; height: 40px;">

                                        <select name="status" id="status" class="form-control" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; width:250px;" required>
                                            <option class="dropdown-item" href="#" disabled selected>-Pilih Status-</option>
                                            <option class="dropdown-item" href="#" value="Hutang" <?php if ($status['status'] == 'Hutang') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Hutang</option>
                                            <option class="dropdown-item" href="#" value="Lunas" <?php if ($status['status'] == 'Lunas') {
                                                                                                        echo "selected";
                                                                                                    } ?>>Lunas</option>
                                        </select>

                                    </div>
                                </div>
                                <div class="form-group">
                                    <br>
                                    <button onclick="javascript:return confirm('Anda yakin ingin mengubah data?')" type="submit" class="btn btn-info col-sm-2 float-right" style="margin-right: 0px;" value="upload">Ubah</button>
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
                <div class="modal-body">Pilih "Logut" untuk keluar dari laman ini.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="<?= base_url('Welcome/LoginCon'); ?>">Logout</a>
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
                    <a class="btn btn-primary" href="<?= base_url('Welcome/LapKeuCon'); ?>">Oke</a>
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