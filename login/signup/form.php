<?php
function PrintSignupForm ($root) {
	echo<<<EOD
		<div class="form-group form-signup has-feedback" id="input-signup-email">
			<label class="control-label" for="email">Email:</label>
			<input type="email" name="email" class="form-control" id="email" placeholder="address@example.com" required>
		</div>
		<div class="form-group form-signup has-feedback" id="input-signup-pass">
			<label class="control-label" for="password">Password:</label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
		</div>
		<div class="form-group form-signup has-feedback" id="input-signup-confirm">
			<label class="control-label" for="password">Confirm Password:</label>
			<input type="password" name="confirm" class="form-control" id="confirm" placeholder="Re-enter password" required>
		</div>
		<div class="form-group form-signup has-feedback" id="input-signup-alias">
			<label class="control-label" for="alias">Alias:</label>
			<input type="text" name="alias" class="form-control" id="alias" placeholder="Name or game tag, or a sequence of 'k's, 'l's, and 'r's" required>		
		</div>
		<button class="btn btn-signup pull-right" type="submit">
			<span class="glyphicon glyphicon-new-window"></span>
			Create Account 
		</button>
EOD;
}
 ?>
