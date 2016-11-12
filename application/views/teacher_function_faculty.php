<p>Danh sách giảng viên</p>
<button onclick="load('main','TeacherFunctionFaculty/updateTeacher')">Cập nhật danh sách</button>

<table class="table">
<thead>
<td>Mã giảng viên</td>
<td>Họ và tên</td>
<td>Bộ môn/Phòng thí nghiệm</td>
</thead>
<tbody>
<?php
	foreach($hello as $teacher){
		echo "<tr>";
		echo "<td>$teacher[teacherId]</td>";
		echo "<td>$teacher[teacherName]</td>";
		echo "<td>$teacher[departmentId]</td>";
		echo "</tr>";
	}
?>
</tbody>
</table>