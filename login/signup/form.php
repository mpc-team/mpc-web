<?php
function PrintSignupForm ($root_path) {
	$print = <<<EOD
		<div class="form-group form-signup">
			<div class="input-group" id='signup-email'>
				<label class="control-label" for="email">Email:</label>
				<input type="email" name="email" class="form-control" id="email" placeholder="address@example.com" required>
			</div>
		</div>
		<div class="form-group form-signup">
			<div class="input-group" id='signup-pw'>
				<label class="control-label" for="password">Password:</label>
				<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
			</div>
		</div>
		<div class="form-group form-signup">
			<div class="input-group" id='signup-confirm'>
				<label class="control-label" for="password">Confirm Password:</label>
				<input type="password" name="confirm" class="form-control" id="confirm" placeholder="Re-enter password" required>
			</div>
		</div>
		<div class="form-group form-signup">
			<div class="input-group" id='signup-alias'>
				<label class="control-label" for="alias">Alias:</label>
				<input type="text" name="alias" class="form-control" id="alias" placeholder="Name or game tag, or a sequence of 'k's, 'l's, and 'r's" required>
			</div>
		</div>
		<input class="btn btn-signup pull-right" type="submit" value="Sign Up"/>	
EOD;
	echo $print;
	
}
 ?>
