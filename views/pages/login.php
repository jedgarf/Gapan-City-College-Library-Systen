
<?php require '../includes/header.php'; ?>

<div class="mt-5">

	<div class="container-fluid">
		<div class="row">
			<div class="col-xl-5 col-lg-5 col-md-5 col-sm-12 col-xs-12">
				<div id="login-card" class="card">
					<div class="card-body">
						<div id="login-form">
		
							<form method="POST" action="../../models/login_validate.php" onsubmit="loginval(event, $(this), $('#login-msg'))" autocomplete="off">
								
								<div id="login-msg" class="form-group text-center">
									<!-- Login message here -->	
								</div>

								<div class="form-group">
									<label for="username" class="text-mute">Username: </label>
									<div class="input-group">
										<div class="input-group-prepend">
										    <span class="input-group-text"><i class="fa fa-user"></i></span>
										 </div>	
										<input type="text" name="username" id="username" class="form-control" required>
									</div>
									
								</div>

								<div class="form-group">
									<label for="password" class="text-mute">Password: </label>
									<div class="input-group">
										 <div class="input-group-prepend">
										    <span class="input-group-text"><i class="fa fa-lock"></i></2span>
										  </div>
										<input type="password" name="password" id="password" class="form-control" required>
									</div>
								</div>
								<div class="form-group">
									<div class="row">
										<div class="col-xs-7 col-sm-7 col-md-6 col-lg-6 col-xl-6 text-left">
											<input type="checkbox" name="eye" id="eye" onchange="see()">
											<label id="eye-label" for="eye">Show Password</label>
										</div>
										<div class="col-xs-5 col-sm-5 col-md-6 col-lg-6 col-xl-6 text-right">
											<a href="#" data-toggle="modal" data-target="#forgot-pass">Forgot Password?</a>
										</div>
									</div>
								</div>
								<div class="form-group text-right">
									<!-- <input type="reset" name="reset" value="Reset" class="btn btn-danger"> -->
									<input type="submit" name="submit" value="Login" class="btn btn-primary">
								</div>

							</form>

						</div>
					</div>
				</div>
			</div>
			<div class="col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12">
				
			</div>
		</div>
	</div>

</div>

<?php require '../includes/footer.php'; ?>