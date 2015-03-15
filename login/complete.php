<?php
	$ROOT = '..';

	include_once($ROOT . '/includes/pathdir.php');
	include_once($ROOT . PathDir::$FOOTER);
	include_once($ROOT . PathDir::$HTMLHEADER);
	include_once($ROOT . PathDir::$DB_UTILITY);
	include_once($ROOT . PathDir::$DB_INFO);
	
	#
	#
	# Authentication
	# --------------
	#
	$dbhandle = new dbutil(dbinfo::$HOST, dbinfo::$USER, dbinfo::$PASS, dbinfo::$NAME);
	$dbhandle->connect();
	$sql = <<<EOD
		SELECT * FROM User
		WHERE userName='{$_POST["email"]}' AND userPassword='{$_POST["password"]}'
EOD;
	$result = $dbhandle->query($sql);
	$row = $result->fetch_row();
	if ($result) { setcookie("USER", $row[1], 0, '/'); }
	$result->close();
	$dbhandle->disconnect();
	#
	# --
	
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
	<div class="container">
	
		<div class="page-header text-center">
			<h1>Login Processing...</h1>
		</div>
		
		<div class="text-center">

		</div>		
	</div>
		
	<div class="container-fluid">
	
		<?php PrintFooter($ROOT); ?>
	
	</div>

</body>

</html>
