
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];
$login_username = $conn->real_escape_string($_POST['username']);
$login_password = $conn->real_escape_string($_POST['password']);

// Prepared Statement
$sql = $conn->prepare("select acc_type from tbl_account where acc_uname = ? and acc_password = ?");
$sql->bind_param("ss", $login_username, md5($login_password));
$sql->execute();

$result = $sql->get_result();

$row = $result->fetch_assoc();


if ($result->num_rows > 0) {
	$arr['rows'] = true;
	$arr['uname'] = $login_username;
	$arr['type'] = $row['acc_type'];

}else{
	$arr['type'] = "null";
	$arr['rows'] = false;
}

echo json_encode($arr);

$sql->close();


