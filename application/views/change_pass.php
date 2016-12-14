<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/15/2016
 * Time: 2:20 AM
 */
?>
<form onsubmit="changePass(); return false;" class="col-sm-offset-2 col-sm-6">
    <h3 class="col-sm-offset-3">Nhập tài khoản và mật khẩu</h3>
    <div class="form-group col-sm-12">
        <input type="password" id="newpass" class="form-control" placeholder="Mật khẩu mới">
    </div>
    <div class="form-group col-sm-12">
        <input type="password" id="repass" class="form-control" placeholder="Nhập lại mật khẩu">
    </div>
    <div class="form-group col-sm-offset-5 col-sm-2">
        <button class="btn btn-success form-control">Tiếp</button>
    </div>
</form>
