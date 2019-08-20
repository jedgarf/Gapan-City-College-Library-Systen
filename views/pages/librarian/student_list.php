
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
<div class="container-fluid">
  <ul class="breadcrumb">
  	<li class="breadcrumb-item"><a href="#" onclick="jsInit()">Dashboard</a></li>
    <li class="breadcrumb-item">Book</li>
    <li class="breadcrumb-item active">Student List</li>
  </ul>
</div>
</div>

<section class="mt-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3">
				<a href="#" class="btn btn-primary mx-4 px-4" data-toggle="modal" data-target="#addStudent"><i class="fa fa-plus"></i> Add Student</a>
			</div>
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				<table id="tbl_studentlist" class="table table-hover">
					<thead>
						<tr>
							<th>Student Photo</th>
							<th>Student ID</th>
							<th>Student Name</th>
							<th>Gender</th>
							<th>Course</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="tblstudlist-view">
						<!-- Student List Table -->
					</tbody>
					<script type="text/javascript">
						$(document).ready(function () {
							$("#tblstudlist-view").load("../../../models/tbl_addstudent.php");
						});
					</script>
				</table>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
				
			</div>
		</div>
	</div>

</section>