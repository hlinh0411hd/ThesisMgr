<div id="content">
    <div class="container">
    <div id="bang-thong-tin" class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title"><b>Thông tin Giảng viên</b></h3>
        </div>
        <div class="panel-body">
            <table id="myTable" class="table table-striped table-bordered" style="font-size: 15;">
                <thead>
                <tr>
                    <th class="col-md-3">Họ và tên</th>
                    <th class="col-md-4">Email</th>
                    <th class="col-md-3">Số điện thoại</th>
                    <th class="col-md-2">Chi tiết</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($teacher as $item) {?>
                    <tr>
                        <td><?php echo $item['teacherName'];?></td>
                        <td><?php echo $item['teacherMail'];?></td>
                        <td><?php echo $item['teacherPhone'];?></td>
                        <td><?php echo "<a><span class='glyphicon glyphicon-list-alt'></span></a>";?></td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        </div>
         <div class="panel-heading">
            <h3 class="panel-title"><b>Lĩnh vực</b></h3>
        </div>
        <div class="panel-body">
            <?php foreach ($field as $item) {?>
                    <tr>
                        <td><?php echo $item['fieldName'];?></td>
                    </tr>
            <?php }?>
            </div>
             <div class="panel-heading">
            <h3 class="panel-title"><b>Lĩnh vực con</b></h3>
        </div>
            <div class="panel-body">
            <?php foreach ($subfield as $item) {?>
                    <tr>
                        <td><?php echo $item['subfieldName'];?></td>
                    </tr>
            <?php }?>
            </div>

    </div>

    </div>
</div>