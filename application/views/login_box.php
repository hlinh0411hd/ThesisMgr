<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/9/2016
 * Time: 8:27 PM
 */
?>
<div id="login-form" class="login-box panel panel-primary" style="margin: 0;">
    <p class="login-box-msg panel-heading" style="font-size: large;padding-top:15px">Đăng nhập</p>
    <div class="login-box-body" style="margin: 0; border-radius: 4px">
        <form id="login_form" class="panel-body" onsubmit="login();return false;" method="post">
            <p class="text-danger" id="loginError"></p>
            <div class="form-group has-feedback">
                <input id="username" name="username" type="text" class="form-control" placeholder="Tên đăng nhập">
                <span class="glyphicon glyphicon-user form-control-feedback"></span>
            </div>
            <div class="form-group has-feedback">
                <input id="password" name="password" type="password" class="form-control" placeholder="Password">
                <span class="glyphicon glyphicon-lock form-control-feedback"></span>
            </div>
            <div class="row">
                <div class="col-xs-7">
                    <div class="checkbox icheck">
                        <label>
                            <input type="checkbox"> Lưu tài khoản
                        </label>
                    </div>
                </div>
                <!-- /.col -->
                <div class="col-xs-5">
                    <button id="formbutton" type="submit" class="btn btn-primary btn-block btn-flat">Đăng nhập</button>
                </div>
                <!-- /.col -->
            </div>
        </form>

        <a href="#">Quên mật khẩu</a><br>

    </div>
    <!-- /.login-box-body -->
</div>
