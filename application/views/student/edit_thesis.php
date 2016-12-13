<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/28/2016
 * Time: 10:06 PM
 */
?>
<div id="content" class="center container">
<div id="intro" class="row">
<div class="col-sm-offset-2 col-sm-8">
<div class="text-center">
    <h3>Chỉnh sửa khóa luận</h3>
</div>
<form action="request/addRequest/1/<?= $thesisId;?>" id="signUpThesis" autocomplete="off">
    <div class="form-group">
        <label class="control-label">Tên đề tài</label>
        <input type="text" class="form-control" name="thesisName" id="thesisName" value="<?= $thesisName; ?>">
    </div>
    <div class="form-group">
        <label class="control-label">Tóm tắt</label>
        <textarea class="form-control" name="thesisDescription" id="thesisDescription" rows="10"><?= $thesisDescription; ?></textarea>
    </div>
    <div class="form-group" onfocusout="setTimeout(function(){load('teacherList','index');},100)">
        <label class="control-label">Giảng viên hướng dẫn</label>
        <input type="text" class="form-control" onkeyup="showHint('teacher','teacher')" name="teacher" id="teacher" value="<?= $teacherName?>">
        <ul id="teacherList" class="list-group">

        </ul>
    </div>
    <div class="form-group">
        <input type="hidden" class="form-control" name="teacherId" id="teacherId" value="<?= $teacherId;?>">
    </div>
    <div class="form-group" onfocusout="setTimeout(function(){load('coteacherList','index');},100)">
        <label class="control-label">Giảng viên đồng hướng dẫn</label>
        <input type="text" class="form-control" onkeyup="showHint('coteacher','teacher')" name="coteacher" id="coteacher" value="<?= $coteacherName;?>">
        <ul id="coteacherList" class="list-group">

        </ul>
    </div>
    <div class="form-group">
        <input type="hidden" class="form-control" name="coteacherId" id="coteacherId" value="<?= $coteacherId;?>">
    </div>
    <div class="form-group text-center">
        <button class="btn">Gửi yêu cầu</button>
    </div>
</form>
</div>
</div>
</div>
