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
    <link rel="stylesheet" href="assets/DataTables/datatables.css">
    <script src="assets/iCheck/icheck.min.js"></script>
    <script src="assets/DataTables/datatables.js"></script>
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
                <?php
                if (!isset($usernameSession)) echo '
                <a class="btn btn-primary dropdown-toggle" data-toggle="dropdown" style="margin-right:23px"><span>Đăng nhập</span></a>
                <div class="hold-transition dropdown-menu"  style="margin: 0;padding-bottom: 0;padding-top: 0;margin-right:-98px">
                    <div id="login-form" class="login-box panel panel-primary" style="margin: 0;">
                        <p class="login-box-msg panel-heading" style="font-size: large;padding-top:15px">Đăng nhập</p>
                        <div class="login-box-body" style="margin: 0; border-radius: 4px">
                            <form id="login_form" class="panel-body" action="#" method="post">
                                <div class="form-group has-feedback">
                                    <input id="username" name="username" type="text" class="form-control" placeholder="Tên đăng nhập">
                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                </div>
                                <div class="form-group has-feedback">
                                    <input id="password" name="password" type="password" class="form-control" placeholder="Password">
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
                </div>';
                else {
                    echo '<a href="';
                    if ($userTypeSession == 3) echo 'student';
                    else if ($userTypeSession == 2) echo 'teacher';
                    else echo 'faculty';
                    echo '">' . $usernameSession . '</a>
                    <a href="user/logout">Đăng xuất</a>';
                }?>
            </div>
        </div>
    </div>
</div>
<div id="mainMenu">
    <nav class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="./mainpage">Trang chủ</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse navbar-ex1-collapse">
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a id="introduction" href="#" class="dropdown-toggle" data-toggle="dropdown">Giới thiệu <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/100')"><span>Khoa Công nghệ Thông tin</span></a></li>
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/200')"><span>Khoa Điện tử Viễn thông</span></a></li>
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/300')"><span>Khoa Vật lý Kỹ thuật và Công nghệ Nano</span></a></li>
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/400')"><span>Khoa Cơ học Kỹ thuật và Tự động hóa</span></a></li>
                            </ul>
                        </li>
                        <li id="aaa"><a onclick="clicked(this);load('content','Mainpage/field')"><span>Lĩnh vực nghiên cứu</span></a></li>
                        <li><a onclick="clicked(this);" href="#"><span>Khóa luận</span></a></li>
                        <li><a onclick="clicked(this); <?php
                            if (!isset($userTypeSession) || $userTypeSession != 3) echo "";
                                else echo "load('content','User/signUpThesis');";
                            ?>"><span class="red"> <?php
                                    if (!isset($userTypeSession) || $userTypeSession != 3) echo "<del>Đăng ký đề tài</del>";
                                        else echo "Đăng ký đề tài";
                                    ?></span></a></li>
                        <li><a onclick="clicked(this);" href="#">Liên hệ</a></li>
                    </ul>
                    <form class="navbar-form navbar-right" role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Tìm kiếm..."> 
                        </div>
                    </form>
                </div><!-- /.navbar-collapse -->
            </div>
        </div>
    </nav>
</div>
<!-- End TOP -->
</html>