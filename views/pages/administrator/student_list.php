
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
<div class="container-fluid">
  <ul class="breadcrumb">
  	<li class="breadcrumb-item"><a href="#" onclick="jsInit()">Dashboard</a></li>
    <li class="breadcrumb-item">Student</li>
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
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<table id="myTable" class="table table-hover" onload="viewstudTable($('#t-body'))">
					<thead>
						<tr>
							<th>Student Name</th>
							<th>Actions</th>
						</tr>
					</thead>
					<tbody id="t-body">
						<!-- Table Content -->
					</tbody>
				</table>
			</div>
			<div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="card">
					<div class="card-header text-center">
						<h6>Book Preview</h6>
					</div>
					<div class="card-body text-center">
						<img src="../../../" alt="Book Photo"><br><br>
						<b><label>Book Name: </label></b><label>Programming 1</label><br>
						<b><label>Book Description: </label></b><label>Web Development</label><br>
					</div>
				</div>
			</div>
		</div>
	</div>

<!--<script type="text/javascript">
$(document).ready(function () {
    $('#myTable').DataTable();
});
</script>-->

</section>