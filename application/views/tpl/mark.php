<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/14/2016
 * Time: 9:14 PM
 */
?>
<div class="row">
    <div class="col-sm-4">
        Điểm phản biện
    </div>
    <div class="col-sm-4">
        Điểm hội đồng
    </div>
    <div class="col-sm-4">
        Điểm giảng viên hướng dẫn
    </div>

</div>
<div class="row">
    <input id="thesisId" type="hidden" value="<?= $thesisId?>">
    <div class="col-sm-4">
        <input type="number" max="10" min="0" class="form-control" id="reviewerMark" value="<?= $reviewerMark?>">
    </div>
    <div class="col-sm-4">
        <input type="number" max="10" min="0"  class="form-control"  id="councilMark" value="<?= $councilMark?>">
    </div>
    <div class="col-sm-4">
        <input type="number" max="10" min="0"  class="form-control"  id="teacherMark" value="<?= $teacherMark?>">
    </div>

</div>
<button onclick="addMark()" class="btn btn-success">Lưu</button>
<button class="btn btn-info">Hủy</button>