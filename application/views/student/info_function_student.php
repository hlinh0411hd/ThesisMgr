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
            <button id="chinhsua-info" type="button" class="btn btn-primary btn-sm" onclick="enableInput()">Chỉnh sửa</button>
            <button id="luu-info" class="btn btn-primary btn-sm" style="display:none;" >Lưu</button>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            <form role="form" action="InfoFunctionStudent/update">
                <div class="form-group row">
                    <label class="control-label col-sm-3">Họ và tên:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" disabled value="<?= $studentName;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Giới tính:</label>
                    <div class="col-sm-9 radio-inline">
                        <div class="radio">
                            <label><input type="radio" name="gender" id="gender" <?= $studentGender=="nam"? "checked":""?> disabled>Nam</label>
                        </div>
                        <div class="radio">
                            <label><input type="radio" name="gender" id="gender" <?= $studentGender=="nam"? "":"checked"?> disabled>Nữ</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Ngày sinh:</label>
                    <div class="col-sm-5">
                        <input type="date" class="form-control" name="birthday" id="birthday" disabled value="<?= $studentBirthday;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Lớp:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="class" id="class" disabled value="<?= $studentClass;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Số điện thoại:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="phone" id="phone" disabled value="<?= $studentPhone;?>">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Email:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="mail" id="mail" disabled value="<?= $studentMail;?>">
                    </div>
                </div>

                <div class="form-group row">
                    <label class="control-label col-sm-3">Khoa</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="facultyId" id="facultyId" disabled>
                            <option value="0"></option>
                            <?php foreach ($faculties as $faculty){?>
                                <option value="<?= $faculty['facultyId'];?>" <?= $facultyId == $faculty['facultyId']? "selected":"";?>>
                                    <?= $faculty['facultyName'];?>
                                </option>
                            <?php }?>
                        </select>
                    </div>
                </div>

                <div class="form-group row" onfocusout="setTimeout(function(){load('teacherList','index');},100)">
                    <label class="control-label col-sm-3">Cố vấn học tập:</label>
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name="consultant" id="consultant" onkeyup="showHint('consultant','teacher')" disabled value="<?= $consultant['teacherName'];?>">
                    <ul id="consultantList" class="list-group">

                    </ul>
                    </div>
                </div>
                <div class="form-group row">
                    <input type="hidden" class="form-control" name="consultantId" id="consultantId" value="<?= $consultant['teacherId'];?>">
                </div>
            </form>
        </div>
    </div>
</div>


