<div  class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm Giảng Viên</h3>
	</div>
	<div class="panel-body">
		<div class="col-sm-6">
			<form action="TeacherFunctionFaculty/singleupload" role="form">
				<div class="form-group">
					<label for="id">Mã Giảng Viên</label>
					<input type="text" class="form-control" id="id" name="id">
				</div>
				<div class="form-group">
					<label for="name">Tên Giảng Viên</label>
					<input type="text" class="form-control" id="name" name="name">
				</div>
				<div class="form-group">
					<label for="email">Địa Chỉ Email</label>
					<input type="email" class="form-control" id="email" name="mail">
				</div>
				<div class="form-group">
					<label for="faculty">Tên Khoa</label>
					<input type="text" class="form-control" id="faculty" name="faculty">
				</div>
				<button type="submit" class="btn btn-primary pull-right">Thêm</button>
			</form>

		</div>
		<div class="col-sm-6" style="border-left: 1px solid #dfdfdf; height: 430px;">
			<form action="TeacherFunctionFaculty/multiupload" method="post" enctype="multipart/form-data">
				<div class="form-group">
					<label for="fileToUpload">File input</label>
					<input type="file" id="fileToUpload" name="fileToUpload">
				</div>
				<button type="submit" class="btn btn-primary">Thêm</button>
			</form>

		</div>
	</div>
</div>