
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
                <button  onclick="" type="button" class="btn btn-primary btn-xs">Xuất đề nghị khóa luận</button>
                <button  onclick="remindProtectionFile()" type="button" class="btn btn-primary btn-xs">Nhắc nộp hồ sơ</button>
                <button  onclick="" type="button" class="btn btn-primary btn-xs">Xuất danh sách sinh viên</button>
                <button  onclick="" type="button" class="btn btn-primary btn-xs">Xuất đề nghị bảo vệ</button>
            </div>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered" style="font-size: 13px;">
                <thead>
                <tr>
                    <th class="col-md-3">Tên khóa luận</th>
                    <th class="col-md-2">Tên sinh viên</th>
                    <th class="col-md-2">Thời gian đăng ký</th>
                    <th class="col-md-1">Trạng thái</th>
                    <th class="col-md-1"></th>
                    <th class="col-md-1">Chi tiết</th>
                    <th class="col-md-1">Hồ sơ</th>
                    <th class='col-md-1'>Khác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User->thesisName;?></td>
                        <td><?php echo $sz_User->studentName;?></td>
                        <td><?php echo $sz_User->created_at;?></td>
                        <td><?php echo $sz_User->accepted==0? "chưa":"chấp nhận";?></td>
                        <td><?php echo $sz_User->isSuccess==0? "chưa bảo vệ":"đã bảo vệ";?></td>
                        <td><?php echo "<a onclick='load(\"main\",\"Thesis/detail/".$sz_User->thesisId."\")'><span class='glyphicon glyphicon-list-alt'></a>";?></td>
                        <td><input type="checkbox"
                                <?= $sz_User->protectionFile!=0? "checked":"";?>
                                <?= $this->session->userdata('userTypeSession') != 1? "disabled":"onchange='checkedProtectionFile(".$sz_User->thesisId.")'";?>
                            >
                        </td>
                        <?php
                        if ($this->session->userdata('userTypeSession') == 2){
                            echo "<td>";
                            if ($sz_User->accepted==0){
                                echo "<button onclick='acceptThesis(".$sz_User->thesisId.")' class='btn'>Chấp nhận</button> <button onclick='denyThesis(".$sz_User->thesisId.")' class='btn'>Hủy</button>";
                            } else {
                                echo "Đã chấp nhận";
                            }
                            echo "</td>";
                        } else 
                        if ($this->session->userdata('userTypeSession') == 1){
                            echo "<td><a href='#'><span style='color:green;' class='glyphicon glyphicon-edit'></span></a> <a href='#'><span style='color:red;' class='glyphicon glyphicon-remove'></span></a></td>";
                        } else if ($this->session->userdata('userTypeSession') == 3){
                            echo "<td><button onclick='load(\"main\",\"request/edit/".$sz_User->thesisId."\")' class='btn'>Yêu cầu chỉnh sửa</button><br><button onclick='load(\"main\", \"request/addRequest/2/".$sz_User->thesisId."\")' class='btn'>Yêu cầu rút</button></td>";
                        }
                        ?>
                    </tr>
                <?php }?>
                </tbody>

            </table>
        </div>

    </div>
