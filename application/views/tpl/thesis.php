
<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/29/2016
 * Time: 5:53 PM
 */
?>

    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Khóa luận</h3>
            <div class="pull-right">
                <?php if ($this->session->userdata("userTypeSession") == 1) { ?>
                <button  onclick="" type="button" class="btn btn-primary btn-xs">Xuất đề nghị khóa luận</button>
                <button  onclick="remindProtectionFile()" type="button" class="btn btn-primary btn-xs">Nhắc nộp hồ sơ</button>
                <button  onclick="" type="button" class="btn btn-primary btn-xs">Xuất danh sách sinh viên</button>
                <button  onclick="" type="button" class="btn btn-primary btn-xs">Xuất đề nghị bảo vệ</button>
                <?php } ?>
            </div>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered" style="font-size: 13px;">
                <thead>
                <tr>
                    <th class="col-sm-3">Tên khóa luận</th>
                    <th class="col-sm-2">Tên sinh viên</th>
                    <th class="col-sm-2">Thời gian đăng ký</th>
                    <th class="col-sm-1">Tr. thái</th>
                    <th class="col-sm-1">Bảo vệ</th>
                    <th class="col-sm-1">Chi tiết</th>
                    <th class="col-sm-1">Hồ sơ</th>
                    <th class='col-sm-1'>
                        <?php if ($this->session->userdata('userTypeSession') == 2) echo 'Chấp nhận SV';
                                else echo 'Chỉnh sửa';
                        ?>
                    </th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User->thesisName;?></td>
                        <td><?php echo $sz_User->studentName;?></td>
                        <td><?php echo $sz_User->created_at;?></td>
                        <td><center><input type="checkbox" 
                            <?php echo $sz_User->accepted==0? "":"checked";?>
                            <?= $this->session->userdata('userTypeSession') != 1? "disabled":"";?>
                         /></center></td>
                        <td><center><input type="checkbox" 
                            <?php echo $sz_User->isSuccess==0? "":"checked";?> 
                            <?= $this->session->userdata('userTypeSession') != 1? "disabled":"";?>
                         /></center></td>
                            
                        <td><center><?php echo "<a onclick='load(\"main\",\"Thesis/detail/".$sz_User->thesisId."\")'><span class='glyphicon glyphicon-list-alt'></a>";?></center></td>
                        <td><center><input type="checkbox"
                                <?= $sz_User->protectionFile!=0? "checked":"";?>
                                <?= $this->session->userdata('userTypeSession') != 1? "disabled":"onchange='checkedProtectionFile(".$sz_User->thesisId.")'";?>
                            ></center>
                        </td>
                        <?php
                        if ($this->session->userdata('userTypeSession') == 2){
                            echo "<td>";
                            if ($sz_User->accepted==0){
                                echo "<a onclick='acceptThesis(".$sz_User->thesisId.")'><span style='color:#dfdfdf;' class='glyphicon glyphicon-ok' title='Chấp nhận'> </a> <a onclick='denyThesis(".$sz_User->thesisId.")'><span style='color:red;' class='glyphicon glyphicon-remove' title='Hủy'> </span></a>";
                            } else {
                                echo "<a onclick='acceptThesis(".$sz_User->thesisId.")'><span style='color:green;' class='glyphicon glyphicon-ok' title='Chấp nhận'> </a> <a onclick='denyThesis(".$sz_User->thesisId.")'><span style='color:#dfdfdf;' class='glyphicon glyphicon-remove' title='Hủy'> </span></a>";
                            }
                            echo "</td>";
                        } else 
                        if ($this->session->userdata('userTypeSession') == 1){
                            echo "<td><center><a href='#'><span style='color:green;' class='glyphicon glyphicon-edit' title='Chỉnh sửa'> </span></a> <a href='#'><span style='color:red;' class='glyphicon glyphicon-remove' title='Hủy'></span></a></center></td>";
                        } else if ($this->session->userdata('userTypeSession') == 3){
                            echo "<td><center><a onclick='load(\"main\",\"request/edit/".$sz_User->thesisId."\")'><span style='color:green;' class='glyphicon glyphicon-edit' title='Đề xuất chỉnh sửa'></span></a><a onclick='load(\"main\", \"request/addRequest/2/".$sz_User->thesisId."\")'><span style='color:red;' class='glyphicon glyphicon-remove' title='Đề xuất hủy'></span></a></center></td>";
                        }
                        ?>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>

    </div>
