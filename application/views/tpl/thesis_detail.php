<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/6/2016
 * Time: 8:02 PM
 */
?>
<div style="margin:30px; background: white">
<div id="thesisDetail">
    <input type="hidden" class="form-control" name="thesisId" id="thesisId" value="<?= $thesis['thesisId']?>">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h1 class="panel-title"><strong>Khoá luận: <?= $thesis['thesisName']?></strong></h1>
            <?php if ($this->session->userdata('userTypeSession')==1) {?>
            <div class="pull-right"><button  onclick="exportThesisList()" type="button" class="btn btn-primary btn-xs">Xuất biên bản bảo vệ</button></div>
            <?php }?>
        </div>
        <div class="panel-body">
            <h4><strong>Sinh viên:</strong> <?= $thesis['studentName']?></h4>
        </div>

    </div>
</div>
    <div class="row" style="margin: 20px;">
        <div class="col-sm-6">
            <table class="table table-bordered">
                <tr><th>Giảng viên hướng dẫn</th></tr>
                <tr><td><p><?= $thesis['teacherName'];?></p></td></tr>
                <tr><td><p><?= $thesis['coteacherName'];?></p></td></tr>
            </table>
        </div>
        <div class="col-sm-6">
            <h5><strong>Giảng viên phản biện</strong></h5>
            <div id="listTeacher" class="col-sm-12">
                <ul class="list-group">
                    <?php foreach ($reviewers as $reviewer) {?>
                        <li class="list-group-item row" style="border:none"><a class="col-sm-8"><?= $reviewer['teacherName'];?></a>
                            <?php if ($this->session->userdata('userTypeSession') == 1) {?>
                            <button class="btn btn-danger col-sm-2" onclick="deleteReviewer(<?= $reviewer['reviewerId'];?>,<?=$thesis['thesisId'];?>)">Xóa</button>
                            <?php }?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <?php
            if ($this->session->userdata('userTypeSession') == 1){
                echo "<button onclick='addReviewerBranch()' class='btn btn-success'>Thêm phản biện</button>";
            }
            ?>
        </div>
    </div>
    <div style="margin:30px">
    <h3>Tóm tắt</h3>
    <p><?= $thesis['thesisDescription'];?></p>
    <h4 style="margin-top:20px">Phản biện</h4>
    <div id="reviewer">
    <table class="table table-bordered table-responsive">
        <thead>
            <th class="col-sm-4">Giảng viên phản biện</th>
            <th class="col-sm-8">Ý kiến</th>
        </thead>
        <?php foreach ($reviewers as $reviewer) {?>
            <tr>
                <td><?= $reviewer['teacherName'];?></td>
                <td><?= $reviewer['reviewer'];?></td>
            </tr>
        <?php } ?>
    </table>
    </div>
    <?php
    if ($this->session->userdata('userTypeSession') == 1){
        echo "<button onclick='load(\"reviewer\",\"reviewer/edit/".$thesis['thesisId']."\");$(this).hide();' class='btn btn-success'>Thêm ý kiến phản biện</button>";
    }
    ?>

    <h4>Điểm đánh giá</h4>
    <div id="mark">
        <table class="table table-bordered table-responsive">
            <thead>
            <th>Điểm phản biện</th>
            <th>Điểm hội đồng</th>
            <th>Điểm giá viên hướng dẫn</th>
            </thead>
            <tbody>
            <td><?= $mark['reviewerMark']?></td>
            <td><?= $mark['councilMark']?></td>
            <td><?= $mark['teacherMark']?></td>
            </tbody>
        </table>
        <?php
        if ($this->session->userdata('userTypeSession') == 1){
            echo "<button onclick='load(\"mark\",\"mark/editView/".$thesis['thesisId']."\");' class='btn btn-success'>Thay đổi điểm</button>";
        }
        ?>
    </div>
    </div>
</div>
</div>