<div class="card">
	<div class="card-body p-4">
		<div class="row">
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5">
				<img src="../../../" alt="Book Photo" width="">
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-7 text-left">
				<?php
				require '../config/mysqli_connect.php';
				// Declaring Variable
				$id = $conn->real_escape_string($_GET['id']);
				// Prepared Statement
				$sql = $conn->prepare("select * from tbl_book where bk_id = ?");
				$sql->bind_param("i", $id);
				$sql->execute();
				$result = $sql->get_result();
				$row = $result->fetch_assoc();
				if ($result->num_rows > 0) {
					while ($row) {
						echo "<b><label>Book ID: </label></b> <span>" . $row['bk_id'] . "</span><br>";
						echo "<b><label>Book Title: </label></b> <span>" . $row['bk_title'] . "</span><br>";
						echo "<b><label>Book Author: </label></b> <span>" . $row['bk_author'] . "</span><br>";
						echo "<b><label>Book ISBN: </label></b> <span>" . $row['isbn'] . "</span><br>";
						echo "<b><label>Book Publisher: </label></b> <span>" . $row['bk_publisher'] . "</span><br>";
						echo "<b><label>Book Publishing Date: </label></b> <span>" . $row['bk_publishdate'] . "</span><br>";
						echo "<b><label>Book Date Added: </label></b> <span>" . $row['bk_date_add'] . "</span><br>";
						echo "<b><label>Book Remarks: </label></b> <span>" . $row['bk_remarks'] . "</span><br>";
					}
				}else{
			
				}
				//echo json_encode($arr);
				$sql->close();
				?>
				
			</div>
		</div>
	</div>
</div>