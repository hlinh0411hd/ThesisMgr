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
        <select id="subfield<?php echo $r; ?>" name="subfield" class="subfield form-control"
            <?php if (isset($relativeField)) echo "disabled";?>
        >
            <?php
            foreach ($subfieldList as $subfield){
                echo '<option value="'.$subfield['subfieldId'].'">'.$subfield['subfieldName'].'</option>';
            }
            ?>
        </select>
        <?php if (!isset($relativeField)){?>
        <button type="button" class="btn btn-danger" onclick="deleteBranch('#subfield<?php echo $r; ?>')">Xóa</button>
        <?php }?>
    </div>
</div>


