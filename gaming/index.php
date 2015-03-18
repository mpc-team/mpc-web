<?php
	$ROOT = '..';
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
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
<?php
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapSidebarCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
	<meta name="keywords" content="mpc, clan mpc, clanmpc, mpcgaming, mpc gaming, gaming clan, multiplayer clan, multiplayer">
	<meta name="description" content="Multi-Player Clan - Gaming community hosting tournaments for various games including StarCraft II, Heroes of the Storm, Counter-Strike: Global Offense.">
</head>
<body>
	<div class="container-fluid">
		<?php PrintNavbar("gaming", $ROOT); ?>
	</div>
	<div class="container">
		<div class="row">
			<div class="page-header text-center">
				<h1>What do we play?</h1>
			</div>
			<div class="col-xs-3">
				<img src="../pics/starcraft2-heart-of-the-swarm-logo.jpg" id="sc2logo-img" alt="starcraft2-heart-of-the-swarm-logo.jpg" class="img-reponsive" style="max-width: 75%; max-height: 75%;" />
			</div>
			<div class="col-xs-3">
				<img src="../pics/cs-go-logo.png" id="csgologo-img" alt="cs-go-logo.png" class="img-reponsive" style="max-width: 100%; max-height: 100%;" />
			</div>
			<div class="col-xs-3">
					<img src="../pics/blizzardwowlogo.PNG" id="blizzardwowlogo-img" alt="blizzardwowlogo.PNG" class="img-responsive" />
			</div>
			<div class="col-xs-3">
				<img src="../pics/leagueoflegendslogo.png" id="leagueofleagends-img" alt="leagueoflegendslogos.png" class="img-responsive" style="padding-top: 10px;" />
			</div>
		</div>
	</div>
	<div class="container-fluid">
		<?php PrintFooter($ROOT); ?>
	</div>
</body>

</html>
