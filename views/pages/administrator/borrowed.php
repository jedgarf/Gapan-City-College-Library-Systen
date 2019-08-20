
<!-- Breadcrumb-->
<div class="breadcrumb-holder">
<div class="container-fluid">
  <ul class="breadcrumb">
  	<li class="breadcrumb-item"><a href="#" onclick="jsInit()">Dashboard</a></li>
    <li class="breadcrumb-item active">Book Borrowing</li>
  </ul>
</div>
</div>

<script type="text/javascript">
	$('#stud-id').trigger('focus');
</script>

<section class="mt2">
	<div class="container-fluid">

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<fieldset class="mt-2">
					<legend>Borrower ID</legend>
					<form action="#" method="POST" autocomplete="off" onsubmit="">
						<div class="row justify-content-center">
							<div class="form-group">
								<input type="text" name="stud_id" id="stud-id" class="form-control" placeholder="Enter Student ID">
							</div>
						</div>
					</form>
					<div class="container-fluid">
						dgfd
					</div>
				</fieldset>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6">
				<fieldset class="mt-2">
					<legend>Search books</legend>
					<form class="form-inline" action="#" method="POST" autocomplete="off" onsubmit="">
						<div class="container-wrapper">
							<div class="input-group">
								<input type="text" name="stud_id" id="stud-id" class="form-control" placeholder="Enter Book Name">
								<div class="input-group-append">
									<select class="custom-select">
										<option>English</option>
										<option>Math</option>
										<option>Programming</option>
									</select>
								</div>
							</div>
						</div>
					</form>
					<div class="container-fluid">
						dgfd
					</div>
				</fieldset>
			</div>
		</div>

		<div class="row d-none">
			<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-xl-8">
				<fieldset class="mt-2">
					<legend>Borrowing Form</legend>
					<form class="form-inline" action="#" method="POST" autocomplete="off" onsubmit="">
						<div class="form-group">
							<label for="stud-id" class="text-mute sr-only">Book Barcode: </label>
							<input type="text" name="stud_id" id="stud-id" class="form-control" placeholder="Enter Book Barcode">
						</div>
					</form>
				</fieldset>
			</div>
			<div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 col-xl-4">
				<fieldset class="mt-2">
					<legend>Book Preview</legend>
				</fieldset>
			</div>
		</div>
	</div>
</section>