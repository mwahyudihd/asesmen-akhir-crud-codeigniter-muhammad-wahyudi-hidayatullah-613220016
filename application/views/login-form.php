
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DeptWriter | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') ?>">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/dist/css/adminlte.min.css') ?>">

    <style>
        .card-log {
            background-color: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(15px);
        }

        #icon-pass {
            cursor: pointer;
        }
    </style>
</head>

<body class="hold-transition login-page bg-dark">
    <div class="login-box">
        <!-- /.login-logo -->
        <div class="card card-outline card-primary card-log">
            <div class="card-header text-center">
                <a href="<?php echo site_url('C_index/forget') ?>" class="h1"><b>Dept</b>Writer</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>
                <?php if ($this->session->flashdata('salah')): ?>
                    <div class="alert alert-danger" role="alert">
                        <a href="."><i class="fas fa-times-circle"></i></a>
                        Username atau Password Salah!
                    </div>
                <?php endif ?>

                <?php if ($this->session->flashdata('success')): ?>
                    <div class="alert alert-info" role="alert">
                        <a href="."><i class="fas fa-times-circle"></i></a>
                        Akun Berhasil dibuat! Silahkan Login...
                    </div>
                <?php endif ?>

                <form action="<?php echo site_url('C_index/process_login') ?>" method="post">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder="username" name="username" required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="pass-id" maxlength="30"name="password"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-eye" id="icon-pass"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <p class="mb-0">
                                <a href="<?= site_url('C_index/register') ?>" class="text-center text-white">Register a new membership</a>
                            </p>                            
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->
    <?php if ($this->session->flashdata('message')): ?>
        <script>
            alert('Harap login terlebih dahulu!');
        </script>
    <?php endif; ?>

    <!-- jQuery -->
    <script src="<?php echo base_url('assets/plugins/jquery/jquery.min.js') ?>"></script>
    <!-- Bootstrap 4 -->
    <script src="<?php echo base_url('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') ?>"></script>
    <!-- AdminLTE App -->
    <script src="<?php echo base_url('assets/dist/js/adminlte.min.js') ?>"></script>
    <script>
        const inputPass = document.getElementById("pass-id");
        const eyePass = document.getElementById("icon-pass");

        eyePass.addEventListener("click", function () {
            if (eyePass.classList.contains("fa-eye")) {
                inputPass.type = "text";
                eyePass.classList.add("fa-eye-slash");
                eyePass.classList.remove("fa-eye");
            } else {
                inputPass.type = "password";
                eyePass.classList.remove("fa-eye-slash");
                eyePass.classList.add("fa-eye");
            }
        });


    </script>
</body>

</html>