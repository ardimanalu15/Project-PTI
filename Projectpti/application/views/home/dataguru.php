<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>DataGuru</title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
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
            <li class="nav-item" style="font-family:Roboto Slab; background-color: #3278a0;">
                <a class="nav-link" href="#">
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


            <!-- Begin Page Content -->
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="d-sm-flex align-items-center mb-4" style="font-family:Roboto Slab; justify-content: center; ">
                    <p class="mb-0 text-gray-800" style="font-size: 50px;">Data Guru</p>
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
                <div class="row" style="color: black; font-size:18px;">
                    <div class="col-lg-3" style="margin-top:30px;">
                        <p>Total Guru </p>


                    </div>
                    <div class="col" style="margin-top:30px;">
                        <p>: <?= $jlh ?> </p>

                    </div>
                </div>

            </div>
            <br>
            <br>
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

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <!-- <th>Foto</th> -->
                                            <th>Nama Guru</th>
                                            <th>Jenis Kelamin</th>
                                            <!-- <th>TTL</th>
                                            <th>Alamat Tinggal</th> -->
                                            <th>NIK</th>
                                            <th>NIP</th>
                                            <th>NUPTK</th>
                                            <th>Jenis PTK</th>
                                            <th>NPSN</th>
                                            <th>Waktu Pembaruan</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        foreach ($guru as $gur) : ?>
                                            <tr>
                                                <td><?php echo $no++; ?></td>
                                                <!-- <td>
                                                    <?php echo "<img src='" . base_url("assets/fotosiswa/" . $sis['foto']) . "' width='100' height='100'>"; ?>
                                                </td> -->
                                                <td><?php echo $gur['namaguru']; ?></td>
                                                <td><?php echo $gur['jk']; ?></td>
                                                <!-- <td><?php echo $gur['ttl']; ?></td>
                                                <td><?php echo $gur['alamat']; ?></td> -->
                                                <td><?php echo $gur['NIK']; ?></td>
                                                <td><?php echo $gur['NIP']; ?></td>
                                                <td><?php echo $gur['NUPTK']; ?></td>
                                                <td><?php echo $gur['JPTK']; ?></td>
                                                <td><?php echo $gur['NPSN']; ?></td>
                                                <td><?php echo $gur['last']; ?></td>
                                                <td>
                                                    <a onclick="javascript:return confirm('Anda yakin ingin menghapus data?')" href="<?= base_url(); ?>/Welcome/DeleteDataGuruCon/<?php echo $gur['id']; ?>" type="submit" style="height: 30px; width:35px; margin-top:3px;margin-left:5px;">
                                                        <img src="<?= base_url('assets/'); ?>/img/delete.svg">
                                                    </a>
                                                    <a href="<?= base_url(); ?>/Welcome/EditDataGuruCon/<?php echo $gur['id']; ?>" type="submit" style="height: 25px;width:27px; margin-top:2px; margin-left:10px;">
                                                        <img src="<?= base_url('assets/'); ?>/img/edit.svg">
                                                    </a>
                                                </td>

                                            </tr>
                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                                <br>
                                <br>
                                <a class="btn btn-info col-sm-2 float-right" style="margin-right: 0px;" href="<?= base_url('Welcome/TambahDataGuruCon') ?>">Tambah Data Guru</a>
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
                        <a class="btn btn-primary" href="<?= base_url('Welcome/DataGuruCon'); ?>">Hapus</a>
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
        <script src="<?= base_url('assets/'); ?> alert/sweetalert2.all.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
        <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

</body>

</html>