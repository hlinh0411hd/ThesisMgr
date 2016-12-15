<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/7/2016
 * Time: 3:30 PM
 */
$num = rand(1, 100000);
?>
<div id='form<?= $num;?>' class="col-sm-12">
    <div class="col-sm-8" onfocusout="setTimeout(function(){load('teacherList','index');},100)">
        <input type="text" class="form-control" onkeyup="showHint('teacher','council')" name="teacher" id="teacher">
        <ul id="teacherList" class="list-group">

        </ul>
    </div>
    <input type="hidden" class="form-control" name="teacherId" id="teacherId">
    <div class="col-sm-4"><button type="button" onclick="addReviewer('form<?= $num;?>');" class="btn btn-success">Lưu</button><button type="button" class="btn btn-info">Hủy</button></div>
</div>
