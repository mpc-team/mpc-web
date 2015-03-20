<?php
	$ROOT = '../..';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$LOGINFORM);
	include_once($ROOT . PathDir::$SIGNUPFORM);
	include_once($ROOT . PathDir::$HEADER);
	
	$IMG_BRAND = $ROOT . '/pics/mpcbrand.png';
	
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
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
	PrintJavaScriptResource( PathDir::GetJSPath($ROOT, 'util.js') );
 ?>
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("index", $ROOT); ?>
	</div>
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-xs-8" id="signup-form">
					<form role="form" action="complete.php" method="post" onsubmit="return validateSignup()">
						<?php PrintSignupForm($ROOT); ?>
					</form>
				</div>
				<div class="col-xs-4">			
					<?php echo "<img src='$IMG_BRAND' class='img-rounded' width='350px' height='350px'>"; ?>					
				</div>
			</div>
		</div>
	</div>	
	<div class="container-fluid">	
		<?php PrintFooter($ROOT); ?>
	</div>
	<script type="text/javascript">
		$(document).ready(function() {
			$("#signup-email").keyup(function () { validateSignup(); });
			$("#signup-email").change(function () { validateSignup(); });
			$("#signup-pw").keyup(function () { validateSignup(); });
			$("#signup-pw").change(function () { validateSignup(); });
			$("#signup-confirm").keyup(function () { validateSignup(); });
			$("#signup-confirm").change(function () { validateSignup(); });
			$("#signup-alias").keyup(function () { validateSignup(); });
			$("#signup-alias").change(function () { validateSignup(); });
		});
	</script>
</body>
</html>