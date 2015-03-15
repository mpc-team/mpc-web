<?php

################################################################
#
#
#	PrintLoginForm ()
#
#		Prints Login form. 
#
#
################################################################

function PrintLoginForm ($root_path) {

	$signup_path = $root_path . '/login/signup/index.php';
	$print = <<<EOD
	
	<div class="login-form">
		<h2 style="color: #fff">Login</h2>
		<div class="form-group">
			<div class="row">
				<div class="col-sm-2">
					<label class="control-label col-sm-2" for="email"><h4>Email:</h4></label>
				</div>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="email" placeholder="Enter email">
				</div>
			</div>
			<div class="row">
				<div class="col-sm-2">
					<label class="control-label col-sm-2" for="pwd"><h4>Password:</h4></label>
				</div>      
				<div class="col-sm-10">          
					<input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
				</div>      
			</div>
			<div class="col-sm-offset-2 col-sm-10">
				<div class="checkbox">
					<label><input type="checkbox" name="remember"><h6>Remember me</h6></label>
				</div>
			</div>
			<div class="col-sm-offset-2 col-sm-10">
				<input class="btn btn-success" type="submit" value="Login">
			</div>
		</div>
		<small class="text-center">
			<p>New Sign up? Please Click<a href="$signup_path"> Here</a></p>
		</small>
	</div>

EOD;
	echo $print;
	
}

 ?>
