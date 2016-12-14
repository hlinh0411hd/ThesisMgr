<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/15/2016
 * Time: 3:23 AM
 */
?>
<div class="col-sm-7">
    <table class="table table-striped">
        <tr class="row">
            <td class="col-sm-3"><label class="control-label">Họ và tên:</label></td>
            <td class="col-sm-9"><?= $teacherName;?></td>
        </tr>
        <tr class="row">
            <td class="col-sm-3"><label class="control-label">Khoa:</label></td>
            <td class="col-sm-9"><?= $facultyName;?></td>
        </tr>
        <tr class="row">
            <td class="col-sm-3"><label class="control-label">Bộ môn:</label></td>
            <td class="col-sm-9"><?= $departmentName;?></td>
        </tr>
        <tr class="row">
            <td class="col-sm-3"><label class="control-label">Phòng Lab:</label></td>
            <td class="col-sm-9"><?= $laboratoryName;?></td>
        </tr>

        <tr class="row">
            <td class="col-sm-3"><label class="control-label">Email:</label></td>
            <td class="col-sm-9"><?= $teacherMail;?></td>
        </tr>
        <tr class="row">
            <td class="col-sm-3"><label class="control-label">Số điện thoại:</label></td>
            <td class="col-sm-9"><?= $teacherPhone;?></td>
        </tr>
        <tr class="row">
            <td class="col-sm-3"><label class="control-label">Thông tin:</label></td>
            <td class="col-sm-9"><?= $teacherInfo;?></td>
        </tr>
    </table>
</div>
<div class="col-sm-5" style="border-left: 1px solid #dfdfdf; min-height: 350px;">
    <center>
        <div class="ratio img-responsive img-circle" style="background-image: url(<?= $avatar;?>); width: 270px; height: 270px; border: 1px solid #34495E"></div>
    </center>
</div>
