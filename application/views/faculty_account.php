<html>
<body class="container-fluid">
<div id="content">
	<div id="center">
		<ul class="list-group col-sm-2">
			<li class="list-group-item">Khoa Công nghệ thông tin</li>
			<li class="list-group-item"><a onclick="load('main','TeacherFunctionFaculty')">Giáo viên</a></li>
			<li class="list-group-item"><a onclick="load('main','StudentFunctionFaculty')">Sinh viên</a></li>
			<li class="list-group-item"><a onclick="load('main','TeacherFunctionFaculty')">Chương trình đào tạo</a></li>
			<li class="list-group-item"><a onclick="load('main','TeacherFunctionFaculty')">Khóa luận</a></li>
		</ul>
		<div id="main" class="col-sm-10">
		</div>
	</div>
</div>
</body>
	<script>
		$(document).ready( function(){
			load('main','TeacherFunctionFaculty');
		});
	</script>
</html>