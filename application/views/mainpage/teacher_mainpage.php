<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/16/2016
 * Time: 10:13 PM
 */
?>
<div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Thông tin Giảng viên</h3>
        </div>
        <div class="panel-body">

            <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                            <h4 class="modal-title" id="myModalLabel">Tên Giảng Viên</h4>
                        </div>
                        <div id="model-body" class="modal-body">

                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>

            <table id="myTable" class="table table-striped table-bordered" style="font-size: 15;">
                <thead>
                <tr>
                    <th class="col-md-3">Họ và tên</th>
                    <th class="col-md-4">Email</th>
                    <th class="col-md-3">Số điện thoại</th>
                    <th class="col-md-2">Chi tiết</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($data as $teacher) {?>
                    <tr>
                        <td><?php echo $teacher['teacherName'];?></td>
                        <td><?php echo $teacher['teacherMail'];?></td>
                        <td><?php echo $teacher['teacherPhone'];?></td>
                        <td><?php echo '<a onclick="load(\'model-body\',\'index/modalteacher/'.$teacher['teacherId'].'\')"  data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-list-alt"></span></a>';?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>

    </div>

