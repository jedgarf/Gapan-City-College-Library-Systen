
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
// This is the name of datas is corresponded form
// bkcat_name

$arr = [];
$bkcat_name = $conn->real_escape_string($_POST['bkcat_name']);

// Prepared Statement
$sql = $conn->prepare("insert into tbl_bkcategory (cat_name) values (?)");
$sql->bind_param("s", $bkcat_name);

if ($sql->execute()) {
	$arr["status"] = "true";
}else{
	$arr["status"] = "false";
}

echo json_encode($arr);
$sql->close();


