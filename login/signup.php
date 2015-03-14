<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
	<title>Miacro Power Clan - MPC Gaming.com</title>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<script src="../bootstrap/js/jquery-1.11.2.js" type="text/jscript"></script>
	<link href="../bootstrap/css/bootstrap.css" rel="stylesheet"/>
	<script src="../bootstrap/js/bootstrap.js" type="text/jscript"></script>
	<link href="../index.css" rel="stylesheet"/><!--index only-->
	<meta name="keywords" content="MPC, SC2, MPCGaming.com"/>
	<meta name="description" content="SC2 MPC Gaming. Tournaments, Clan Wars, Teaching, Training, Coaching, Community Clan, Ladders, Clan Ranking" />
</head>
<body>

	<?php
		include_once('../includes/navbar.php');
		include_once('../includes/footer.php');
	 ?>
	 
	<div class="container-fluid">
	
		<?php PrintNavbar("index"); ?>
		
	</div>

	<div class="container">
		<form role="form" action="signup-complete.php" method="post">
		<div class="row">
		
			<div class="col-xs-6">
				<div class="form-group">
				
					<label for="alias"><p>Alias:</p></label>
					<input type="text" name="alias" class="form-control" id="alias">
					
					<label for="password"><p>Password:</p></label>
					<input type="password" name="password" class="form-control" id="password">
					
					<label for="email"><p>Email:</p></label>
					<input type="email" name="email" class="form-control" id="email" placeholder="John@mpcgaming.com">
					
					<input style="margin-top: 20px;" class="btn btn-success" type="submit" value="Submit">
					
				</div>
			</div>
			
			<div class="col-xs-6">
				<img src="../pics/mpclogo.png" class="img-rounded" alt="mpclogo.png" width="592" height="200">
				</br>
			</div>
		</div><!--row-->
		
	</div><!--container-->  
	
	<div class="container-fluid">
	
		<?php PrintFooter(); ?>

	</div>
</body>

</html>