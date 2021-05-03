<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EditDataKeuangan</title>

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
            <li class="nav-item " style="font-family:Roboto Slab;">
                <a class="nav-link" href="<?= base_url('Welcome/StatusSppCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Status SPP Siswa</span></a>
            </li>
            <!-- Nav Item - Dashboard -->
            <li class="nav-item " style="font-family:Roboto Slab;background-color: #3278a0;">
                <a class="nav-link" href="<?= base_url('Welcome/LapKeuCon'); ?>">
                    <i class="fas fa-fw "></i>
                    <span>Laporan Keuangan</span></a>
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
                            <a class="btn btn-light" href="<?= base_url('Welcome/LapKeuCon'); ?>"> Back</a>
                        </div>
                        <div class="container-fluid">


                            <div class="py-3">
                                <div style="text-align:left; font-size:24px; color:black;">
                                    <p>Edit Data Keuangan</p>

                                </div>
                            </div>
                            <hr style="border-width: 1px; border-color:black">
                            <!-- forms -->
                            <form style=" font-size:18px; color:black" action="<?= base_url('Welcome/UpdateDataKeuCon'); ?>" method="post">
                                <input type="hidden" name="id" value="<?= $keuangan['id']; ?>">
                                <div class="form-group">
                                    <label for="tanggalKeu">Tanggal</label>
                                    <input style="width: 500px; height: 40px;" type="date" class="form-control" id="inputTanggalKeu" name="tanggalKeu" placeholder="dd/mm/yyyy" value="<?= $keuangan['tanggal']; ?>">
                                </div>

                                <div class=" form-group">
                                    <label for="jenisTransaksi">Jenis Transaksi</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="inputJenisTransaksi" name="jenisTransaksi" placeholder="Cth: Beli Spidol" value="<?= $keuangan['jenistransaksi']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="banyak">Jumlah Barang</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="banyak" name="banyak" placeholder="Cth: 3" value="<?= $keuangan['banyak']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="satuan">Harga Satuan</label>
                                    <input style="width: 500px; height: 40px;" type="text" class="form-control" id="satuan" name="satuan" placeholder="Cth: 3" value="<?= $keuangan['satuan']; ?>">
                                </div>

                                <div class="form-group">
                                    <label for="kategori">Kategori</label>
                                    <div class="dropdown show" style="width: 500px; height: 40px;">

                                        <select name="kategori" id="kategori" class="form-control" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; width:250px;">
                                            <option class="dropdown-item" href="#" disabled selected>-Pilih Kategori-</option>
                                            <option class="dropdown-item" href="#" value="Pembelian Barang" <?php if ($keuangan['kategori'] == 'Pembelian Barang') {
                                                                                                                echo "selected";
                                                                                                            } ?>>Pembelian Barang</option>
                                            <option class="dropdown-item" href="#" value="Operasional" <?php if ($keuangan['kategori'] == 'Operasional') {
                                                                                                            echo "selected";
                                                                                                        } ?>>Operasional</option>
                                            <option class="dropdown-item" href="#" value="Gaji" <?php if ($keuangan['kategori'] == 'Gaji') {
                                                                                                    echo "selected";
                                                                                                } ?>>Gaji</option>
                                            <option class="dropdown-item" href="#" value="Pemasukan SPP" <?php if ($keuangan['kategori'] == 'Pemasukan SPP') {
                                                                                                                echo "selected";
                                                                                                            } ?>>Pemasukan SPP</option>
                                            <option class="dropdown-item" href="#" value="Pembelian Barang" <?php if ($keuangan['kategori'] == 'Pemasukan Pendaftaran') {
                                                                                                                echo "selected";
                                                                                                            } ?>>Pemasukan Pendaftaran</option>
                                            <option class="dropdown-item" href="#" value="Pemasukan Dana Bantuan" <?php if ($keuangan['kategori'] == 'Pemasukan Dana Bantuan') {
                                                                                                                        echo "selected";
                                                                                                                    } ?>>Pemasukan Dana Bantuan</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="inputJenisKas">Jenis kas</label>
                                    <div class="dropdown show" style="width: 500px; height: 40px;">

                                        <select name="kas" id="jenisKas" class="form-control" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; width:250px;">
                                            <option class="dropdown-item" href="#" disabled selected>Pilih Jenis Kas</option>
                                            <option style="background-color:white; color:black;" class="dropdown-item" href="#" value="Kas Masuk" <?php if ($keuangan['jeniskas'] == 'Kas Masuk') {
                                                                                                                                                        echo "selected";
                                                                                                                                                    } ?>>Kas Masuk</option>
                                            <option style="background-color:white; color:black;" class="dropdown-item" href="#" value="Kas Keluar" <?php if ($keuangan['jeniskas'] == 'Kas Keluar') {
                                                                                                                                                        echo "selected";
                                                                                                                                                    } ?>>Kas Keluar</option>

                                        </select>

                                    </div>
                                </div>

                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn-info col-sm-2 float-right" style="margin-right: 0px;">Ubah</button>
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