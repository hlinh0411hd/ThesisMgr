<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/6/2016
 * Time: 8:02 PM
 */
?>

<div id="content" class="center container">
    <h2>Khoá luận: <?= $thesis['thesisName']?></h2>
    <h3>Sinh viên: <?= $thesis['studentName']?></h3>
    <h4>Giảng viên hướng dẫn:</h4>
    <p><?= $thesis['teacherName'];?></p>
    <p><?= $thesis['coteacherName'];?></p>
    <h5>Tóm tắt</h5>
    <p><?= $thesis['thesisDescription'];?></p>
    <br>
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
