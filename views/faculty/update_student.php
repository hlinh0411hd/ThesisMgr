<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm Sinh Viên</h3>
	</div>
	<div class="panel-body">
		<div class="col-sm-6">
			<form action="StudentFunctionFaculty/singleupload">
				<div class="form-group">
					<label>Họ và tên</label>
					<input type="text" class="form-control" name="name" id="name">
				</div>
				<div class="form-group">
					<label>Mã sinh viên</label>
					<input type="text" class="form-control" name="id" id="id">
				</div>
				<div class="form-group">
					<label>Khoa</label>
					<input type="text" class="form-control" name="faculty" id="faculty">
				</div>
				<div class="form-group">
					<label>Lớp</label>
					<input type="text" class="form-control" name="class" id="class">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email" id="email">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary pull-right">Thêm</button>
				</div>
			</form>

		</div>
		<div class="col-sm-6" style="border-left: 1px solid #dfdfdf; height: 430px;">
			<form action="StudentFunctionFaculty/multiupload" method="post" enctype="multipart/form-data">
				<p>Thêm qua file excel:</p>
				<div class="form-group">
					<input type="file" name="fileToUpload" id="fileToUpload">
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Thêm</button>
				</div>
			</form>

		</div>
	</div>
</div>