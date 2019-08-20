
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];
$forgot_username = $conn->real_escape_string($_POST['forgotUn']);

// Prepared Statement
$sql = $conn->prepare("select 1 from tbl_account where acc_uname = ?");
$sql->bind_param("s", $forgot_username);
$sql->execute();

$result = $sql->get_result();

if ($result->num_rows > 0) {
	$arr['status'] = "true";

}else{
	$arr['status'] = "false";
}

echo json_encode($arr);

$sql->close();


