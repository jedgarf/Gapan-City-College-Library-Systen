<!-- Breadcrumb-->
<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="#" onclick="jsInit()">Dashboard</a></li>
			<li class="breadcrumb-item">Book</li>
			<li class="breadcrumb-item active">Book List</li>
		</ul>
	</div>
</div>
<section class="mt-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 p-3">
				<a href="#" class="btn btn-primary mx-4 px-4" data-toggle="modal" data-target="#addBook"><i class="fa fa-plus"></i> Add Book</a>
			</div>
			<div id="tbladdbook-content" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
				
			</div>
			<script type="text/javascript">
				// Book Category Table
				$("#tbladdbook-content").load("../../../models/tbl_addbook.php");
			</script>
			
		</div>
		<hr>
		<fieldset id="book-preview" class="p-5">
			<legend>View Data</legend>
			<div class="container-fluid">
				<div class="row">
					<div id="tblbk-preview" class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="card">
							<div class="card-header text-center">
								<h6>Book Preview</h6>
							</div>
							<div class="card-body p-5">
								<div class="row">
									<div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 text-center">
										<img src="../../../" alt="Book Photo" width="">
									</div>
									<div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-7">
										<label>Book ID: </label><span id="bookid_view"></span><br>
										<label>Book Title: </label><span id="booktitle-view"></span><br>
										<label>Book Author: </label<span id="bookauthor-view"></span><br>
										<label>Book ISBN: </label<span id="bookisbn-view"></span><br>
										<label>Book Publisher: </label<span id="bookpublisher-view"></span><br>
										<label>Book Publishing Date: </label<span id="bookpublishdate-view"></span><br>
										<label>Book Date Added: </label<span id="bookdateadd-view"></span><br>
										<label>Book Remarks: </label<span id="bookremarks-view"></span><br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</fieldset>
	</div>
</div>
</section>