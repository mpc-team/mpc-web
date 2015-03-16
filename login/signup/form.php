<?php
function PrintSignupForm ($root_path) 
{
	$print = <<<EOD
	<div class="signup-form">
		<div class="form-group">
			<label for="alias"><p>Alias:</p></label>
			<input type="text" name="alias" class="form-control" id="alias">
			<label for="password"><p>Password:</p></label>
			<input type="password" name="password" class="form-control" id="password">
			<label for="email"><p>Email:</p></label>
			<input type="email" name="email" class="form-control" id="email" placeholder="John@mpcgaming.com">
			<input style="margin-top: 40px;" class="btn btn-success pull-right" type="submit" value="Sign Up">
		</div>
	</div>
EOD;
	echo $print;
	
}
 ?>
