<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/20/2016
 * Time: 11:49 PM
 */
$r = rand(0,100000);
?>

<div id="field<?php echo $r; ?>" class="form-group row">
    <div class="col-sm-4">
        <select id="field<?php echo $r; ?>" name="field" class="field form-control" onchange="changeField('#subfield_branch<?php echo $r; ?>','#field<?php echo $r; ?> option:selected')" <?php
        if (isset($relativeField)){
            echo "disabled";
        }
        ?>>
            <?php
                foreach ($fieldList as $field){
                    echo '<option value="'.$field['fieldId'].'"';
                    if (isset($relativeField) && $field['fieldId'] == $relativeField) echo "selected";
                    echo '>'.$field['fieldName'].'</option>';
                }
            ?>
        </select>
        <button type="button" class="btn btn-danger" onclick="deleteBranch('#field<?php echo $r; ?>')"
            <?php
                if (isset($relativeField)){
                    echo "style='display:none'";
                }
            ?>>Xóa</button>
    </div>
    <div class="col-sm-4">
        <div id="subfield_branch<?php echo $r; ?>"></div>
        <button onclick="addSubfieldBranch('#subfield_branch<?php echo $r; ?>',1000)" type="button" class="btn btn-info"<?php
        if (isset($relativeField)){
            echo "style='display:none'";
        }
        ?>> + Thêm lĩnh vực con</button>
    </div>
</div>
