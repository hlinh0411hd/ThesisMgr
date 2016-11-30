<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:41 AM
 */
?>

<div class="panel panel-default col-sm-12">
            <div class="panel-heading">
                <h3 class="panel-title">Thông tin cá nhân</h3> 
                    <div class="pull-right">
                        <button id="chinhsua-info-std" type="button" class="btn btn-primary btn-sm" onclick="enableInput()">Chỉnh sửa</button>
                        <button id="luu-info-std" class="btn btn-primary btn-sm" style="display:none;" >&nbsp;&nbsp;Lưu lại&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </button>
                    </div>
            </div>
            <div class="panel-body">
                
                <div class="col-sm-6">
                    <form role="form" action="InfoFunctionStudent/update">
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Họ và tên:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="name" id="name" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Giới tính:</label>
                            <div class="col-sm-10 radio-inline">
                                <div class="radio">
                                    <label><input type="radio" name="gender" id="gender" checked disabled>Nam</label>
                                </div>
                                <div class="radio">
                                    <label><input type="radio" name="gender" id="gender" disabled>Nữ</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Ngày sinh:</label>
                            <div class="col-sm-5">
                                <input type="date" class="form-control" name="birthday" id="birthday" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Lớp:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="class" id="class" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Số điện thoại:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="phone" id="phone" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="control-label col-sm-2">Email:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="mail" id="mail" disabled>
                            </div>
                        </div>
                        <div class="form-group row">
                            
                        </div>
                    </form>
                    
                </div>
            </div>
        
        </div>


