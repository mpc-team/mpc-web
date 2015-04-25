<?php
function LoginForm ($root) {
	$SIGNUP = $root . '/login/signup/index.php';
	$COMPLETE = $root . '/login/complete.php';
	return <<<EOD
		<div class="form-group form-login">
			<div class="input-group">
				<span class="input-group-addon">
					Email:
				</span>
				<input type="email" class="form-control" name="email" id="email" placeholder="address@example.com">
			</div>
		</div>
		<div class="form-group form-login">
			<div class="input-group">
				<span class="input-group-addon">
					Password:
				</span>     
				<input type="password" name="password" class="form-control" id="password" placeholder="Password">
			</div>   
		</div>
		<div class="row row-remember-me">
			<div class="form-group form-login">
				<div class="col-sm-4 col-sm-offset-1">
					<label> 
						<input type="checkbox" name="remember"/>
						<span>
							Remember me
						</span>
					</label>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="form-group form-login">
				<div class="col-sm-3 col-sm-offset-1">
					<input type="submit" class="btn btn-login" value="Login">
				</div>
			</div>
		</div>
EOD;
}

 ?>