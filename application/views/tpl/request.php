
<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 12/3/2016
 * Time: 3:00 PM
 */
?>
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Khóa luận</h3>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered" style="font-size: 14px;">
                <thead>
                <tr>
                    <th class="col-md-2">Sinh viên</th>
                    <th class="col-md-2">Khóa luận</th>
                    <th class="col-md-2">Loại yêu cầu</th>
                    <th class="col-md-2">Thời gian</th>
                    <th class="col-md-1">Trạng thái</th>
                    <th class="col-md-3">Khác</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $request) {?>
                    <tr>
                        <td><?php echo $request['studentName'];?></td>
                        <td><?php echo $request['thesisOldName']?></td>
                        <td><?= $request['requestType']==1? 'Chỉnh sửa':'Rút'?></td>
                        <td><?= $request['created_at']?></td>
                        <td><?php
                            if ($this->session->userdata('userTypeSession') == 3){
                                if ($request['status'] == 0){
                                    echo "Đang chờ";
                                } else if ($request['status'] == 1){
                                    echo "Đã tiếp nhận";
                                } else if ($request['status'] == 2){
                                    echo "Thành công";
                                } else if ($request['status'] == 3){
                                    echo "Đã hủy";
                                }
                            } else
                            if ($this->session->userdata('userTypeSession') == 1){
                                if ($request['status'] == 2){
                                    echo "Đã xác nhận";
                                } else if ($request['status'] == 3){
                                    echo "Đã hủy";
                                } else if ($request['status'] == 1){
                                    echo "Đã xuất đề nghị";
                                } else echo "Chưa tiếp nhận";
                            }
                        ?></td>
                        <td>
                            <?php if ($this->session->userdata('userTypeSession') == 1 && $request['status']==0) {?>
                            <button onclick='exportRequest(<?=$request['requestId']?>)' class='btn'>Xuất Đề nghị</button>
                            <button onclick='confirmRequest(<?=$request['requestId']?>)' class='btn'>Xác nhận</button>
                            <button  onclick='denyRequest(<?=$request['requestId']?>)'class='btn'>Hủy</button>
                            <?php }?>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
    </div>
