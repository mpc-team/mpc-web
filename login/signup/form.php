<?php
function PrintSignupForm ($root_path) {
	$print = <<<EOD
		<div class="form-group" id='signup-email'>
			<label class="control-label" for="email">Email:</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="John@mpcgaming.com" required>
		</div>
		<div class="form-group" id='signup-pw'>
			<label class="control-label" for="password">Password:</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
		</div>
		<div class="form-group" id='signup-confirm'>
			<label class="control-label" for="password">Confirm Password:</label>
			<input type="password" name="confirm" class="form-control" id="confirm" placeholder="Re-enter password" required>
		</div>
		<div class="form-group" id='signup-alias'>
			<label class="control-label" for="alias">Alias:</label>
			<input type="text" name="alias" class="form-control" id="alias" placeholder="Name or game tag, or a sequence of 'k's, 'l's, and 'r's" required>
		</div>
		<input style="margin-top: 40px;" class="btn btn-success pull-right" type="submit" value="Sign Up"/>	
EOD;
	echo $print;
	
}
 ?>
