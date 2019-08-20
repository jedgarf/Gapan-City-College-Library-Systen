
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
$arr = [];
$forgot_uname = $conn->real_escape_string($_POST['quest_username']);
$forgot_quest = $conn->real_escape_string($_POST['forgotQuest']);
$forgot_ans = $conn->real_escape_string($_POST['forgotAns']);

// Prepared Statement
$sql = $conn->prepare("select 1 from tbl_account where (acc_question = ? and acc_answer = ?) and acc_uname = ?");
$sql->bind_param("sss", $forgot_quest, $forgot_ans, $forgot_uname);
$sql->execute();

$result = $sql->get_result();

if ($result->num_rows > 0) {
	$arr['status'] = "true";

}else{
	$arr['status'] = "false";
}

echo json_encode($arr);

$sql->close();


