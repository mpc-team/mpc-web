<?php
	$ROOT = '..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$LOGINFORM);
	include_once($ROOT . PathDir::$HEADER);
	
	session_start();
	if (isset($_SESSION["USER"])) {
		header("Location: {$ROOT}/profile/index.php");
	}
	$query=$_SERVER["QUERY_STRING"];
	if(strlen($query) > 0) $query="?".$query;
	$action='complete.php'.$query;
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
 ?>
</head>
<body>
	<div class="container-fluid">
		<?php 
			$signed = isset($_SESSION["USER"]);
			$user = ($signed) ? $_SESSION["USER"] : NULL;
			PrintNavbar("login", $ROOT, $signed, $user, $_SERVER["QUERY_STRING"]); 
		?>	
	</div>
	<div class="container">
		<div class="content">
			<div class="panel-login">
				<img src="../pics/mpclogo.png" class="img-responsive" id="image-banner-login"/>
				<div class="panel panel-default">
					<h1>Login</h1>
					<?="<form role='form' action='{$action}' method='post'>";?>
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
						<?="</form>"; ?>
				</div>
				<div class="text-center signup-text">	
					<h5>New to the site? <a href="./signup/index.php">Click here to sign-up/register</a>.</h5>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>
</html>