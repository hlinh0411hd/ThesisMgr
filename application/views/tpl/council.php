<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/5/2016
 * Time: 7:24 AM
 */
?>
<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/3/2016
 * Time: 3:00 PM
 */
?>
<div class="center">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Khóa luận</h3>
            <div class="pull-right"><button  onclick="load('main','Council')" type="button" class="btn btn-primary btn-xs">Chỉnh sửa</button></div>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="col-md-1">Giảng viên</th>
                    <th class="col-md-1">Chức danh</th>
                    <th class="col-md-1">Ghi chú</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User->teacherId;?></td>
                        <td><?php echo $sz_User->position;?></td>
                        <td><?php echo $sz_User->note;?></td>

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
