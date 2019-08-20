
<table id="tbladdbook" class="table table-hover">
<thead>
	<tr>
		<th>Book ID</th>
		<th>Book Name</th>
		<th>Book Category</th>
		<th>Status</th>
		<th>Actions</th>
	</tr>
</thead>
<tbody id="tbladdbook-body">

<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];

// SQL Statement
$sql = "select * from tbl_book";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {

		echo "<tr>";
		echo "<td>" . $row['bk_id'] . "</td>";
		echo "<td>" . $row['bk_title'] . "</td>";
		echo "<td>" . $row['bk_category'] . "</td>";
		echo "<td>" . $row['bk_remarks'] . "</td>";
		echo "<td><button type='button' class='btn btn-danger btn-sm'><i class='fa fa-edit'></i> Edit</button> | <a href='#book-preview'><button type='button' class='btn btn-primary btn-sm' id='bkcatview-button" . $row['bk_id'] . "'><i class='fa fa-eye'></i> View</button></a></td>";
		echo "</tr>";
		
		echo '<script type="text/javascript">';
		echo '$("#bkcatview-button' . $row['bk_id'] . '").click(function () {
  					$("#tblbk-preview").load("../../../models/tbl_bookview.php?id=' . $row['bk_id'] . '", function () {
  							alert("hello");
  						});
 				});';
		echo "</script>";
	
	}

}

?>

</tbody>
</table>

<script type="text/javascript">


$(document).ready(function () {
    $('#tbladdbook').DataTable();
});
</script>