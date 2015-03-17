<?php
function PrintLoginForm ($root) {
	$LBL_EMAIL = 'Email:';
	$LBL_PASSWORD = 'Password:';
	$LBL_REMEMBER = ' Remember me';
	$LBL_LOGIN = 'Login';
	$SIGNUP = $root . '/login/signup/index.php';
	$COMPLETE = $root . '/login/complete.php';
	echo <<<EOD
	<div id="login-form">
		<h2 style="color: #ffffff">Login</h2>	
		<form class="form-horizontal" role="form" action='{$COMPLETE}' method='post'>
			<div class="form-group login-form-group">
				<label class="col-sm-2 control-label"><h5>$LBL_EMAIL</h5></label>
				<div class="col-sm-10">
					<input type="email" class="form-control" name="email" id="email" placeholder="Email">
				</div>
			</div>
			<div class="form-group login-form-group">
				<label class="col-sm-2 control-label"><h5>$LBL_PASSWORD</h5></label>
				<div class="col-sm-10">          
					<input type="password" name="password" class="form-control" id="password" placeholder="Password">
				</div>   
			</div>
			<div class="form-group login-form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<label style="font-weight:normal; font-size:9pt;"> <input type="checkbox" name="remember"/>
						$LBL_REMEMBER
					</label>
				</div>
			</div>
			<div class="form-group login-form-group">
				<div class="col-sm-offset-2 col-sm-10">
					<input type="submit" class="btn btn-success" value="$LBL_LOGIN">
				</div>
			</div>
		</form>
		<div class="text-center">	
			<p>New Sign up? Please Click<a href="{$SIGNUP}"> Here</a></p>
		</div>
	</div>
EOD;
}

 ?>