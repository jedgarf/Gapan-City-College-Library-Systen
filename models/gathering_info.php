
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];
$uname = $conn->real_escape_string($_POST['uname']);
$type = $conn->real_escape_string($_POST['type']);

// Prepared Statement
$sql = $conn->prepare("select acc_image, acc_type, acc_fulname from tbl_account where acc_type = ? and acc_uname = ?");
$sql->bind_param("ss", $type, $uname);
$sql->execute();

$result = $sql->get_result();

$row = $result->fetch_assoc();


if ($result->num_rows > 0) {
	$arr['rows'] = true;
	$arr['photo'] = $row['acc_image'];
	$arr['type'] = $row['acc_type'];
	$arr['fullname'] = $row['acc_fulname'];

}else{
	$arr['rows'] = false;
}

echo json_encode($arr);

$sql->close();


