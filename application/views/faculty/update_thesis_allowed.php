<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm Sinh Viên</h3>
	</div>
	<div class="panel-body">
		<div class="col-sm-8">
			<form onsubmit="searchStudent();return false;" action="#" id="thesisAllowed">
				<div class="form-group">
					<input type="text" class="form-control" name="info" id="info">
                </div>
                <div class="form-group">
                    <select name="type" id="type">
                        <option value="all">Tất cả</option>
                        <option value="studentId">Mã sinh viên</option>
                        <option value="studentName">Tên sinh viên</option>
                    </select>
                </div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary pull-right">Tìm kiếm</button>
				</div>
			</form>
            <div id="resultSearch">

            </div>
		</div>
		<div class="col-sm-4" style="border-left: 1px solid #dfdfdf; height: 430px;">
			<form action="StudentFunctionFaculty/multiThesisAllowed" method="post" enctype="multipart/form-data">
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