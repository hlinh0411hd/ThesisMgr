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
        </div>
        <div class="panel-body">
            <table class="table table-striped table-bordered" style="font-size: 13;">
                <thead>
                <tr>
                    <th class="col-md-2">Tên sinh viên</th>
                    <th class="col-md-3">Tên khóa luận</th>
                    <th class="col-md-2">Giảng viên hướng dẫn</th>
                    <th class="col-md-2">GV đồng hướng dẫn</th>
                    <th class="col-md-2">Chi tiết</th>
                    <th class="col-md-1">Chấp nhận</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo $sz_User->thesisName;?></td>
                        <td><?php echo $sz_User->studentName;?></td>
                        <td><?php echo $sz_User->teacherName;?></td>
                        <td><?php echo $sz_User->coteacherName;?></td>
                        <td><?php echo $sz_User->thesisDescription;?></td>
                        <td><?php
                            if ($this->session->userdata('userTypeSession') == 2){
                                if ($sz_User->accepted==0){
                                    echo "<button onclick='acceptThesis(".$sz_User->thesisId.")' class='btn'>Chấp nhận</button> <button onclick='denyThesis(".$sz_User->thesisId.")' class='btn'>Hủy</button>";
                                } else {
                                    echo "Đã chấp nhận";
                                }
                            } else
                            echo $sz_User->accepted==0? "chưa":"chấp nhận";
                        ?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
            <div class="pull-right">
                <ul id="page_num" class="pagination pagination-sm">
                    <?php echo $pagination;?>
                </ul>
            </div>
        </div>
        
    </div>
    
