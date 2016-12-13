<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/14/2016
 * Time: 1:43 AM
 */
?>
<div class="col-sm-6">
<form>
    <div class="form-group row">
        <label class="control-label">Thời gian mở:</label>
        <div class="col-sm-12">
            <div class="col-sm-6">
                <input type="date" class="form-control" id="startDate" value="<?= $startDate;?>">
            </div>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="startTime" value="<?= $startTime;?>">
            </div>

        </div>
    </div>
    <div class="form-group row">
        <label class="control-label">Thời gian kết thúc:</label>
        <div class="col-sm-12">
            <div class="col-sm-6">
                <input type="date" class="form-control" id="endDate" value="<?= $endDate;?>">
            </div>
            <div class="col-sm-6">
                <input type="time" class="form-control" id="endTime" value="<?= $endTime;?>">
            </div>
        </div>
    </div>
    <div class="form-group row">
        <button class="btn" onclick="saveTimeRegister(<?= $facultyId;?>)" type="button">Lưu</button>
        <button class="btn" type="button">Hủy</button>
    </div>
</form>
</div>