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
<body style="max-height: 100%; max-width: 100%;">
	<div class="container" style="background-color: #fff; color: #000;">
		<div class="page-header text-center">
			<h1>Thank you for Signing up!</h1>
		</div>
		
		<small class="text-center">
			<p>Hello <?php echo $_POST["FName"]; ?>, and thank you for signing up with MPCgaming.com. Please check that everything is accurate in the following:
			</br>
			Email address: <?php echo $_POST["email"]; ?> (will send a confirmation email for verification)
			</br>
			Date of Birth:<?php echo $_POST["dobday"]; ?>/<?php echo $_POST["dobmonth"]; ?>/ <?php echo $_POST["dobyear"]; ?>
			</p>
		</small>


		<?php include('../footer/footer.php'); ?>

	</div><!--container-->     
</body>

</html>
