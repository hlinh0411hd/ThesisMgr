<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/8/2016
 * Time: 3:05 PM
 */
?>
<table class="table table-bordered">
    <thead>
    <th class="col-sm-4">Giảng viên phản biện</th>
    <th class="col-sm-8">Ý kiến</th>
    </thead>
    <?php foreach ($reviewers as $reviewer) {?>
        <tr>
            <td><?= $reviewer['teacherName'];?></td>
            <td>
                <textarea id="<?= $reviewer['reviewerId'];?>" class="form-control">
                    <?= $reviewer['reviewer'];?>
                </textarea>
            </td>
        </tr>
    <?php } ?>
</table>
<button onclick="editReviewer(<?= $thesis['thesisId'];?>)" class="btn">Lưu</button>
<button onclick="load('main','thesis/detail/<?= $thesis['thesisId'];?>');" class="btn">Hủy</button>
