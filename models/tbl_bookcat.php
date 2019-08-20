
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];

// SQL Statement
$sql = "select * from tbl_bkcategory";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {

		echo "<tr>";
		echo "<td>" . $row['cat_id'] . "</td>";
		echo "<td>" . $row['cat_name'] . "</td>";
		echo "<td>" . $row['cat_dateadd'] . "</td>";
		echo "<td><button type='button' class='btn btn-danger btn-sm'><i class='fa fa-edit'></i> Edit</button> | <button type='button' class='btn btn-sm-primary btn-sm' id='bkcat-view'><i class='fa fa-eye'></i> View</button></td>";
		echo "</tr>";
	
	}

}

?>


