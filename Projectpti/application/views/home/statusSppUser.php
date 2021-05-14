<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DashboardUser</title>
    <!-- Custom fonts for this template-->
    <link href="<?= base_url('assets/'); ?>vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="<?= base_url('assets/'); ?>https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?= base_url('assets/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Roboto Slab' rel='stylesheet'>
    <link rel="stylesheet" href="<?= base_url('css/'); ?>/landingpage.css">
    <link href="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
</head>
<style>
    a:hover {
        color: black;
        background-color: #ADD8DE;
    }
</style>

<body id="page-top">
    <div class="brand">
        <img class="img-fluid" style="height: 74px;width:542px; margin-top:11px;margin-left:14px;" src="<?= base_url() ?>img/Group67.png" alt="">
    </div>
    <div id="wrapper" style="background-color: #ADD8DE;">
        <nav class="navbar navbar-expand-lg navbar-light ml-auto " style="background-color: #ADD8DE; margin-left:0px ">

            <div class="collapse navbar-collapse" id=" navbarSupportedContent">

                <form class="form-inline my-2 my-lg-0">

                    <div>
                        <samp style="color: black; margin-right:100px; ">Selamat Datang, <?php echo $siswa['nama'] ?></samp>

                    </div>

                    <a class="nav-link btn btn-info" href="#" data-toggle="modal" data-target="#logoutModal" style="border:none; color:black;">
                        <img src='<?= base_url('assets/'); ?>/img/logout.svg'>
                        <span>Logout</span>
                    </a>
                </form>
            </div>
        </nav>

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
    </div>



    <div class="container-fluid">
        <div class="row">
            <ul class="navbar-nav sidebar border" id="accordionSidebar" style=" font-family:Roboto Slab;;">


                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active" style="font-family:Roboto Slab;">
                    <a class="nav-link" href="<?= base_url('Welcome/DashUserCon'); ?>">

                        <span style="color: black;">Data Diri Siswa</span></a>
                </li>
                <!-- Nav Item - Dashboard -->
                <li class="nav-item active" style="font-family:Roboto Slab;background-color: #ADD8DE;">
                    <a class="nav-link" href="#">

                        <span style="color: black;">Cek Status Spp</span></a>
                </li>

            </ul>
            <div class="col border-left" style="font-family:Roboto Slab; color:black;">
                <div class="row" style="margin-left: 120px;">
                    <div class="col-lg-2" style="margin-top:70px;">
                        <p>Nama</p>
                        <p>Status</p>
                    </div>
                    <div class="col" style="margin-top:70px;">
                        <p>: <?php echo $siswa['nama'] ?></p>
                        <p>: <?php if ($akun['is_active'] == 1) {
                                    echo "Aktif";
                                } else {
                                    echo "Tidak Aktif";
                                } ?></p>

                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="dataTable" width="100%" cellspacing="0" style="color: black; background-color:whitesmoke">
                            <thead style="background-color: #FFD670;">
                                <tr>
                                    <th>No</th>
                                    <th>Bulan</th>
                                    <th>Nominal</th>
                                    <th>Jatuh Tempo</th>
                                    <th>Tanggal Bayar</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $no = 1;
                                foreach ($spp as $sp) : ?>
                                    <tr>
                                        <td style="background-color: #ADD8DE;"><?php echo $no++; ?></td>
                                        <td><?= $sp['bulan']; ?></td>
                                        <td><?php echo $sp['nominal']; ?></td>
                                        <td><?php echo $sp['tempo']; ?></td>
                                        <td><?php echo $sp['tglbayar']; ?></td>
                                        <td><?php echo $sp['status']; ?></td>

                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>

                    </div>
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

    <script src="<?= base_url('assets/'); ?>vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('assets/'); ?>vendor/datatables/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url('assets/'); ?>js/demo/datatables-demo.js"></script>

</body>

</html>