<!--
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:13 AM
-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <!-- iCheck -->
    <link rel="stylesheet" href="assets/iCheck/square/blue.css">
    <script src="assets/iCheck/icheck.min.js"></script>
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type='text/css' href="public/css/style.css">
    <link rel="stylesheet" type='text/css' href="public/css/uet.css">
    <link rel="stylesheet" type='text/css' href="public/css/AdminLTE.min.css">
</head>
<div id="top">
    <div class="container">
        <div class="logo col-sm-6">
            <a class="pull-left" href="./mainpage">
                <img class="media-object " src="public/img/Logo_UET.jpg" alt="LoGo">
            </a>
            <h2><b>HỆ THỐNG KHÓA LUẬN </b></h2>
            <p><b>Trường Đại học Công Nghệ - Đại học Quốc gia Hà Nội</b></p>
        </div>
        <div class="col-sm-6">
            <div class="dangNhap pull-right">
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-right:23px"><span>Đăng nhập</span></a>
                <div class="hold-transition dropdown-menu"  style="margin: 0;padding-bottom: 0;padding-top: 0;margin-right:-98px">
                    <div id="login-form" class="login-box panel panel-primary" style="margin: 0;">
                        <p class="login-box-msg panel-heading" style="font-size: large;padding-top:15px">Đăng nhập</p>
                        <div class="login-box-body" style="margin: 0; border-radius: 4px">
                            <form class="panel-body" action="#" method="post">
                                <div class="form-group has-feedback">
                                    <input type="email" class="form-control" placeholder="Email">
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input type="password" class="form-control" placeholder="Password">
                                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                                </div>
                                <div class="row">
                                    <div class="col-xs-8">
                                        <div class="checkbox icheck">
                                            <label>
                                                <input type="checkbox"> Remember Me
                                            </label>
                                        </div>
                                    </div>
                                    <!-- /.col -->
                                    <div class="col-xs-4">
                                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                                    </div>
                                    <!-- /.col -->
                                </div>
                            </form>

                            <a href="#">I forgot my password</a><br>

                        </div>
                        <!-- /.login-box-body -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End TOP -->
</html>