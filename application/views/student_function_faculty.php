<p>Danh sách sinh viên</p>
<button onclick="load('main','StudentFunctionFaculty/updateStudent')">Cập nhật danh sách</button>

<table class="table">
<thead>
<td>MSSV</td>
<td>Họ và tên</td>
<td>Lớp</td>
</thead>
<tbody>
<?php
	foreach($hello as $student){
		echo "<tr>";
		echo "<td>$student[studentId]</td>";
		echo "<td>$student[studentName]</td>";
		echo "<td>$student[studentClass]</td>";
		echo "</tr>";
	}
?>
</tbody>
</table>