
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];

// SQL Statement
$sql = "select * from tbl_student";

$result = $conn->query($sql);

if ($result->num_rows > 0) {

	while ($row = $result->fetch_assoc()) {

		echo "<tr>";
		echo "<td><img href='../storage/uploads/" . $row['stud_img'] . "' alt='student photo' ></td>";
		echo "<td>" . $row['stud_id'] . "</td>";
		echo "<td>" . $row['stud_fname'] . " " . $row['stud_mname'] . " " . " " . $row['stud_lname'] . " " . $row['stud_ext'] . "</td>";
		echo "<td>" . $row['stud_gender'] . "</td>";
		echo "<td>" . $row['stud_course'] . "</td>";
		echo "<td><button type='button' class='btn btn-danger btn-sm'><i class='fa fa-edit'></i> Edit</button> | <a href=''><button type='button' class='btn btn-primary btn-sm' id='bkcatview-button'><i class='fa fa-eye'></i> View</button></a></td>";
		echo "</tr>";
	
	}

}else{
	echo "<tr>";
	echo "<td colspan='6' align='center'>No Record Found.</td>";
	echo "</tr>";
}

?>