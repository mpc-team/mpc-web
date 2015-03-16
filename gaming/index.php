
<?php

	$ROOT = '..';
	
	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	
	session_start();
 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
<?php 
	PrintJavaScriptResource( PathDir::GetJQueryPath($ROOT) );
	PrintStyleResource( PathDir::GetBootstrapCSSPath($ROOT) );
	PrintJavaScriptResource( PathDir::GetBootstrapJSPath($ROOT) );
	PrintStyleResource( PathDir::GetCSSPath($ROOT, 'global.css') );
 ?>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
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
		<div class="row">
			<div class="page-header pull-right"><h1>Who do we play?</h1></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-9"></div>
		</div>
			<div class="row">
			<div class="page-header pull-right"><h1>How do we play?</h1></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-9"></div>
		</div>
			<div class="row">
			<div class="page-header pull-right"><h1>Where do we play?</h1></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-9"></div>
		</div>
			<div class="row">
			<div class="page-header pull-right"><h1>Why do we play?</h1></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-9"></div>
		</div>
			<div class="row">
			<div class="page-header pull-right"><h1>When do we play?</h1></div>
				<div class="col-xs-3"></div>
				<div class="col-xs-9"></div>
		</div>
		


	</div><!--container--> 
	
	<div class="container-fluid">
	
		<?php PrintFooter($ROOT); ?>
		
	</div>
</body>

</html>
