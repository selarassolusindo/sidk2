<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <title>AdminLTE 3 | Dashboard</title> -->
        <title><?php echo SITE_NAME; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Tempusdominus Bbootstrap 4 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
        <!-- iCheck -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- JQVMap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/jqvmap/jqvmap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/adminlte.min.css">
        <!-- overlayScrollbars -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
        <!-- Daterange picker -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker.css">
        <!-- summernote -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/summernote/summernote-bs4.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition sidebar-mini layout-fixed text-sm">

        <div class="wrapper">

            <!-- Navbar -->
            <nav class="main-header navbar navbar-expand navbar-white navbar-light">

                <!-- Left navbar links -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" data-widget="pushmenu" href="<?php echo base_url(); ?>assets/adminlte/#" role="button"><i class="fas fa-bars"></i></a>
                    </li>
                </ul>

            </nav>
            <!-- /.navbar -->

            <!-- Main Sidebar Container -->
            <aside class="main-sidebar elevation-4 sidebar-light-lightblue">

                <!-- Brand Logo -->
                <a href="<?php echo site_url(); ?>" class="brand-link">
                    <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
                    style="opacity: .8">
                    <span class="brand-text font-weight-light"><?php echo SITE_NAME; ?></span>
                </a>

                <!-- Sidebar -->
                <div class="sidebar">
                    <!-- Sidebar user panel (optional) -->
                    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                        <div class="image">
                            <!-- <img src="<?php echo base_url(); ?>assets/adminlte/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
                        </div>
                        <div class="info">
                            <a href="#" class="d-block"><?php echo $this->session->userdata('fullName'); ?></a>
                        </div>
                    </div>

                    <!-- Sidebar Menu -->
                    <nav class="mt-2">

                        <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent nav-compact" data-widget="treeview" role="menu" data-accordion="false">
                            <!-- Add icons to the links using the .nav-icon class
                            with font-awesome or any other icon font library -->
                            <!-- dashboard -->
                            <!-- <li class="nav-item has-treeview menu-open"> -->
                            <!-- <li class="nav-item has-treeview"> -->
                            <li class="nav-item">
                                <a href="<?php echo site_url(); ?>" class="nav-link <?php echo ($this->uri->segment(1) == '' ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-tachometer-alt"></i>
                                    <p>
                                    DASHBOARD
                                    <!-- <i class="right fas fa-angle-left"></i> -->
                                    </p>
                                </a>
                            </li>

                            <?php if ($this->ion_auth->logged_in()) { ?>


                            <?php
                            // menyiapkan variabel uri untuk menu-open dan active
                            $uri = '';
                            $i = 1;
                            foreach ($this->uri->segments as $segment) {
                                if ($i++ <= 2) {
                                    $uri .= $segment . '/';
                                } else {
                                    break;
                                }
                            }
                            $uri = substr($uri, 0, -1);
                            // echo $uri;
                            ?>

                            <!-- setup -->
                            <?php
                            $uri_setup = array(
                                'auth',
                                'auth/create_user',
                                'auth/edit_user',
                                'auth/create_group',
                                'auth/edit_group',
                                'auth/deactivate',
                                '_36_warganegara',
                                '_37_hubungan',
                                '_38_status',
                                '_39_pekerjaan',
                                '_40_pendidikan',
                                '_41_agama',
                                '_42_provinsi',
                                '_43_kabupaten',
                                '_44_kecamatan',
                                '_45_desa',
                                );
                            ?>
                            <li class="nav-item has-treeview <?php echo (in_array($uri, $uri_setup) ? 'menu-open' : ''); ?>">
                                <a href="#" class="nav-link <?php echo (in_array($uri, $uri_setup) ? 'active' : ''); ?>">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                    SETUP
                                    <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <!-- users -->
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>auth" class="nav-link <?php echo (in_array($uri, $uri_setup) ? 'active' : ''); ?>">
                                            <i class="fas fa-user-cog nav-icon"></i>
                                            <p>Users</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- utility -->
                            <?php
                            $uri_utility = array(
                                'auth/change_password',
                                );
                            ?>
                            <li class="nav-item has-treeview <?php echo (in_array($uri, $uri_utility) ? 'menu-open' : ''); ?>">
                                <a href="#" class="nav-link <?php echo (in_array($uri, $uri_utility) ? 'active' : ''); ?>">
                                    <i class="fas fa-tools nav-icon"></i>
                                    <p>
                                    UTILITY
                                    <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <!-- change password -->
                                <ul class="nav nav-treeview">
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>auth/change_password/<?php echo $this->session->userdata('user_id'); ?>" class="nav-link <?php echo (in_array($uri, $uri_utility) ? 'active' : ''); ?>">
                                            <i class="fas fa-key nav-icon"></i>
                                            <p>Change Password</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <?php } ?>

                            <?php if ($this->session->userdata('user_id') != "") { ?>
                            <!-- logout -->
                            <li class="nav-item">
                                <a href="<?php echo site_url(); ?>auth/logout" class="nav-link">
                                    <i class="fas fa-sign-out-alt nav-icon"></i>
                                    <p>
                                    LOGOUT
                                    </p>
                                </a>
                            </li>
                            <?php } else { ?>
                            <!-- login -->
                            <li class="nav-item">
                                <a href="<?php echo site_url(); ?>auth/login" class="nav-link">
                                    <i class="fas fa-sign-in-alt nav-icon"></i>
                                    <p>
                                    LOGIN
                                    </p>
                                </a>
                            </li>
                            <?php } ?>

                        </ul>
                    </nav>
                    <!-- /.sidebar-menu -->

                </div>
                <!-- /.sidebar -->

            </aside>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">

                <!-- Content Header (Page header) -->
                <div class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1 class="m-0 text-dark"><?php echo $_caption; ?></h1>
                            </div><!-- /.col -->
                            <div class="col-sm-6">
                                <!-- <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>assets/adminlte/#">Home</a></li>
                                    <li class="breadcrumb-item active">Dashboard v1</li>
                                </ol> -->
                            </div><!-- /.col -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
                </div>
                <!-- /.content-header -->

                <!-- Main content -->
                <section class="content">
                    <div class="container-fluid">
                        <?php $this->load->view($_view); ?>
                    </div><!-- /.container-fluid -->
                </section>
                <!-- /.content -->

            </div>
            <!-- /.content-wrapper -->

            <footer class="main-footer">
                <strong>Copyright &copy; 2014-2019 <a href="<?php echo base_url(); ?>assets/adminlte/http://adminlte.io">AdminLTE.io</a>.</strong>
                All rights reserved.
                <div class="float-right d-none d-sm-inline-block">
                    <b>Version</b> 3.0.5
                </div>
            </footer>

            <!-- Control Sidebar -->
            <aside class="control-sidebar control-sidebar-dark">
                <!-- Control sidebar content goes here -->
            </aside>
            <!-- /.control-sidebar -->

        </div>
        <!-- ./wrapper -->

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- jQuery UI 1.11.4 -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery-ui/jquery-ui.min.js"></script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button)
        </script>
        <!-- Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- ChartJS -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/chart.js/Chart.min.js"></script>
        <!-- Sparkline -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/sparklines/sparkline.js"></script>
        <!-- JQVMap -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jqvmap/jquery.vmap.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
        <!-- jQuery Knob Chart -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery-knob/jquery.knob.min.js"></script>
        <!-- daterangepicker -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/moment/moment.min.js"></script>
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/daterangepicker/daterangepicker.js"></script>
        <!-- Tempusdominus Bootstrap 4 -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
        <!-- Summernote -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/summernote/summernote-bs4.min.js"></script>
        <!-- overlayScrollbars -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
        <!-- AdminLTE App -->
        <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/adminlte.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/pages/dashboard.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/demo.js"></script>

        <script>
            $(function () {
                $('.btn').addClass('btn-sm')
                $('.table').addClass('table-sm')
                $('.form-control').addClass('form-control-sm')
            })
        </script>

    </body>

</html>
