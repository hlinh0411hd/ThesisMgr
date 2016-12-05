<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/5/2016
 * Time: 8:18 AM
 */
$num = rand(1, 100000);
?>
<tr id='form<?= $num;?>'>
    <td onfocusout="setTimeout(load('teacherList','index'),500)">
        <input type="text" class="form-control" onkeyup="showHint('teacher','teacher')" name="teacher" id="teacher">
        <ul id="teacherList" class="list-group">

        </ul>
    </td>
    <input type="hidden" class="form-control" name="teacherId" id="teacherId">
    <td>
        <select id="position" class="form-control">
            <option value="1">Chủ tịch HĐ</option>
            <option value="2">Thư ký HĐ</option>
            <option value="3">Phản biện</option>
            <option value="4">Ủy viên</option>
        </select>
    </td>
    <td><input class="form-control" type="text" name="note" id="note"></td>
    <td><button type="button" onclick="addCouncil('form<?= $num;?>');" class="btn">Lưu</button><button type="button" class="btn">Hủy</button></td>
</tr>