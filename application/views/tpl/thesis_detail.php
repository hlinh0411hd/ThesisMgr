<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/6/2016
 * Time: 8:02 PM
 */
?>
<div id="thesisDetail">
    <input type="hidden" class="form-control" name="thesisId" id="thesisId" value="<?= $thesis['thesisId']?>">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h2 class="panel-title">Khoá luận: <?= $thesis['thesisName']?></h2>
        </div>
        <div class="panel-body">
            <h3>Sinh viên: <?= $thesis['studentName']?></h3>
        </div>

    </div>
</div>






    <h2></h2>

    <div class="row">
        <div class="col-sm-6">
            <h4>Giảng viên hướng dẫn:</h4>
            <p><?= $thesis['teacherName'];?></p>
            <p><?= $thesis['coteacherName'];?></p>
        </div>
        <div class="col-sm-6">
            <h4>Giảng viên phản biện</h4>
            <div id="listTeacher" class="col-sm-12">
                <ul class="list-group">
                    <?php foreach ($reviewers as $reviewer) {?>
                        <li class="list-group-item row"><a class="col-sm-8"><?= $reviewer['teacherName'];?></a>
                            <?php if ($this->session->userdata('userTypeSession') == 1) {?>
                            <button class="btn col-sm-4" onclick="deleteReviewer(<?= $reviewer['reviewerId'];?>,<?=$thesis['thesisId'];?>)">Xóa</button>
                            <?php }?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
            <?php
            if ($this->session->userdata('userTypeSession') == 1){
                echo "<button onclick='addReviewerBranch()' class='btn'>Thêm phản biện</button>";
            }
            ?>
        </div>
    </div>

    <h5>Tóm tắt</h5>
    <p><?= $thesis['thesisDescription'];?></p>
    <h4>Phản biện</h4>
    <div id="reviewer">
    <table class="table table-bordered">
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
        echo "<button onclick='load(\"reviewer\",\"reviewer/edit/".$thesis['thesisId']."\");$(this).hide();' class='btn'>Thêm ý kiến phản biện</button>";
    }
    ?>
</div>
