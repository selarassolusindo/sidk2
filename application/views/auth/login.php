<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <title>AdminLTE 3 | Log in</title> -->
        <title><?php echo SITE_NAME; ?></title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/fontawesome-free/css/all.min.css">
        <!-- Ionicons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- icheck bootstrap -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>assets/adminlte/dist/css/adminlte.min.css">
        <!-- Google Font: Source Sans Pro -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    </head>

    <body class="hold-transition login-page text-sm">
        <div class="login-box">
            <div class="login-logo">
                <a href="#">si<b>DK</b></a>
            </div>
            <!-- /.login-logo -->

            <div class="card">
                <div class="card-body login-card-body">
                    <!-- <p class="login-box-msg">Sign in to start your session</p> -->
                    <!-- <h4><?php echo lang('login_heading');?></h4> -->
                    <p><?php echo lang('login_subheading');?></p>
                    <div id="infoMessage"><?php echo $message;?></div>

                    <!-- <form action="<?php echo base_url(); ?>assets/adminlte/index3.html" method="post"> -->
                    <?php echo form_open("auth/login");?>
                        <!-- <p>
                          <?php echo lang('login_identity_label', 'identity');?>
                          <?php echo form_input($identity);?>
                        </p> -->

                        <!-- <p>
                          <?php echo lang('login_password_label', 'password');?>
                          <?php echo form_input($password);?>
                        </p> -->
                        <div class="input-group mb-3">
                            <!-- <input type="email" class="form-control" placeholder="Email"> -->
                            <?php echo form_input($identity, '', array('class'=>'form-control'));?>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-envelope"></span>
                                </div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <!-- <input type="password" class="form-control" placeholder="Password"> -->
                            <?php echo form_input($password, '', array('class'=>'form-control'));?>
                            <div class="input-group-append">
                                <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!-- <div class="col-8">
                                <div class="icheck-primary">
                                    <input type="checkbox" id="remember">
                                    <label for="remember">
                                        Remember Me
                                    </label>
                                </div>
                            </div> -->
                            <!-- /.col -->
                            <div class="col">
                                <button type="submit" class="btn btn-primary">Sign In</button>
                                <a href="<?php echo site_url(); ?>" type="button" class="btn btn-secondary">Cancel</a>
                            </div>
                            <!-- /.col -->
                        </div>
                    <!-- </form> -->
                    <?php echo form_close();?>

                    <!-- <div class="social-auth-links text-center mb-3">
                        <p>- OR -</p>
                        <a href="#" class="btn btn-block btn-primary">
                            <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                        </a>
                        <a href="#" class="btn btn-block btn-danger">
                            <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                        </a>
                    </div> -->
                    <!-- /.social-auth-links -->

                    <!-- <p class="mb-1">
                        <a href="forgot-password.html">I forgot my password</a>
                    </p> -->
                    <!-- <p class="mb-0">
                        <a href="register.html" class="text-center">Register a new membership</a>
                    </p> -->
                </div>
                <!-- /.login-card-body -->

            </div>

        </div>
        <!-- /.login-box -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url(); ?>assets/adminlte/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url(); ?>assets/adminlte/dist/js/adminlte.min.js"></script>

    <script>
        $(function () {
            $('.btn').addClass('btn-sm')
            $('.table').addClass('table-sm')
            $('.form-control').addClass('form-control-sm')
        })
    </script>

    </body>

</html>
