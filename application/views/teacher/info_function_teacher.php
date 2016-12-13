
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
            <button type="button" class="btn btn-primary btn-sm chinhsua-info" id="chinhsua-info" onclick="enableInput()">Chỉnh sửa</button>
            <button onclick="updateInfoTeacher()" class="btn btn-primary btn-sm luu-info" id="luu-info" style="display:none;" >Lưu</button>
        </div>
    </div>
    <div class="panel-body">
        <div class="col-sm-6">
            <form>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Họ và tên:</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" name="name" id="name" value="<?php echo $teacherName;?>" disabled>
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
                <div class="form-group row">
                    <label class="control-label col-sm-3">Bộ môn</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="departmentId" id="departmentId" disabled>
                            <option value="0"></option>
                            <?php foreach ($departments as $department){?>
                                <option value="<?= $department['departmentId'];?>" <?= $departmentId == $department['departmentId']? "selected":"";?>>
                                    <?= $department['departmentName'];?>
                                </option>
                            <?php }?>
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="control-label col-sm-3">Phòng thí nghiệm</label>
                    <div class="col-sm-9">
                        <select class="form-control" name="laboratoryId" id="laboratoryId" disabled>
                            <option value="0"></option>
                            <?php foreach ($laboratories as $laboratory){?>
                                <option value="<?= $laboratory['laboratoryId'];?>" <?= $laboratoryId == $laboratory['laboratoryId']? "selected":"";?>>
                                    <?= $laboratory['laboratoryName'];?>
                                </option>
                            <?php }?>
                        </select>
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
                        <textarea type="text" class="form-control" name="info" id="info" disabled><?php echo $teacherInfo;?></textarea>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-sm-6" style="border-left: 1px solid #dfdfdf; min-height: 400px;">
            <center> 
                <div class="ratio img-responsive img-circle" style="background-image: url(<?= $avatar;?>); width: 270px; height: 270px;"></div>
            </center>
            <center> <button id="btn-avatar" class="btn btn-success" style="margin-top: 25px; display: none;">Thay đổi ảnh</button></center>
        </div>
    </div>
</div>

