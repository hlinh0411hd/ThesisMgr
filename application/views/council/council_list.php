<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/5/2016
 * Time: 7:38 AM
 */
?>

<div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Hội đồng bảo vệ</h3>
            <div class="pull-right"><button  onclick="exportThesisList()" type="button" class="btn btn-primary btn-xs">Xuất đề nghị hội đồng</button></div>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table">
                <thead>
                    <th class="col-sm-4">Giảng viên</th>
                    <th class="col-sm-2">Chức vụ</th>
                    <th class="col-sm-4">Ghi chú</th>
                    <th class="col-sm-2">Khác</th>
                </thead>
                <?php foreach ($list as $council) {?>
                    <tr>
                        <td><?= $council['teacherName'];?></td>
                        <td><?php
                            switch ($council['position']){
                                case 1: echo "Chủ tịch HĐ";break;
                                case 2: echo "Thư ký HĐ";break;
                                case 3: echo "Phản biện";break;
                                case 4: echo "Ủy viên";break;
                            }
                        ?></td>
                        <td><?= $council['note'];?></td>
                        <td><button onclick="deleteCouncil(<?= $council['councilId'];?>)" class="btn">Xóa</button></td>
                    </tr>
                <?php }?>
            </table>  
            <button onclick="addCouncilRow()" class="btn btn-primary">Thêm</button>
        </div>    
    </div>
