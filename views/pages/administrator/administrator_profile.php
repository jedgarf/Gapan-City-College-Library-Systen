<!-- Breadcrumb-->
<div class="breadcrumb-holder">
	<div class="container-fluid">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="#" onclick="jsInit()">Dashboard</a></li>
			<li class="breadcrumb-item">Settings</li>
			<li class="breadcrumb-item active">Administrator Profile</li>
		</ul>
	</div>
</div>

<script type="text/javascript">
	function adminphotoPreview(file) {
		$("#admin-photopreview").attr("src", "/var/www/html/lmsgcc/library/import-images/blocked.jpg");
	}
</script>

<section onload="" class="mt-4">
	<div class="container-fluid">
		<form action="" method="POST" autocomplete="off" onsubmit="">

			<div class="form-row">

				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6">
					<div class="form-group">
						<label for="admin-photo" class="text-mute">Photo Upload: </label>
						<input type="file" name="adminphoto" id="admin-photo" onchange="adminphotoPreview($(this))">
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 col-xl-6 text-right">
					<div class="form-group">
						<img src="home/var/www/html/lmsgcc/library/import-images/blocked.jpg" alt="Profile Photo" id="admin-photopreview">
					</div>		
				</div>

				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<div class="form-group">
						<label for="fname" class="text-mute">First Name: </label>
						<input type="text" name="fname" id="fname" class="form-control">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<div class="form-group">
						<label for="mname" class="text-mute">Middle Name: </label>
						<input type="text" name="mname" id="mname" class="form-control">
					</div>		
				</div>
				<div class="col-xs-12 col-sm-12 col-md-6 col-lg-4 col-xl-4">
					<div class="form-group">
						<label for="lname" class="text-mute">Last Name: </label>
						<input type="text" name="lname" id="lname" class="form-control">
					</div>					
				</div>

			</div>
			
			
		</form>
	</div>
</section>