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
    <form actioc="InfoFunctionTeacher/update">
        <div class="form-group row">
            <label class="control-label col-sm-2">Họ và tên:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="name" id="name" value="<?php echo $teacherName;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Khoa</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="faculty" id="faculty" value="<?php echo $facultyName;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Bộ môn</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="department" id="department" value="<?php echo $departmentName;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Phòng thí nghiệm</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="laboratory" id="laboratory" value="<?php echo $laboratoryName;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" name="email" id="email" value="<?php echo $teacherMail;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Số điện thoại</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="phone" id="phone" value="<?php echo $teacherPhone;?>" disabled>
            </div>
        </div>
        <div class="form-group row">
            <label class="control-label col-sm-2">Thông tin</label>
            <div class="col-sm-10">
                <textarea type="text" class="form-control" name="phone" id="phone" disabled><?php echo $teacherInfo;?></textarea>
            </div>
        </div>
        <div class="form-group row">
            <button class="btn" style="display:none">Lưu</button>
        </div>
    </form>
</div>
<div class="col-sm-4"></div>
</div>