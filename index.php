<?php
	/* The ROOT should be specified on ALL pages. We don't seem to have
		access to know what the ROOT folder is by conventional PHP (due to server situation).
		
		For single-nested folders, ".." is the root. For double-nested, "../..", and so on. */
	$ROOT = '.';
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HEADER);

	session_start();
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Multi-Player Clan</title>
	<meta name="viewport" content="width=device-width initial-scale=1"/>
	<meta name="keywords" content="multiplayer clan, multi player clan, mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
</head>
<body>
	<div class="container-fluid">	
		<?php PrintNavbar("index", $ROOT); ?>		
	</div>
	<div class="container">
		<div class="content">
			<div class="row">
				<div class="col-md-8">
					<img src="pics/mpclogo.png" class="img-responsive" alt="mpclogo.png" />			
				</div>
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="page-header text-center">
							<h1>Website Under Construction</h1>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>
</html>
