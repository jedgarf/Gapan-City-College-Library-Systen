<?php

require '../config/mysqli_connect.php';

$stud_id = $conn->real_escape_string($_POST['stud_id']);
$stud_fname = $conn->real_escape_string($_POST['stud_fname']);
$stud_mname = $conn->real_escape_string($_POST['stud_mname']);
$stud_lname = $conn->real_escape_string($_POST['stud_lname']);
$stud_nameext = $conn->real_escape_string($_POST['stud_nameext']);
$stud_con = $conn->real_escape_string($_POST['stud_con']);
$stud_gender = $conn->real_escape_string($_POST['stud_gender']);
$stud_course = $conn->real_escape_string($_POST['stud_course']);
$stud_status = "activated";
$stud_image = $stud_fname . $stud_mname . $stud_lname . date("ymdhis") . ".jpg";

$sql = "insert into tbl_student (stud_id, stud_fname, stud_mname, stud_lname, stud_extend, stud_contact, stud_img, stud_course, stud_gender, stud_status) values ('$stud_id', '$stud_fname', '$stud_mname', '$stud_lname', '$stud_nameext', '$stud_con', '$stud_image', '$stud_course', '$stud_gender', '$stud_status')";

if ($conn->query($sql)) {
	if (move_uploaded_file($_FILES['stud_image']['tmp_name'], "../storage/uploads/" . $stud_image)) {
		echo "<i class='fa fa-check'></i> This Account is Successfully Saved!";
	}else{
		echo "<i class='fa fa-warning'></i> Your Image is not Uploaded!";
	}
}else{
	echo "<i class='fa fa-warning'></i> This Student is Already Exist!";
}
