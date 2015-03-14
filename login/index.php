<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="/bootstrap/js/jquery-1.11.2.js" type="text/jscript"></script>
	<link href="/bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<script src="/bootstrap/js/bootstrap.js" type="text/jscript"></script>
	<link href="/includes/css/global.css" rel="stylesheet"/>
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>

	<?php
		include_once('../includes/navbar.php');
		include_once('../includes/footer.php');
		include_once('../login/form.php');
	 ?>

	<div class="container-fluid">
	
		<?php PrintNavbar("login"); ?>
		
	</div>
		
	<div class="container">
		<div class="row">
		
			<div class="col-md-8">
				<img src="../pics/mpclogo.png" class="img-responsive" alt="mpclogo.png"/>
				<?php PrintLoginForm(); ?> 
			</div>
				
		</div>
	</div>

	<div class="container-fluid">
	
		<?php PrintFooter(); ?>
		
	</div>

</body>

</html>
