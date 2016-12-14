<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/14/2016
 * Time: 11:30 AM
 */
?>


<div class="panel panel-default">
    <div class="panel-heading">
        <h3 class="panel-title"><?= $fieldName?></h3>
    </div>
    <div class="panel-body">
        <?= $description?>
        <h4>Danh sách giảng viên</h4>
        <table id="myTable" class="table table-striped table-bordered" style="font-size: 14px;">
            <thead>
            <tr>
                <th class="col-md-1">Mã GV</th>
                <th class="col-md-3">Tên Giảng Viên</th>
                <th class="col-md-8">Đề tài</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($teacherList as $i_key => $sz_User) {?>
                <tr>
                    <td><center><?php echo $sz_User['teacherId'];?></center></td>
                    <td><?php echo $sz_User['teacherName'];?></td>
                    <td><?php echo $sz_User['researchDirectionName'];?></td>
                </tr>
            <?php }?>
            </tbody>

        </table>
    </div>
</div>

