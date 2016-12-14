<div class="panel panel-default">
	<div class="panel-heading">
		<h3 class="panel-title">Thêm Sinh Viên</h3>
	</div>
	<div class="panel-body">
		<div class="col-sm-8">
<!--			<form onsubmit="searchStudent();return false;" action="#" id="thesisAllowed">-->
<!--				<div class="form-group">-->
<!--					<input type="text" class="form-control" name="info" id="info">-->
<!--                </div>-->
<!--                <div class="form-group">-->
<!--                    <select name="type" id="type">-->
<!--                        <option value="all">Tất cả</option>-->
<!--                        <option value="studentId">Mã sinh viên</option>-->
<!--                        <option value="studentName">Tên sinh viên</option>-->
<!--                    </select>-->
<!--                </div>-->
<!--				<div class="form-group">-->
<!--					<button type="submit" class="btn btn-primary pull-right">Tìm kiếm</button>-->
<!--				</div>-->
<!--			</form>-->
<!--            <div id="resultSearch">-->
<!---->
<!--            </div>-->
            <table id="myTable" class="table table-striped table-bordered" style="font-size: 14px;">
                <thead>
                <tr>
                    <th class="col-md-2">Mã Sinh Viên</th>
                    <th class="col-md-3">Tên Sinh Viên</th>
                    <th class="col-md-3">Khóa Học</th>
                    <th class="col-md-2">Được đăng ký</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User['studentId'];?></td>
                        <td><?php echo $sz_User['studentName'];?></td>
                        <td><?php echo $sz_User['studentClass'];?></td>
                        <td><input id='checkAllow<?php echo $sz_User['studentId'];?>' type="checkbox" <?= $sz_User['thesisAllowed']==1? "checked":"" ?>
                                   onchange="allowStudent(<?= $sz_User['studentId'];?>)" ></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
		<div class="col-sm-2" style="border-left: 1px solid #dfdfdf; height: 430px;">
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