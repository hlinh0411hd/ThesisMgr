<div id="content">
    <div class="container">
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $facultyName;?></div>
                <div class="panel-body">
                    <ul class="menu-sidebar list-group">
                        <li class="list-group-item">
                        <a onclick="load('intro','Mainpage/infoFaculty/<?php echo $facultyId;?>')">
                        	<span>Giới thiệu</span>
                        </a></li>
                        <li id="bmptn" class="list-group-item"> <a data-toggle="collapse" data-target="#level1"><span>Bộ môn và phòng thí nghiệm</span></a>
                        </li>
                        <div id="level1" class="collapse">
                            <li class="list-group-item"><a data-toggle="collapse" data-target="#level21"><span><span class='glyphicon glyphicon-arrow-right'></span>Các bộ môn</span></a></li>
                            <div id="level21" class="collapse">
                            <?php
                                foreach ($departmentList as $department){
                                    echo "<li class='list-group-item'>";
                                    echo "<a onclick='load(\"intro\",\"mainpage/infoDepartment/$department[departmentId]\")'><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;$department[departmentName]</span></a>";
                                    echo "</li>";
                                }
                            ?>
                            </div>
                            <li class="list-group-item"><a data-toggle="collapse" data-target="#level22"><span><span class='glyphicon glyphicon-arrow-right'></span>Các phòng thí nghiệm</span></a></li>
                            <div id="level22" class="collapse">
                                <?php
                                foreach ($laboratoryList as $laboratory){
                                    echo "<li class='list-group-item'>";
                                    echo "<a onclick='load(\"intro\",\"mainpage/infoLaboratory/$laboratory[laboratoryId]\")'>
									<span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-&nbsp;&nbsp;
									$laboratory[laboratoryName]</span></a>";
                                    echo "</li>";
                                }
                                ?>
                            </div>
                        </div>
                        <li class="list-group-item">
                        <a onclick="load('intro','Mainpage/teacherByFaculty/<?php echo $facultyId;?>')">
                        <span>Giảng viên</span></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div id="intro" class="col-sm-9">

        </div>
    </div>
</div>
<script>
    $(document).ready( function(){
        load('intro','Mainpage/infoFaculty/<?php echo $facultyId;?>');
    });
</script>
