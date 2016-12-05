<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/5/2016
 * Time: 7:38 AM
 */
?>
<table id="councilTable" class="table">
    <tr>
        <td class="col-sm-4">Giảng viên</td>
        <td class="col-sm-2">Chức vụ</td>
        <td class="col-sm-4">Ghi chú</td>
        <td class="col-sm-2">Khác</td>
    </tr>
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
            <td><button class="btn">Xóa</button></td>
        </tr>
    <?php }?>
</table>
<button onclick="addCouncilRow()" class="btn">Thêm</button>