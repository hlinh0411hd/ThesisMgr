<!--
 * Created by PhpStorm.
 * User: Pham Minh Hoang Linh
 * Date: 11/12/2016
 * Time: 8:09 AM
 */
-->
<html>
<body >
<div id="content" class="center row">
 <div class="container"> 
 	<div class="col-sm-2">
	 	<div class="panel panel-primary" >
		  <!-- Default panel contents -->
            <div class="panel-heading">
                <?= $usernameSession;?>
            </div>
            <ul class="list-group ">
                <li class="list-group-item"><a onclick="load('main','student/info')"><span>Thông tin cá nhân</span></a></li>
                <li class="list-group-item"><a onclick="load('main','user/changePassword')"><span>Thay đổi mật khẩu</span></a></li>
                <li class="list-group-item"><a onclick="load('main','pagination?page=thesis&condition=student')"><span>Khóa luận</span></a></li>
                <li class="list-group-item"><a onclick="load('main','request');"><span>Danh sách yêu cầu</span></a></li>
            </ul>
        </div>
    </div>
    <div class="box-right col-sm-10">
        <div id="main"></div>
    </div>
 </div>
</div>
</body>
<script>
    $(document).ready( function(){
        load('main','student/info');
    });
</script>
</html>