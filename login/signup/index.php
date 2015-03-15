
<?php

	$ROOT = '../..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$NAVBAR);
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$LOGINFORM);
	include_once($ROOT . PathDir::$SIGNUPFORM);
	include_once($ROOT . PathDir::$HTMLHEADER);
	
	$IMG_BRAND = $ROOT . '/pics/mpcbrand.png';
 ?>
 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
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
	
		<?php PrintNavbar("index", $ROOT); ?>
		
	</div>

	<div class="container">
		<form role="form" action="complete.php" method="post">
			<div class="row">
				<div class="col-xs-6">
			
					<?php PrintSignupForm($ROOT); ?>
			
				</div>
				
				<div class="col-xs-6">
			
					<?php echo "<img src='$IMG_BRAND' class='img-rounded' width='350px' height='350px'>"; ?>
					
				</div>
			</div>
		</form>
	</div>
	
	<div class="container-fluid">
	
		<?php PrintFooter($ROOT); ?>

	</div>
</body>

</html>