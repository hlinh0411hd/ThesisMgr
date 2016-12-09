<?php
/**
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/19/2016
 * Time: 2:04 AM
 */
?>
<body>
    <div id="content" class="center row">
     <div class="container"> 
        <div class="col-sm-2">
            <div class="panel panel-primary" >
              <!-- Default panel contents -->
              <div class="panel-heading"><?= $usernameSession;?></div>
                  <ul class="list-group ">
                    <li class="list-group-item"><a onclick="load('main','InfoFunctionTeacher')"><span>Thông tin cá nhân</span></a></li>
                    <li class="list-group-item"><a onclick="load('main','ResearchFunctionTeacher')"><span>Lĩnh vực nghiên cứu</span></a></li>
                    <li class="list-group-item"><a onclick="load('main','pagination?page=thesis&condition=tethesis')"><span>Khóa luận</span></a></li>
                    <li class="list-group-item"><a onclick="load('main','TeacherFunctionFaculty')"><span>Chức năng khác</span></a></li>              
                </ul>
            </div>  
        </div>
      <div class="box-right col-sm-10">
        <div id="main"></div>
      </div>
     </div>
    </div>
</body>
