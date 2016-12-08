<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/3/2016
 * Time: 3:00 PM
 */
?>
<div class="center">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Khóa luận</h3>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th class="col-md-1">Chi tiết</th>
                    <th class="col-md-1">Thời gian</th>
                    <th class="col-md-1">Trạng thái</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $i_key => $sz_User) {?>
                    <tr>
                        <td><?php echo "click";?></td>
                        <td><?php echo $sz_User->created_at;?></td>
                        <td><?php
                            if ($this->session->userdata('userTypeSession') == 3){
                                if ($sz_User->status == 0){
                                    echo "Đang chờ";
                                } else if ($sz_User->status == 1){
                                    echo "Đã tiếp nhận";
                                } else if ($sz_User->status == 2){
                                    echo "Thành công";
                                } else if ($sz_User->status == 3){
                                    echo "Đã hủy";
                                }
                            } else
                            if ($this->session->userdata('userTypeSession') == 1){
                                if ($sz_User->status == 2){
                                    echo "Đã xác nhận";
                                } else if ($sz_User->status == 3){
                                    echo "Đã hủy";
                                } else
                                echo "<button onclick='exportRequest(".$sz_User->requestId.")' class='btn'>Xuất Đề nghị</button>
                                      <button onclick='confirmRequest(".$sz_User->requestId.")' class='btn'>Xác nhận</button>
                                      <button  onclick='denyRequest(".$sz_User->requestId.")'class='btn'>Hủy</button>";
                            }
                        ?></td>

                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>

    </div>
</div>