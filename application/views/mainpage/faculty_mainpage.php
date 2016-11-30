<div id="content" class="center">
    <div class="container">
        <div class="col-sm-3">
            <div class="panel panel-primary">
                <div class="panel-heading"><?php echo $facultyName;?></div>
                <div class="panel-body">
                    <ul class="menu-sidebar list-group">
                        <li class="list-group-item"><a href="#"><span>Ban chủ nhiệm</span></a></li>
                        <li id="bmptn" class="list-group-item"> <a data-toggle="collapse" data-target="#level1"><span>Bộ môn và phòng thí nghiệm</span></a>
                        </li>
                        <div id="level1" class="collapse">
                            <li class="list-group-item"><a data-toggle="collapse" data-target="#level21"><span>&nbsp;&nbsp;&nbsp;&nbsp;Các bộ môn</span></a></li>
                            <div id="level21" class="collapse">
                            <?php
                                foreach ($departmentList as $department){
                                    echo "<li class='list-group-item'>";
                                    echo "<a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$department[departmentName]</span></a>";
                                    echo "</li>";
                                }
                            ?>
                            </div>
                            <li class="list-group-item"><a data-toggle="collapse" data-target="#level22"><span>&nbsp;&nbsp;&nbsp;&nbsp;Các phòng thí nghiệm</span></a></li>
                            <div id="level22" class="collapse">
                                <?php
                                foreach ($laboratoryList as $laboratory){
                                    echo "<li class='list-group-item'>";
                                    echo "<a><span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$laboratory[laboratoryName]</span></a>";
                                    echo "</li>";
                                }
                                ?>
                            </div>
                        </div>
                        <li class="list-group-item"><a onclick="load('intro','Mainpage/teacherByFaculty/<?php echo $facultyId;?>')"><span>Giảng viên</span></a></li>
                    </ul>
                </div>
            </div>

        </div>
        <div id="intro" class="col-sm-9">

        </div>
    </div>
</div>

