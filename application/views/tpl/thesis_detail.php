<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/6/2016
 * Time: 8:02 PM
 */
?>

<div id="thesisDetail" class="center container">
    <input type="hidden" class="form-control" name="thesisId" id="thesisId" value="<?= $thesis['thesisId']?>">
    <h2>Khoá luận: <?= $thesis['thesisName']?></h2>
    <h3>Sinh viên: <?= $thesis['studentName']?></h3>
    <div class="row">
        <div class="col-sm-6">
            <h4>Giảng viên hướng dẫn:</h4>
            <p><?= $thesis['teacherName'];?></p>
            <p><?= $thesis['coteacherName'];?></p>
            <h5>Tóm tắt</h5>
            <p><?= $thesis['thesisDescription'];?></p>
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
    <h4>Phản biện</h4>
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
