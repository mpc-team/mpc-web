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
		<form class="form-horizontal" role="form">
			<div class="form-group">
				<label class="control-label col-sm-2" for="email"><h4>Email:</h4></label>
			<div class="col-sm-10">
				<input type="email" class="form-control" id="email" placeholder="Enter email">
			</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2" for="pwd"><h4>Password:</h4></label>
					<div class="col-sm-10">          
						<input type="password" class="form-control" id="pwd" placeholder="Enter password">
					</div>      
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
					<div class="checkbox">
						<label><input type="checkbox"><h6>Remember me</h6></label>
					</div>
				</div>
			</div>
			<div class="form-group">        
				<div class="col-sm-offset-2 col-sm-10">
				<a href="#" target="_blank"><button type="submit" class="btn btn-primary">Log In</button></a>
				</div>
			</div>
				<label for="indexnote"></label>
		</form>
			<small class="text-center"><p>New Sign up? Please Click<a href="$signup_path"> Here</a></p></small>
		<div class="login-form-spacer">...</div>
	</div>

EOD;
	echo $print;
	
}

 ?>
