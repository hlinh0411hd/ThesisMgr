<div class="center">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Giảng viên</h3>
            <div class="pull-right"><button  onclick="load('main','TeacherFunctionFaculty/updateTeacher')" type="button" class="btn btn-primary btn-xs">Cập nhật danh sách</button></div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="col-md-2">Mã Giảng Viên</th>
                    <th class="col-md-4">Tên Giảng Viên</th>
                    <th class="col-md-4">Bộ môn và Phòng thí nghiệm</th>
                    <th class="col-md-2">Thông tin chi tiết</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User->teacherId;?></td>
                        <td><?php echo $sz_User->teacherName;?></td>
                        <td><?php echo $sz_User->departmentId;?></td>
                        <td><?php echo 'xxx';?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>

    </div>
    <div class="pull-right">
        <ul id="page_num" class="pagination pagination-sm">
        <?php echo $pagination;?>
        </ul>
    </div>
</div>