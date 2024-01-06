
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>data | Log in (v2)</title>

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
                <a href="<?php echo site_url('home/forget') ?>" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">Sign in to start your session</p>

                <form action="../../index3.html" method="post">
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control" placeholder="Password" id="pass-id" maxlength="30"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-eye" id="icon-pass"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>


                <p class="mb-1">
                    <a href="<?php echo site_url('home/forget') ?>">I forgot my password</a>
                </p>
                <p class="mb-0">
                    <a href="register.html" class="text-center">Register a new membership</a>
                </p>
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </div>
    <!-- /.login-box -->

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