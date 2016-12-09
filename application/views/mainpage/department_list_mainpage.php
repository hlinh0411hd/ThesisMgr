<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/13/2016
 * Time: 4:10 PM
 */
?>
<p>Danh sách bộ môn</p>
<ul class="list-group">
    <?php
        foreach ($departmentList as $department){
            echo "<li class='list-group-item'>$department[departmentName]</li>";
        }
    ?>
</ul>
