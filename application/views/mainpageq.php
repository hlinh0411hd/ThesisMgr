<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang Chủ</title>
    <link href="public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type='text/css' href="public/css/uet.css">
   
</head>
<body>
    <div id="gioiThieu" class="center">
        <div class="container">
            <div class="col-sm-4">
                <div class="panel panel-primary">
                    <div class="panel-heading">Khoa Công nghệ Thông tin</div>
                    <div class="panel-body">
                        <ul class="menu-sidebar list-group">
                            <li class="list-group-item"><a href=""><span>Ban chủ nhiệm</span></a></li>
                            <li id="bmptn" class="list-group-item"> <a href=""><span>Bộ môn và phòng thí nghiệm</span></a>
                                <ul>
                                      <li class="list-group-item"><a href=""><span>Các bộ môn</span></a></li>
                                      <li class="list-group-item"><a href=""><span>Các phòng thí nghiệm</span></a></li>
                                </ul>
                            </li>
                            <li class="list-group-item"><a href="">Giảng viên</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="public/js/jquery.js"></script>
    <script src="public/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#bmptn a').click(function(){
              var $ul = $(this).next();
              if($ul.hasClass('submenu')){
                  $ul.removeClass('submenu');
              }
              else{
                  $ul.addClass('submenu');
              }
              return false;
            });
        });
    </script>
</body>
</html>