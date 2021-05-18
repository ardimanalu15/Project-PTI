<?php
$connect = mysqli_connect("localhost", "root", "", "tkmelati");
$querry = "SELECT * FROM keuangan ORDER BY id desc";
$result = mysqli_query($connect, $querry);


?>


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
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js" integrity="sha256-0YPKAwZP7Mp3ALMRVB2i8GXeEndvCq3eSl/WsAl1Ryk=" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.0/themes/smoothness/jquery-ui.css">

</head>

<style>
    .a:hover {
        background-color: black;
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
            <li class="nav-item" style="font-family:Roboto Slab;">
                <a class="nav-link " href="<?= base_url('Welcome/DataGuruCon'); ?>">
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
                <a class="nav-link" href="#">
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
                                    <input type="text" name="tanggalawal" id="tanggalawal" class="form-control" placeholder="dd-mm-yyyy" value="">

                                </div>
                                <p class="my-1" style="font-size: 18px;">s/d</p>
                                <div class="col-sm-5 my-1">
                                    <label class="sr-only" for="inlineFormInputDate">Date</label>
                                    <input type="text" name="tanggalakhir" id="tanggalakhir" class="form-control" placeholder="dd-mm-yyyy" value="">

                                </div>
                            </div>
                        </form>
                        <div style=" clear:both">
                        </div>
                    </div>
                    <div class="col">
                        <p style="color:rgba(250, 244, 244, 1);">.</p>
                        <!--  -->
                        <form>
                            <!--  -->
                            <div class="form-row align-items-center">
                                <div class="col-sm-3 my-1 ">
                                    <!--   <div class="dropdown show" style="width: 500px; height: 40px;" value="<?= set_select('jeniskelamin'); ?>">

                                        <select name=" jeniskelamin" id="inputjk" class="form-control" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color:white; color:black; width:250px;">
                                            <option class="dropdown-item" href="#" disabled selected>-Semua kategori-</option>
                                            <option class="dropdown-item" href="#">Pembelian Barang</option>
                                            <option class="dropdown-item" href="#">Operasional</option>
                                            <option class="dropdown-item" href="#">Gaji</option>
                                            <option class="dropdown-item" href="#">Pemasukan SPP</option>
                                            <option class="dropdown-item" href="#">Pemasukan Pendaftaran</option>
                                            <option class="dropdown-item" href="#">Pemasukan Dana Bantuan</option>

                                        </select>

                                    </div>-->

                                </div>
                                <p></p>

                                <div class="col-sm-6">
                                    <button type="button" name="filter" id="filter" class="btn btn-primary float-right" style="margin-right: 0px; ">Tampilkan</button>

                                </div>
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
                        <!--   <h6 class="m-0 ">Pertanggal : </h6>
                        <h6 class="m-0 ">Kategori : </h6>-->


                        <a href="<?= base_url('Welcome/Cetakpdf'); ?>" class="float-right btn btn-danger" style="margin-right: 0px;">Cetak PDF</a>

                    </div>
                    <div class="card-body" id="ordertable">
                        <div class="table-responsive">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Tanggal</th>
                                        <th>Jenis Transaksi</th>
                                        <th>Jumlah Barang</th>
                                        <th>Harga Satuan</th>
                                        <th>Kategori</th>
                                        <th>Jenis Kas</th>
                                        <th>Jumlah</th>
                                        <th>Tanggal Pembaruan</th>
                                        <th>Tindakan</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $no = 1;
                                    foreach ($keuangan as $keu) : ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $keu['tanggal']; ?></td>
                                            <td><?php echo $keu['jenistransaksi']; ?></td>
                                            <td><?php echo $keu['banyak']; ?></td>
                                            <td><?php echo $keu['satuan']; ?></td>
                                            <td><?php echo $keu['kategori']; ?></td>
                                            <td><?php echo $keu['jeniskas']; ?></td>
                                            <td><?php echo $keu['jumlah']; ?></td>
                                            <td><?php echo $keu['last']; ?></td>

                                            <td>
                                                <a onclick="javascript:return confirm('Anda yakin ingin menghapus data?')" href="<?= base_url(); ?>/Welcome/DeleteDataKeuCon/<? echo $keu['id']; ?>" type="submit" style="height: 30px; width:35px; margin-top:3px;">
                                                    <img src="<?= base_url('assets/'); ?>/img/delete.svg">
                                                </a>
                                                <a href="<?= base_url(); ?>/Welcome/EditDataKeuCon?<? echo $keu['id']; ?>" type="submit" style="height: 25px;width:27px; margin-top:2px; margin-left:5px;">
                                                    <img src="<?= base_url('assets/'); ?>/img/edit.svg">
                                                </a>
                                            </td>

                                        </tr>
                                    <?php endforeach; ?>


                                </tbody>
                            </table>
                            <a class="btn btn-info col-sm-2 float-right" style="margin-right: 0px;" href="<?= base_url('Welcome/TambahDataKeuCon') ?>">Tambah Data</a>
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
                    <a class="btn btn-primary" href="<?= base_url('Welcome/LapKeuCon'); ?>">Hapus</a>
                    <!-- <a class="btn btn-primary" onclick="Swal('Data Berhasil Dihapus', 'Data telah dihapus', 'success')">Hapus</a> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <scriptsrc=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src= src="<?= base_url('assets/'); ?>vendor/jquery/jquery.min.js"></scriptsrc=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=src=>
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

    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

    <script>
        $(document).ready(function() {
            $.datepicker.setDefaults({
                dateFormat: 'yy-mm-dd'
            });

            $(function() {
                $("#tanggalawal").datepicker();
                $("#tanggalakhir").datepicker();
            });
            $('#filter').click(function() {
                var tanggalawal = $('#tanggalawal').val();
                var tanggalakhir = $('#tanggalakhir').val();
                if (tanggalawal != '' && tanggalakhir != '') {
                    $.ajax({
                        url: "<?= base_url(); ?>/Welcome/filter",
                        method: "POST",
                        data: {
                            tanggalawal: tanggalawal,
                            tanggalakhir: tanggalakhir
                        },
                        success: function(data) {
                            $('#ordertable').html(data);
                        }
                    });
                } else {
                    alert("Tolong masukkan tanggal terlebih dahulu");
                }
            });
        });
    </script>

</body>

</html>