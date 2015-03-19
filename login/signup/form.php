<?php
function PrintSignupForm ($root_path) {
	$print = <<<EOD
	<div class="signup-form">
		<div class="form-group">
			<label for="email"><p>Email:</p></label>
			<input type="email" name="email" class="form-control" id="email" placeholder="John@mpcgaming.com" required>
		</div>
		<div class="form-group">
			<label for="password"><p>Password:</p></label>
			<input type="password" name="password" class="form-control" id="password" placeholder="Password" required>
		</div>
		<div class="form-group">
			<label for="password"><p>Confirm Password:</p></label>
			<input type="password" name="confirm" class="form-control" id="confirm" placeholder="Re-enter password" required>
		</div>
		<div class="form-group">
			<label for="alias"><p>Alias:</p></label>
			<input type="text" name="alias" class="form-control" id="alias" placeholder="Name or game tag, or a sequence of 'k's, 'l's, and 'r's" required>
		</div>
		<input style="margin-top: 40px;" class="btn btn-success pull-right" type="submit" value="Sign Up"/>	
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#confirm").formValidation({
				framework: 'bootstrap',
				fields: {
					confirm: {
						validators: {
							identical: {
								field: 'password',
								message: 'Password-confirmation does not match password.'
						}
					}
				}
			});
		});
	</script>
EOD;
	echo $print;
	
}
 ?>
