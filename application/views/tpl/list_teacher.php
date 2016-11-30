<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/29/2016
 * Time: 12:11 AM
 */
?>
<?php
    foreach ($list as $teacher){
        echo "<li class='list-group-item' onclick='addValue(\"".$id."\",\"".$teacher['teacherName']."\",\"".$teacher['teacherId']."\")'>".$teacher['teacherName']."</li>";
    }
?>
