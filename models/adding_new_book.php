
<?php

require '../config/mysqli_connect.php';

// Declaring Variable
// This is the name of datas is corresponded form
// book_image, book_barcode, book_title, book_author, book_category, book_isbn, book_publisher, book_publishdate

$arr = [];
$book_image = $conn->real_escape_string($_POST['book_title']);;
$book_barcode = $conn->real_escape_string($_POST['book_barcode']);
$book_title = $conn->real_escape_string($_POST['book_title']);
$book_author = $conn->real_escape_string($_POST['book_author']);
$book_category = $conn->real_escape_string($_POST['book_category']);
$book_isbn = $conn->real_escape_string($_POST['book_isbn']);
$book_publisher = $conn->real_escape_string($_POST['book_publisher']);
$book_publishdate = $conn->real_escape_string($_POST['book_publishdate']);
$book_remarks = "Available";
$book_fimage = $book_image . date("ymdhisa") . ".jpg";

// Prepared Statement
$sql = $conn->prepare("insert into tbl_book (bk_barcode, bk_author, bk_title, bk_category, isbn, bk_img, bk_publisher, bk_publishdate, bk_remarks) values (?, ?, ?, ?, ?, ?, ?, ?, ?)");
$sql->bind_param("sssssssss", $book_barcode, $book_author, $book_title, $book_category, $book_isbn, $book_fimage, $book_publisher, $book_publishdate, $book_remarks);

if ($sql->execute()) {
	if (move_uploaded_file($_FILES["book_image"]["tmp_name"], "../storage/uploads/book_image/" . $book_fimage)) {
		echo "true";
	}else{
		echo "false";
	}
}else{
	echo "false";
}

$sql->close();


