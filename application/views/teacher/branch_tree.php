<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/20/2016
 * Time: 11:31 PM
 */
$r = rand(0,100000);
?>
<form id="renew<?php echo $r; ?>" onsubmit="createNew('#renew<?php echo $r; ?>');return false;">
    <div class="form-group row">
        <div class="col-sm-4">
            <input id="researchDirectionName" name="researchDirectionName" class="form-control" placeholder="Tên hướng nghiên cứu">
        </div>
        <div class="col-sm-8">
            <div id="field_branch<?php echo $r; ?>"></div>
            <button type="button" class="btn" onclick="addFieldBranch('#field_branch<?php echo $r; ?>');"> + Thêm lĩnh vực</button>
        </div>
    </div>
    <div class="form-group">
        <button type="button" class="btn" onclick="deleteBranch('#renew<?php echo $r; ?>')">Xoa</button>
        <button class="btn">Luu</button>
    </div>
</form>
