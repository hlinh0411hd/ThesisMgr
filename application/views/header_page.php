
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
    <link rel="shortcut icon" href="public/img/bluemarine_favicon.ico" type="image/x-icon" />
    <title>Đại học Công Nghệ</title>
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
    <div class="container row">
        <div class="logo col-sm-6">
            <a class="pull-left" href="./mainpage">
                <img class="media-object " src="public/img/Logo_UET.jpg" alt="LoGo">
            </a>
            <h2><b>HỆ THỐNG KHÓA LUẬN </b></h2>
            <p><b>Trường Đại học Công Nghệ - Đại học Quốc gia Hà Nội</b></p>
        </div>
        <div class="col-sm-6">
            <div id="loginBox" class="dangNhap pull-right" style="margin-right: 48px;">
                <?php
                if (!isset($usernameSession)) echo '
                <a onclick="setTimeout(function(){load(\'login\',\'user/loginForm\')}, 100);" class="btn btn-primary " style="margin-right:23px"><span>Đăng nhập</span></a>
                <div id="login" style="z-index: 10000;position: absolute;left:49%">
                    
                </div>';
                else {

                    echo '<div class="btn-group">
                        <span class="dropdown-toggle" data-toggle="dropdown">';
                          echo '<span class="btn btn-primary ratio" style="background-image: url('.$userAvatarSession.'); border-radius: 50%; width:45px; height:45px;"></span>
                        </span>
                        <div class="panel panel-info dropdown-menu" style="border-radius:5px; left:-10px;">
                          <div class="panel-body" style="padding-bottom:10px;">
                            <a href="'; 
                          if ($userTypeSession == 3) echo 'student';
                    else if ($userTypeSession == 2) echo 'teacher';
                    else echo 'faculty';
                    echo '"><span class="glyphicon glyphicon-user"></span>Hồ sơ</a>
                          </div>
                          <div class="panel-footer"><a href="user/logout"><span class="glyphicon glyphicon-log-out"></span>Đăng xuất</a></div>
                        </div>    
                    </div>';
                   
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
                                <li><a onClick="clicked('#introduction');load('content','Mainpage/faculty/100')"><span>Khoa Công nghệ Thông tin</span></a></li>
                                <li><a onClick="clicked('#introduction');load('content','Mainpage/faculty/200')"><span>Khoa Điện tử Viễn thông</span></a></li>
                                <li><a onClick="clicked('#introduction');load('content','Mainpage/faculty/300')"><span>Khoa Vật lý Kỹ thuật và Công nghệ Nano</span></a></li>
                                <li><a onClick="clicked('#introduction');load('content','Mainpage/faculty/400')"><span>Khoa Cơ học Kỹ thuật và Tự động hóa</span></a></li>
                            </ul>
                        </li>
                        <li id="aaa"><a onClick="clicked(this);load('content','Mainpage/field')"><span>Lĩnh vực nghiên cứu</span></a></li>
                        <li><a onClick="clicked(this);load('content','Mainpage/thesis')"><span>Khóa luận</span></a></li>
                        <li><a onClick="clicked(this); <?php
                            if (!isset($userTypeSession) || $userTypeSession != 3) echo "";
                                else echo "load('content','User/signUpThesis');";
                            ?>"><span class="red"> <?php
                                    if (!isset($userTypeSession) || $userTypeSession != 3) echo "<del>Đăng ký đề tài</del>";
                                        else echo "Đăng ký đề tài";
                                    ?></span></a></li>
                        <li><a onClick="clicked(this);" href="#">Liên hệ</a></li>
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