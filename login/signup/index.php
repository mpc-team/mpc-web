<?php
	$ROOT = '../..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$LOGINFORM);
	include_once($ROOT . PathDir::$SIGNUPFORM);
	include_once($ROOT . PathDir::$HEADER);
	
	$IMG_PATH = $ROOT . '/pics/mpcbrand.png';
	
	session_start();
	if (isset($_SESSION["USER"])) {
		header("Location: {$ROOT}/profile/index.php");
	}
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
<?php
	echo JavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	echo StyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	echo JavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	echo StyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	echo JavaScriptResource( PathDir::GetJSPath($ROOT, 'util.js') );
 ?>
</head>
<body>
	<div class="container-fluid">
		<?php 
			$signed = isset($_SESSION["USER"]);
			$user = ($signed) ? $_SESSION["USER"] : NULL;
			PrintNavbar("signup", $ROOT, $signed, $user, $_SERVER["QUERY_STRING"]); 
		?>	
	</div>
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-xs-8">
					<div class="content-signup">
						<form role="form" action="complete.php" metho d="post" onsubmit="return validateSignup()">
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
						</form>
					</div>
				</div>
				<div class="col-xs-4">			
					<?php echo <<<EOD
					<img src='{$IMG_PATH}' id='image-brand-login'>	
EOD;
					 ?>
				</div>
			</div>
		</div>
	</div>	
	<div class="container-fluid">	
		<?php PrintFooter($ROOT); ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#input-signup-email")   .keyup (  function(){ validateSignup(); });
			$("#input-signup-email")   .change(  function(){ validateSignup(); });
			$("#input-signup-pass")    .keyup (  function(){ validateSignup(); });
			$("#input-signup-pass")    .change(  function(){ validateSignup(); });
			$("#input-signup-confirm") .keyup (  function(){ validateSignup(); });
			$("#input-signup-confirm") .change(  function(){ validateSignup(); });
			$("#input-signup-alias")   .keyup (  function(){ validateSignup(); });
			$("#input-signup-alias")   .change(  function(){ validateSignup(); });
		});
	</script>
</body>
</html>