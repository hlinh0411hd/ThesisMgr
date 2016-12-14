<html>
<body>
<div id="content" class="center row">
	<div class="container">
        <div class="col-sm-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><?=$usernameSession?></div>
                
                    <ul class="menu-sidebar list-group">
                        <li class="list-group-item"><a onclick="load('main','pagination?page=teacher')"><span>Giáo viên</span></a></li>
                        <li class="list-group-item"><a onclick="load('main','pagination?page=student')"><span>Sinh viên</span></a></li>
                        <li class="list-group-item"><a onclick="load('main','faculty/thesisRegister')"><span>Đăng ký khóa luận</span></a></li>
                        <li class="list-group-item"><a onclick="load('main','pagination?page=thesis')"><span>Khóa luận</span></a></li>
                        <li class="list-group-item"><a onclick="load('main','request')"><span>Danh sách yêu cầu</span></a></li>
                        <li class="list-group-item"><a onclick="load('main','council')"><span>Hội đồng bảo vệ</span></a></li>
                    </ul>
                
            </div>
        </div>
        <div class="box-right col-sm-10">
            <div id="main"></div>
        </div>
     </div>
</div>
</body>
	<script>
		$(document).ready( function(){
			load('main','Pagination?page=teacher');
		});
	</script>
</html>