<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CPD Online | Collapsed Sidebar Layout</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.7 -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/font-awesome/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/Ionicons/css/ionicons.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/AdminLTE.min.css">
    <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
    <link rel="stylesheet" href="<?= base_url() ?>/template/dist/css/skins/_all-skins.min.css">
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<!-- ADD THE CLASS sidebar-collapse TO HIDE THE SIDEBAR PRIOR TO LOADING THE SITE -->

<body class="hold-transition skin-blue sidebar-collapse sidebar-mini">
    <!-- Site wrapper -->
    <div class="wrapper">

        <header class="main-header">
            <!-- Logo -->
            <a href="#" class="logo">
                <!-- mini logo for sidebar mini 50x50 pixels -->
                <span class="logo-mini"><b>V</b>CPD</span>
                <!-- logo for regular state and mobile devices -->
                <span class="logo-lg"><b>Verifikasi</b>CPD</span>
            </a>
            <!-- Header Navbar: style can be found in header.less -->
            <nav class="navbar navbar-static-top">
                <!-- Sidebar toggle button-->
                <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">

                </a>

                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url('verifikasi/logout') ?>"><i class="fa fa-power-off"></i> Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>

        <!-- =============================================== -->

        <!-- Left side column. contains the sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->

                <!-- sidebar menu: : style can be found in sidebar.less -->
                <ul class="sidebar-menu" data-widget="tree">
                    <li class="header">MAIN NAVIGATION</li>
                    <?php
                    if (session()->get('level') == '1') { ?>
                        <li class="nav-item">
                            <a href="<?= base_url('anggota/anggota_all') ?>" class="nav-link">
                                <i class="fa fa-database"></i> <span>Anggota All</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('anggota/anggota_pengajuan') ?>" class="nav-link">
                                <i class="fa fa-users"></i> <span>Pengajuan Verifikasi</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= base_url('anggota/anggota_verified') ?>" class="nav-link">
                                <i class="fa fa-check-square-o"></i> <span>Verified</span>
                            </a>
                        </li>
                    <?php } ?>
                    <!-- <li class="nav-item">
                        <a href="<?= base_url('anggota') ?>" class="nav-link">
                            <i class="fa fa-users"></i> <span>Data Pengajuan</span>
                        </a>
                    </li> -->

                </ul>
            </section>
            <!-- /.sidebar -->
        </aside>

        <!-- =============================================== -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->

            <!-- Main content -->
            <section class="content">
                <!-- Default box -->
                <div class="box">
                    <div class="box-header with-border">
                        <h3 class="box-title"><b><?= $title ?></b></h3>
                    </div>
                    <div class="box-body">
                        <?= $this->renderSection('content') ?>
                    </div>
                    <!-- /.box-body -->
                    <div class="box-footer">
                        <b>Kontak Person Verifikasi :</b> </br>
                        DPC Sleman : Bu Fe (0877-1997-2009), Pak Ery (0852-2515-0762)</br>
                        DPC Kota : Bu Ika (0856-2926-412), Pak Edi (0818-0274-7887)</br>
                        DPC Bantul : Pak Agung (0812-2747-226)</br>
                        DPC Gunung Kidul : Pak Sugeng (0813-2877-0164)</br>
                        DPC Kulon Progo : Pak Widhi (0813-2847-9152)</br>
                    </div>
                    <!-- /.box-footer-->
                </div>
                <!-- /.box -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="pull-right hidden-xs">
                <b>Version</b> 2.4.18
            </div>
            <strong>Copyright &copy; 2014-2019 <a href="https://adminlte.io">AdminLTE</a>.</strong> All rights
            reserved.
        </footer>
        <div class="control-sidebar-bg"></div>
    </div>
    <!-- ./wrapper -->

    <!-- jQuery 3 -->
    <script src="<?= base_url() ?>/template/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.3.7 -->
    <script src="<?= base_url() ?>/template/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="<?= base_url() ?>/template/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>/template/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="<?= base_url() ?>/template/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="<?= base_url() ?>/template/bower_components/fastclick/lib/fastclick.js"></script>
    <!-- AdminLTE App -->
    <script src="<?= base_url() ?>/template/dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="<?= base_url() ?>/template/dist/js/demo.js"></script>

    <script>
        $(function() {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging': true,
                'lengthChange': false,
                'searching': false,
                'ordering': true,
                'info': true,
                'autoWidth': false
            })
        })
    </script>
    <script>
        window.setTimeout(function() {
            $(".alert").fadeTo(500, 0).slideUp(500, function() {
                $(this).remove();
            });
        }, 6000);
    </script>
</body>

</html>