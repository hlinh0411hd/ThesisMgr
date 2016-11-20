<div class="center">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Sinh viên</h3>
            <div class="pull-right"><button  onclick="load('main','StudentFunctionFaculty/updateStudent')" type="button" class="btn btn-primary btn-xs">Cập nhật danh sách</button></div>
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="col-md-2">Mã Sinh Viên</th>
                    <th class="col-md-3">Tên Sinh Viên</th>
                    <th class="col-md-3">Khóa Học</th>
                    <th class="col-md-2">Chi tiết</th>
                    <th class="col-md-2">ĐK đăng kí</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User->studentId;?></td>
                        <td><?php echo $sz_User->studentName;?></td>
                        <td><?php echo $sz_User->studentClass;?></td>
                        <td><?php echo 'xxx';?></td>
                        <td>có</td>
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