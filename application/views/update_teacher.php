<div class="col-sm-6" style="border-right:1px solid black">
<p>Thêm giảng viên</p>
<form action="TeacherFunctionFaculty/singleupload">
<div class="form-group">
	<label>Họ và tên</label>
	<input type="text" class="form-control" name="name" id="name">
</div>
<div class="form-group">
	<label>Mã giảng viên</label>
	<input type="text" class="form-control" name="id" id="id">
</div>
<div class="form-group">
	<label>Email</label>
	<input type="email" class="form-control" name="email" id="email">
</div>
<div class="form-group">
	<label>Khoa</label>
	<input type="text" class="form-control" name="faculty" id="faculty">
</div>
<div class="form-group">
	<button class="btn">Thêm</button>
</div>
</form>
</div>
<div class="col-sm-6">
	<form action="TeacherFunctionFaculty/multiupload" method="post" enctype="multipart/form-data">
    <p>Thêm qua file excel:</p>
	<div class="form-group">
		<input type="file" name="fileToUpload" id="fileToUpload">
	</div>
	<div class="form-group">
		<input type="submit" value="Upload" name="submit">
	</div>
	</form>
</div>