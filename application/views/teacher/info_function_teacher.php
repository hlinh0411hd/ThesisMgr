<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:41 AM
 */
?>

<div class="panel panel-default col-sm-12" style="padding-bottom: 10px;">
    <div class="panel-heading">
        <h3 class="panel-title">Thông tin cá nhân</h3> 
        <div class="pull-right">
            <button type="button" class="btn btn-primary btn-sm chinhsua-info" onclick="enableInput()">Chỉnh sửa</button>
            <button class="btn btn-primary btn-sm luu-info" style="display:none;" >&nbsp;&nbsp;Lưu &nbsp;&nbsp;lại&nbsp;&nbsp;&nbsp; </button>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            <form actioc="InfoFunctionTeacher/update">
                <div class="form-group row">
                    <label class="control-label col-sm-3">Họ và tên:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $teacherName;?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Khoa</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="faculty" id="faculty" value="<?php echo $facultyName;?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Bộ môn</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="department" id="department" value="<?php echo $departmentName;?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Phòng thí nghiệm</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="laboratory" id="laboratory" value="<?php echo $laboratoryName;?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Email</label>
                    <div class="col-sm-9">
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $teacherMail;?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Số điện thoại</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $teacherPhone;?>" disabled>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Thông tin</label>
                    <div class="col-sm-9">
                        <textarea type="text" class="form-control" name="phone" id="phone" disabled><?php echo $teacherInfo;?></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6" style="border-left: 1px solid #dfdfdf; min-height: 400px;">
            <center> 
                <div class="ratio img-responsive img-circle" style="background-image: url(public/img/avt.jpg); width: 270px; height: 270px;"></div>
            </center>
            <center> <button class="btn btn-success btn-avatar" style="margin-top: 25px; display: none;">Thay đổi ảnh</button></center>

        </div>
    </div>
</div>

