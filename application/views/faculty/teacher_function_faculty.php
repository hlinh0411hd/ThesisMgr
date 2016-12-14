
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Giảng viên</h3>
            <div class="pull-right"><button  onclick="load('main','TeacherFunctionFaculty/updateTeacher')" type="button" class="btn btn-primary btn-xs">Cập nhật danh sách</button></div>
        </div>
        <div class="panel-body">


        <!--  -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title" id="myModalLabel">Tên Giảng Viên</h4>
              </div>
              <div class="modal-body">
                <div class="col-sm-7">
                    <table class="table table-striped">
                        <tr class="row">
                            <td class="col-sm-3"><label class="control-label">Họ và tên:</label></td>
                            <td class="col-sm-9"></td>
                        </tr>
                        <tr class="row">
                            <td class="col-sm-3"><label class="control-label">Khoa:</label></td>
                            <td class="col-sm-9"></td>
                        </tr>
                        <tr class="row">
                            <td class="col-sm-3"><label class="control-label">Bộ môn:</label></td>
                            <td class="col-sm-9"></td>
                        </tr>
                        <tr class="row">
                            <td class="col-sm-3"><label class="control-label">Phòng Lab:</label></td>
                            <td class="col-sm-9"></td>
                        </tr>
                        
                        <tr class="row">
                            <td class="col-sm-3"><label class="control-label">Email:</label></td>
                            <td class="col-sm-9"></td>
                        </tr>
                        <tr class="row">
                            <td class="col-sm-3"><label class="control-label">Số điện thoại:</label></td>
                            <td class="col-sm-9"></td>
                        </tr>
                        <tr class="row">
                            <td class="col-sm-3"><label class="control-label">Thông tin:</label></td>
                            <td class="col-sm-9"></td>
                        </tr>
                    </table>    
                </div>
                <div class="col-sm-5" style="border-left: 1px solid #dfdfdf; min-height: 350px;">
                    <center> 
                        <div class="ratio img-responsive img-circle" style="background-image: url(); width: 270px; height: 270px; border: 1px solid #34495E"></div>
                    </center>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
        <!--  -->


            <table id="myTable" class="table table-striped table-bordered" style="font-size: 14px;">
                <thead>
                <tr>
                    <th class="col-md-1">Mã GV</th>
                    <th class="col-md-3">Tên Giảng Viên</th>
                    <th class="col-md-3">Bộ môn</th>
                    <th class="col-md-4">Phòng thí nghiệm</th>
                    <th class="col-md-1">Chi tiết</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><center><?php echo $sz_User->teacherId;?></center></td>
                        <td><?php echo $sz_User->teacherName;?></td>
                        <td><?php echo $sz_User->departmentName;?></td>
                        <td><?php echo $sz_User->laboratoryName;?></td>
                        <td><center><?php echo '<a data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-list-alt"></span></a>';?></center></td>
                    </tr>
                <?php }?>
                </tbody>

            </table>
        </div>
    </div>

