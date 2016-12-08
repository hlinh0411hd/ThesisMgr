<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/28/2016
 * Time: 1:21 PM
 */
?>

<table id="myTable" class="table">
    <thead>
    <?php
        foreach ($header as $key => $value){
            echo "<td>$key</td>";
        }
    ?>
    </thead>
    <?php
        foreach ($list as $item){
            echo "<tr>";
            foreach ($header as $key => $value) {
                if ($value == 'thesisAllowed'){
                    echo "<td><input id='checkAllow' type='checkbox' onchange='allowStudent(".$item['studentId'].")' ";
                    if ($item[$value] == 1) echo "checked";
                    echo"></td>";
                } else
                echo "<td>".$item[$value]."</td>";
            }
            echo "</tr>";
        }
    ?>
</table>

