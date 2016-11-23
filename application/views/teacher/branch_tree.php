<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/20/2016
 * Time: 11:31 PM
 */
$r = rand(0,100000);
if (isset($item))
extract($item);
?>
<form id="renew<?php echo $r; ?>" onsubmit="createNew('#renew<?php echo $r; ?>');return false;">
    <div class="form-group row">
        <div class="col-sm-4">
            <input id="researchDirectionName" name="researchDirectionName" class="form-control" placeholder="Tên hướng nghiên cứu"
            <?php
                if (isset($researchDirectionName)){
                    echo 'value="'.$researchDirectionName.'" disabled';
                }
            ?>
            >
        </div>
        <div class="col-sm-8">
            <div id="field_branch<?php echo $r; ?>">
                <?php
                if (isset($relativeFieldList))
                    foreach ($relativeFieldList[$researchDirectionId] as $relativeField){
                        $data['relativeField'] = $relativeField;
                        $data['fieldList'] = $fieldList;
                        $this->load->view('teacher/branch_field',$data);
                    }
                ?>
            </div>
            <button type="button" class="btn" onclick="addFieldBranch('#field_branch<?php echo $r; ?>');"
                <?php
                if (isset($researchDirectionName)){
                    echo 'style="display:none"';
                }
                ?>
            > + Thêm lĩnh vực</button>
        </div>
    </div>
    <div class="form-group"
        <?php
        if (isset($researchDirectionName)){
            echo 'style="display:none"';
        }?>
        >
        <button type="button" class="btn" onclick="deleteBranch('#renew<?php echo $r; ?>')">Xoa</button>
        <button type="button" class="btn" onclick="<?php
            if (isset($researchDirectionName)){
                echo "updateTree('#renew".$r."',".$researchDirectionId.")";
            } else {
                echo "saveTree('#renew".$r."')";
            }
        ?>">Luu</button>
    </div>
    <div id="edit"<?php
    if (!isset($researchDirectionName)){
        echo 'style="display:none"';
    }?>>
        <button class='btn' onclick='enableInputTree("#renew<?php echo $r; ?>")'>Chỉnh sửa</button>
        <button class='btn' onclick='deleteBranchTree(<?php echo $researchDirectionId;?>)'>Xóa</button>
    </div>

</form>
