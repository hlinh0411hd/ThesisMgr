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
    <link rel="stylesheet" type='text/css' href="public/css/style.css">
    <link rel="stylesheet" type='text/css' href="public/css/uet.css">
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
                <span>Nguyễn Thanh Bình</span>
                <img src="public/img/avt.jpg" alt="" class="img-circle">
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
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/100')">Khoa Công nghệ Thông tin</a></li>
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/200')">Khoa Điện tử Viễn thông</a></li>
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/300')">Khoa Vật lý Kỹ thuật và Công nghệ Nano</a></li>
                                <li><a onclick="clicked('#introduction');load('content','Mainpage/faculty/400')">Khoa Cơ học Kỹ thuật và Tự động hóa</a></li>
                            </ul>
                        </li>
                        <li id="aaa"><a onclick="clicked(this);load('content','Mainpage/field')">Lĩnh vực nghiên cứu</a></li>
                        <li><a onclick="clicked(this);" href="#">Khóa luận</a></li>
                        <li><a onclick="clicked(this);" href="#"><span class="red">Đăng kí đề tài</span></a></li>
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