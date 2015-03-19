<?php
function PrintLoginForm ($root) {
	$LBL_EMAIL = 'Email:';
	$LBL_PASSWORD = 'Password:';
	$LBL_REMEMBER = ' Remember me';
	$LBL_LOGIN = 'Login';
	$SIGNUP = $root . '/login/signup/index.php';
	$COMPLETE = $root . '/login/complete.php';
	echo <<<EOD
		<div class="form-group form-login">
			<div class="input-group">
				<span class="input-group-addon">{$LBL_EMAIL}</span>
				<input type="email" class="form-control" name="email" id="email" placeholder="address@example.com">
			</div>
		</div>
		<div class="form-group form-login">
			<div class="input-group">
				<span class="input-group-addon">{$LBL_PASSWORD}</span>     
				<input type="password" name="password" class="form-control" id="password" placeholder="Password">
			</div>   
		</div>
		<div class="form-group form-login">
			<div class="col-sm-offset-2 col-sm-10">
				<label style="font-weight:normal; font-size:9pt;"> <input type="checkbox" name="remember"/>
					$LBL_REMEMBER
				</label>
			</div>
		</div>
		<div class="form-group form-login">
			<div class="col-sm-offset-2 col-sm-10">
				<input type="submit" class="btn btn-login" value="$LBL_LOGIN">
			</div>
		</div>
EOD;
}

 ?>