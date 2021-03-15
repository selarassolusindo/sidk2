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
        <!-- Select2 -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/select2/css/select2.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
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

        <style>
            .pagination {
                display: inline-block;
                padding-left: 0;
                margin: 20px 0;
                border-radius: 4px;
            }
            .pagination > li {
                display: inline;
            }
            .pagination > li > a,
            .pagination > li > span {
                position: relative;
                float: left;
                padding: 6px 12px;
                margin-left: -1px;
                line-height: 1.42857143;
                color: #428bca;
                text-decoration: none;
                background-color: #fff;
                border: 1px solid #ddd;
            }
            .pagination > li:first-child > a,
            .pagination > li:first-child > span {
                margin-left: 0;
                border-top-left-radius: 4px;
                border-bottom-left-radius: 4px;
            }
            .pagination > li:last-child > a,
            .pagination > li:last-child > span {
                border-top-right-radius: 4px;
                border-bottom-right-radius: 4px;
            }
            .pagination > li > a:hover,
            .pagination > li > span:hover,
            .pagination > li > a:focus,
            .pagination > li > span:focus {
                color: #2a6496;
                background-color: #eee;
                border-color: #ddd;
            }
            .pagination > .active > a,
            .pagination > .active > span,
            .pagination > .active > a:hover,
            .pagination > .active > span:hover,
            .pagination > .active > a:focus,
            .pagination > .active > span:focus {
                z-index: 2;
                color: #fff;
                cursor: default;
                background-color: #428bca;
                border-color: #428bca;
            }
            .pagination > .disabled > span,
            .pagination > .disabled > span:hover,
            .pagination > .disabled > span:focus,
            .pagination > .disabled > a,
            .pagination > .disabled > a:hover,
            .pagination > .disabled > a:focus {
                color: #999;
                cursor: not-allowed;
                background-color: #fff;
                border-color: #ddd;
            }
            .pagination-lg > li > a,
            .pagination-lg > li > span {
                padding: 10px 16px;
                font-size: 18px;
            }
            .pagination-lg > li:first-child > a,
            .pagination-lg > li:first-child > span {
                border-top-left-radius: 6px;
                border-bottom-left-radius: 6px;
            }
            .pagination-lg > li:last-child > a,
            .pagination-lg > li:last-child > span {
                border-top-right-radius: 6px;
                border-bottom-right-radius: 6px;
            }
            .pagination-sm > li > a,
            .pagination-sm > li > span {
                padding: 5px 10px;
                font-size: 12px;
            }
            .pagination-sm > li:first-child > a,
            .pagination-sm > li:first-child > span {
                border-top-left-radius: 3px;
                border-bottom-left-radius: 3px;
            }
            .pagination-sm > li:last-child > a,
            .pagination-sm > li:last-child > span {
                border-top-right-radius: 3px;
                border-bottom-right-radius: 3px;
            }
        </style>

        <!-- jQuery -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
        <!-- Select2 -->
        <script src="<?php echo base_url(); ?>assets/adminlte/plugins/select2/js/select2.full.min.js"></script>

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

                            <!-- setup -->
                            <li class="nav-item has-treeview
                                <?php
                                switch ($this->uri->segment(1)) {
                                    case 'auth':
                                    case '_36_warganegara':
                                    case '_37_hubungan':
                                    case '_38_status':
                                    case '_39_pekerjaan':
                                    case '_40_pendidikan':
                                    case '_41_agama':
                                    case '_42_provinsi':
                                    case '_43_kabupaten':
                                    case '_44_kecamatan':
                                    case '_45_desa':
                                        echo 'menu-open';
                                        break;
                                    default:
                                        echo '';
                                }
                                ?>
                            ">
                                <a href="#" class="nav-link
                                    <?php
                                    switch ($this->uri->segment(1)) {
                                        case 'auth':
                                        case '_36_warganegara':
                                        case '_37_hubungan':
                                        case '_38_status':
                                        case '_39_pekerjaan':
                                        case '_40_pendidikan':
                                        case '_41_agama':
                                        case '_42_provinsi':
                                        case '_43_kabupaten':
                                        case '_44_kecamatan':
                                        case '_45_desa':
                                            echo 'active';
                                            break;
                                        default:
                                            echo '';
                                    }
                                    ?>
                                ">
                                    <i class="nav-icon fas fa-cog"></i>
                                    <p>
                                    SETUP
                                    <i class="right fas fa-angle-left"></i>
                                    </p>
                                </a>
                                <ul class="nav nav-treeview">
                                    <!-- agama -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>_41_agama" class="nav-link <?php echo $this->uri->segment(1) == '_41_agama' ? 'active' : ''; ?>">
                                            <i class="fas fa-pray nav-icon"></i>
                                            <p>Agama</p>
                                        </a>
                                    </li>
                                    <!-- pendidikan -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>_40_pendidikan" class="nav-link <?php echo $this->uri->segment(1) == '_40_pendidikan' ? 'active' : ''; ?>">
                                            <i class="fas fa-graduation-cap nav-icon"></i>
                                            <p>Pendidikan</p>
                                        </a>
                                    </li>
                                    <!-- pekerjaan -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>_39_pekerjaan" class="nav-link <?php echo $this->uri->segment(1) == '_39_pekerjaan' ? 'active' : ''; ?>">
                                            <i class="fas fa-briefcase nav-icon"></i>
                                            <p>Pekerjaan</p>
                                        </a>
                                    </li>
                                    <!-- status -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>_38_status" class="nav-link <?php echo $this->uri->segment(1) == '_38_status' ? 'active' : ''; ?>">
                                            <i class="fas fa-ring nav-icon"></i>
                                            <p>Status Perkawinan</p>
                                        </a>
                                    </li>
                                    <!-- hubungan -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>_37_hubungan" class="nav-link <?php echo $this->uri->segment(1) == '_37_hubungan' ? 'active' : ''; ?>">
                                            <i class="fas fa-users nav-icon"></i>
                                            <p>Hubungan Keluarga</p>
                                        </a>
                                    </li>
                                    <!-- warga negara -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>_36_warganegara" class="nav-link <?php echo $this->uri->segment(1) == '_36_warganegara' ? 'active' : ''; ?>">
                                            <i class="far fa-flag nav-icon"></i>
                                            <p>Kewarganegaraan</p>
                                        </a>
                                    </li>
                                    <!-- regional -->
                                    <li class="nav-item has-treeview
                                        <?php
                                        switch ($this->uri->segment(1)) {
                                            case '_42_provinsi':
                                            case '_43_kabupaten':
                                            case '_44_kecamatan':
                                            case '_45_desa':
                                                echo 'menu-open';
                                                break;
                                            default:
                                                echo '';
                                        }
                                        ?>
                                    ">
                                        <a href="#" class="nav-link
                                            <?php
                                            switch ($this->uri->segment(1)) {
                                                case '_42_provinsi':
                                                case '_43_kabupaten':
                                                case '_44_kecamatan':
                                                case '_45_desa':
                                                    echo 'active';
                                                    break;
                                                default:
                                                    echo '';
                                            }
                                            ?>
                                        ">
                                            <i class="fas fa-globe-asia nav-icon"></i>
                                            <p>Regional</p>
                                            <i class="right fas fa-angle-left"></i>
                                        </a>
                                        <ul class="nav nav-treeview">
                                            <!-- provinsi -->
                                            <li class="nav-item">
                                                <a href="<?php echo site_url(); ?>_42_provinsi" class="nav-link <?php echo $this->uri->segment(1) == '_42_provinsi' ? 'active' : ''; ?>">
                                                    <i class="fas fa-globe-asia nav-icon"></i>
                                                    <p>Provinsi</p>
                                                </a>
                                            </li>
                                            <!-- kabupaten -->
                                            <li class="nav-item">
                                                <a href="<?php echo site_url(); ?>_43_kabupaten" class="nav-link <?php echo $this->uri->segment(1) == '_43_kabupaten' ? 'active' : ''; ?>">
                                                    <i class="fas fa-globe-asia nav-icon"></i>
                                                    <p>Kabupaten</p>
                                                </a>
                                            </li>
                                            <!-- kecamatan -->
                                            <li class="nav-item">
                                                <a href="<?php echo site_url(); ?>_44_kecamatan" class="nav-link <?php echo $this->uri->segment(1) == '_44_kecamatan' ? 'active' : ''; ?>">
                                                    <i class="fas fa-globe-asia nav-icon"></i>
                                                    <p>Kecamatan</p>
                                                </a>
                                            </li>
                                            <!-- kelurahan -->
                                            <li class="nav-item">
                                                <a href="<?php echo site_url(); ?>_45_desa" class="nav-link <?php echo $this->uri->segment(1) == '_45_desa' ? 'active' : ''; ?>">
                                                    <i class="fas fa-globe-asia nav-icon"></i>
                                                    <p>Kelurahan</p>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- users -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>auth" class="nav-link <?php echo ($this->uri->segment(1) == 'auth' and $this->uri->total_segments() == 1) ? 'active' : ''; ?>">
                                            <i class="fas fa-user-cog nav-icon"></i>
                                            <p>Users</p>
                                        </a>
                                    </li>
                                    <!-- change password -->
                                    <li class="nav-item">
                                        <a href="<?php echo site_url(); ?>auth/change_password/<?php echo $this->session->userdata('user_id'); ?>" class="nav-link <?php echo $this->uri->segment(2) == 'change_password' ? 'active' : ''; ?>">
                                            <i class="fas fa-key nav-icon"></i>
                                            <p>Change Password</p>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <!-- penduduk -->
                            <li class="nav-item">
                                <a href="<?php echo site_url(); ?>_06_penduduk" class="nav-link">
                                    <i class="far fa-address-book nav-icon"></i>
                                    <p>
                                    PENDUDUK
                                    </p>
                                </a>
                            </li>
                            <!-- kartu keluarga -->
                            <li class="nav-item">
                                <a href="<?php echo site_url(); ?>_07_kk" class="nav-link">
                                    <i class="far fa-address-card nav-icon"></i>
                                    <p>
                                    KARTU KELUARGA
                                    </p>
                                </a>
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
        <!-- <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery/jquery.min.js"></script> -->

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
