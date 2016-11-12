<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:41 AM
 */
?>
<p>Thông tin cá nhân</p>
<button class="btn" onclick="enableInput()">Chỉnh sửa</button>
<div class="row">
<div class="col-sm-8">
    <form actioc="InfoFunctionStudent/update">
        <div class="form-group">
            <label class="control-label col-sm-2">Họ và tên:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" disabled>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Giới tính</label>
            <div class="col-sm-10 radio-inline">
                <div class="radio">
                    <label><input type="radio" name="gender" id="gender" checked disabled>Nam</label>
                </div>
                <div class="radio">
                    <label><input type="radio" name="gender" id="gender" disabled>Nữ</label>
                </div>
            </div>
        </div>
        <div class="form-group">
            <button class="btn" style="display:none">Lưu</button>
        </div>
    </form>
</div>
<div class="col-sm-4"></div>
</div>