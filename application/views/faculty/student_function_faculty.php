
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Sinh viên</h3>
            <div class="pull-right">
                <button  onclick="load('main','StudentFunctionFaculty/updateStudent')" type="button" class="btn btn-primary btn-xs">Cập nhật danh sách</button>
                <button  onclick="load('main','StudentFunctionFaculty/updateThesisAllowed')" type="button" class="btn btn-primary btn-xs">Cập nhật danh sách được đăng ký</button>
            </div>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered" style="font-size: 14px;">
                <thead>
                <tr>
                    <th class="col-md-2">Mã Sinh Viên</th>
                    <th class="col-md-3">Tên Sinh Viên</th>
                    <th class="col-md-3">Khóa Học</th>
                    <th class="col-md-2">Chi tiết</th>
                    <th class="col-md-2">Được đăng ký</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User->studentId;?></td>
                        <td><?php echo $sz_User->studentName;?></td>
                        <td><?php echo $sz_User->studentClass;?></td>
                        <td><?php echo '<a href="#"><span style="color: blue;" class="glyphicon glyphicon-list-alt"></span></a>';?></td>
                        <td><input type="checkbox" <?= $sz_User->thesisAllowed==1? "checked":"" ?> disabled></td>
                    </tr>
                <?php }?>
                </tbody>

            </table>
        </div>

    </div>
