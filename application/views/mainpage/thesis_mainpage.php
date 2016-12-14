<div id="content">
    <div class="container">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">Danh sách Khóa luận</h3>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered" style="font-size: 13px;">
                <thead>
                <tr>
                    <th class="col-md-3">Tên khóa luận</th>
                    <th class="col-md-2">Tên sinh viên</th>
                    <th class="col-md-2">Thời gian đăng ký</th>
                    <th class="col-md-1">Trạng thái</th>
                    <th class="col-md-1">Bảo vệ</th>
                    <th class="col-md-1">Chi tiết</th>
                    <th class="col-md-1">Hồ sơ</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($list as $item) {?>
                    <tr>
                        <td><?php echo $item["thesisName"]?></td>
                        <td><?php echo $item["studentName"]?></td>
                        <td><?php echo $item["created_at"]?></td>
                        <td><?php echo $item["accepted"]==0? "chưa":"chấp nhận";?></td>
                        <td><?php echo $item["isSuccess"]==0? "chưa bảo vệ":"đã bảo vệ";?></td>
                        <td><?php echo "<a onclick='load(\"content\",\"Thesis/detail/".$item['thesisId']."\")'><span class='glyphicon glyphicon-list-alt'></a>";?></td>
                        <td><input type="checkbox"
                                <?= $item['protectionFile']!=0? "checked":"";?>
                                disabled
                            >
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>

    </div>
    </div>
</div>