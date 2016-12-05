<html>
<body>
<div id="content" class="center row">
	<div class="container">
        <div class="col-sm-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><span><?=$usernameSession?></span></div>
                <div class="panel-body">
                    <ul class="menu-sidebar list-group">
                        <li class="list-group-item"><a onclick="load('main','pagination?page=teacher')">Giáo viên</a></li>
                        <li class="list-group-item"><a onclick="load('main','pagination?page=student')">Sinh viên</a></li>
                        <li class="list-group-item"><a onclick="load('main','TeacherFunctionFaculty')">Chương trình đào tạo</a></li>
                        <li class="list-group-item"><a onclick="load('main','pagination?page=thesis')">Khóa luận</a></li>
                        <li class="list-group-item"><a onclick="load('main','pagination?page=request')">Danh sách yêu cầu</a></li>
                        <li class="list-group-item"><a onclick="load('main','pagination?page=council')">Hội đồng bảo vệ</a></li>
                    </ul>
                </div>
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