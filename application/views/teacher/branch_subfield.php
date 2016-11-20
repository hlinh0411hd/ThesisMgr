<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/21/2016
 * Time: 12:23 AM
 */
$r = rand(0,100000);
?>

<div id="subfield<?php echo $r; ?>" class="form-group row">
    <div class="col-sm-12">
        <select id="subfield<?php echo $r; ?>" name="subfield" class="subfield form-control">
            <?php
            foreach ($subfieldList as $subfield){
                echo '<option value="'.$subfield['subfieldId'].'">'.$subfield['subfieldName'].'</option>';
            }
            ?>
        </select>
        <button type="button" class="btn" onclick="deleteBranch('#subfield<?php echo $r; ?>')">Xoa</button>
    </div>
</div>


