<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/16/2016
 * Time: 10:13 PM
 */
?>
<table class="table">
    <thead>
        <td>Họ tên</td>
<!--        <td>Bộ môn/Phòng thí nghiệm</td>-->
<!--        <td>Lĩnh vực nghiên cứu</td>-->
        <td>Email</td>
        <td>Sdt</td>
        <td>Chi tiết</td>
    </thead>
    <tbody>
    <?php
        foreach ($data as $teacher){
            echo "<tr>
                <td>$teacher[teacherName]</td>
                <td>$teacher[teacherMail]</td>
                <td>$teacher[teacherPhone]</td>
                <td>-></td>
                </tr>
            ";
        }
    ?>
    </tbody>
</table>
