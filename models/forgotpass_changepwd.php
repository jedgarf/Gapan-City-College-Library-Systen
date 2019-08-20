
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];
$forgot_uname = $conn->real_escape_string($_POST['user']);
$forgot_pwd = $conn->real_escape_string($_POST['pwd']);

// Prepared Statement
$sql = $conn->prepare("update tbl_account set acc_password = ? where acc_uname = ?");
$sql->bind_param("ss", md5($forgot_pwd), $forgot_uname);

if ($sql->execute()) {
	$arr['status'] = "true";

}else{
	$arr['status'] = "false";
}

echo json_encode($arr);

$sql->close();


