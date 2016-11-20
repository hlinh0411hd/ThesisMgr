<html>
<body>
<div id="content" class="row">
	<div id="center">
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading"><span>Khoa Công nghệ Thông tin</span></div>
                <div class="panel-body">
                    <ul class="menu-sidebar list-group">
                        <li class="list-group-item"><a onclick="load('main','pagination?page=teacher')">Giáo viên</a></li>
                        <li class="list-group-item"><a onclick="load('main','pagination?page=student')">Sinh viên</a></li>
                        <li class="list-group-item"><a onclick="load('main','TeacherFunctionFaculty')">Chương trình đào tạo</a></li>
                        <li class="list-group-item"><a onclick="load('main','TeacherFunctionFaculty')">Khóa luận</a></li>
                    </ul>
                </div>
            </div>
        </div>
		<div id="main" class="col-sm-9">
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